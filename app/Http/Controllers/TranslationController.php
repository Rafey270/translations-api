<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Translation::query();

        if ($request->has('tag')) {
            $query->whereJsonContains('tags', $request->tag);
        }
        if ($request->has('key')) {
            $query->where('key', 'like', "%{$request->key}%");
        }
        if ($request->has('content')) {
            $query->where('content', 'like', "%{$request->content}%");
        }

        return response()->json($query->paginate(10));
    }

    public function show($id)
    {
        return response()->json(Translation::findOrFail($id), 201);
    }

    public function store(Request $request)
    {
        $request->validate([
            'locale' => 'required|string',
            'key' => 'required|string|unique:translations,key',
            'content' => 'required|string',
            'tags' => 'nullable|array',
        ]);

        $translation = Translation::create($request->all());

        return response()->json($translation, 201);
    }

    public function update(Request $request, Translation $translation)
    {
        $request->validate([
            'locale' => 'sometimes|string',
            'key' => 'sometimes|string|unique:translations,key,' . $translation->id,
            'content' => 'sometimes|string',
            'tags' => 'nullable|array|in:mobile,web,desktop',
        ]);

        $translation->update($request->all());
        $translation->refresh();
        return response()->json($translation);
    }

    public function destroy(Translation $translation)
    {
        $translation->delete();
        return response()->json(null, 204);
    }

    public function export()
    {
        $translations = Cache::remember('translations', 3600, function () {
            return Translation::all();
        });

        return response()->json($translations);
    }
}

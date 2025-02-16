# OpenAPI\Client\AuthenticationApi

All URIs are relative to http://127.0.0.1:8000/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginPost()**](AuthenticationApi.md#loginPost) | **POST** /login | Login and get a token |
| [**registerPost()**](AuthenticationApi.md#registerPost) | **POST** /register | Register a new user |


## `loginPost()`

```php
loginPost($login_post_request): \OpenAPI\Client\Model\LoginPost200Response
```

Login and get a token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_post_request = new \OpenAPI\Client\Model\LoginPostRequest(); // \OpenAPI\Client\Model\LoginPostRequest

try {
    $result = $apiInstance->loginPost($login_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_post_request** | [**\OpenAPI\Client\Model\LoginPostRequest**](../Model/LoginPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LoginPost200Response**](../Model/LoginPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerPost()`

```php
registerPost($register_post_request)
```

Register a new user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_post_request = new \OpenAPI\Client\Model\RegisterPostRequest(); // \OpenAPI\Client\Model\RegisterPostRequest

try {
    $apiInstance->registerPost($register_post_request);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->registerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_post_request** | [**\OpenAPI\Client\Model\RegisterPostRequest**](../Model/RegisterPostRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# OpenAPIClient-php

API documentation for the Translation Management Service


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://127.0.0.1:8000/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**loginPost**](docs/Api/AuthenticationApi.md#loginpost) | **POST** /login | Login and get a token
*AuthenticationApi* | [**registerPost**](docs/Api/AuthenticationApi.md#registerpost) | **POST** /register | Register a new user
*TranslationsApi* | [**translationsExportGet**](docs/Api/TranslationsApi.md#translationsexportget) | **GET** /translations/export | Export translations as JSON
*TranslationsApi* | [**translationsIdDelete**](docs/Api/TranslationsApi.md#translationsiddelete) | **DELETE** /translations/{id} | Delete a translation
*TranslationsApi* | [**translationsIdPut**](docs/Api/TranslationsApi.md#translationsidput) | **PUT** /translations/{id} | Update an existing translation
*TranslationsApi* | [**translationsPost**](docs/Api/TranslationsApi.md#translationspost) | **POST** /translations | Create a new translation
*TranslationsApi* | [**translationssGet**](docs/Api/TranslationsApi.md#translationssget) | **GET** /translationss | Get all translations

## Models

- [LoginPost200Response](docs/Model/LoginPost200Response.md)
- [LoginPostRequest](docs/Model/LoginPostRequest.md)
- [RegisterPostRequest](docs/Model/RegisterPostRequest.md)
- [Translation](docs/Model/Translation.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

# Backbone - Debt Capturing API PHP Client

## Introduction

The Debt Capturing API PHP Client enables you to work with the Debt Capturing API.

This PHP package is generated by an API client generator.

## Prerequisites

- PHP 8.0 or later for production

## Versioning

This project uses the following versioning format:
```
v<APIMajorVersion>.<BaseClientMajorVersion>.<ApiIncrementalUpdateVersion>
```

- `APIMajorVersion`: Matches the major version of the API the client is intended for.
- `BaseClientMajorVersion`: Is a client specific version. Changes in this level also mean breaking changes, which differs from the classic SemVer format.
- `ApiIncrementalUpdateVersion`: Increases with every release.


## Installation

You can use [Composer](https://getcomposer.org/). Follow the [installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have composer installed.

As described in the Versioning paragraph before, breaking changes can occur within the first two version parts, therefore it is recommended to use a require constraint as shown below to stay within `1.2` and not go to `1.3` or higher.

If you want to use the v1 API, use the client version `v1.X.0`, with `X` replaced by the highest available release number.

~~~~ bash
# Example
composer require datenkraft/bb-debt-capturing-api-php-client "~1.2.0"
~~~~

In your PHP script, make sure you include the autoloader:

~~~~ php
require 'path/to/vendor/autoload.php';
~~~~

## Using the library

The library can be used to communicate with the Debt Capturing Resource Server.
The Client includes functionalities for every endpoint defined in the openapi.json.
The Client also is auto generated with jane-php using an openapi.json file.

### Creating a client

~~~~ php
require 'path/to/vendor/autoload.php';

// Valid clientId, clientSecret and requested scopes
$clientId = '1234';
$clientSecret = 'abcd';

$config['clientId'] = $clientId;
$config['clientSecret'] = $clientSecret;

$factory = new ClientFactory($config);
$client = Client::createWithFactory($factory);
~~~~

### Example Endpoint: Get Debt Line Item Collection
~~~~ php
$queryParams = [
    'filter[projectId]' => 'projectId',
    'filter[dateFrom]' => (new DateTime())->format(DateTimeInterface::ATOM),
    'filter[dateTo]' => (new DateTime())->format(DateTimeInterface::ATOM),
];

$response = $client->getDebtLineItemCollection($queryParams);
$response; // tasks[]

~~~~

## Licence
This repository is available under the [MIT license](https://opensource.org/licenses/MIT).
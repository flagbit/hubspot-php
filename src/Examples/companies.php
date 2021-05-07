<?php

require __DIR__ . '/../../vendor/autoload.php';

define('HUBSPOT_KEY', getenv('HUBSPOT_KEY'));

$connector = new Flagbit\Hubspot\Connector;
$connection = $connector->getNewConnection();

$response = $connection->companies()->search(
    [
        'filters' => [
            [
                'operator' => 'EQ',
                'propertyName' => 'webseite_api',
                'value' => 'Kunde'
            ]
        ]
    ],
    [
        "name",
        "webseite_api",
        "domain",
        "website",
        "twitterhandle",
        "shop",
        "produkte",
        "founded_year",
        "files"
    ],
    100
);

foreach ($response->data->results as $company) {
    echo sprintf(
        "Company name is %s and it is a %s." . PHP_EOL,
        $company->properties->name,
        $company->properties->webseite_api
    );
}

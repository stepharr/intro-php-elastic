<?php
    use Elasticsearch\ClientBuilder;

    require 'vendor/autoload.php';

    $es_params = [
        'hosts' => [
            'elasticsearch:9200'
        ],
        'retries' => 2,
        'handler' => ClientBuilder::singleHandler()
    ];
    $client = Elasticsearch\ClientBuilder::fromConfig($es_params);

# Indexing a document

    $params = [
        'index' => 'developers',
        'type' => 'developer',
        'body' => [
             'name' => 'John',
              'last_name' => 'Snow'
        ],
        'id'  => 'AV407MObsplhUyYBgzF9'
    ];

    $response = $client->index($params);

# Getting a document

    $params = [
        'index' => 'developers',
        'type' => 'developer',
        'id' => 'AV407MObsplhUyYBgzF9'
    ];
    $response = $client->get($params);

# Searching

    // $params = [
    //     'index' => 'developers',
    //     'type' => 'developer',
    //     'body' => [
    //         'query' => [
    //             'match' => [
    //                 'name' => 'John'
    //             ]
    //         ]
    //     ]
    // ];
    // $response = $client->search($params);
    var_dump($response);
    
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

    // $params = [
    //     'index' => 'characters',
    //     'type' => 'character',
    //     'body' => [
    //          'first_name' => 'Jon',
    //           'last_name' => 'Snow'
    //     ],
    //     'id' => '001'        
    // ];

    // $response = $client->index($params);

# Getting a document

    // $params = [
    //     'index' => 'characters',
    //     'type' => 'character',
    //     'id' => '001'
    // ];
    // $response = $client->get($params);

# Updating a document

    // $params = [
    //     'index' => 'characters',
    //     'type' => 'character',
    //     'body' => [
    //                 'doc' => [
    //                     'house' => 'House Stark',
    //                     'place' => 'Tower of Joy',
    //                     'first_name' =>'Aegon',
    //                     'last_name' => 'Targarye'
    //                 ]
    //             ], 
    //     'id' => '001'
    // ];
    // $response = $client->update($params);

# Searching

    // $params = [
    //     'index' => 'characters',
    //     'type' => 'character',
    //     'body' => [
    //         'query' => [
    //             'match' => [
    //                 'name' => 'Aegon'
    //             ]
    //         ]
    //     ]
    // ];
    // $response = $client->search($params);

    
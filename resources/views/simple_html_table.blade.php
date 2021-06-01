<?php

// This file is generated by Composer
require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

$client = new \Github\Client();
$repositories = $client->api('user')->repositories($username);

// Extracting the desired information
$repoNames = [];
foreach($repositories as $key => $value) {
    $repoNames[$value['name']] = [
        'name' => $value['name'],
        'private' => $value['private'],
        'owner' => $value['owner']['login'],
        'fork' => $value['fork'],
        'created_at' => $value['created_at'],
        'language' => $value['language']

    ];
}

//echo json_encode($repo_names);
// Creating the html table
$rows = array();
$colNames = [
    "<td>name</td>",
    "<td>private</td>",
    "<td>owner</td>",
    "<td>fork</td>",
    "<td>created_at</td>",
    "<td>language</td>"
];
$rows[] = "<tr>" . implode('', $colNames) . "</tr>";

foreach($repoNames as $key => $row) {
    $cells = array();
    foreach($row as $cell) {
        $cells[] = "<td>{$cell}</td>";
    }
    $rows[] = "<tr>" . implode('', $cells) . "</tr>";
}
$table = "<table class='hci-table'>" . implode('', $rows) . "</table>";

echo $table;


// function html_table($data = array())
// {
//     $rows = array();
//     foreach ($data as $row) {
//         $cells = array();
//         foreach ($row as $cell) {
//             $cells[] = "<td>{$cell}</td>";
//         }
//         $rows[] = "<tr>" . implode('', $cells) . "</tr>";
//     }
//     return "<table class='hci-table'>" . implode('', $rows) . "</table>";
// }
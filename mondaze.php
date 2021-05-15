<?php

// Monday API challenge----------------------------------------------------------

$data = json_decode(file_get_contents('php://input'), true);

$message = [

"challenge" => $data["challenge"],

];

// If payload has a challenge key, authenticate with Monday
if(!empty($message["challenge"])){
    header('content-type: application/json');
    echo json_encode($message);
}

// End of API challenge----------------------------------------------------------

// If no challenge was provided, proceed with the webhook------------------------
else if(empty($message["challenge"])){

    // Set Monday vars-----------------------------------------------------------
    $monday_Token = 'YOUR-API-KEY-HERE';
    $apiURL = "https://api.monday.com/v2/";
    $headers = ['Content-Type: application/json', 'User-Agent: GraphQL Client', 'Authorization: ' . $monday_Token];

    // Use these arrays to store any column, board, or group IDs you need to use later
    //
    // This makes code more readable, and helps you identify which column, board
    // or group you're actually working with.
    $column_ids = array(
      // For example...
      // "a_column_name" => $monday_column_id,
    );

    $board_ids = array(

    );

    $group_ids = array(

    );

    // heyMonday() funtion to query Monday---------------------------------------
    function heyMonday($apiURL, $headers, $query, $vars){

        $data = @file_get_contents($apiURL, false, stream_context_create([
        'http' => [
        'method' => 'POST',
        'header' => $headers,
        'content' => json_encode(['query' => $query, 'variables' => $vars]),
        ]
        ]));
        $tempContents = json_decode($data, true);a
        return $tempContents;

    }

    // Grab pulseID from payload-------------------------------------------------
    // This will be the pulse ID of whatever record triggered the webhook
    //
    // It's handy to have the initial payload stored, in case you need to grab something
    // else later
    $payload = json_decode(file_get_contents('php://input'), true);
    $pulseId = $payload["event"]["pulseId"];

// Initial setup complete--------------------------------------------------------

// Copy/modify queries, mutations, etc below

    // Write your query and vars below-------------------------------------------
    // Declare vars like so, inside the (): $var: Type!, $var2: Type!
    $query ='query(){

    }';

    // Or, if you need a mutation...
    $query ='mutation(){

    }';

    // Give your vars an actual value--------------------------------------------
    $vars = array(
        //For example...
        //$var => "In this case, a string",
        //$var2 => 42
    );

    // Call the heyMonday function to run the query above------------------------
    $call_this_something = heyMonday($apiURL, $headers, $query, $vars);

} //end of else statement - this whole statement wraps your webhook code

?>

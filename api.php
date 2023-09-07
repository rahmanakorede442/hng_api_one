<?php
// Set the response header to JSON
header('Content-Type: application/json');
// Get the query parameters from the URL
$slack_name = $_GET['slack_name'];
$track = $_GET['track'];

// Get the current day of the week
$current_day = date('l');

// Get the current UTC time with validation of +/-2 minutes
$current_utc_time = gmdate('Y-m-d\TH:i:s\Z', time());

// Define GitHub repository and file URLs
$github_file_url = 'https://github.com/username/repo/blob/main/file_name.ext';
$github_repo_url = 'https://github.com/username/repo';

// Create the response array
$response = [
    'slack_name' => $slack_name,
    'current_day' => $current_day,
    'utc_time' => $current_utc_time,
    'track' => $track,
    'github_file_url' => $github_file_url,
    'github_repo_url' => $github_repo_url,
    'status_code' => 200
];
// Send the JSON response
echo json_encode($response);

<?php
// Define a function to handle JSON error messages
function json_error_message($json_str)
{
    // Create an array to hold the JSON string
    $json[] = $json_str;

    // Output the JSON string
    print_r($json);
    echo ("<br>");

    // Iterate through the array of JSON strings
    foreach ($json as $string) {
        // Output the decoding attempt
        echo 'Decoding: ' . $string . "<br>";

        // Attempt to decode the JSON string
        json_decode($string);

        // Check for JSON decoding errors and output corresponding messages
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                echo ' - No errors' . "\n";
                break;
            case JSON_ERROR_DEPTH:
                echo ' - Maximum stack depth exceeded' . "\n";
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' - Underflow or the modes mismatch' . "\n";
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo ' - Unexpected control character found' . "\n";
                break;
            case JSON_ERROR_SYNTAX:
                echo ' - Syntax error, malformed JSON' . "\n";
                break;
            case JSON_ERROR_UTF8:
                echo ' - Malformed UTF-8 characters, possibly incorrectly encoded' . "\n";
                break;
            default:
                echo ' - Unknown error' . "\n";
                break;
        }
    }
}

// Call the function with a sample JSON string
json_error_message('{"color1": "Red Color"}');
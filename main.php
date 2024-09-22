<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use GuzzleHttp\Client;

// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get the API key from environment variables
$apiKey = $_ENV['DG_API_KEY'];

// Create a Guzzle HTTP client
$client = new Client();

$speakText = "This repository contains a PHP script that demonstrates how to use the Deepgram Text-to-Speech API to convert text into speech and save it as an audio file.";
$filename = "output2.wav";

try {
    // Make a POST request to the Deepgram API for text-to-speech conversion
    $response = $client->post('https://api.deepgram.com/v1/speak?model=aura-stella-en&encoding=linear16&container=wav&sample_rate=48000', [
        'headers' => [
            'Authorization' => 'Token ' . $apiKey,
            'Content-Type' => 'application/json'
        ],
        'json' => [
            'text' => $speakText
        ]
    ]);

    // Save the response to a file
    file_put_contents($filename, $response->getBody());

    echo "File saved successfully to $filename\n";
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}
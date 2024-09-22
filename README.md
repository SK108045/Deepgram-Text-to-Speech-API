# Deepgram-Text-to-Speech-API
## Deepgram Text-to-Speech API Implementation 
This repository contains a PHP script that demonstrates how to use the Deepgram Text-to-Speech API to convert text into speech and save it as an audio file.

<audio controls>
  <source src="https://simkafire.com/output2.wav" type="audio/wav">
  Your browser does not support the audio element. You can [listen to the README here](https://your-server.com/path/to/readme_audio.wav).
</audio>

## Prerequisites

- PHP 7.4 or higher
- Composer
- Deepgram API key

## Installation

### 1. Clone this repository:

### 2. Install dependencies using Composer
  Then, you can run the following command in your terminal:
  ```bash
  composer install
  ```
  - This command will read the composer.json file and install the specified dependencies along with their required dependencies.
    
### 3.Update the .env file in the root directory and add your Deepgram API key
  ```
  DG_API_KEY=your_api_key_here
  ```

## Usage

1. Open the `index.php` file and modify the `$speakText` variable with the text you want to convert to speech.
2. Run the script
3. The script will generate an audio file named `output2.wav` in the same directory.


## Code Explanation

The script does the following:

1. Loads environment variables from a `.env` file.
2. Creates a Guzzle HTTP client.
3. Sends a POST request to the Deepgram API with the text to be converted.
4. Saves the response (audio data) to a WAV file.

## Dependencies

- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv): For loading environment variables
- [guzzlehttp/guzzle](https://github.com/guzzle/guzzle): For making HTTP requests

## License

This project is open-source and available under the [MIT License](LICENSE).

## Support

If you have any questions or need help with the implementation, please open an issue in the repository.
   

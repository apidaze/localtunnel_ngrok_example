# APIdaze WebRTC Server Example

A sample code to start using your own webserver as an interface to APIdaze conference bridge. This web application has been built with APIdaze : http://developers.apidaze.io.

# Want to build your own ?

## Clone this repository and install
	$ git clone git@github.com:apidaze/webrtc_server_example
	$ cd webrtc_server_example

# Configure your External Script

APIdaze fetches your web server in order to get instructions on how to process calls. Your server must return XML tags to APIdaze, which acts as an HTTP client. You may also want to start your HTTP server locally, and use tools like `localtunnel` or `ngrok` to expose your external script.

## locatunnel
	$ cd external_script/php
	$ php -S localhost:8000
	... then in another terminal
	$ lt --port 8000 --subdomain apidazeexample
	your url is: https://apidazeexample.localtunnel.me

Then, in the developers portal, go to `API Reference -> External Script Create` and add `http://apidazeexample.localtunnel.me` to your new external script.

## ngrok
	$ cd external_script/php
	$ php -S localhost:8000
	... then in another terminal
	$ ./ngrok http 8000
	
Then, in the developers portal, go to `API Reference -> External Script Create` and add your ngrok provided URL to your new external script.

## Customize

Just edit webrtc_server_example/public/index.html

## Access your web application

	$ cd public
	$ php -S localhost:8001

Then, in your WebRTC enabled browser, access `http://locahost:8001`.

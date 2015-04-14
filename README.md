# APIdaze WebRTC Server Example

A sample code to start using your own webserver as an interface to APIdaze text/voice/video conference bridge. This web application has been built with APIdaze : http://developers.apidaze.io.

# Want to build your own ?

## Configure
- create a developer account at APIdaze : http://developers.apidaze.io
- set up your ExternalScript there to return the following XML :
```xml
<document>
 <work>
  <conference>myconference</conference>
 </work>
</document>
```
## Clone this repository and install
	$ git clone git@github.com:apidaze/webrtc_server_example
	$ cd webrtc_server_example
	$ npm install

# Run the server

Type "node server.js" in a terminal. You can also make you web application widely available by deploying it on any Web PaaS service like e.g. Heroku.

## Customize

Just edit webrtc_server_example/public/index.html

## Access your web application

- In your WebRTC enabled browser, visit your server address including the port. By default port 8333 is used ;
- http://localhost:8333 to test from your browser ;
- http://yourlocalip:8333, and invite mates in your local network to join by providing them with this URL ;
- push this code to a publicly available URL to make it accessible to everyone.

## Place any phone (PSTN) into the conference
	  $ curl -XPOST "https://api4.apidaze.io/YOURAPPKEY/calls" -d 'api_secret=YOURAPPSECRET&type=number&origin=0123456789&destination=myconference'

# Limitations

Works on Chrome browser only.

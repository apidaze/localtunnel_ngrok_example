# APIdaze WebRTC Server Example

A sample code to start using your own webserver as a text/voice/video conference bridge. This web application has been built with APIdaze : http://developers.apidaze.io.

# Want to build your own ?

## Configure
- create a developer account at APIdaze : http://developers.apidaze.io
- set up your ExternalScript there to return the following XML
  <document>
    <work>
      <conference>myconference</conference>
    </work>
  </document>

## Clone this repository
  $ git clone git@github.com:apidaze/webrtc_server_example

Files and Folders
-----------------

- package.json - Provides project information allowing npm to find and install required modules.
- server.js - Server code.
- /public/ - Root folder for web server. Put your html files here and set up your own application.

# Run the server

Type "node server.js" in a terminal. You can also make you web application widely available by deploying it on any Web PaaS service like e.g. Heroku.

# Access your web application

- In your WebRTC enabled browser, visit your server address including the port. By default port 8333 is used.
- http://localhost:8333 or http://youlocalip:8333, and invite mates to join.

# Place a phone number (PSTN) into the conference
  $ curl -XPOST "https://api4.apidaze.io/YOUAPPID/calls" -d 'api_secret=YOURAPPSECRET&type=number&origin=0123456789&destination=myconference'

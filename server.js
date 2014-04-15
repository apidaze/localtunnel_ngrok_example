var express = require('express');
 
var app = express();

app.use(express.static(__dirname + '/public'));

app.listen(8333, function() {
    console.log("Listening on port 8333");
});

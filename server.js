var express = require('express');
 
var app = express();
app.configure(function(){
	  app.use(express.static(__dirname + '/public'));
	  app.use(app.router);
});

app.listen(8333, function() {
    console.log("Listening on port 8333");
});

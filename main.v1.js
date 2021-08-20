import './style.v1.scss'

var http = require('http');
// Setting up PORT
const PORT = process.env.PORT || 5500;
  
// Creating http Server
var httpServer = http.createServer(
       function(request, response) {
  
  // Setting up Headers
  response.setHeader('X-Frame-Options', 'DENY')});

document.getElementById("heading").innerHTML = 
`Vite and Web Dev
`

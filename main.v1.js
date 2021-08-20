import './style.v1.scss'

var server = http.createServer(function(req,res){
res.setHeader('Content-Security-Policy',"script-src 'self'")
});


function requestHandler(req, res) {
  res.setHeader('X-XSS-Protection','1;mode=block');
}

Response.setHeader("X-Frame-Options: DENY");

document.getElementById("heading").innerHTML = 
`Vite and Web Dev
`

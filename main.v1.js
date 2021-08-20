import './style.v1.scss'

var server = http.createServer(function(req,res){
res.setHeader('Content-Security-Policy',"script-src 'self'")
});

document.getElementById("heading").innerHTML = 
`Vite and Web Dev
`

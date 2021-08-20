import './style.v1.scss'

document.getElementById("heading").innerHTML = 
`Vite and Web Dev
`

document.getElementById("submit").onclick = alertpop;

function alertpop(){
    const pass = document.getElementById("exampleInputPassword1").innerHTML;
    window.alert("Your data is safe with us.");
}

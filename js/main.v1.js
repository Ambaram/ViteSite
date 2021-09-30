import './style.v1.scss'

document.getElementById("submit").onclick = validateForm;

function validateForm() {
    let pattern  = "\w{8}"
    let x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    let y = document.forms["myForm"]["pass"].value;
    let results = y.match(patter);
    if(results == true){
        alert("Thanks for submission");
    }
    else{
        alert("please provide correct value");
    }
  }

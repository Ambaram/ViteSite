window.onload= execute;
function execute(){
    document.getElementById("buy").onclick= call;
    function call() {
        if (document.getElementById("name").value===""){
            alert("Please fill in the name!!")
        }
        else{
            alert("Request has been submitted!!");
        }

    }
}

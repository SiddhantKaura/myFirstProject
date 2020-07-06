function dropDownMenu(){
    var x = document.getElementById("nav-bar");
        if(x.className === "navbar"){
            x.className += " responsive";
        }
        else{
            x.className = "navbar";
        }
    
}
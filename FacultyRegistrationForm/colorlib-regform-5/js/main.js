
function subjectDetail() {
    var n=document.getElementById("noOfSubject").value;
    // alert("grgkji");
    
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '../css/main.css';
    document.getElementById("container1").innerHTML = "";
    document.getElementById("container2").innerHTML = "";
    // alert("jigr");
    for (let i = 1; i <= n; i++) {
        const dropdown = document.createElement("select");
        dropdown.name = "dropdown-" + i;
        dropdown.id = "dropdown-" + i;
        dropdown.innerHTML+="<br/>";
        const op=document.createElement("option");
        op.text="Web Technologies";
        dropdown.appendChild(op);
        document.getElementById("container1").className="rs-select2 js-select-simple select--no-search";
        document.getElementById("container1").appendChild(dropdown);
    
    
        
        const dropdown2 = document.createElement("select");
        dropdown2.name = "dropdown2-" + i;
        dropdown2.id = "dropdown2-" + i;
        dropdown2.innerHTML+="<br/>";
        const op2=document.createElement("option");
        op2.text="Web Technologies";
        dropdown2.appendChild(op2);
        document.getElementById("container2").className="rs-select2 js-select-simple select--no-search";
        document.getElementById("container2").appendChild(dropdown2);
    }
        
}
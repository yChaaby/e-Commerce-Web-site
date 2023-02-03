function chargerTable() {
    
    $.post("prod.php", function (rep) {
        $("#CRUD").html(rep);
    });
console.log("refresed");
}
$(document).ready(function () {
    chargerTable();
});
function del(event){
    event.preventDefault();
    id=parseInt(event.target.getAttribute('value'));
    console.log(id);
    $.ajax({
        type: "POST",
        url: "supp_prod.php",
        data: { id : id },
        success: function (response) {
            chargerTable();
        }
    });
}
function modify(event){
    event.preventDefault();
    id=parseInt(event.target.parentElement.getAttribute('value'));
    $("#modif").fadeIn();
    document.querySelector("#modif h6").innerHTML="Modifier l'element "+id;
    $("#closebtn").click(function (e) { 
        e.preventDefault();
        console.log("closed");
    });
    
}

$("#add").submit( function(e) {
    e.preventDefault();
    let c = 0
    if(!c){
    $.ajax({
        url: 'ajouter.php',
        type: 'POST',
        data: {
            nom: $("#nomP").val(),
            nomCAT: $("#nomC").val(),
            des: $("#des").val(),
            URL: $("#URL").val(),
            prix: $("#prix").val()
        },
        success: function (re) {
            chargerTable();
            c++;
        }
     });
    }   
});
function close(){
    console.log("closed");
}
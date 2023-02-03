function chargerTable() {
    
    $.post("cat.php", function (rep) {
        $("#lesCAT").html(rep);
    });
}
$(document).ready(function () {
    chargerTable();
});
function delt(){
    console.log("in");
}
$("#add").submit( function(e) {
    e.preventDefault();
    let c = 0
    console.log($("#nomC").val());
    if(!c){
    $.ajax({
        url: 'addCAT.php',
        type: 'POST',
        data: {
            nom: $("#nomC").val(),
        },
        success: function (re) {
            chargerTable();
            c++;
        }
     });
    }   
});
function del(event){
    event.preventDefault();
    id=parseInt(event.target.getAttribute('value'));
    console.log(id);
    $.ajax({
        type: "POST",
        url: "supp_cat.php",
        data: { id : id },
        success: function (response) {
            chargerTable();
            console.log("c ft");
        }
    });
}

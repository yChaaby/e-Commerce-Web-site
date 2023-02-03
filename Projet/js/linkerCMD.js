function chargerTable() {
    
    $.post("commande.php", function (rep) {
        $("#CMD").html(rep);
    });
}
$(document).ready(function () {
    chargerTable();
    console.log("hey");
});
function modify(event){
    statut=event.target.getAttribute('value');
    id=parseInt(event.target.parentElement.getAttribute('value'));
    $.ajax({
        type: "post",
        url: "CMD_Stat.php",
        data: {id:id,
            stat:statut},
        success: function (response) {
            chargerTable();
        }
    });
}
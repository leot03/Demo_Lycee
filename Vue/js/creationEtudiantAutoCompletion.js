$(document).ready(function(){
    $("#etudiant").hide();
    $("#affichageTableau").click(function(){
    $("#etudiant").toggle(500);
  });
});


function ObtenirNom() {
    let val = $(this).val();
    console.log(val);
    if (val.length > 0) {
        $.ajax({
            type: "GET",
            url: "https://philippes.ddns.net/exo/Ajax/pays.php",
            data: "nomPays=" + val,
            success: function (dataJson) {
                console.log(dataJson);
                $("#suggest").show();
                $("#suggest").html(liste(dataJson));
            }
        })
    } else {
        $("#suggest").empty();
    }
}

//fonction pour transformer un objet Json en liste html
function liste(dataJson) {
    let codeHtml = "<ul>";
    for (i = 0; i < dataJson.length; i++) {
        codeHtml += "<li onClick = select('"+dataJson[i]+"')>" + dataJson[i] + "</li>";
    }
    codeHtml += "</ul>";
    console.log(codeHtml);
    return codeHtml;
}

function select(value){
    $("#promotion").val(value);
    $("#suggest").hide();
}

$(document).ready(function () {
    $("#promotion").keyup(ObtenirNom);
});
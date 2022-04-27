$(document).ready(function(){
    $('#acteur').val("");
    $('#villes').empty();
    $('#cp').change(remplirVilles2);
 });
 
 
 function remplirVilles() {
     $('#villes').empty();
     $.ajax({
         url: 'php/traitementVille.php',
         data: $('#cp').serialize(),
         dataType:'json',
         type:'GET',
         success: function (lesVilles, textStatus, jqXHR)
         {
             $.each(lesVilles, function (key,val) {
                $('#villes').append('<option>' + val + '</option>'); 
             });
         },
         error: function(jqXHR, textStatus, errorThrown)
         {
             console.log("parametre : " + JSON.stringify(jqXHR));
             console.log("status : " + textStatus);
             console.log("erreur : " + errorThrown);
         }
     });
 }
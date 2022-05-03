//$(document).ready(function(){
//  $("#hide").click(function(){
//    $("#etudiant").hide(1100);
//  });
//  $("#show").click(function(){
//    $("#etudiant").show();
//  });
//});

$(document).ready(function(){
   $("#etudiant").hide();
  $("#affichageTableau").click(function(){
    $("#etudiant").toggle(500);
  });
});
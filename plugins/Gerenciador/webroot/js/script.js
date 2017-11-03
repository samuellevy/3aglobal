$(document).ready(function(){

  $(".BoxEvent").hide();

  //responder chamado
  $(".NewEventBtn").click(function(){
    var action = $(this).attr('data-action');
    $(".BoxEvent").hide();
    $(".BoxEvent[data-action="+action+"]").show();
  });

  "use strict";
});

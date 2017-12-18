$(document).ready(function(){
  $(".BoxEvent").hide();

  //responder chamado
  $(".NewEventBtn").click(function(){
    var action = $(this).attr('data-action');
    $(".BoxEvent").hide();
    $(".BoxEvent[data-action="+action+"]").show();
  });

  //upload de imagens
  $('.form-img').click(function(){
    $(this).next().click();
  });

  $('input[type=file]').change(function () {
    readURL(this, $(this).prev());
  });

  //mostra imagem local
  function readURL(input, target) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        target.attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $('.remove').click(function(){
    var uid = $(this).attr('data-uid');
    $('.form-img').attr('src','');
    $('.form-file').val('');
  });
});

function removeFileFromServer(var id){
  $.ajax({
    url: "",
    cache: false
  })
  .done(function( html ) {
    $( "#results" ).append( html );
  });
}

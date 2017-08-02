$(document).ready(function()
{
  $('#buscar').focus()
  $('#buscar').on('keyup', function()
  {
    var palabra = $('#buscar').val();
      $.ajax({
      type: 'POST',
      url: '../php/buscar.php',
      data: {'palabra': palabra},
      beforeSend: function(){
      $('#result').html('<img src="img/pacman.gif">')
      }
      })
      .done(function(resultado)
      {
      $('#contenidoIglesias').html(resultado);
      })
      .fail(function()
      {
        alert('Hubo un error :(');
      })
      .always(function()
      {
      console.log("complete");
      })
  })
})



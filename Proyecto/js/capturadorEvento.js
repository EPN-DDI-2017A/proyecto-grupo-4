$(document).ready(function()
{
  $('#buscar').focus()

  $('#buscar').on('keyup', function()
  {
    var palabra = $('#buscar').val()
      $.ajax({
        url: 'php/buscar.php',
        type: 'POST',
        data: {'palabra': palabra},
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

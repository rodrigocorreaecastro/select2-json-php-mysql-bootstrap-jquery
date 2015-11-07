$(document).ready(function() {

    $('#input_state, #input_city').select2();

    //PAIS  ---------------------------------------------------------------------------
    $('#input_pais').select2({
        ajax: {
            url: 'country.php',
            dataType: 'json',
            quietMillis: 100,
            data: function (term) {
                return {
                    term: term
                };
            },
            results: function (data) {
              var results = [];
              $.each(data, function(index, item){
                results.push({
                  id: item.id,
                  text: item.name
                });
              });
              return {
                  results: results
              };
            }
        }
    });

    //ESTADO  ---------------------------------------------------------------------------
    $("#input_pais").change(function()
    {
      country = $(this).val();
      if ( country === '')
        return false;

      resetaCombo('input_state');
      $.getJSON( 'state.php?country=' + country, function (data)
      {
        console.log(data);
        var option = new Array();
        $.each(data, function(i, obj) {
          option[i] = document.createElement('option');
          $( option[i] ).attr( {value : obj.id} );
          $( option[i] ).append( obj.name );
          $("#input_state").append( option[i] );
        });
      });
    });

    //CIDADE ---------------------------------------------------------------------------
    $("#input_state").change(function()
    {
      state = $(this).val();
      if ( state === '')
        return false;

      resetaCombo('input_city');
      $.getJSON( 'city.php?state=' + state, function (data)
      {
        console.log(data);
        var option = new Array();
        $.each(data, function(i, obj) {
          option[i] = document.createElement('option');
          $( option[i] ).attr( {value : obj.id} );
          $( option[i] ).append( obj.name );
          $("#input_city").append( option[i] );
        });
      });
    });



});

//RESETA O SELECT PARA RECEBER NOVOS VALORES (EXEMPLO: ESTADO -> CIDADE)
function resetaCombo(el) {
  $("#" + el).empty();
  var option = document.createElement('option');
  $( option ).attr( {value : ''} );
  $( option ).append( 'Escolha' );
  $("#" + el).append( option );
}
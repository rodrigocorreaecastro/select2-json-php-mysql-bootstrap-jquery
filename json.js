  $(document).ready(function()
  {

      $('#input_pais').select2({
          ajax: {
              url: 'json.php',
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

      //Para efeitos visuais, ao clicar no select #input_pais será printado o result no elemento #log
      $('#input_pais').click('change', function()
      {
        var $this = $(this),
            $value = $this.val();
        $("#log").html($value);
      });

  });
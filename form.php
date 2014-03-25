<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select2 + jSon + PHP + MySQL + Bootstrap + jQuery</title>
    <meta name="description" content="Select2 + jSon + PHP + MySQL + Bootstrap + jQuery">
    <meta name="author" content="Rodrigo Corrêa e Castro">

    <!-- Bootstrap framework -->
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/redmond/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/select2/3.3.2/select2.css">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://getbootstrap.com/2.3.2/assets/ico/favicon.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://getbootstrap.com/2.3.2/assets/js/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.3.2/select2.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.3.2/select2_locale_pt-BR.js"></script>

    <script type="text/javascript" src="json.js"></script>

  </head>
  <body>
    <div id="wrap">

      <div class="container">
        <div class="page-header">
          <h3>Select2 + jSon + PHP + MySQL + Bootstrap + jQuery</h3>
        </div>
        <p class="lead">Código para fins de estudo e aprendizado.</p>
        <p>

            <form class="form-horizontal">
              <div class="control-group">
                <label class="control-label" for="input_pais">País</label>
                <div class="controls">
                  <input type="hidden" class="input-xlarge" id="input_pais" name="input_pais" data-placeholder="Selecione um país" />
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Submit</button>
                </div>
              </div>

              <span id="log"></span>

            </form>

        </p>
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">Desenvolvido por <a href="http://goo.gl/0EFrO1" target="_blank">Rodrigo Corrêa e Castro</a></p>
      </div>
    </div>

  </body>
</html>
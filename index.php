
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--CSS para la página-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>CECyT</title>
  </head>
  <body>

    <!--DIV principal de la página-->
    <div class="container-fluid">
        <h1 class="word">ALUMNOS REINSCRIPCIÓN</h1>

        <!--DIV para datos y formulario de busqueda-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Nota:</p>
                    <p>* Inicio de clases el día 05 de agosto del año en curso. </p>
                    <p>* El horario de clases de tu grupo asignado lo podras consultar en:</p>
                    <p><a href="https://www.saes.cecyt6.ipn.mx/" target="_blank">AQUI</a></p>
                    <p>* El Acceso al plantel sera con tu solicitud de inscripción y/o boleto de sonorama.</p>
                </div>
                <div class="col align-self-center">
                    <div class="f-container">
                    <!--Formulario de busqueda-->
                    <form action= "resultado.php" method="POST" >
                        <!--Solicitud del CURP-->
                        <input type="text" name="xbusqueda" class="input_class" placeholder="Escribe tu CURP"></input>
                        <!--Botón para realizar la busqueda y redireccionarla-->
                        <input type="submit" value="Buscar" class="btn_search"></input>
                    </form>
                    </div>
                </div>
            </div>
        <!--Div de prueba
        <div class="container">
            <h2>En un momento podrás visualizar tu busqueda</h2>
        </div>-->
  </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Coleccion</title>
        <link rel="stylesheet" href="../themes/male.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

    </head>
    <body>

        <div data-role="page" data-theme= "a">

            <div data-role="header" data-theme ="b" style=" height: 167px;"><!--background-image: url(banner.png); -->
                <img src="../Recursos/Banner.png" style="width: 80%; height: 100%;"/>
                <div style="float:right;">
                    <img src="../Recursos/carrito.jpeg" style=" width:50%; height: 50%; "  />
                </div>
            </div><!-- /header -->

            <div data-role="content" data-theme = "a">	
                <div class="ui-grid-b">
                    <div class="ui-block-a" style="width:250px; margin:3%">

                        <div data-role="controlgroup"> 
                            <a href="index.html" data-role="button"> Mi Perfil </a> 
                            <a href="../Vista/MiColeccion.php" data-role="button"> Mi Coleccion</a> 
                            <a href="../Vista/MisListas.php" data-role="button"> Listas de Reproduccion</a> 
                            <a href="index.html" data-role="button"> Comprar Musica</a>
                        </div>
                    </div>
                    <div class="ui-block-b" style=" margin:3%" >

                        <h1>Colecci&oacute;n</h1>                       
                        <table>
                            <tr>
                                <td>
                                    <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                                        <a href="../Vista/AgregarCancion.html" data-role="button" data-icon="plus" >Subir Cancion</a>
                                    </div>
                                </td>
                                <td>
                                    <fieldset data-role="controlgroup" data-type="horizontal">
                                        <select name="ordenar" id="ordenarPor" data-mini="true" >
                                            <option value="pop">Ordenar Por</option>
                                            <option value="titulo">T&iacute;tulo</option>
                                            <option value="album">&Aacute;lbum</option>
                                            <option value="artista">Artista</option>
                                        </select>
                                    </fieldset>
                                </td>

                            </tr>

                        </table>

                        <table border="3" width="200%" bordercolor="gray">
                            <tr>
                                <th width="30%">Nombre Canci&oacute;n </th>
                                <th width="30%">&Aacute;rtista</th>
                                <th width="20%">&Aacute;lbum</th>
                                <th width="40%">Opciones</th>
                            </tr>
                                <?php
                                
                                $dir = "../Recursos/Canciones/";
      /*  
       * //--------------Leer Directorios----------
// Open a known directory, and proceed to read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                echo "filename: $file - filetype: " . filetype($dir . $file) . "<br/>";
            }
            closedir($dh);
        }
    }
//--------------Fin Leer Directorios----------
    */
                        ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>

                    </div>

                </div><!-- /grid-b -->

            </div><!-- /content -->

            <div data-role="footer" data-theme = "b" STYLE=" border-style:solid; border-color: #c73930;">
                <h6>UNIVERSIDAD DEL VALLE</h6>
                <h6>Aplicaciones en la Web y Redes Inhalambricas</h6>
            </div>


        </div><!-- /page -->


    </body>
</html>
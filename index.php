<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <!--Favicon-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LA RULETA DE LA ACCION SABIA</title>
    <!--Ruleta-->
    <script src="js/Winwheel.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <!--jQuery-->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <!--Sweet Alert-->
    <link href="css/sweetalert2.css" rel="stylesheet" />
    <script src="js/sweetalert2.min.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--Font Awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--Imagen de Fondo-->
    <style type="text/css">
        body {
            background-image: url("src/img/bg.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 853px 480px;
            background-size: 100% 100%;
            margin: 0 auto;
            font-family: 'Cerebri Sans Book' , sans-serif;
        }

        .header {
         background-color: #dad6c4;
         padding: 10px;
        }

        #canvasContainer {
            background-image: url(src/img/rueda_logo.png);
            background-repeat: no-repeat;
            background-position: center;
            width: 700px;
            height: 690px;
            cursor: pointer;
        }

        .footer{
            text-align: center;
            margin-top: 20px;
            font-size: 28px;

        }
    </style>
</head>

<body>
    <div class="header">
        <h1 STYLE="font-size: 40px;color:#000000; text-align: center;">LA RULETA DE LA <strong>ACCIÓN SABIA</strong> </h1>
    </div>  
    <form id="form1" runat="server">              
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" class="align-baseline">
                    <div style="margin: 0 auto;width: 700px;">
                        <div id="canvasContainer">
                            <canvas id="canvas" width="700" height="690">
                                Canvas not supported, please user another browser.
                            </canvas>
                        </div>
                        <!--Boton Girar-->
                        <div style="text-align: center;">
                            <input type="button" onclick="miRuleta.startAnimation();"
                            class="btn btn-dark btn-lg" value="Girar Ruleta" />
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="footer">
            <img src="src/img/Logo_M.png" alt="María José ÁLvarez B" style="width: 242px;" />
    </div>
    <script>
        function seleccion_1() {
            swal({
                title: '<i><font color="#000000"><h2><strong>Texto 1!</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
        function seleccion_2() {
            swal({
                title: '<i><font color="#000000"><h2><strong>¡Texto 2!</font></strong></h2></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
        function seleccion_3() {
            swal({
                title: '<i><font color="#000000"><h2><strong>¡Texto 3!</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
        function seleccion_4() {
            swal({
                title: '<i><font color="#000000"><h2><strong>¡Texto 4!</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
        function seleccion_5() {
            swal({
                title: '<i><font color="#000000"><h2><strong>¡Texto 5!</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
        function seleccion_6() {
            swal({
                title: '<i><font color="#000000"><h2><strong>¡Texto 6!</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
        function seleccion_7() {
            swal({
                title: '<i><font color="#000000"><h2><strong>¡Texto 7!</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
        function seleccion_8() {
            swal({
                title: '<i><font color="#000000"><h2><strong>¡Texto 8!</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html:' <h3><small><p align="justify"><br /Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br />  <br><ul><li>Opción 1</li> <li>Opción 2</li></ul> </h3>',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                confirmButtonColor: '#000000',
            })
        }
       
        <!--Ruletasegmentos-->
        var miRuleta = new Winwheel({
            'numSegments': 8, // Número de segmentos
            'outerRadius': 270, // Radio externo
            'innerRadius': 80,
            'segments': [ // Datos de los segmentos
                { 'fillStyle': '#dad6c4', 'text': '1', 'number': '1' },
                { 'fillStyle': '#ffffff', 'text': '2', 'number': '2' },
                { 'fillStyle': '#dad6c4', 'text': '3', 'number': '3' },
                { 'fillStyle': '#ffffff', 'text': '4', 'number': '4' },
                { 'fillStyle': '#dad6c4', 'text': '5', 'number': '5' },
                { 'fillStyle': '#ffffff', 'text': '6', 'number': '6' },
                { 'fillStyle': '#dad6c4', 'text': '7', 'number': '7' },
                { 'fillStyle': '#ffffff', 'text': '8', 'number': '8' },
            ],
            'animation': {
                'type': 'spinToStop', // Giro y alto
                'duration': 6, // Duración de giro
                'callbackFinished': 'Mensaje()', // Función para mostrar mensaje
                'callbackAfter': 'dibujarIndicador()' // Funciona de pintar indicador
            }
        });
        function Mensaje() {
            var SegmentoSeleccionado =
                winningSegment = miRuleta.getIndicatedSegment();
                //console.log(SegmentoSeleccionado);
            var MensajeSeleccionado = winningSegment.number;
            switch (MensajeSeleccionado) {
                case "1":
                    seleccion_1();
                    break;
                case "2":
                    seleccion_2();
                    break;
                case "3":
                    seleccion_3();
                    break;
                case "4":
                    seleccion_4();
                    break;
                case "5":
                    seleccion_5();
                    break;
                case "6":
                    seleccion_6();
                    break;
                case "7":
                    seleccion_7();
                    break;
                case "8":
                    seleccion_8();
                    break;
            }
            //Reinicio de Ruleta
            miRuleta.stopAnimation(false);
            miRuleta.rotationAngle = 0;
            miRuleta.draw();
            dibujarIndicador();
        }

        dibujarIndicador();
        function dibujarIndicador() {
            var ctx = miRuleta.ctx;
            distnaciaX = 150;
            distnaciaY = 50;
            ctx = miRuleta.ctx;
            ctx.strokeStyle = '#FF6528';
            ctx.fillStyle = '#FF6528';
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.moveTo(distnaciaX + 170, distnaciaY + 5);
            ctx.lineTo(distnaciaX + 230, distnaciaY + 5);
            ctx.lineTo(distnaciaX + 200, distnaciaY + 40);
            ctx.lineTo(distnaciaX + 171, distnaciaY + 5);
            ctx.stroke();
            ctx.fill();
        }
    </script>
</body>

</html>
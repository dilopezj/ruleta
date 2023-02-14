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
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
    <div class="header">
        <h1 STYLE="font-size: 40px;color:#000000; text-align: center;">LA RULETA DE LA <strong>ACCIÓN SABIA</strong></h1>
    </div>
    <div id="wrapper">
        <div id="contenedor">
            <div id="contenido">
                <div class="row">
                    <div class="col-lg-6" style="text-align: center;">
                        <br><br><br>
                        <br><br><br>
                        <h2>La ruleta para que te diviertas en el camino de ser más <strong>sabia</strong> en el amor</h2>
                        <br><br><br>
                        <br><br><br>
                        <p style="font-size: 24px;">"¡Hazla girar y escoge la mejor forma de actuar!"</p>
                        <br><br><br>
                    </div>
                    <div class="col-lg-6">
                        <form id="form1" runat="server">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12" class="align-baseline">
                                        <div style="margin: 0 auto;display: inline-block;">
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
                    </div>
                </div>
                <div class="footer">
                    <img src="src/img/Logo_M.png" alt="María José ÁLvarez B" style="width: 242px;" />
                </div>
            </div>
        </div>
    </div>

    <script>
        function seleccion_1() {
            swal({
                title: '<i><font color="#000000"><h2><strong>1. ¿Qué hacer cuando no aparece? </strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">Todo lo que piensas que hace el otro es una película o representación interna que te haces por tus vacíos y no por las acciones de la otra persona, específicamente. Si te imaginas que está en un accidente y que por eso no ha aparecido, te pones segura de ti y actúas con sabiduría. Pero si te imaginas que te está siendo infiel, podrías terminar actuando hasta como una loca. </p>' +
                    '<p align="justify">Cuando "no aparece" es cuando pones a prueba qué tanto confías en ti y qué tanto confías en la otra persona, así que tienes 2 opciones:  </p></h3>' +

                    '<ol type="a">' +
                    '<li>Imaginarte que no aparece porque tu no eres suficiente, tan valiosa y tan importante y que por esa razón está haciendo algo "malo" o que definitivamente no vale la pena estar contigo. Es el momento para que sufras, te amargues, te alejes o en el peor de los casos, lo llames a insultar y así, alejarlo tu a él.</li>' +
                    '<li>Respirar y recordarte a ti misma la persona que eres y la razón por la que cualquiera amaría respetarte y estar contigo. Es el momento para que hagas algo que te eleve la autoestima y eso es por lo general, algo que en ese instante no tengas ganas de hacer: leer un libro, escuchar a alguien feliz, buscar un podcast, hacer tu curso online, bailar, dibujar... Lo importante es que te saques de lo fácil (celar y reclamar), y te acerques a lo que te reta que es lo que te hace más segura de ti y atrae más a la otra persona.</li>' +
                    '</ol>',
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
                title: '<i><font color="#000000"><h2><strong>2. ¿Qué hacer si algo me molesta?</font></strong></h2></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">En el día a día van a existir mil cosas que te van a molestar no solo de tu pareja, sino de todas las personas que te rodean. Es normal que esto ocurra porque eres un ser humano y el enojo es una gran emoción para enseñarte dónde debes poner límites a los demás o a ti mismo. Para esto es importante escoger bien tus batallas y preguntarte si realmente vale la pena invertir energía  valiosa en eso que "te molesta" o si es algo que podrías utilizar para trabajarte a ti misma y crecer como novia, esposa, etc.</p>' +
                    '<p align="justify">Por eso, tienes las siguientes 2 opciones para cuando algo te moleste del otro:  </p></h3>' +

                    '<ol type="a">' +
                    '<li>Alimentar la rabia con pensamientos que la validen más. Crear una novela y un drama alrededor de la rabia y ponerte histérica con el mundo entero. Gritarle no solo a la persona con la que cogiste rabia, sino también a otros que se aparezcan en tu camino. También, podrías seguir alimentando esa rabia para estar tan brava con el mundo que dures horas sin ganas de trabajar, hacer ejercicio o dedicarte a aquello que te hace bien. </li>' +
                    '<li>Saber que tienes rabia y reconocer que te visitó a ti por algo. Tú te haces cargo de ella y la sientes. Haces una respiración profunda y te conectas con ella preguntándote: "Y, ¿si estoy equivocada?", "¿es real este sentimiento o solo estoy interpretando mal algo porque se me da la gana?"... Sientes la efervescencia del enojo y cuando ya se haya pasado, te vuelves a preguntar si vale la pena poner un límite a la otra persona: "mi amor me gustaría que esto se mejorara", o si vale la pena ponerme el límite a ti: "mi misma te amo pero a la próxima interpretemos "x" situación de mejor forma". </li>' +
                    '</ol>',
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
                title: '<i><font color="#000000"><h2><strong>3. ¿Qué hacer si siento que no quiere estar conmigo? </strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">Desde pequeñas cargamos frustración porque en muchas ocasiones no recibimos lo que esperamos, y, por lo general, creemos que eso pasa porque no somos suficientes. Cuando la realidad es que no recibir lo que esperamos simplemente nos demuestra que debemos pedir algo más grande que eso porque estamos creadas para más. Este cambio de narrativa nos permite ver que en realidad sí somos merecedoras y que sí valemos. </p>' +
                    '<p align="justify">El sentir que otra persona no quiere estar contigo es un sentir, no es una realidad. Y ese sentir tiene que ver con la narrativa anterior y no con lo que haga la otra persona. Cuando lo sientas, tienes 2 opciones:</p></h3>' +

                    '<ol type="a">' +
                    '<li>Recordar todas las veces en tu infancia y adolescencia en las que te trataron mal y sentiste que valías cero o que eres poca cosa. En ese momento podrías pedir la comida rápida más junk de tu ciudad y atiborrarte con ella sintiéndote peor. O llamar a tu amiga con la que siempre se quejan de la vida y así alimentar tus ganas de insultar al otro y desocuparte de tu vida, ocupándote de la de él</li>' +
                    '<li>Recordar todos los logros que has tenido en tu vida y las circunstancias felices de tu camino. Que hayan ocurrido cosas malas no quiere decir que toda tu historia sea mala. Lo único que quiere decir es que te has enfocado solo en lo malo, pero ahora mismo tienes la posibilidad de recordar lo simple, por ejemplo, la primera vez que te bañaste en agua de lluvia y fuiste feliz. En ese momento dedica tu energía a recordar tu valor. Ese desenfoque permitirá que instaures nuevos circuitos neuronales que te recuerden que cualquier persona ama estar contigo, solo que también debe ocuparse de sus asuntos para con toda la calma, conquistarte bien a ti.</li>' +
                    '</ol>',
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
                title: '<i><font color="#000000"><h2><strong>4. ¿Qué hacer cuando sus deseos no son los mismos míos? </strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">Lo más normal es que en una relación de pareja haya discrepancias en cuanto a lo que quiere cada uno. Esa diferencia en lugar de verse negativa, debe verse como un aspecto positivo que permite y facilita las conversaciones incómodas que son las que llevan a buenos acuerdos y relaciones sanas.</p>' +
                    '<p align="justify">Este cambio de perspectiva sobre el hecho de que los deseos no sean los mismos, te lleva a tener 2 opciones:</p></h3>' +

                    '<ol type="a">' +
                    '<li>Puedes coger rabia porque cómo es posible que tu pareja no quiera lo mismo que tú si por algo está contigo. Puedes alimentar esa rabia pensando que tu pareja vino a hacerte el mal y que el hecho de que no tengan los mismos deseos es una señal de que deben acabar la relación. Así, entrarás en una discusión que se acabará y perdonará algún día si alguno cede.</li>' +
                    '<li>Resignificas el hecho de que tu pareja, en ocasiones, no quiera lo mismo que tú. Y entiendes que esas diferencias son las que finalmente le dan vida a la relación. Una vez reconoces esto, se te hará fácil hablar en lugar de tragarte las cosas o coger rabia con la otra persona. Tendrás una conversación vulnerable diciéndo los argumentos de tu deseo con seguridad, buena voz y convicción. Y también, escucharás los argumentos de tu pareja. Verás como llegan a un acuerdo con mayor madurez y habrá crecimiento tanto dentro de ti, como en la relación.</li>' +
                    '</ol>',
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
                title: '<i><font color="#000000"><h2><strong>5. ¿Qué hacer si siento monotonía?</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">La monotonía hace parte de la salud en la relación porque es una herramienta que permite salir de la zona de confort para elevar la vida. Esta monotonía se siente como que los días son iguales y todo el tiempo hacen lo mismo con las mismas rutinas. También se siente a nivel interno en la relación cuando tienen las mismas conversaciones, los mismos problemas, las mismas quejas, los mismos reclamos...<br>Sentir la monotonía, reconocerla y actuar a favor de ella, puede ser valioso para construir un nivel más sólido en la relación. </p>' +
                    '<p align="justify">Hay 2 opciones para cuando sientas monotonía:</p></h3>' +

                    '<ol type="a">' +
                    '<li>Meterte en la cabeza que la monotonía es lo peor y que tu relación es un desastre porque sientes monotonía. Puedes empezar a cuestionarte por qué fue que te enamoraste de tu pareja, por qué es que estás en esa relación y darte duro pensando que no tomaste una decisión sabia al meterte con esa persona. También, puedes reclamarle a tu pareja porque es la culpable de que te sientas así. </li>' +
                    '<li>Ver la monotonía como la puerta de salida de la zona de confort que permite que eleves el nivel de tu relación y de tu vida. Una vez la sientas, habla con total vulnerabilidad con tu pareja: "mi amor últimamente he sentido que estamos haciendo lo mismo, ¿qué actividad nueva nos inventamos para hacer los fines de semana juntos?", "mi amor siento que estamos peleando siempre por lo mismo. Busquemos más bien agradecer por algo bueno de la relación".</li>' +
                    '</ol>',
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
                title: '<i><font color="#000000"><h2><strong>6. ¿Qué hacer si siento celos? </strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">Los celos son normales. Los celos NO vienen de lo que la otra persona hace sino de cómo tú interpretas lo que esa persona hace. Cuando interpretas que la otra persona está haciendo algo malo o que quiere ser infiel, eso viene de una creencia tuya de que no eres suficiente o que hay algo malo en ti o que alguien puede ser mejor que tú. <br> Los celos aparecen para recordarte que debes enfocarte en reconocer tu valor y no en reclamarle lo mínimo a la otra persona. </p>' +
                    '<p align="justify">En el momento que los sientas tienes 2 opciones: </p></h3>' +

                    '<ol type="a">' +
                    '<li>Sobre alimenta los celos. Una vez los sientas, piensa en todas las veces que tu pareja ha tomado una actitud que podría validar eso que estás pensando. Piensa en todo lo feo que tienes tú a nivel físico y piensa en todas las cosas de tu vida que te hacen sentir insuficiente. Además, busca a todas las personas con las que tu pareja ha estado, compárate y siéntete tú como la peor. Luego, reclámale y aléjalo de ti.  </li>' +
                    '<li>Gira el lente. En lugar de empezar a pensar en el otro y en la posible persona con la que puede meterse, mírate y enfócate en ti. ¿Por qué si tu pareja te escogió y han pasado tan rico juntos, querría estar con alguien más?, ¿qué tiene esa persona que no tienes tú?. Recuérdate tu valor único y di a ti misma todas las cosas buenas que solo tú tienes y que en ninguna otra persona va a encontrar. En lugar de reclamarle sintiéndote peor, arréglate hermosa para ti y di a ti misma palabras llenas de amor, habla con personas que te celebren y se vulnerable. Esa energía nueva hará que tu pareja se sienta más atraída por ti. </li>' +
                    '</ol>',
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
                title: '<i><font color="#000000"><h2><strong>7. ¿Qué hacer si no me da mi espacio?</strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">Cuanto más nos enfocamos en nosotras mismas y trabajamos en nuestro interior, más empezamos a sentir que el otro quiero estar presente en nuestra vida. Es un resultado lógico y normal. Es en ese momento donde ocurre lo que por ahí dicen, "se voltea la arepa", ahora es tu pareja quien quiere pasar encima de ti todo el tiempo. Esto es normal y debe trabajarse con amor y vulnerabilidad. </p>' +
                    '<p align="justify">En ese momento tienes las siguientes 2 opciones:  </p></h3>' +

                    '<ol type="a">' +
                    '<li>Asustarte y pensar que lo dejaste de amar y que definitivamente no es el hombre o la persona para ti. Ahí entrarás a juzgar, discutir, pelear y entrar en una energía de confusión que te aleja de tu crecimiento personal, te evita que pases rico y que te enfoques en lo verdaderamente importante.   </li>' +
                    '<li>Normalizar el hecho y entender que sentir que tu pareja no te da tu espacio es un llamado para que esa persona ahora se enfoque en ella misma y en crecer interna y externamente. No es el momento para que te sientas culpable o egoísta por no querer estar con la persona, si no que al contrario, te sientas bien porque le estás dando la posibilidad de que ahora trabaje en ella misma como tu lo estás haciendo y tanto te está sirviendo. </li>' +
                    '</ol>',
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
                title: '<i><font color="#000000"><h2><strong>8. ¿Qué hacer si hay desacuerdos? </strong></h2></font></i> ',
                imageUrl: '',
                imageWidth: 221,
                imageHeight: 137,
                imageAlt: 'Custom image',
                width: '100%',
                padding: 60,
                html: '<h3>' +
                    '<p align="justify">En el día a día habrá desacuerdos en la relación y esto es lo más sano del mundo. Definitivamente, para tener relaciones sanas está bien tener conversaciones incómodas. Por eso, es importante cambiarle la perspectiva a los desacuerdos y en lugar de verlos como enemigos, verlos como puentes para llegar más lejos en la vida a través de la relación de pareja.</p>' +
                    '<p align="justify">Para este momento tienes 2 opciones:   </p></h3>' +

                    '<ol type="a">' +
                    '<li>Coger rabia con todas tus fuerzas internamente porque no es normal que haya desacuerdos en la relación. Puedes insultar a tu pareja porque te parece inconcebible que no piense como tú, y además, puedes entrar a ser infeliz solo por la necesidad de tener la razón. </li>' +
                    '<li>Es el momento para preguntarte, ¿prefiero tener la razón o ser feliz?. Cuando hay desacuerdos es bueno responder en lugar de reaccionar y tomar un espacio para ti una vez te moleste algo del otro. Hacer una respiración profunda y recordarte que tu pareja viene de otra educación, de otro mundo y con otros valores y que estas diferencias hacen parte de tu decisión de amar que tomaste en un momento dado. Al alejarte un momento, respirar y relajarte, podrás responder de forma elegante y hablar desde el amor</li>' +
                    '</ol>',
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
            'outerRadius': 298, // Radio externo
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
                'duration': 5, // Duración de giro
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
            distnaciaY = 40;
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
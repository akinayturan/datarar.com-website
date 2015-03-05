<?
require('../../h/tema/menu1cssyok.php');
?>

<meta name="description" content="Online Paint | Gerçek Zamanlı | Datarar | Birazcık Farklı" />
<meta name="keywords" content="Online, Paint, datarar, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark" />
<title>Online Paint | Gerçek Zamanlı | Datarar</title>

    <!-- The stylesheets -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<div id="cursors">
    <!-- The mouse pointers will be created here -->
</div>

<canvas id="paper" width="1900" height="1000">
    Your browser needs to support canvas for this to work!
</canvas>

<hgroup id="instructions">
    <h1>Online Paint!</h1>
    <!-- <h2>You will see everyone else who's doing the same.</h2> -->
   <h3>Not: Ortalık kirlenmeye başlarsa, sayfayı yenilemeniz yeterli olacaktır.</h3>
</hgroup>

<!-- JavaScript includes. Notice that socket.io.js is served by node.js -->
<script src="http://tz-drawing-game.herokuapp.com/socket.io/socket.io.js"></script>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
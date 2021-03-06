
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
    <script src="js/main.js" rel="stylesheet" type="text/javascript"> </script>  <!--INCLUDO main.js -->
    <title>myFirenze</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa6bQpbcPxZyWLjtqqOlBEO-tvfP_kYKM&callback=initMap"></script> <!--UTILIZZO API GOOGLE-->
</head>

<body>
    <div id="descriptor"> <!--FINESTRELLA QUANDO CLICCHI NEI MARKER-->

        <div id="closeDescriptor" onmousedown="hidepopup()">✖</div>  <!-- children 0 -->

        <div class="container" id="popupmarker" >  <!-- children 1 -->
            <div class="column" id="column1">  <!-- children 1.0-->
                <h1> my title </h1> <!-- children 1.0.0-->
                <p> my paragraph </p> <!-- children 1.0.1 -->
                <button class="addItinerary" id="addItinerary"></button> <!--children 1.0.2-->
                <button class="removeItinerary" id="removeItinerary"></button> <!--children 1.0.3-->
                <div id="duration"> <!--children 1.0.4-->
                    <div id="up"></div>
                    <div id="down"></div>
                </div>
            </div>
            <div class="column" id="column2"> <!-- children 1.1-->
                <img id="previewImage"> <!-- children 1.1.0 -->
                <div id="prevNext"> 
                    <a id="prev" onclick="slideShows(-1)" >&#10094;</a> 
                    <a id="next" onclick="slideShows(1)">&#10095;</a> 
                </div>
            </div>

            <div id="helpcontainer">  <!-- children 1.2-->


            </div>
        </div>
    </div>

    <div id="descriptorQR">

        <div id="closeDescriptor" onmousedown="hidepopup()">✖</div>  <!-- children 0 -->

        <p><img id="QRimage" src=""></p>
    </div>

    <div id="container">
        <div id="logo">
            <a href="http://www.comune.fi.it/export/sites/retecivica/index.html"><img src="img/logofirenze.png"></a>
        </div>
        <img id="ita" src="img/it.png" onclick="flagIta()">
        <img id="eng" src="img/enbw.png" onclick="flagEng()">


        <div id="favorites">
            <p id="best">Preferiti</p>
                <ul id="menufavorites">
                    <li onclick="favorite('0')"><a id="fav1">Basilica e Museo di Santa Croce</a></li>
                    <li onclick="favorite('1')"><a id="fav2">Basilica di S.Lorenzo</a></li>
                    <li onclick="favorite('2')"><a id="fav3">Fortezza da Basso</a></li>
                    <li onclick="favorite('3')"><a id="fav4">Casa di Dante</a></li>
                    <li onclick="favorite('4')"><a id="fav5">Cupola del Brunelleschi</a></li>
                </ul>
        </div>



        <div id="itinerary">
            <p id="currentItinerary">Itinerario</p>
            <ol id="menuItinerary">
                <!-- Qui ci arrivano li creati da loadItinierario()  -->
            </ol>
        </div>
        <div id="timeVisit">
            <div id="left"></div>
            <div id="right"></div>
        </div>
        <div id="timeItinerary">
            <div id="info"></div>
            <div id="time"></div>
        </div>
        <div id="footer">
            <button id="QRgenerator"  onclick="QRMessage()">QRcode</button>
            <button id="help" onclick="helpMessage()"></button>
            <button id="newItinerary" onclick="newItinerary()"></button>
        </div>
        <div id="map" onmousedown="hidepopup()"></div>
    </div>



</body>
</html>

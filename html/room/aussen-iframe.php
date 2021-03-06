<!doctype html>
<html>
<head>
    <title>TUI</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.1 user-scalable=yes">    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="widget_base_width" content="120">
    <meta name="widget_base_height" content="131">
    <meta name="fhemweb_url" content="/fhem">
    <meta name="longpoll" content="1">
    <meta name="gridster_disable" content="1">
    <meta name="widget_dir" content="../Widgets-for-fhem-tablet-ui/js">
    
    <meta name="color_scheme" content="amber">
    <meta name="color_background"                           content="#000000">
    <meta name="color_widget_background"                    content="#2a2a2a">
    <meta name="color_text"                                 content="#ffffff">
    <meta name="color_text_emphasized"                      content="#aa6900">
    <meta name="color_text_dampened"                        content="#262626">
    <meta name="color_multibutton_background_off"           content="#505050">
    <meta name="color_multibutton_background_on"            content="#aa6900">
    <meta name="color_multibutton_background_emphasized"    content="#aa6900">
    <meta name="color_multibutton_background_dampened"      content="#6f4509">
    <meta name="color_multibutton_foreground_off"           content="#2a2a2a">
    <meta name="color_multibutton_foreground_on"            content="#2a2a2a">
    
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/jquery.gridster.min.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/css/fhem-tablet-ui.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/font-awesome.min.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/jquery.toast.min.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/powerange.min.css" />

    <link rel="stylesheet" href="../css/wopr.css">
    
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.gridster.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.knob.mod.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.toast.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/fa-multi-button.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/powerange.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.circlemenu.js"></script>
    
    <script type="text/javascript" src="../js/subtype-defaults.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/js/fhem-tablet-ui.js"></script>

    <script type="text/javascript" src="../js/devices.js"></script>
    <script type="text/javascript" src="../js/colors.js"></script>
    <meta name="daydream_starttime" content="1800000">
    <meta name="daydream_slowdown" content="10000">
    <script type="text/javascript" src="../js/daydream.js"></script>
</head>
<body>
    <div class="gridster">
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<script type="text/javascript">			
    $(document).ready(function() {
        var path = document.location.pathname;
        var roomname = "room_index";
        if(path.lastIndexOf('.')>-1) {
            roomname = "room_" + path.substring(path.lastIndexOf('/') + 1, Math.min(path.lastIndexOf('.'), (path.lastIndexOf('-')>0?path.lastIndexOf('-'):9999)));
        }
        $('head').append('<style type="text/css">#'+roomname+' #bg { color: rgb(170,105,0) !important; }</style>');
    });
</script>
<div class="container">
    <div id="room_index" data-type="button" data-url="index.php" data-icon="fa-home" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_wohnzimmer" data-type="button" data-url="wohnzimmer.php" data-icon="fa-film" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_kueche" data-type="button" data-url="kueche.php" data-icon="fa-cutlery" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_schlafzimmer" data-type="button" data-url="schlafzimmer.php" data-icon="fa-bed" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_bad" data-type="button" data-url="bad.php" data-icon="fa-female" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_buero" data-type="button" data-url="buero.php" data-icon="fa-laptop" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_aussen" data-type="button" data-url="aussen.php" data-icon="fa-sun-o" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options" data-type="button" data-url="system-light.php" data-icon="fa-gears" data-color="rgb(80,80,80)" class="cell"></div>

    <div style="padding-top:30px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock" class="cells"></div>
</div>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="4">
        <iframe id="aussen_iframe" src="aussen-iframe.php" width='680' height='553' scrolling='auto' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="1">
    	<header>KLIMA</header>
    	<div class="container">
    <div class="left">
	    <div data-type="label" data-device="A_HUMID" data-get="temperature" data-unit=" %B0C%0A" class="cell big"></div>
	    <div class="centered container">
	        <div class="left">
	            <div data-type="klimatrend" data-device="A_HUMID" data-get="statTemperatureTendency" data-refperiod="1" class="cell small"></div>
	        </div>
	        <div class="left">
	            <div data-type="klimatrend" data-device="A_HUMID" data-get="statTemperatureTendency" data-refperiod="2" class="cell small"></div>
	        </div>
	        <div class="left">
	            <div data-type="klimatrend" data-device="A_HUMID" data-get="statTemperatureTendency" data-refperiod="3" class="cell small"></div>
	        </div>
	    </div>

	    <div data-type="label" data-device="A_HUMID" data-get="humidity" data-unit=" %" class="cell big"></div>
	    <div class="centered container">
	        <div class="left">
	            <div data-type="klimatrend" data-device="A_HUMID" data-get="statHumidityTendency" data-refperiod="1" class="cell small"></div>
	        </div>
	        <div class="left">
	            <div data-type="klimatrend" data-device="A_HUMID" data-get="statHumidityTendency" data-refperiod="2" class="cell small"></div>
	        </div>
	        <div class="left">
	            <div data-type="klimatrend" data-device="A_HUMID" data-get="statHumidityTendency" data-refperiod="3" class="cell small"></div>
	        </div>
	    </div>
    </div>
</div>    </li>
    <li data-row="2" data-col="7" data-sizex="1" data-sizey="3">
        <header>WEITER</header>
        <div class="centered container">
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-globe" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=meteogram" data-icon="fa-line-chart"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de" data-icon="fa-globe"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de_nacht" data-icon="fa-moon-o"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de_morgen" data-icon="fa-forward"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_radar" data-icon="fa-wifi"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Karten</div>
    </div>
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-line-chart" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=%2Fplots%2F%3Fp%3DP_AUSSEN_TEMP%26nonav%26dark%26nolegend" data-icon="fa-sun-o"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=%2Fplots%2F%3Fp%3DP_AUSSEN_HUM%26nonav%26dark%26nolegend" data-icon="fa-tint"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=%2Fplots%2F%3Fp%3DP_AUSSEN_WINDSPEED%26nonav%26dark%26nolegend" data-icon="fa-cloud"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=%2Fplots%2F%3Fp%3DP_AUSSEN_PRESSURE%26nonav%26dark%26nolegend" data-icon="fa-cloud-download"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=%2Fplots%2F%3Fp%3DP_AUSSEN_VIS%26nonav%26dark%26nolegend" data-icon="fa-binoculars"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Plots 1</div>
    </div>
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-line-chart" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=%2Fplots%2F%3Fp%3DP_AUSSEN_CHOFRAIN%26nonav%26dark%26nolegend" data-icon="fa-tint"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=%2Fplots%2F%3Fp%3DP_AUSSEN_BEWOELKUNG%26nonav%26dark%26nolegend" data-icon="fa-cloud"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Plots 2</div>
    </div>
</div>    </li>
</ul>    </div>
</body>
</html>

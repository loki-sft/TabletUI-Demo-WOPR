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

    <li data-row="1" data-col="2" data-sizex="1" data-sizey="3">
    	<header>WOHNZIMMER</header>
        <div class="centered container">
        <div data-type="label" 
        data-subtype="Temperature"
        data-device="W_HUMID" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="W_HUMID" 
        data-subtype="statTemperatureTendency" 
        class="cell small"></div>
    <div data-type="label" 
        data-subtype="Humidity"
        data-device="W_HUMID" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="W_HUMID" 
        data-get="statHumidityTendency" 
        class="cell small"></div>
    <div style="padding-top:33px !important">
        <div data-type="thermostat" 
        data-subtype="MAX"
        data-off="off"
        data-boost="boost"
        data-min="5"
        data-max="30"
        data-device="W_HEIZUNG" 
        class="cell"></div>

    <div style="margin-top:-27px !important;margin-bottom:20px !important">
        <div data-type="label" data-device="W_HEIZUNG_BALKON" data-get="valveposition" data-unit=" %" class="cell" data-fix="0" style="display:inline;margin:0 !important;"></div>
    </div>
    
    <div data-type="switch" data-device="W_HEIZUNG_OVERRIDE" data-subtype="dummy10" data-icon="fa-hand-o-right"></div>
    </div>
    <div data-type="symbol" data-device="W_FENSTER_Balkon" class="cell" data-subtype="MAX"></div>
</div>    </li>
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="3">
    	<header>B&Uuml;RO</header>
    	<div class="centered container">
        <div data-type="label" 
        data-subtype="Temperature"
        data-device="B_THERMO" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="B_THERMO" 
        data-subtype="statTemperatureTendency" 
        class="cell small"></div>
    <div style="padding-top:84px !important">
        <div data-type="thermostat" 
        data-subtype="MAX"
        data-off="off"
        data-boost="boost"
        data-min="5"
        data-max="30"
        data-device="B_HEIZUNG" 
        class="cell"></div>

    <div style="margin-top:-27px !important;margin-bottom:20px !important">
        <div data-type="label" data-device="B_HEIZUNG" data-get="valveposition" data-unit=" %" class="cell" data-fix="0" style="display:inline;margin:0 !important;"></div>
    </div>
    
    <div data-type="switch" data-device="B_HEIZUNG_OVERRIDE" data-subtype="dummy10" data-icon="fa-hand-o-right"></div>
    </div>
</div>    </li>
    <li data-row="1" data-col="4" data-sizex="1" data-sizey="1">
    	<header>K&Uuml;CHE</header>
    	<div class="centered container">
        <div data-type="label" 
        data-subtype="Temperature"
        data-device="K_HUMID" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="K_HUMID" 
        data-subtype="statTemperatureTendency" 
        class="cell small"></div>
    <div data-type="label" 
        data-subtype="Humidity"
        data-device="K_HUMID" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="K_HUMID" 
        data-get="statHumidityTendency" 
        class="cell small"></div>
</div>    </li>
    <li data-row="2" data-col="4" data-sizex="1" data-sizey="1">
    	<header>K&Uuml;HLSCHRANK</header>
    	<div class="centered container"><div class="left">
    <div data-type="label" 
        data-device="KUEHL_THERMO" 
        data-get="temperature" 
        data-unit=" %B0C%0A" 
        data-limits="[-20,0,3,8,10]"
        data-colors='["#ffffff","#AD3333","#AA6900","#AD3333","#ff0000"]'
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="KUEHL_THERMO" 
        class="cell small"></div>
</div></div>    </li>
    <li data-row="1" data-col="5" data-sizex="1" data-sizey="2">
    	<header>SCHLAFZIMMER</header>
    	<div class="centered container">
        <div data-type="label" 
        data-subtype="Temperature"
        data-device="S_THERMO" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="S_THERMO" 
        data-subtype="statTemperatureTendency" 
        class="cell small"></div>
    <div data-type="label" 
        data-subtype="Humidity"
        data-device="S_THERMO" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="S_THERMO" 
        data-get="statHumidityTendency" 
        class="cell small"></div>
    <div data-type="symbol" data-device="S_FENSTER_LINKS" class="cell" data-subtype="MAX"></div>
</div>    </li>
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="2">
    	<header>BAD</header>
    	<div class="centered container">
        <div data-type="label" 
        data-subtype="Temperature"
        data-device="BAD_HUMID" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="BAD_HUMID" 
        data-subtype="statTemperatureTendency" 
        class="cell small"></div>
    <div data-type="label" 
        data-subtype="Humidity"
        data-device="BAD_HUMID" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="BAD_HUMID" 
        data-get="statHumidityTendency" 
        class="cell small"></div>
</div>    </li>
    
    <li data-row="4" data-col="6" data-sizex="1" data-sizey="1">
    	<header>ANRUFE</header>
    	<div class="container">
    	    <a style='color:white;text-decoration:none' href="javascript:$.get('/fhem?cmd=trigger+MISSED_CALL+clear&amp;XHR=1');false;">
    	        <div data-type="label" data-device="MISSED_CALL" data-get="name"></div>
    	        <div data-type="label" data-device="MISSED_CALL" data-get="number"></div>
            </a>
    	    <div id="missed_call" data-type="button" data-url="system-calls.php" data-icon="fa-phone" data-color="rgb(111,69,0)" class="cell"></div>
        </div>
    </li>    
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
    	<header>AUSSEN</header>
    	<div class="centered" style="margin-bottom:50px">
    	    <div class="left">
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
</div>    	    </div>
        </div>
        <!-- css in wopr.css -->       
<div class="centered container weather">
    <table>
        <tr>
            <td colspan="2">
                <a href="aussen-iframe.php?content=meteogram">
                    <div data-type="weather" 
                        data-device="Wetter"
                        data-get="condition"
                        data-imageset="kleinklima"
                        style="width:110px;padding:0;margin:0;margin-bottom:-6px;"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="aussen-iframe.php?content=meteogram">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="condition"
                        style="font-size:90%"></div>
                </a>
                <div style="padding-bottom:25px !important"></div>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_TEMP&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="symbol" data-icon="1" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_TEMP&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="temperature"
                        data-limits="[-50,0,10,25,30,40]"
                        data-colors='["#9999ff","#ffbdff","#aa6900","#ff6900","#ff3333","#ff0000"]'
                        data-unit=" �C"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_HUM&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="symbol" data-icon="fa-tint" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_HUM&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="humidity"
                        data-limits="[0,40,60]"
                        data-colors='["#9999ff","#aa6900","#ff6900"]'
                        data-unit=" %"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_CHOFRAIN&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="symbol" data-icon="8" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_CHOFRAIN&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="label" 
                        data-device="WETTER_PROPLANTA"
                        data-get="now_chOfRain"
                        data-unit=" %"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_WINDSPEED&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="symbol" data-icon="9" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_WINDSPEED&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="wind"
                        data-unit=" km/h"
                        data-limits="[0,        19,       28,       38,       49,       74,       102,      117]"
                        data-colors='["#ffffff","#dddddd","#aa6900","#aa6900","#ff9999","#ff6666","#ff3333","#ff0000"]'
                        style="display:inline"></div>
                </a>
            </td>
        </tr>
        <!--tr>
            <td><div data-type="symbol" data-icon="fa-arrows" style="font-size:14px" data-off-color="#aa6900"></td>
            <td>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="wind_condition"
                    data-part="2"></div>
            </td>
        </tr-->
        <tr>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_PRESSURE&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="symbol" data-icon="fa-cloud-download" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_PRESSURE&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="symbol" 
                        data-device="Wetter"
                        data-get="pressure_trend_sym"
                        data-get-on='["+", "-"]'
                        data-icons='["fa-chevron-up", "fa-chevron-down"]'
                        style="font-size:12px"></div>
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="pressure"
                        data-unit=" hPa"
                        data-limits="[0,950,1000]"
                        data-colors='["#ff9999","#aa6900","#9999ff"]'></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_VIS&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="symbol" data-icon="fa-binoculars" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=%252Fplots%252F?p=P_AUSSEN_VIS&amp;nonav&amp;dark&amp;nolegend">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="visibility"
                        data-unit=" km"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div style="text-align:center">
                    <div data-type="wind_direction" 
                        data-device="Wetter"
                        data-get="wind_direction"
                        data-size="80"
                        class="cell"
                        style="padding-top:15px"></div>
                    </a>
                </div>
            </td>
        </tr>
    </table>
</div>    </li>
    
    <li data-row="4" data-col="2" data-sizex="4" data-sizey="1">
        <header>ANWESENHEIT</header>
        <div class="centered container">
    <div class="left">
        <div data-type="switch" data-device="ATHOME" class="cell" data-icon="fa-home" data-subtype="dummy10"></div>
    </div>
    <div class="left">
        <div data-type="switch" data-device="HANDY" class="cell" data-icon="fa-user" data-subtype="PRESENCE"></div>
        <div data-type="label" class="cell">Thomas</div>
    </div>
    <div class="left">
        <div data-type="switch" data-device="STEFF" class="cell" data-icon="fa-user" data-subtype="PRESENCE"></div>
        <div data-type="label" class="cell">Steff</div>
    </div>
    <div class="left">
        <div data-type="switch" data-device="OMW" class="cell" data-icon="fa-suitcase" data-subtype="dummy10"></div>
        <div data-type="label" class="cell">OMW</div>
    </div>
    <div class="left">
        <div data-type="switch" data-device="OPT_PARTY" class="cell" data-icon="fa-glass" data-subtype="dummy10"></div>
    </div>
    <div class="left">
        <div data-type="switch" data-device="OPT_ALARM" class="cell" data-icon="fa-bullhorn" data-subtype="dummy10"></div>
    </div>
</div>    </li>
    
    <li data-row="3" data-col="4" data-sizex="3" data-sizey="1">
    	<header>FAVORITEN</header>
    	    <div class="centered">
        
        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-film" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="button" data-url="wohnzimmer-pc.php" data-icon="fa-desktop"></div></li>
                    <li><div data-type="button" data-url="wohnzimmer-xbmc-simple.php" data-icon="fa-play-circle"></div></li>
                    <li><div data-type="switch" data-device="W_SWITCH_D1_Monitore" data-icon="fa-desktop" data-color="#505050"></div></li>
                    <li><div data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22Winamp+Playlist+DLF%22%29%7D" data-icon="fa-music" data-color="#2E8AE6"></div></li>
                    <li><div data-type="button" data-url="wohnzimmer-milight.php" data-icon="fa-lightbulb-o"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Wohn</div>
        </div>

        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-laptop" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="button" data-url="buero-pc.php" data-icon="fa-desktop"></div></li>
                    <li><div data-type="button" data-fhem-cmd="%7Beventghost%28%22MIST%22%2C+%22Winamp+Play+Toggle%22%29%7D" data-icon="fa-play" data-color="#FFCC00"></div></li>
                    <li><div data-type="button" data-fhem-cmd="%7Beventghost%28%22MIST%22%2C+%22Winamp+Playlist+DLF%22%29%7D" data-icon="fa-music" data-color="#2E8AE6"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">B&uuml;ro</div>
        </div>
        
        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-bed" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="button" data-url="schlafzimmer-pc.php" data-icon="fa-desktop"></div></li>
                    <li><div data-type="button" data-url="schlafzimmer-xbmc-simple.php" data-icon="fa-play-circle"></div></li>
                    <li><div data-type="button" data-url="schlafzimmer-milight.php" data-icon="fa-lightbulb-o"></div></li>
                    <li><div data-type="button" data-url="schlafzimmer-wecker.php" data-icon="fa-clock-o"></div></li>
                    <li><div data-type="push" data-device="S_SWITCH_A2_TV" data-set="on-for-timer 3600" data-icon="fa-desktop"></div></li>
                    <li><div data-type="push" data-device="S_SWITCH_C2_Sterne" data-set="on-for-timer 900" data-icon="fa-lightbulb-o"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Schlaf</div>
        </div>
        
        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-clock-o" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',600)}" data-icon="" data-off-background-color="#aa6900">10</div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',900)}" data-icon="" data-off-background-color="#aa6900">15</div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',1800)}" data-icon="" data-off-background-color="#aa6900">30</div></li>
                    <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice handy" data-icon="fa-mobile" data-off-background-color="#9933FF"></div></li>
                    <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice monitroid" data-icon="fa-tablet" data-off-background-color="#9933FF"></div></li>
                    <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice fritz" data-icon="fa-phone" data-off-background-color="#9933FF"></div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',300)}" data-icon="" data-off-background-color="#aa6900">5</div></li>
                </ul>
            </div>
            <div data-type="label" class="cell" data-device="TIMER1" data-get="signaldevice"></div>
        </div>
        
        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-check-circle" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{preset('schlafen')}" data-icon="fa-bed" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{preset('kino')}" data-icon="fa-film" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{preset('party')}" data-icon="fa-glass" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{preset('leave')}" data-icon="fa-sign-out" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Presets</div>
        </div>
    </div>
    </li>
</ul>    </div>
</body>
</html>

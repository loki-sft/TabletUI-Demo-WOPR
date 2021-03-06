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

    <li data-row="1" data-col="2" data-sizex="4" data-sizey="4">
        <header>KODI REMOTE</header>
        <div class="centered container">
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Reverse%22%29%7D" data-icon="fa-backward" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Pause%22%29%7D" data-icon="fa-pause" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Play%22%29%7D" data-icon="fa-play" data-color="#FFCC00" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Stop%22%29%7D" data-icon="fa-stop" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Forward%22%29%7D" data-icon="fa-forward" data-color="rgb(170,105,0)" class="cell"></div>
        </div>
        
        <div data-type="kodinowplaying" data-device="W_XBMC"></div>
        
        <div style="margin-top:18px" class="centered container">
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Back%22%29%7D" data-icon="fa-arrow-circle-o-left" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Close%22%29%7D" data-icon="fa-times" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Up%22%29%7D" data-icon="fa-angle-up" data-color="#2E8AE6" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+OSD%22%29%7D" data-icon="fa-bars" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Info%22%29%7D" data-icon="fa-info" data-color="rgb(170,105,0)" class="cell"></div>
        </div>
        <div class="centered container">
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Left%22%29%7D" data-icon="fa-angle-left" data-color="#2E8AE6" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Ok%22%29%7D" data-icon="fa-check-circle" data-color="#0066FF" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Right%22%29%7D" data-icon="fa-angle-right" data-color="#2E8AE6" class="cell"></div>
        </div>
        <div class="centered container">
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Fullscreen%22%29%7D" data-icon="fa-desktop" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Down%22%29%7D" data-icon="fa-angle-down" data-color="#2E8AE6" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Subtitle%22%29%7D" data-icon="fa-pencil" data-color="rgb(170,105,0)" class="cell"></div>
        </div>
        
        <div style="margin-top:30px" class="centered container">
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Mute%22%29%7D" data-icon="fa-volume-off" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Volume+Down%22%29%7D" data-icon="fa-volume-down" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Volume+Up%22%29%7D" data-icon="fa-volume-up" data-color="rgb(170,105,0)" class="cell"></div>
            <div id="" data-type="button" data-url="/tui/room/wohnzimmer-xbmc.php" data-icon="fa-star" data-color="#0066FF" class="cell"></div>
        </div>
        
        <div style="margin-top:25px" class="centered container">
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Home%22%29%7D" data-icon="fa-home" data-color="#9933FF" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Video%22%29%7D" data-icon="fa-film" data-color="#9933FF" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Music%22%29%7D" data-icon="fa-music" data-color="#9933FF" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Pictures%22%29%7D" data-icon="fa-picture-o" data-color="#9933FF" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+TV%22%29%7D" data-icon="fa-desktop" data-color="#9933FF" class="cell"></div>
        </div>
        
        <div class="centered container">
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Keyboard%22%29%7D" data-icon="fa-keyboard-o" data-color="rgb(80,80,80)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Files%22%29%7D" data-icon="fa-files-o" data-color="rgb(80,80,80)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Weather%22%29%7D" data-icon="fa-sun-o" data-color="rgb(80,80,80)" class="cell"></div>
            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Systemsettings%22%29%7D" data-icon="fa-gears" data-color="rgb(80,80,80)" class="cell"></div>
        </div>
    </li>
    
    <li data-row="1" data-col="6" data-sizex="2" data-sizey="1">
	    <header>KODI</header>
	    <div class="centered container">
	        <div class="left">
	            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Start%22%29%7D" data-icon="fa-play-circle" data-color="rgb(111,69,0)" class="cell"></div>
	            <div data-type="label">Start</div>
	        </div>
	        <div class="left">
                <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Exit%22%29%7D" data-icon="fa-power-off" data-color="rgb(111,69,0)" class="cell"></div>
                <div data-type="label">Exit</div>
            </div>
	        <div class="left">
	            <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22KODI+Focus%22%29%7D" data-icon="fa-bullseye" data-color="rgb(111,69,0)" class="cell"></div>
	            <div data-type="label">Focus</div>
            </div>
        </div>
    </li>
    
    <li data-row="2" data-col="6" data-sizex="2" data-sizey="1">
    	<header>PC SHUTDOWN</header>
    	<div class="centered container">
	        <div class="left">
    	        <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22PC+Shutdown%22%29%7D" data-icon="fa-power-off" data-color="rgb(111,69,0)" class="cell"></div>
    	        <div data-type="label">Shutdown</div>
    	    </div>
	        <div class="left">
    	        <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22PC+Hibernate%22%29%7D" data-icon="fa-pause" data-color="rgb(111,69,0)" class="cell"></div>
    	        <div data-type="label">Ruhe</div>
    	    </div>
	        <div class="left">
    	        <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22PC+Restart%22%29%7D" data-icon="fa-repeat" data-color="rgb(111,69,0)" class="cell"></div>
    	        <div data-type="label">Reboot</div>
            </div>
        </div>
    </li>
    
    <li data-row="3" data-col="6" data-sizex="2" data-sizey="1">
    	<header>PC VOLUME</header>
    	<div class="centered container">
	        <div class="left">
    	        <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22PC+Mute+Toggle%22%29%7D" data-icon="fa-volume-off" data-color="rgb(111,69,0)" class="cell"></div>
    	        <div data-type="label">Mute</div>
    	    </div>
    	    <div class="left">
    	        <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22PC+Volume+Down%22%29%7D" data-icon="fa-volume-down" data-color="rgb(111,69,0)" class="cell"></div>
    	        <div data-type="label">-</div>
    	    </div>
    	    <div class="left">
    	        <div id="" data-type="button" data-fhem-cmd="%7Beventghost%28%22WATER%22%2C+%22PC+Volume+Up%22%29%7D" data-icon="fa-volume-up" data-color="rgb(111,69,0)" class="cell"></div>
    	        <div data-type="label">+</div>
            </div>
        </div>
    </li>
    
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<div class="centered container">
    <div class="left">
	    <div id="pc" data-type="button" data-url="wohnzimmer-pc.php" data-icon="fa-desktop" data-color="rgb(111,69,0)" class="cell"></div>
	    <div data-type="label">PC</div>
    </div>
    <div class="left">
	    <div id="xbmc" data-type="button" data-url="wohnzimmer-xbmc-simple.php" data-icon="fa-play-circle" data-color="rgb(111,69,0)" class="cell"></div>
	    <div data-type="label">KODI</div>
    </div>
    <div class="left">
	    <div id="milight" data-type="button" data-url="wohnzimmer-milight.php" data-icon="fa-lightbulb-o" data-color="rgb(111,69,0)" class="cell"></div>
	    <div data-type="label">LICHT</div>
    </div>
</div>
    </li>

</ul>
    </div>
</body>
</html>

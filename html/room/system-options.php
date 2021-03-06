
<!doctype html>
<html>
<head>
    <title>TUI</title>
                <style type="text/css">
                div.gridster {
                    zoom: 1.2;
                    -moz-transform: scale(1.2);
                    -moz-transform-origin: 0 0;
                }
            </style>
                <meta name="mobile-web-app-capable" content="yes">
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
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
</head>
<body>
    <div class="gridster">
<style>
    div.subheader {
        padding-top:0px !important;
        margin-top:8px !important;
    }
    div[type=label] {
        margin-bottom:10px;
    }
</style>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
    	<script type="text/javascript">			
    $(document).ready(function() {
        var path = document.location.pathname;
        var roomname = "room_index";
        if(path.lastIndexOf('.')>-1) {
            roomname = "options_" + path.substring(path.lastIndexOf('-') + 1, path.lastIndexOf('.'));
        }
        $('head').append('<style type="text/css">#'+roomname+' #bg { color: rgb(170,105,0) !important; }</style>');
    });
</script>
<div class="container">
    <div id="room_index" data-type="button" data-url="index.php" data-icon="fa-home" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_light" data-type="button" data-url="system-light.php" data-icon="fa-lightbulb-o" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_calls" data-type="button" data-url="system-calls.php" data-icon="fa-phone" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_timers" data-type="button" data-url="system-timers.php" data-icon="fa-clock-o" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_plots" data-type="button" data-url="system-plots.php?p=HUMID_ALL" data-icon="fa-line-chart" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_its150" data-type="button" data-url="system-its150.php" data-icon="fa-mobile" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_options" data-type="button" data-url="system-options.php" data-icon="fa-gears" data-color="rgb(111,69,0)" class="cell"></div>

    <div style="padding-top:80px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock" class="cell"></div>
</div>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
        <header>OPTIONEN</header>
        <div class="centered container">
            <div>
                <div data-type="switch" data-device="OPT_ALARM" data-subtype="dummy10" data-icon="fa-bullhorn"></div>
                <div data-type="label">Alarm</div>
            </div>           
            <div>
                <div data-type="switch" data-device="OPT_HEIZUNG" data-subtype="dummy10" data-icon="fa-fire"></div>
                <div data-type="label">Heizung</div>
            </div>
            <div>
                <div data-type="switch" data-device="HEIZUNG_OVERRIDE" data-subtype="dummy10" data-icon="fa-hand-o-right"></div>
                <div data-type="label">Manuell</div>
            </div>
            <div>
                <div data-type="switch" data-device="ATHOME" data-subtype="dummy10" data-icon="fa-users" class="readonly"></div>
                <div data-type="label">Zuhause</div>
            </div>
            <div>
                <div data-type="switch" data-device="OMW" data-subtype="dummy10" data-icon="fa-suitcase"></div>
                <div data-type="label">OMW</div>
            </div>
            <div>
                <div data-type="switch" data-device="OPT_PARTY" data-subtype="dummy10" data-icon="fa-glass"></div>
                <div data-type="label">Party</div>
            </div>
            <div>
                <div data-type="switch" data-device="OPT_SPEAK" data-subtype="dummy10" data-icon="fa-volume-up"></div>
                <div data-type="label">Sprechen</div>
            </div>
        </div>
    </li>
    
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="3">
        <header>INFO</header>
        <div class="centered container">
            <div>
                <div data-type="switch" data-device="FREI" data-subtype="dummy10" data-icon="fa-heart-o" class="readonly"></div>
                <div data-type="label">Frei</div>
            </div>
            <div>
                <div data-type="switch" data-device="LICHT_INFO" data-subtype="dummy10" data-icon="fa-lightbulb-o" class="readonly"></div>
                <div data-type="label">Licht</div>
            </div>
            <div>
                <div data-type="switch" data-device="HANDY" data-subtype="PRESENCE" data-icon="fa-user" class="readonly"></div>
                <div data-type="label">Thomas</div>
            </div>
            <div>
                <div data-type="switch" data-device="STEFF" data-subtype="PRESENCE" data-icon="fa-user" class="readonly"></div>
                <div data-type="label">Steff</div>
            </div>
            <div>
                <div data-type="switch" data-device="IPAD" data-subtype="PRESENCE" data-icon="fa-tablet" class="readonly"></div>
                <div data-type="label">iPad</div>
            </div>
        </div>
    </li>
    
    <li data-row="4" data-col="3" data-sizex="2" data-sizey="1">
        <header>SERVER</header>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" data-device="SKY" data-subtype="PRESENCE" data-icon="fa-server" class="readonly"></div>
                <div data-type="label">SKY</div>
            </div>
            <div class="left">
                <div data-type="switch" data-device="HAILSTORM" data-subtype="PRESENCE" data-icon="fa-server" class="readonly"></div>
                <div data-type="label">HAILSTORM</div>
            </div>
            <div class="left">
                <div data-type="switch" data-device="MCP" data-subtype="PRESENCE" data-icon="fa-server" class="readonly"></div>
                <div data-type="label">MCP</div>
            </div>
        </div>
    </li>

    <li data-row="1" data-col="3" data-sizex="1" data-sizey="3">
        <header>TEMPERATUR</header>
        <div class="subheader">Frostschutz</div>
        <div data-type="thermostat" 
            data-device="T_FROST"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Nacht</div>
        <div data-type="thermostat" 
            data-device="T_NIGHT"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Party</div>
        <div data-type="thermostat" 
            data-device="T_PARTY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="4">
        <header>TEMPERATUR</header>
        <div class="subheader">B�ro</div>
        <div data-type="thermostat" 
            data-device="T_B_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">K�che</div>
        <div data-type="thermostat" 
            data-device="T_K_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Schlafzimmer</div>
        <div data-type="thermostat" 
            data-device="T_S_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Wohnzimmer</div>
        <div data-type="thermostat" 
            data-device="T_W_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
    </li>
    
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="3">
        <header>ANTENNEN</header>
        <div class="centered container">
            <div>
                <div data-type="switch" data-device="CUL1" data-get-on="Initialized" data-icon="fa-rss" class="readonly"></div>
                <div data-type="label">CUL 868</div>
            </div>
            <div>
                <div data-type="switch" data-device="CUL433" data-get-on="Initialized" data-icon="fa-rss" class="readonly"></div>
                <div data-type="label">CUL 433</div>
            </div>
            <div>
                <div data-type="switch" data-device="JEELINK" data-get-on="Initialized" data-icon="fa-rss" class="readonly"></div>
                <div data-type="label">JEELINK</div>
            </div>
            <div>
                <div data-type="switch" data-device="MILIGHT" data-get-on="ok" data-icon="fa-rss" class="readonly"></div>
                <div data-type="label">MILIGHT</div>
            </div>
        </div>
    </li>

    <li data-row="4" data-col="5" data-sizex="2" data-sizey="1">
        <header>DATENBANK</header>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" data-device="DBLOG1" data-get-on="connected" data-icon="fa-database" class="readonly"></div>
                <div data-type="label">SKY1</div>
            </div>
            <div class="left">
                <div data-type="switch" data-device="DBLOG2" data-get-on="connected" data-icon="fa-database" class="readonly"></div>
                <div data-type="label">SKY2</div>
            </div>
            <div class="left">
                <div data-type="switch" data-device="DBLOG3" data-get-on="connected" data-icon="fa-database" class="readonly"></div>
                <div data-type="label">SKY3</div>
            </div>
        </div>
    </li>

    <li data-row="1" data-col="5" data-sizex="1" data-sizey="3">
        <header>BATTERIE</header>
        <div class="centered container">
            <div data-type="switch" title="A_HUMID"          data-device="A_HUMID"            data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="A_HUMID"          class="readonly"></div>
            <div data-type="switch" title="BAD_HUMID"        data-device="BAD_HUMID"          data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="BAD_HUMID"        class="readonly"></div>
            <div data-type="switch" title="B_HEIZUNG"        data-device="B_HEIZUNG"          data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="B_HEIZUNG"        class="readonly"></div>
            <div data-type="switch" title="B_THERMO"         data-device="B_THERMO"           data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="B_THERMO"         class="readonly"></div>
            <div data-type="switch" title="KUEHL_THERMO"     data-device="KUEHL_THERMO"       data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="KUEHL_THERMO"     class="readonly"></div>
            <div data-type="switch" title="S_FENSTER_LINKS"  data-device="S_FENSTER_LINKS"    data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="S_FENSTER_LINKS"  class="readonly"></div>
            <div data-type="switch" title="S_THERMO"         data-device="S_THERMO"           data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="S_THERMO"         class="readonly"></div>
            <div data-type="switch" title="W_FENSTER_Balkon" data-device="W_FENSTER_Balkon"   data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="W_FENSTER_Balkon" class="readonly"></div>
            <div data-type="switch" title="W_HEIZUNG"        data-device="W_HEIZUNG"          data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="W_HEIZUNG"        class="readonly"></div>
            <div data-type="switch" title="W_HEIZUNG_BALKON" data-device="W_HEIZUNG_BALKON"   data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="W_HEIZUNG_BALKON" class="readonly"></div>
            <div data-type="switch" title="W_HEIZUNG_COUCH"  data-device="W_HEIZUNG_COUCH"    data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="W_HEIZUNG_COUCH"  class="readonly"></div>
            <div data-type="switch" title="W_HUMID"          data-device="W_HUMID"            data-get="battery" data-get-on="ok" data-icon="fa-bolt" title="W_HUMID"          class="readonly"></div>
        </div>
    </li>
</ul>    </div>
</body>
</html>

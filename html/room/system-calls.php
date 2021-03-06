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
    
    <li data-row="1" data-col="2" data-sizex="6" data-sizey="4">
        <header>ANRUFE</header>
        <table class="calls">
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B0"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D0" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C0"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E0"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A0"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B1"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D1" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C1"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E1"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A1"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>

            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B2"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D2" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C2"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E2"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A2"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B3"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D3" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C3"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E3"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A3"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B4"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D4" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C4"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E4"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A4"></div></td>
            </tr>
        </table>
    </li>
</ul>    </div>
</body>
</html>

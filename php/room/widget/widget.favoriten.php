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

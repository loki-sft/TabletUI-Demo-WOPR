<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="3">
    	<header>KLIMA</header>
    	<? include("widget/widget.buero-heizung.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="4">
        <iframe src="/plots/?p=P_BUERO&amp;nonav&amp;dark&amp;nolegend" width='680' height='545' scrolling='no' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="4" data-col="7" data-sizex="1" data-sizey="1">
    	<header>WEITER</header>
    	<? include("widget/widget.buero-more.php") ?>
    </li>
</ul>
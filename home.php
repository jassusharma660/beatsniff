<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require './config/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - Feel The Music</title>
        
        <link href="<?php echo $css;?>index.css" rel="stylesheet" type="text/css">
            
        <link rel="icon" type="image/ico" href="<?php echo $favicon;?>home.ico"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="background">
            <?php
                $img = array("adele","alessia","bruno","igyaan","jassu","john","randl","silento","sorry","sqcl","swastik","taylor","vinta","zyan",
                "adele","alessia","bruno","igyaan","jassu","john","randl","silento","sorry","sqcl","swastik","taylor","vinta","zyan",
                "adele","alessia","bruno","igyaan","jassu","john","randl","silento","sorry","sqcl","swastik","taylor","vinta","zyan");
                for($i=0;$i<30;$i++){
            ?>
            <div id="pic">
                <img src="<?php echo $medium_profile_pics.$img[$i];?>200x200.jpg"/>
            </div>
            <?php }?>
        </div>
        <div id="background1"></div>
        <div id="logo"> 
            <img src="<?php echo $logos;?>beatsniff-white.svg" alt="beatsniff"/>
        </div>
        <div id="moto">
            <span style="font-style: italic;">"feel the music"</span>

            <form action="<?php echo $mb;?>bin/register.php" method="get">
                <input value="beatsniff_home" name="rd" hidden/>
                <button class="button">JOIN THE COMMUNITY</button>
            </form>
            <form action="<?php echo $mb;?>bin/login.php" method="get">
                <input value="beatsniff_home" name="rd" hidden/>
                <button class="button">LOGIN</button>
            </form>
        </div>
        <div id="footer">
            <img src="<?php echo $logos;?>mb.svg" alt="beatsniff"/>
        </div>
        <div id="year"><?php echo date('Y');?></div>
    </body>
</html>
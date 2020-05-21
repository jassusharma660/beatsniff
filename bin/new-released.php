<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
    $this_page = 'new-released-songs';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php $release="Newly Released"; echo $release;?></title>
        <script src="<?php echo $script;?>jquery-2.2.3.min.js"></script>
        <script src="<?php echo $script;?>site-helper.js"></script>
        <script src="<?php echo $script;?>jquery.slimscroll.min.js"></script>
        <script src="<?php echo $script;?>jquery.unveil.js"></script>
        
        <link href="<?php echo $css;?>style.css" rel="stylesheet" type="text/css">
            
        <link rel="icon" type="image/ico" href="<?php echo $favicon;?>home.ico"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <div id="theme-bg"></div>
        <div id="theme-bg-tint"></div>
        
        
        <div id="header">
            <?php include $includes.'header.php';?>
        </div>
        
        <div id="sidepanel">
           <?php include $includes.'sidepanel.php';?>
        </div>
        
        <div id="content">
            <!---------------New-Released-songs---------------------------->
            <div id="post-trending" style="width:75%;">
                
                <div class="top-liked-post-title">
                    <span class="title-text">NEW RELEASED
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
               
                
                    <div class="new-released-post-elements">
                        <div class="post-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>zyan200x200.jpg" id='image'/>
                        </div>
                        <div class="post-caption">
                            <div class="post-caption-title">
                                MIND OF MINE
                            </div>
                            <div class="post-caption-artist">
                                Song By <span style="color:#ff2b54;font-weight:bold;">ZYAN MALIK</span>
                            </div>
                            <div class="post-caption-lyrics">
                                Lyrics By <span style="color:#ff2b54;font-weight:bold;">ZYAN MALIK</span>
                            </div>
                            <div class="post-caption-album">
                                ALBUM - <span style="color:#ff2b54;font-weight:bold;">MIND OF MINE</span>
                            </div>
                            <div class="post-caption-year">
                                YEAR - <span style="color:#ff2b54;font-weight:bold;">2016</span>
                            </div>
                            <div class="post-caption-lyricstext">
                                LYRICS <br/>
                                <span style="color:#ff2b54;font-weight:bold;">
                                    Come on boy<br/>
                                    We'll go slow in high tempo<br/>
                                    Light and dark<br/>
                                    Hold me high and mellow...
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="new-released-post-elements">
                        <div class="post-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>vinta200x200.jpg" id='image'/>
                        </div>
                        <div class="post-caption">
                            <div class="post-caption-title">
                                ITNA NA KARO HUME PYAR
                            </div>
                            <div class="post-caption-artist">
                                Song By <span style="color:#ff2b54;font-weight:bold;">RONIT VINTA</span>
                            </div>
                            <div class="post-caption-lyrics">
                                Lyrics By <span style="color:#ff2b54;font-weight:bold;">RONIT VINTA</span>
                            </div>
                            <div class="post-caption-album">
                                ALBUM - <span style="color:#ff2b54;font-weight:bold;">//RONIT01</span>
                            </div>
                            <div class="post-caption-year">
                                YEAR - <span style="color:#ff2b54;font-weight:bold;">2015</span>
                            </div>
                            <div class="post-caption-lyricstext">
                                LYRICS <br/>
                                <span style="color:#ff2b54;font-weight:bold;">
                                    Khvabo me se he<br/>
                                    Tum meri khahi<br/>
                                    Main khahi b he kuch na tere bina<br/>
                                    Kehte raho tumhe chahta hun...
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="new-released-post-elements">
                        <div class="post-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>swastik200x200.jpg" id='image'/>
                        </div>
                        <div class="post-caption">
                            <div class="post-caption-title">
                                AAOGE TUM KABHI
                            </div>
                            <div class="post-caption-artist">
                                Song By <span style="color:#ff2b54;font-weight:bold;">SWASTIK - THE BAND</span>
                            </div>
                            <div class="post-caption-lyrics">
                                Lyrics By <span style="color:#ff2b54;font-weight:bold;">DEEPAK</span>
                            </div>
                            <div class="post-caption-album">
                                ALBUM - <span style="color:#ff2b54;font-weight:bold;">//SWASTIK12</span>
                            </div>
                            <div class="post-caption-year">
                                YEAR - <span style="color:#ff2b54;font-weight:bold;">2015</span>
                            </div>
                            <div class="post-caption-lyricstext">
                                LYRICS <br/>
                                <span style="color:#ff2b54;font-weight:bold;">
                                    Kehta raha wo<br/>
                                    Jane de mujko<br/>
                                    Besabri hai<br/>
                                    Teri kami hai...
                                </span>
                            </div>
                        </div>
                    </div>
               
            </div>
           
            <!---------------trending-channels------------------------>
           
            <div id="post-trending-right" style="width:15%;">
                 <div class="top-liked-post-title">
                    <span class="title-text">CHANNELS
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
                 
                <div class="top-artist-post-elements">
                    
                    <div class="chnl_subs">100 K<br/><span style="font-size:10px;">SUBS</span></div>
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>randl200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            RETT AND LINK
                        </div>
                        <div class="artist-caption-year">
                            /rett_and_link
                        </div>
                    </div>
                </div>
                 
                <div class="top-artist-post-elements">
                    
                    <div class="chnl_subs">1 M<br/><span style="font-size:10px;">SUBS</span></div>
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>sqcl200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            SQUARE CIECLES
                        </div>
                        <div class="artist-caption-year">
                            /squarcircles
                        </div>
                    </div>
                </div>
                
                <div class="top-artist-post-elements">
                    
                    <div class="chnl_subs">54 K<br/><span style="font-size:10px;">SUBS</span></div>
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>igyaan200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            IGYAAN
                        </div>
                        <div class="artist-caption-year">
                            /igyaan
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <?php include $includes."footer.php";?>
        
        <div id="setting-popup" user-id="<?php echo 'xyz123';?>" page-id="subs">
            <div class="data" data-link="<?php echo $includes.'setting-popup.php';?>">
            <img src="<?php echo $icons;?>loading-black.gif" class="loading"/><br/>
            </div>
        </div>
        
    </body>
</html>
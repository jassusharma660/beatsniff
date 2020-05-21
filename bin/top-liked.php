<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
    $this_page = 'top-liked-songs';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php $liked="Top Liked"; echo $liked;?></title>
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
            <!---------------trending-songs---------------------------->
            <div id="post-trending">
                
                <div class="top-liked-post-title">
                    <span class="title-text">TOP LIKED
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
                
               
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>zyan200x200.jpg" id='image'/>  
                        </div>
                        
                        <div class="post-content-caption">
                            <div>MIND OF MINE</div>
                            <div style="font-size:11px;">//ZYAN01</div>    
                            <div style="font-size:11px;">2016</div>    
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>vinta200x200.jpg" id='image'/>  
                        </div>
                        
                        <div class="post-content-caption">
                            <div>ITNA NA KARO HUME PYAR</div>
                            <div style="font-size:11px;">//RONITA05</div>  
                            <div style="font-size:11px;">2015</div>    
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>alessia200x200.jpg" id='image'/>  
                        </div>
                        
                        <div class="post-content-caption">
                            <div>WILD THINGS</div>
                            <div style="font-size:11px;">//ALESSIA05</div>
                            <div style="font-size:11px;">2015</div>    
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>SORRY200x200.jpg" id='image'/>  
                        </div>
                        
                        <div class="post-content-caption">
                            <div>SORRY</div>
                            <div style="font-size:11px;">//JUSTIN014</div>  
                            <div style="font-size:11px;">2014</div>    
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>swastik200x200.jpg" id='image'/>
                        </div>
                        
                        <div class="post-content-caption">
                            <div>AAOGE TUM KABHI</div>
                            <div style="font-size:11px;">//SAWSTIK09</div>  
                            <div style="font-size:11px;">2014</div>    
                        </div>
                    </div>
                
            </div>
           
            <!---------------trending-channels------------------------>
           
            <div id="post-trending-right">
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
        
        <div id="setting-popup" user-id="<?php echo 'xyz123';?>" page-id="subs">
            <div class="data" data-link="<?php echo $includes.'setting-popup.php';?>">
            <img src="<?php echo $icons;?>loading-black.gif" class="loading"/><br/>
            </div>
        </div>
        
        <?php include $includes."footer.php";?>
        
    </body>
</html>
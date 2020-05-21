<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
    $this_page = 'popular-artists';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php $artist="Search Artists"; echo $artist;?></title>
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
            <!---------------top-liked-songs---------------------------->
            <div id="post-trending">
                
                <div class="top-liked-post-title">
                    <span class="title-text">TOP LIKED ARTISTS
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
                
                
                <div class="top-artist-post-elements">
                 
                    <div class="artist-likes">10 K</div>
                    <div class="artist-love">
                        <span style="">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike1" onclick="artistlike(1)"/>
                        </span>
                        <span style="">
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike1" onclick="artistdislike(1)"/>
                        </span>
                    </div>
                        
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>vinta200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            RONIT VINTA
                        </div>
                        <div class="artist-caption-year">
                            Born in 1996
                        </div>
                        <div class="artist-caption-year">
                            //RONIT
                        </div>
                    </div>
                </div>
                
                <div class="top-artist-post-elements">
                    
                    <div class="artist-likes">100 M</div>
                    <div class="artist-love">
                        <span style="">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike2" onclick="artistlike(2)"/>
                        </span>
                        <span style="">
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike2" onclick="artistdislike(2)"/>
                        </span>
                    </div>
                        
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>alessia200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            ALESSIA CARA
                        </div>
                        <div class="artist-caption-year">
                            Born in 1986
                        </div>
                        <div class="artist-caption-year">
                            //ALESSIA
                        </div>
                    </div>
                </div>
                
                <div class="top-artist-post-elements">
                    
                    <div class="artist-likes">90 M</div>
                    <div class="artist-love">
                        <span style="">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike3" onclick="artistlike(3)"/>
                        </span>
                        <span style="">
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike3" onclick="artistdislike(3)"/>
                        </span>
                    </div>
                        
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>taylor200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            TAYLOR SWIFT
                        </div>
                        <div class="artist-caption-year">
                            Born in 1985
                        </div>
                        <div class="artist-caption-year">
                            //TAYLOR
                        </div>
                    </div>
                </div>
                
                <div class="top-artist-post-elements">
                    
                    <div class="artist-likes">100 k</div>
                    <div class="artist-love">
                        <span style="">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike4" onclick="artistlike(4)"/>
                        </span>
                        <span style="">
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike4" onclick="artistdislike(4)"/>
                        </span>
                    </div>
                        
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>silento200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            SILENTO
                        </div>
                        <div class="artist-caption-year">
                            Born in 1991
                        </div>
                        <div class="artist-caption-year">
                            //SILENTO
                        </div>
                    </div>
                </div>
                
                <div class="top-artist-post-elements">
                    
                    <div class="artist-likes">1 M</div>
                    <div class="artist-love">
                        <span style="">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike5" onclick="artistlike(5)"/>
                        </span>
                        <span style="">
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike5" onclick="artistdislike(5)"/>
                        </span>
                    </div>
                        
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>john200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            JOHN LEGEND
                        </div>
                        <div class="artist-caption-year">
                            Born in 1985
                        </div>
                        <div class="artist-caption-year">
                            //JOHN
                        </div>
                    </div>
                </div>
                
                <div class="top-artist-post-elements">
                    
                    <div class="artist-likes">100 K</div>
                    <div class="artist-love">
                        <span style="">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike6" onclick="artistlike(6)"/>
                        </span>
                        <span style="">
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike6" onclick="artistdislike(6)"/>
                        </span>
                    </div>
                        
                    <div class="artist-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>bruno200x200.jpg" id='image'/>
                    </div>
                    <div class="artist-captions">
                        <div class="artist-caption-name">
                            BRUNO MARS
                        </div>
                        <div class="artist-caption-year">
                            Born in 1988
                        </div>
                        <div class="artist-caption-year">
                            //BRUNO
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!---------------artists-songs---------------------------->
            <div id="post-trending">
                
                <div class="top-liked-post-title">
                    <span class="title-text">TOP LIKED ARTISTS
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
                
                <div class="artist-by-name"> 
                    <?php for($i=0;$i<10;$i++){?>
                    <span class="alphabets">
                        <?php echo $i;?>
                    </span>
                    <?php }?>
                    <?php for($i='A',$j=1;$j<=26;$i++,$j++){?>
                    <span class="alphabets">
                        <?php echo $i;?>
                    </span>
                    <?php }?>
                </div>
                
                <div class="top-liked-post-title">
                    <span class="title-text">A
                        <span class="title-text-next">ARTIST</span>
                    </span>
                </div>
                
                <div class="artist-list-post">
                   
                    <div class="artist-list-dp">
                        
                        <div class="artist-likes">100 M</div>
                        
                        <div class="artist-love">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike11" onclick="artistlike(11)"/>
                            
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike11" onclick="artistdislike(11)"/>
                        </div>
                        
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>alessia200x200.jpg" id='image'/>
                        
                    </div>
                    <div class="artist-list-bottom">
                        ALESSIA CARA
                        <div style="font-weight:bold;">//ALESSIA</div>
                    </div>
                    
                </div>
                
                <div class="artist-list-post">
                   
                    <div class="artist-list-dp">
                        
                        <div class="artist-likes">100 M</div>
                        
                        <div class="artist-love">
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike12" onclick="artistlike(12)"/>
                            
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike12" onclick="artistdislike(12)"/>
                        </div>
                        
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>adele200x200.jpg" id='image'/>
                        
                    </div>
                    <div class="artist-list-bottom">
                        ADELE
                        <div style="font-weight:bold;">//ADELE</div>
                    </div>
                    
                </div>
                
                <div class="artist-by-name">
                    <?php for($i=0;$i<10;$i++){?>
                    <span class="alphabets">
                        <?php echo $i;?>
                    </span>
                    <?php }?>
                    <?php for($i='A',$j=1;$j<=26;$i++,$j++){?>
                    <span class="alphabets">
                        <?php echo $i;?>
                    </span>
                    <?php }?>
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
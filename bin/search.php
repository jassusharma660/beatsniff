<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php $search=isset($_GET['q'])?$_GET['q']:"Search"; echo $search;?></title>
        <script src="<?php echo $script;?>jquery-2.2.3.min.js"></script>
        <script src="<?php echo $script;?>site-helper.js"></script> 
        <script src="<?php echo $script;?>jquery.unveil.js"></script>
        <script src="<?php echo $script;?>jquery.slimscroll.min.js"></script>
            
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
            
            <!---------------songs-result-Post--------------------->
            <div id="song-result-post">    
                <div class="top-liked-post-title">
                    <span class="title-text">SEARCH RESULTS
                        <span class="title-text-next">SONGS</span>
                    </span>
                </div>
                
                <div class="post-content">
                    <div class="post-content-pic">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics;?>alessia50x50.jpg" id='image'/>
                    </div>
                    
                    <div class="song-love">
                        <span>
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="songunlike1" onclick="songlike(1)"/>
                        </span>
                        <span>
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="songlike1" onclick="songdislike(1)"/>
                        </span>
                    </div>
                    
                    <div class="post-content-title">
                        <div class="post-content-name">
                            WILD THINGS
                        </div>
                        <div class="post-content-artist">
                            ALESSIA CARA
                        </div>
                    </div>
                    <div class="post-content-time">
                        3:56
                    </div>
                    <div class="post-content-views">
                        10M
                    </div>
                </div>
                
                <div class="post-content">
                    <div class="post-content-pic">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics;?>john50x50.jpg" id='image'/>
                    </div>
                    
                    <div class="song-love">
                        <span>
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="songunlike2" onclick="songlike(2)"/>
                        </span>
                        <span>
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="songlike2" onclick="songdislike(2)"/>
                        </span>
                    </div>
                    
                    <div class="post-content-title">
                        <div class="post-content-name">
                            ALL OF ME
                        </div>
                        <div class="post-content-artist">
                            JOHN LEGEND
                        </div>
                    </div>
                    <div class="post-content-time">
                        5:21
                    </div>
                    <div class="post-content-views">
                        100 K
                    </div>
                </div>
                
                <div class="post-content">
                    <div class="post-content-pic">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics;?>bruno50x50.jpg" id='image'/>
                    </div>
                    
                    <div class="song-love">
                        <span>
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="songunlike3" onclick="songlike(3)"/>
                        </span>
                        <span>
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="songlike3" onclick="songdislike(3)"/>
                        </span>
                    </div>
                    
                    <div class="post-content-title">
                        <div class="post-content-name">
                            JUST THE WAY YOU ARE
                        </div>
                        <div class="post-content-artist">
                            BRUNO MARS
                        </div>
                    </div>
                    <div class="post-content-time">
                        4:00
                    </div>
                    <div class="post-content-views">
                        10 K
                    </div>
                </div>
                
                <div class="post-content">
                    <div class="post-content-pic">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics;?>silento50x50.jpg" id='image'/>
                    </div>
                    
                    <div class="song-love">
                        <span>
                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="songunlike4" onclick="songlike(4)"/>
                        </span>
                        <span>
                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="songlike4" onclick="songdislike(4)"/>
                        </span>
                    </div>
                    
                    <div class="post-content-title">
                        <div class="post-content-name">
                            WATCH ME WHIP NAE NAE 
                        </div>
                        <div class="post-content-artist">
                            SILENTO
                        </div>
                    </div>
                    <div class="post-content-time">
                        5:09
                    </div>
                    <div class="post-content-views">
                        67 K
                    </div>
                </div>
                
            </div>
                
            <!--------------SEARCH-ARTIST-RESULT------------------>
            <div id="search-artist-post">
            
                <div class="top-liked-post-title">
                    <span class="title-text">SEARCH RESULT
                        <span class="title-text-next">ARTISTS</span>
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
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike2" onclick="artistlike(2)"/>
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
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike4" onclick="artistlike(4)"/>
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
                        <img src="<?php echo $medium_profile_pics;?>bruno200x200.jpg" id='image'/>
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
            
            <!---------------SEARCH-ALBUM-Post--------------------->
            <div id="search-album-post">    
                <div class="top-liked-post-title">
                    <span class="title-text">SEARCH RESULT
                        <span class="title-text-next">ALBUMS</span>
                    </span>
                </div>
                
                <div class="top-liked-post-content">
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $medium_profile_pics;?>zyan200x200.jpg" id='image'/>  
                        </div>
                        
                        <div class="post-content-caption">
                            <div>MIND OF MINE</div>
                            <div style="font-size:11px;">//ZYAN01</div>    
                            <div style="font-size:11px;">2016</div>    
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $medium_profile_pics;?>alessia200x200.jpg" id='image'/>  
                        </div>
                        
                        <div class="post-content-caption">
                            <div>WILD THINGS</div>
                            <div style="font-size:11px;">//ALESSIA05</div>
                            <div style="font-size:11px;">2015</div>    
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $medium_profile_pics;?>SORRY200x200.jpg" id='image'/>  
                        </div>
                        
                        <div class="post-content-caption">
                            <div>SORRY</div>
                            <div style="font-size:11px;">//JUSTIN014</div>  
                            <div style="font-size:11px;">2014</div>    
                        </div>
                    </div>
                    
                    <div class="post-content">
                        <div class="post-content-dp">
                            <img src="<?php echo $medium_profile_pics;?>swastik200x200.jpg" id='image'/>
                        </div>
                        
                        <div class="post-content-caption">
                            <div>AAOGE TUM KABHI</div>
                            <div style="font-size:11px;">//SAWSTIK09</div>  
                            <div style="font-size:11px;">2014</div>    
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <!---------------trending-channels------------------------>
           
            <div id="post-trending-right" style="width:100%;">
                 <div class="top-liked-post-title">
                    <span class="title-text">CHANNELS
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
                
                <a href="<?php echo $bin."channel.php";?>">
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
                </a>
                
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
             <!---------------RESULT-BY-YEAR----------------->
            <div id="search-year-post">    
                <div class="top-liked-post-title">
                    <span class="title-text">SEARCH BY
                        <span class="title-text-next">LAST FIVE YEARS</span>
                    </span>
                    <span class="more"><a href="<?php echo $bin."song-by-year.php";?>" target="_blank">
                        <img src="<?php echo $icons;?>open.svg"/></a>
                        <span class="pop_more">
                            VIEW ALL
                        </span>
                    </span>
                </div>
                <div style="border-top: 3px solid #ff2b54;">
                    <?php for($i=date('Y');$i>(date('Y')-5);$i--){?>
                    <a href="<?php echo $bin."song-by-year.php";?>">
                        <div style="cursor:pointer;width:20%;height:100px;display:inline:block;float:left;">
                            <div style="height:20px;width:20px;background:#ffaba4;border-radius:50%;position:relative;left:-11px;top:-10px;">
                                <div style="height:10px;width:10px;background:#ff2b54;margin:0 auto;position:relative;top:50%;transform:translateY(-50%);border-radius:50%;">
                                    <span style="position:relative;left:-15px;top:20px;color:#fff;font-weight:bold;display:block;text-align:center;background:#ff2b54;width:50px;">
                                    <?php echo $i;?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php }?>
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
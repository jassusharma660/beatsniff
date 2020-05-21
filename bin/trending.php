<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php $trend="Trending"; echo $trend;?></title>
        <script src="<?php echo $script;?>jquery-2.2.3.min.js"></script>
        <script src="<?php echo $script;?>site-helper.js"></script>
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
            
            <!---------------trending-songs---------------------------->
            <div id="post-trending">
                
                <div class="top-liked-post-title">
                    <span class="title-text">TRENDING SONGS
                        <span class="title-text-next">WORLD WIDE</span>
                    </span>
                </div>
                
                <div class="post-trending-inner">
                    <div class="post-trending-inner-count">#1</div>
                    
                        <div class="song-fav">
                            <span class="pop_fav">
                            ADD TO FAVORITES
                            </span>
                            <img src="<?php echo $icons;?>star-black.svg" style="width: 20px;" id="rmfav1" onclick="addToFav(1)"/>

                            <img src="<?php echo $icons;?>star.svg" style="width:20px;display:none;" id="fav1" onclick="removeFromFav(1)"/>
                        </div>
                    
                    <div class="post-trending-dp">
                        <img src="<?php echo $full_profile_pics;?>zyan1.jpg" id='image'/>
                    </div>
                    <div class="post-trending-inner-over">
                        <div style="font-size:15px;font-weight:bold;">LIKE I WOULD</div>
                        <div style="font-size:12px;">//ZYAN02</div>    
                        <div style="font-size:12px;">2016</div>
                    </div>
                    <div class="post-trending-content">
                        <div class="post-trending-content-up">
                            Released in <span><?php $year =2016;echo $year;?></span>, the song - "<span><?php $song_name ="LIKE I WOULD";echo $song_name;?></span>" by <span><?php $artist_name ="ZYAN MALIK";echo $artist_name;?></span> is ranked #<?php $rank="1";echo $rank;?> on beatsniff with a views count of about <span><?php $views="100K";echo $views;?></span> .<br/>
                            Search it with song tag <span><?php $tag="//ZYAN02";echo $tag;?></span> on beatsniff. Do remember to give it your heart if you loved it.
                        </div>
                        <div class="post-trending-content-down">
                            <span>
                                <img src="<?php echo $icons;?>views.svg" alt="love"/>
                                <br/>
                                100K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>share.svg" alt="love"/>
                                <br/>
                                10K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>heart-white.svg" alt="love"/>
                                <br/>10K
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="post-trending-inner">
                    <div class="post-trending-inner-count">#2</div>
                    
                        <div class="song-fav">
                            <span class="pop_fav">
                            ADD TO FAVORITES
                            </span>
                            <img src="<?php echo $icons;?>star-black.svg" style="width: 20px;" id="rmfav2" onclick="addToFav(2)"/>

                            <img src="<?php echo $icons;?>star.svg" style="width:20px;display:none;" id="fav2" onclick="removeFromFav(2)"/>
                        </div>
                    
                    <div class="post-trending-dp">
                        <img src="<?php echo $full_profile_pics;?>alessia1.jpg" id='image'/>
                    </div>
                    <div class="post-trending-inner-over">
                        <div style="font-size:15px;font-weight:bold;">HERE</div>
                        <div style="font-size:12px;">//ALESSIA069</div>    
                        <div style="font-size:12px;">2015</div>
                    </div>
                    <div class="post-trending-content">
                        <div class="post-trending-content-up">
                            Released in <span><?php $year =2015;echo $year;?></span>, the song - "<span><?php $song_name ="HERE";echo $song_name;?></span>" by <span><?php $artist_name ="ALESSIA CARA";echo $artist_name;?></span> is ranked #<?php $rank="2";echo $rank;?> on beatsniff with a views count of about <span><?php $views="89K";echo $views;?></span> .<br/>
                            Search it with song tag <span><?php $tag="//ALESSIA069";echo $tag;?></span> on beatsniff. Do remember to give it your heart if you loved it.
                        </div>
                        <div class="post-trending-content-down">
                            <span>
                                <img src="<?php echo $icons;?>views.svg" alt="love"/>
                                <br/>
                                98K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>share.svg" alt="love"/>
                                <br/>
                                42K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>heart-white.svg" alt="love"/>
                                <br/>1M
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="post-trending-inner">
                    <div class="post-trending-inner-count">#3</div>
                        <div class="song-fav">
                            <span class="pop_fav">
                            ADD TO FAVORITES
                            </span>
                            <img src="<?php echo $icons;?>star-black.svg" style="width: 20px;" id="rmfav3" onclick="addToFav(3)"/>

                            <img src="<?php echo $icons;?>star.svg" style="width:20px;display:none;" id="fav3" onclick="removeFromFav(3)"/>
                        </div>
                    <div class="post-trending-dp">
                        <img src="<?php echo $full_profile_pics;?>zara.jpg" id='image'/>
                    </div>
                    <div class="post-trending-inner-over">
                        <div style="font-size:15px;font-weight:bold;">NEVER FORGET YOU</div>
                        <div style="font-size:12px;">//ZARA98</div>    
                        <div style="font-size:12px;">2014</div>
                    </div>
                    <div class="post-trending-content">
                        <div class="post-trending-content-up">
                            Released in <span><?php $year =2014;echo $year;?></span>, the song - "<span><?php $song_name ="NEVER FORGET YOU";echo $song_name;?></span>" by <span><?php $artist_name ="ZARA LARSSON";echo $artist_name;?></span> is ranked #<?php $rank="3";echo $rank;?> on beatsniff with a views count of about <span><?php $views="76K";echo $views;?></span> .<br/>
                            Search it with song tag <span><?php $tag="//ZARA98";echo $tag;?></span> on beatsniff. Do remember to give it your heart if you loved it.
                        </div>
                        <div class="post-trending-content-down">
                            <span>
                                <img src="<?php echo $icons;?>views.svg" alt="love"/>
                                <br/>
                                76K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>share.svg" alt="love"/>
                                <br/>
                                5K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>heart-white.svg" alt="love"/>
                                <br/>98K
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="post-trending-inner">
                    <div class="post-trending-inner-count">#4</div>
                        <div class="song-fav">
                            <span class="pop_fav">
                            ADD TO FAVORITES
                            </span>
                            <img src="<?php echo $icons;?>star-black.svg" style="width: 20px;" id="rmfav4" onclick="addToFav(4)"/>

                            <img src="<?php echo $icons;?>star.svg" style="width:20px;display:none;" id="fav4" onclick="removeFromFav(4)"/>
                        </div>
                    <div class="post-trending-dp">
                        <img src="<?php echo $full_profile_pics;?>chainsmoker.jpg" id='image'/>
                    </div>
                    <div class="post-trending-inner-over">
                        <div style="font-size:15px;font-weight:bold;">DON'T LET ME DOWN</div>
                        <div style="font-size:12px;">//CHAINSMOKER</div>    
                        <div style="font-size:12px;">2015</div>
                    </div>
                    <div class="post-trending-content">
                        <div class="post-trending-content-up">
                            Released in <span><?php $year =2015;echo $year;?></span>, the song - "<span><?php $song_name ="DON'T LET ME DOWN ft. Daya";echo $song_name;?></span>" by <span><?php $artist_name ="The Chainsmoker";echo $artist_name;?></span> is ranked #<?php $rank="4";echo $rank;?> on beatsniff with a views count of about <span><?php $views="39K";echo $views;?></span> .<br/>
                            Search it with song tag <span><?php $tag="//ZARA98";echo $tag;?></span> on beatsniff. Do remember to give it your heart if you loved it.
                        </div>
                        <div class="post-trending-content-down">
                            <span>
                                <img src="<?php echo $icons;?>views.svg" alt="love"/>
                                <br/>
                                39K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>share.svg" alt="love"/>
                                <br/>
                                3K
                            </span>
                            <span>
                                <img src="<?php echo $icons;?>heart-white.svg" alt="love"/>
                                <br/>37K
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
           
            <!---------------trending-channels------------------------>
           
            <div id="post-trending-right">
                 <div class="top-liked-post-title">
                    <span class="title-text">CHANNELS
                        <span class="title-text-next">TOP 10</span>
                    </span>
                </div>
                 
                <div class="top-artist-post-elements">
                    
                    <div class="chnl_subs">100 K<br/><span style="font-size:10px;">SUBS</span></div>
                    <div class="artist-dp">
                        <img src="<?php echo $medium_profile_pics;?>randl200x200.jpg" id='image'/>
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
                        <img src="<?php echo $medium_profile_pics;?>sqcl200x200.jpg" id='image'/>
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
                        <img src="<?php echo $medium_profile_pics;?>igyaan200x200.jpg" id='image'/>
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
<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require './config/config.php';
    $this_page = 'home';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - Feel The Music</title>
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
            
            <!---------------Pro--Post--------------------->
            
            <div class="pro-post">
                <div class="pro-post-ldiv">
                    <div class="pro-post-ldiv-up">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $full_profile_pics;?>chainsmoker.jpg" id='image'/>
                    </div>
                    <div class="pro-post-ldiv-down">
                        <div class="song-title">
                            New song from
                            <span class="song-title-artist">
                                ZARA LARASSON
                            </span>
                        </div>
                        <div class="song-title-buttons">
                            <button class="song-title-button">View All</button>
                            <button class="song-title-button">Album</button>
                            <button class="song-title-button">Follow</button>
                            <button class="song-title-button">//ZARA</button>
                        </div>
                        <div class="song-title-tags">
                            SONG TAG: 
                            <span style="color:#ff2b54;" id="song-tag">
                                //ZARA019
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="pro-post-rdiv">                    
                    <div class="pro-post-rdiv-count">1 TRACK</div>
                    <div class="pro-post-rdiv-header">
                        <span class="pro-post-rdiv-header-tracks">
                            TRACKS
                        </span>
                        <span class="more" style="margin-top:-3px;">
                            <a href="./bin/album-info.php" target="_blank">
                                <img src="<?php echo $icons;?>open.svg" style="height:15px"/>
                            </a>
                            <span class="pop_more">
                                VIEW ALL
                            </span>
                        </span>
                    </div>
                    
                    <div class="pro-post-rdiv-songs">
                        <div class="pro-post-rdiv-songs-count"><span>1</span></div>
                        <span class="pro-post-rdiv-songs-name">Don't let me down</span>
                        
                        <div class="pro-post-rdiv-songs-like">
                            <span style="position:relative;left:-18px;">
                                <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="unlike1" onclick="like(1)"/>
                            </span>
                            <span style="position:relative;left:-18px;">
                                <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="like1" onclick="dislike(1)"/>
                            </span>
                        </div>
                        <div class="pro-post-rdiv-songs-artist">Alessia Cara</div>
                    </div>
                      
                    <div class="pro-post-rdiv-songs">
                        <div class="pro-post-rdiv-songs-count"><span>2</span></div>
                        <span class="pro-post-rdiv-songs-name">Here</span>
                        
                        <div class="pro-post-rdiv-songs-like">
                            <span style="position:relative;left:-18px;">
                                <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="unlike2" onclick="like(2)"/>
                            </span>
                            <span style="position:relative;left:-18px;">
                                <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="like2" onclick="dislike(2)"/>
                            </span>
                        </div>
                        <div class="pro-post-rdiv-songs-artist">Alessia Cara</div>
                    </div>
                    
                    <div class="pro-post-rdiv-songs">
                        <div class="pro-post-rdiv-songs-count"><span>3</span></div>
                        <span class="pro-post-rdiv-songs-name">Rivers of tears</span>
                        
                        <div class="pro-post-rdiv-songs-like">
                            <span style="position:relative;left:-18px;">
                                <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="unlike3" onclick="like(3)"/>
                            </span>
                            <span style="position:relative;left:-18px;">
                                <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="like3" onclick="dislike(3)"/>
                            </span>
                        </div>
                        <div class="pro-post-rdiv-songs-artist">Alessia Cara</div>
                    </div>  
                </div>
            </div>
            
            <!---------------Trending--Post--------------------->
            <div id="trend-post">
                <div class="pro-post-rdiv-count">TOP 5</div>
                <div class="pro-post-rdiv-header" style="border-bottom:1px solid #eee;">
                    <span class="pro-post-rdiv-header-tracks" style="color:#999;">
                        TRENDING
                    </span>
                    <span class="more" style="margin-top:-3px;">
                        <a href="./bin/trending.php" target="_blank">
                            <img src="<?php echo $icons;?>open.svg" style="height:15px"/>
                            <span class="pop_more">
                                VIEW ALL
                            </span>
                        </a>
                    </span>
                </div>
                
                <div class="tred-post-elements">
                    <div class="tred-post-elements-count">1</div>
                    <div class="tred-post-elements-name">
                        Hello
                    </div>
                    <div class="tred-post-elements-view">
                        3M
                    </div>
                    <div class="pro-post-rdiv-songs-artist">Adele</div>
                </div>
                
                <div class="tred-post-elements">
                    <div class="tred-post-elements-count">2</div>
                    <div class="tred-post-elements-name">
                        It's You
                    </div>
                    <div class="tred-post-elements-view">
                        1M
                    </div>
                    <div class="pro-post-rdiv-songs-artist">Zyan Malik</div>
                </div>
                
                <div class="tred-post-elements">
                    <div class="tred-post-elements-count">3</div>
                    <div class="tred-post-elements-name">
                        Sorry
                    </div>
                    <div class="tred-post-elements-view">
                        99K
                    </div>
                    <div class="pro-post-rdiv-songs-artist">Justin Biber</div>
                </div>
                
                <div class="tred-post-elements">
                    <div class="tred-post-elements-count">4</div>
                    <div class="tred-post-elements-name">
                        Dessert
                    </div>
                    <div class="tred-post-elements-view">
                        89K
                    </div>
                    <div class="pro-post-rdiv-songs-artist">Dawin ft. Silento</div>
                </div>
                
                <div class="tred-post-elements">
                    <div class="tred-post-elements-count">5</div>
                    <div class="tred-post-elements-name">
                        Thousand Years
                    </div>
                    <div class="tred-post-elements-view">
                        70K
                    </div>
                    <div class="pro-post-rdiv-songs-artist">Christina Perri</div>
                </div>

            </div>
            
            <!---------------Top--Liked--Post--------------------->
            <div id="top-liked-post">    
                <div class="top-liked-post-title">
                    <span class="title-text">TOP LIKED
                        <span class="title-text-next">WORLD WIDE</span></span>
                    
                    <span class="more">
                        <a href="./bin/top-liked.php" target="_blank">
                            <img src="<?php echo $icons;?>open.svg"/>
                            <span class="pop_more">
                                VIEW ALL
                            </span>
                        </a>
                    </span>
                </div>
                
                <div class="top-liked-post-content">
                    
                    <a href="./bin/song-info.php">
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
                    </a>
                    
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
            </div>
            
            <!---------------NEW--RELEASED------------------->
            <div id="new-released-post">
                  <div class="top-liked-post-title">
                    <span class="title-text">NEW RELEASED
                        <span class="title-text-next">WORLD WIDE</span></span>
                    
                    <span class="more">
                        <a href="./bin/new-released.php" target="_blank">
                            <img src="<?php echo $icons;?>open.svg"/>
                            <span class="pop_more">
                                VIEW ALL
                            </span>
                        </a>
                    </span>
                </div>
                <div class="top-liked-post-content">
                    
                    <a href="./bin/song-info.php">
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
                    </a>
                    
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
                
            </div>
            
            <!---------------POPULAR--ARTIST------------------->
            <div id="top-artist-post">
            
                <div class="top-liked-post-title">
                    <span class="title-text">POPULAR ARTISTS
                        <span class="title-text-next">WORLD WIDE</span></span>
                    
                    <span class="more">
                        <a href="./bin/artists.php" target="_blank">
                            <img src="<?php echo $icons;?>open.svg"/>
                            <span class="pop_more">
                                VIEW ALL
                            </span>
                        </a>
                    </span>
                </div>
                
                <a href="./bin/artist-info.php">
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
                </a>
                
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
            
            <!---------------BROWSE-BY-genre----------------->
            <div id="genre-post">
            
                <div class="top-liked-post-title">
                    <span class="title-text">BROWSE BY
                        <span class="title-text-next">GENRE</span>
                    </span>
                    <span class="more" style="position:relative;top:-10px;">
                        <a href="./bin/song-by-year.php" target="_blank" style="color:#444;">
                            <span class="title-text">BROWSE BY
                                <span class="title-text-next">YEAR</span>
                            </span>
                        </a>
                    </span>
                </div>
                <form action="./bin/song-by-genre.php" method="get">
                
                <?php
                    $geners = array("OTHER","Alternative","Blues","Classical","Country","Dance","Easy Listening","Electronic","Europen","Hip Hop / Pop","Indie","Inspirational","Asian Pop","Jazz","Latin","New Age","Opera","Pop","R&B / Soul","Reggae","Rock","Singer / Songwriter  (Folk)","World Music");
                    foreach($geners as $g){
                ?>
                    <a href="./bin/song-by-genre.php?genre=<?php echo $g;?>">
                        <div class="genre-post-element">
                            <?php echo $g;?>
                        </div>
                    </a>
                    <?php }?>
                </form>
            </div>
        </div>
        
        <div id="setting-popup" user-id="<?php echo 'xyz123';?>" page-id="index">
            <div class="data" data-link="<?php echo $includes.'setting-popup.php';?>">
            <img src="<?php echo $icons;?>loading-black.gif" class="loading"/><br/>
            </div>
        </div>
        
        <?php include $includes."footer.php";?>
        
    </body>
</html>
<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    include_once('./includes/colors.inc.php');
    require '../config/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php $album_name="MIND OF MINE"; echo $album_name;?></title>
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
        
        <?php
            $img_src = $medium_profile_pics."zyan200x200.jpg";
            $ex=new GetMostCommonColors();
            $ex->image= $img_src;
            $colors=$ex->Get_Color();
            $how_many=12;
            $colors_key=array_keys($colors);
            $colors_key[0];
        ?>
        <div id="content">
            
            <div id="song-content-left">
                <div class="top-liked-post-title">
                    <span class="title-text">ALBUM
                        <span class="title-text-next">MIND OF MINE</span>
                    </span>
                </div>

                <div class="song-info-post-dp">
                    <div class="image">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $img_src;?>" id="image"/>
                    </div>
                    <div class="info" style="width:100%;float:left;">
                        <div class="share-love">
                            <div>
                                <img src="<?php echo $icons;?>black-heart.svg" style="height: 100%;" id="unlike2" onclick="like(2)"/>
                                <img src="<?php echo $icons;?>red-heart.svg" style="height:100%;display:none;" id="like2" onclick="dislike(2)"/>Like
                            </div>
                            
                            <div>
                                 <img src="<?php echo $icons;?>blue-share.svg"/>Share
                            </div>
                        </div>
                    </div>
                </div>

                
                <div id="song-info-post">

                    <div class="song-title">
                        MIND OF MINE
                        <div class="song-artist">
                            20 SONGS
                        </div>
                    </div> 
                    
                    <div class="social-options">
                        <div>
                            50
                            <span>Shares</span>
                        </div>
                        <div>
                            100K
                            <span>Likes</span>
                        </div>
                        <div>
                            10M<span>Views</span>
                        </div>
                    </div>
                    
                    <div class="song-info-list">
                        <div id="quotes">
                            <span>YEAR</span> 2015<br/>
                        </div>
                    </div>   
                    <div class="song-info-txt">
                        Getting divorced from One Direction was a good step for zyan. MIND OF MINE is his new and first album after this whole OD chaos. After a great success of PILLOW TALK and IT'S YOU, ZYAN MALIK released his whole album at once with a typo missformed title for each song.
                    </div>

                </div>

                <div id="get-song-element">
                    <div id="song-result-post" style="border:none;width:90%;">    
                        <div class="top-liked-post-title">
                            <span class="title-text">SONGS
                                <span class="title-text-next">10</span>
                            </span>
                        </div>
                        <?php
                                $i = 0;
                                $song_id = array("1","2","3","4","5","6","7");
                                $dp = array('zyan','zyan','zyan','zyan','zyan','zyan','zyan');
                                $name = array("IT'S YOU","PILLOW TALK","BeFoUr","BoRdEr","BRIGHT","dRuNk","INTERMISSION");
                                $artist = array("ZYAN MALIK","ZYAN MALIK","ZYAN MALIK","ZYAN MALIK","ZYAN MALIK","ZYAN MALIK","ZYAN MALIK");
                                $views = array("20 K","1K","20 K","1000K","199 K","1M","10K");
                                $download = array("zyan1","zyan2","zyan3","zyan4","zyan5","zyan6","zyan7");
                                $video = array("zyan1","zyan2","zyan3","zyan4","zyan5","zyan6","zyan7");
                        
                                foreach($song_id as $id){
                        ?>
                        <a href="./song-info.php?song_id=<?php echo $id;?>">
                            <div class="post-content-songs">
                                <div class="dp">
                                    <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics.$dp[$i];?>200x200.jpg"/>
                                </div>
                                <div class="title">
                                    <div class="name"><span><?php echo $name[$i];?></span></div>
                                    <div class="artist"><?php echo $artist[$i];?></div>
                                </div>
                                <div class="views">
                                    <div class="icon">
                                        <img src="<?php echo $icons;?>views_black.svg"/>
                                    </div>
                                    <div class="text"><?php echo $views[$i];?></div>
                                </div>
                                <div class="download">
                                    <a href="./download.php?=<?php echo $download[$i];?>">
                                        <img src="<?php echo $icons;?>download.svg"/>
                                    </a>
                                </div>
                                <div class="download">
                                    <a href="./download.php?=<?php echo $video[$i];?>">
                                        <img src="<?php echo $icons;?>video.svg"/>
                                    </a>
                                </div>
                                <div class="song-love download">
                                    <span>
                                        <img src="<?php echo $icons;?>heart.svg" style="width: 25px;" id="songunlike<?php echo $id;?>" onclick="songlike(<?php echo $id;?>)"/>
                                    </span>
                                    <span>
                                        <img src="<?php echo $icons;?>heart-white.svg" style="width:25px;display:none;" id="songlike<?php echo $id;?>" onclick="songdislike(<?php echo $id;?>)"/>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <?php $i++;}?>
                        
                    </div>
                </div>
                
                <div style="float:left;height:10px;width:90%;margin-bottom:20px;border-bottom:1px solid rgba(100,100,100,0.2);"></div>
                <div id="suggestion-on-song">
                    <div class="top-liked-post-title">
                        <span class="title-text">SUGGESTED
                            <span class="title-text-next">WORLD WIDE</span>
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
                            HERE
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
                            HELLO
                            <div style="font-weight:bold;">//ADELE</div>
                        </div>

                    </div>
                </div>
                
            </div>
        
            <div class="side-comments-post">
                <div id="comment-section">
                    
                    <div class="top-liked-post-title">
                        <span class="title-text">COMMENTS
                            <span class="title-text-next">WORLD WIDE</span>
                        </span>
                    </div>
                    
                    <div class="comment-section-div">
                        
                        <form method="post" action="" class="comment-box">
                            <textarea maxlength="255" placeholder="What do you think about this?"></textarea>
                            <button>POST</button>
                        </form>
                        
                        <div class="comment-section-title">
                            <div class="user-dp">
                                 <img src="<?php echo $mb_small_profile_pics;?>jassu50x50.jpg" alt="profile pic"/>
                            </div> 
                            <div class="user-title">
                                Jassu Sharma
                                <span style="font-size:11px;margin-left:5px;">
                                    4 stars
                                </span>
                            </div>
                        </div>
                        <div class="comment-section-txt">
                            You made my day! Super lyrics. 100 likes for the song.
                            I am a  big fan of you. Hope to hear your voice soon.
                            Bruno Mars keep doing your work, we are proud of you.
                        </div>
                        
                    </div>
                    
                    <div class="comment-section-div">

                        <div class="comment-section-title">
                            <div class="user-dp">
                                 <img src="<?php echo $mb_small_profile_pics;?>deepak50x50.jpg" alt="profile pic"/>
                            </div> 
                            <div class="user-title">
                                Deepak Sharma
                                <span style="font-size:11px;margin-left:5px;">
                                    5 stars
                                </span>
                            </div>
                        </div>
                        <div class="comment-section-txt">
                            Loved it soo much!
                        </div>
                        
                    </div>
                    
                    <div class="comment-section-div">

                        <div class="comment-section-title">
                            <div class="user-dp">
                                 <img src="<?php echo $mb_small_profile_pics;?>momdad50x50.jpg" alt="profile pic"/>
                            </div> 
                            <div class="user-title">
                                Prabha Sharma
                                <span style="font-size:11px;margin-left:5px;">
                                    1 stars
                                </span>
                            </div>
                        </div>
                        <div class="comment-section-txt">
                            Bakwas gana hai.
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
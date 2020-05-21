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
        <title>Beatsniff - <?php $song="Just The Way You Are"; echo $song;?></title>
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
            $img_src = $medium_profile_pics."bruno200x200.jpg";
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
                    <span class="title-text">SINGLE TRACK
                        <span class="title-text-next">JUST THE WAT YOU ARE</span>
                    </span>
                </div>

                <div class="song-info-post-dp">
                    <div class="image">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $img_src;?>" id="image"/>
                    </div>
                    <div class="info">
                        How was this song?
                        <div id="r1" class="rate_widget">
                                <div class="star_1 ratings_stars"></div>
                                <div class="star_2 ratings_stars"></div>
                                <div class="star_3 ratings_stars"></div>
                                <div class="star_4 ratings_stars"></div>
                                <div class="star_5 ratings_stars"></div>
                                <div class="total_votes"></div>
                        </div>
                        <div class="share-love">
                            <div>
                                <img src="<?php echo $icons;?>black-heart.svg" style="height: 100%;" id="unlike2" onclick="like(2)"/>
                                <img src="<?php echo $icons;?>red-heart.svg" style="height:100%;display:none;" id="like2" onclick="dislike(2)"/>
                            </div>
                            
                            <div>
                                 <img src="<?php echo $icons;?>blue-share.svg" class="share_button"/>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div id="song-info-post">

                    <div class="song-title">
                        JUST THE WAY YOU ARE
                        <div class="song-artist">
                            <a href="./artist-info.php">by BRUNO MARS</a>
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
                            <span>SINGER</span> Bruno Mars<br/>
                            <span>ABLUM</span> Unknown<br/>
                        </div>
                    </div>   
                    <div class="song-info-txt">
                        JUST THE WAY YOU ARE is a song by BRUNO MARS. After a long waiting Bruno, finally launched his new songs. It took him allmost 3 months to do recording and shooting. When we asked him about his song he said-
                        <div id="quotes">
                            <span style="color:#777;font-size:13px;">BRUNO MARS - </span>
                            It was a true success for completing this project. It was the miracle that happned and i weaved out the lyrics. This song is dedicated to the true love which is far away from that facial beauty.
                        </div>
                        He furthur went on by congratulating not only his team but his fans themselves who made him such an icon.
                    </div>

                </div>

                <div id="get-song-element">

                    <div class="get-song-data">
                        <div class="get-song-icon">
                            <img src="<?php echo $icons;?>disk.svg" alt="music"/>
                        </div>
                        <div class="get-song-name">
                            <span>JUST THE WAY YOU ARE</span>
                        </div>
                        <div class="get-song-time">
                            <span>3:69</span>
                        </div>
                        <div class="get-song-download" onclick="downloadMusic()">
                            <img src="<?php echo $icons;?>download.svg" alt="music"/>
                        </div>
                        <div class="get-song-type">
                            <span>Audio(mp3)</span>
                        </div>
                        <div class="get-song-size">
                            <span>9 MB</span>
                        </div>  
                    </div>
                    
                    <div class="get-song-data">
                        <div class="get-song-icon">
                            <img src="<?php echo $icons;?>video.svg" alt="music"/>
                        </div>
                        <div class="get-song-name">
                            <span>JUST THE WAY YOU ARE</span>
                        </div>
                        <div class="get-song-time">
                            <span>3:69</span>
                        </div>
                        <div class="get-song-download">
                            <img src="<?php echo $icons;?>download.svg" alt="music"/>
                        </div>
                        <div class="get-song-type">
                            <span>Video(mp4)</span>
                        </div>
                        <div class="get-song-size">
                            <span>19 MB</span>
                        </div>
                    </div>
                    <div class="get-song-data">
                        <div class="get-song-icon">
                            <img src="<?php echo $icons;?>text.svg" alt="music"/>
                        </div>
                        <div class="get-song-name">
                            <span>[LYRICS] JUST THE WAY YOU ARE</span>
                        </div>
                        <div class="get-song-time"> 
                        </div>
                        <div id="song-lyrics-button" class="get-song-download">
                            <img src="<?php echo $icons;?>popout.svg" alt="music"/>
                        </div>
                        <div class="get-song-type">
                            <span>Text</span>
                        </div>
                    </div>
                    <div class="tags">
                        <div class="top-liked-post-title">
                            <span class="title-text">TAGS
                                <span class="title-text-next">TREND THIS SONG USING</span>
                            </span>
                        </div>
                         <form action="./bin/song-by-genre.php" method="get">

                        <?php
                            $tags = array("//BRUNO","//JUST_THE_WAY","//BRUNO091","//BRUNO2016");
                            foreach($tags as $t){
                        ?>
                            <a href="./search.php?tag=<?php echo $t;?>">
                                <div class="genre-post-element">
                                    <?php echo $t;?>
                                </div>
                            </a>
                            <?php }?>
                        </form>
                    </div>
                    <div style="float:left;height:10px;width:95%;margin-bottom:20px;border-bottom:1px solid rgba(100,100,100,0.2);"></div>
                </div>
                
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
        
            <div id="suggest-artist-post">
                <div id="review-stat">
                    <div class="review-points">
                        <span class="review-points-rating">0</span>
                        <div class="review-points-count">0 people</div>
                    </div>
                    
                    <div class="review-stars-sml">
                        <?php
                            $star= "<img src='".$icons."small_star.svg' style='height:8px;'/>";
                        ?>
                            <?php for($i=5;$i>0;$i--){
                                        echo "<div>";
                                        for($j=0;$j<$i;$j++){
                                            echo $star;
                                        }
                                        echo "</div>";
                                    }
                            ?>
                    </div>
                    
                    <div class="review-graph">
                        <div class="progress-background">
                            <div class="progress-bar five"></div>
                        </div>
                        <div class="progress-background">
                            <div class="progress-bar four"></div>
                        </div>
                        <div class="progress-background">
                            <div class="progress-bar three"></div>
                        </div>
                        <div class="progress-background">
                            <div class="progress-bar two"></div>
                        </div>
                        <div class="progress-background">
                            <div class="progress-bar one"></div>
                        </div>
                    </div>
                    <div class="review-stars-sml-right">
                        <div class="five">0</div>
                        <div class="four">0</div>
                        <div class="three">0</div>
                        <div class="two">0</div>
                        <div class="one">0</div>
                    </div>
                </div>
                <div id="comment-section" class="side-comments-post">
                    
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
        
        <div id="song-lyrics">
            <div class="lyrics-text-popup"> 
                <div class="background">
                    <span>CLICK ANYWHERE TO CLOSE</span>
                </div>
                <div class="popup">
                    <div class="text">
                        <img src="<?php echo $icons;?>cross.svg" class="close_popup"/>
                    </div>
                    <div class="title">
                        <img src="<?php echo $icons;?>border-above.svg" style="width:100px;"/>
                        <div>JUST THE WAY YOU ARE</div>
                        <img src="<?php echo $icons;?>border.svg" style="width:100px;"/>
                    </div>
                    <?php include './includes/lyrics.txt';?>
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
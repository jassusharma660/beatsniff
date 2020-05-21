<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - <?php $artist="ZYAN MALIK"; echo $artist;?></title>
        <link rel="icon" type="image/ico" href="<?php echo $favicon;?>home.ico"/>

        <link href="<?php echo $css;?>style.css" rel="stylesheet" type="text/css">
        
        <script src="<?php echo $script;?>jquery-2.2.3.min.js"></script>
        <script src="<?php echo $script;?>site-helper.js"></script>
        <script src="<?php echo $script;?>jquery.slimscroll.min.js"></script>
        <script src="<?php echo $script;?>jquery.unveil.js"></script>
        
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
            <div id="profile-div-left">
                
                <div id="profile-wall">
                    
                    <div class="background"></div>
                    <div class="profile-artist-wallpic">
                        <img  src="<?php echo $icons;?>loading.gif" data-src="<?php echo $full_profile_pics;?>zyan.jpg"/>
                    </div>
                    <div class="artist-profile-credit">
                        <div class="artist-dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>zyan200x200.jpg"/>
                        </div>
                        <div class="artist-tag">
                            <span style="display:inline-block;">//ZYAN</span>
                            <?php 
                                $verified=true;
                                if($verified){
                            ?>
                            <div style="display:inline-block;">
                                <span style="width:20px;height:20px;background:none;display:inline-block;">
                                    <img src="<?php echo $icons;?>king.svg" height="20px" style="background:none;position:relative;top:50%;"/>
                                </span>
                                <span style="color:#fff;letter-spacing:4px;font-size:10px;display:inline-block;">OFFICIAL</span>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                
                <div class="profile-sections">
                    <div class="about" onclick="switchProfileTab('about',this);"><span>ABOUT</span></div>
                    <div class="timeline selected" onclick="switchProfileTab('timeline',this);"><span>TIMELINE</span></div>
                    <div class="songs" onclick="switchProfileTab('songs',this);"><span>SONGS</span></div>
                </div>
                <div class="about-profile-section profile-section-bottom">
                    
                    <div class="profile-bottom-design">
                        <div class="heading">TAG</div>
                        <a href="http://beatsniff.in/ZYAN">
                            <div class="content" style="font-weight:bold;color:#ef5350;">//ZYAN</div>
                        </a>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">NAME</div>
                        <div class="content">ZYAN MALIK</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">PROFILE</div>
                        <div class="content">beatsniff.in/ZYAN_MALIK</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">BIRTHDAY</div>
                        <div class="content">02 / 04 / 19997</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">GENDER</div>
                        <div class="content">MALE</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">CURRENT CITY</div>
                        <div class="content">LONDON, UK</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">HOMETOWN</div>
                        <div class="content">NY, USA</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">EMAIL</div>
                        <div class="content">zyanmalik@beatsniff.in</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">SKYPE</div>
                        <div class="content">MALIK_ZYAN</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">SNAPCHAT</div>
                        <div class="content">zyanmaik28</div>
                    </div>
                    <div class="profile-bottom-design">
                        <div class="heading">ABOUT</div>
                        <div class="content">
                        
                            PHP is an acronym for "PHP Hypertext Preprocessor"
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP costs nothing, it is free to download and usePHP is an acronym for "PHP Hypertext Preprocessor"
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP costs nothing, it is free to download and usePHP is an acronym for "PHP Hypertext Preprocessor"
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP costs nothing, it is free to download and usePHP is an acronym for "PHP Hypertext Preprocessor"
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP costs nothing, it is free to download and usePHP is an acronym for "PHP Hypertext Preprocessor"
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP costs nothing, it is free to download and usePHP is an acronym for "PHP Hypertext Preprocessor"
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP costs nothing, it is free to download and use
                        
                        </div>
                    </div>
                    
                </div>
                <div class="timeline-profile-section profile-section-bottom">
                    <?php
                        $i=0;
                        $post_id = array("1","2","3");
                        $dp = array("zyan50x50.jpg","alessia50x50.jpg","taylor50x50.jpg");
                        $name = array("ZYAN MALIK","ALESSIA CARA","TAYLOR SWIFT");
                        $time = array("10:00 AM","1:00PM","2:21 PM");
                        $date = array("15 AUG 2016","2 APR 2016","1 MAR 2016");
                        $no_comments = array("102 K","1 M","69 K");
                        $post = array("
                            <div id=\"share_music\">
                                <div class=\"dp\">
                                    <img src=\"".$icons."loading.gif\" data-src=\"".$medium_profile_pics."zyan200x200.jpg\" style=\"height:100%;\"/>
                                </div>
                                <div class=\"name\">
                                    <div class=\"title\">Just released song - \"BeFoUr\"</div>
                                    <div class=\"artist\">ZYAN MALIK</div>
                                    <a href=\"http://beatsniff.in/index.php?song=zyanBeFoUr\">
                                        <div style=\"color:#ff2b54;margin-top:10px;font-size:15px;font-weight:bold;\">
                                            //ZYANBeFoUr
                                        </div>
                                    </a>
                                </div>
                            </div>",
                                      "Awesome work Zyan!","
                            <div id=\"share_music\">
                                <div class=\"dp\">
                                    <div style=\"height:100px;width:100px;background:#ff2b54;color:#fff;text-align:center;\">
                                        <div style=\"width:100%;height:50%;font-size:35px;font-weight:bold;
                                        \">15</div>
                                        <div style=\"width:100%;height:30%;background:#777;font-size:20px;font-weight:bold;
                                        \">AUG</div>
                                        <div style=\"width:100%;height:20%;background:#777;font-size:15px;font-weight:bold;
                                        \">2016</div>
                                    </div>
                                </div>
                                <div class=\"name\">
                                    <div class=\"title\">REMINDER - BeFoUr</div>
                                    <div class=\"artist\">Upcoming song!</div>
                                    <div style=\"color:#ff2b54;margin-top:10px;font-size:15px;font-weight:bold;\">
                                            //ZYAN
                                    </div>  
                                </div>
                            </div>
                            <div style=\"margin:10px 5px;\">
                                What do you think about it?
                            </div>
                                      ");
                        foreach($post_id as $id){
                    ?>
                    <div class="post">
                        <div class="top-section">
                            <div class="dp">
                                <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics.$dp[$i];?>" style="height:100%;border-radius:50%;"/>
                            </div>
                            <div class="name">
                                <span id="center-text"><?php echo $name[$i];?></span>
                            </div>
                            <div class="time">
                                <span id="center-text"><?php echo $time[$i]."<br/>$date[$i]";?></span>
                            </div>
                        </div>
                        <div class="middle-section">
                            <div class="middle-section-top">
                                <?php echo $post[$i];?>
                            </div>
                            <div class="middle-section-bottom">
                                <div class="like">
                                    <img src="<?php echo $icons;?>black-heart.svg" style="height:70%;cursor:pointer;" id="unlike<?php echo $id;?>" onclick="like(<?php echo $id;?>)"/>
                                    <img src="<?php echo $icons;?>red-heart.svg" style="height:70%;display:none;cursor:pointer;" id="like<?php echo $id;?>" onclick="dislike(<?php echo $id;?>)"/>
                                    <span>Like</span>
                                </div>
                                <div class="comment">
                                    <img src="<?php echo $icons;?>comment.svg" class="comment_button" style="height:70%;cursor:pointer;"/>
                                    <span>Comment</span>
                                </div>
                                <div class="share">
                                    <img src="<?php echo $icons;?>blue-share.svg" class="share_button" style="height:70%;cursor:pointer;"/>
                                    <span>Share</span>
                                </div>
                                <div class="comment-count">
                                    <span><?php echo $no_comments[$i];?> Comments</span>
                                </div>
                            </div>
                        </div>
                        <div class="show-artist-profile-timeline show-artist-profile-timeline<?php echo $id?>" onclick="showMoreComment('show',<?php echo $id;?>)">
                            SHOW ALL COMMENTS
                        </div>
                <div id="comment-section" class="artist-profile-timeline artist-profile-timeline<?php echo $post_id[$i]?>">
                    
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
                    <?php $i++;} ?>
                    
                </div>
                
                <div class="songs-profile-section profile-section-bottom">
                    
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
                
            </div>
            
            <div id="profile-div-right">
                <div class="div-up">
                    <div class="name">
                        <span>ZYAN MALIK</span>
                    </div>
                    <div class="div-middle">
                        <div class="div-middle-followers">
                            <img src="<?php echo $icons;?>follow.svg" height="20px" alt="FOLLOWERS"/><br/>
                            <span class="number">10 M</span>
                        </div>
                        
                        <span class="divide"></span>
                        <div class="div-middle-likes">
                            <img src="<?php echo $icons;?>likes.svg" height="20px" alt="LIKES"/><br/>
                            <span class="number">1 K</span>
                        </div>
                        <span class="divide"></span>
                        <div class="div-middle-songs">
                            <img src="<?php echo $icons;?>songs.svg" height="20px" alt="SONGS"/><br/>
                             <span class="number">10</span>
                        </div>
                    </div>
                </div>
                <div class="div-down">
                    <div class="profile-options">
                        <span>FOLLOW</span>
                        <span>LIKE</span>
                    </div>
                </div>
                <div id="photo_gallary">  
                    <div class="top-liked-post-title">
                        <span class="title-text">ALBUM
                            <span class="title-text-next">10 PHOTOS</span>
                        </span>
                    </div>
                    <?php
                        $i=0;
                        $data=array("1","2","3","4","5","6","7","8","9","10");
                        $name=array("alessia","adele","bruno","john","silento","sorry","swastik","taylor","vinta","zyan");
                        foreach($data as $id){?>
                    <div class="photo">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics.$name[$i];?>200x200.jpg" style="height:100%;" onclick="showAlbumPopup('<?php echo $name[$i];?>')"/>
                    </div>
                    <?php $i++;}?>
                </div>
            </div>
        </div>
        <div id="photo-gallary-popup">
            <div class="photo">
                <img src=""/>
            </div>
            <div class="close">
                 <img src="<?php echo $icons;?>cross.svg" style="height:30px;"/>  
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
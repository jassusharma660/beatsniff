<?php
    error_reporting(0);
    session_start();
    require './DIR.php';
    require '../config/config.php';
    include_once('./includes/colors.inc.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beatsniff - My channels</title>
        <script src="<?php echo $script;?>jquery-2.2.3.min.js"></script>
        <script src="<?php echo $script;?>site-helper.js"></script>
        <script src="<?php echo $script;?>jquery.unveil.js"></script>
        <script src="<?php echo $script;?>create-channel.js"></script>
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
            
           
            <!---------------CHANNEL---------------->
            <?php
                 $icon = $small_profile_pics."/randl50x50.jpg";
                 $dp = $medium_profile_pics."/randl200x200.jpg";
                 $wall_pic = $full_profile_pics."/randl1_channel.jpg";
                 $chnl_name = "Rett and Link";
                 $slashtag = "//rettlink";
                 $other_chnl = array("exist"=>"yes","name"=>"Good Mythical Morning","icon"=>$small_profile_pics."/gmm50x50.jpg");
                 $home_tab = "channel.php";
                 $songs_tab = "?view=songs";
                 $playlist_tab = "?view=playlist";
                 $podcast_tab = "?view=podcast";
                 $about_tab = "?view=about";
                     
                 $img = new GetMostCommonColors();
                 $img->image = $wall_pic;
                 $colors = $img->Get_Color();
                 $colors_key=array_keys($colors);
                 $view = $_GET['view'];

                 $verified=true;
            ?>
            <div id="channel">
                <div id="nav">
                    <a href="<?php echo $home_tab;?>">
                        <div class="element <?php if(!isset($view)) echo "selected";?>">
                            <img src="<?php echo $icon;?>"/>
                            <span class="name"><?php echo $chnl_name;?></span>
                        </div>
                    </a>
                    <a href="<?php echo $songs_tab;?>">
                        <div class="element <?php if(isset($view) && $view=="songs") echo "selected";?>">
                                <img src="<?php echo $icons;?>songs.svg"/>
                                <span class="name">Songs</span>
                        </div>
                    </a>
                    <a href="<?php echo $playlist_tab;?>">
                        <div class="element <?php if(isset($view) && $view=="playlist") echo "selected";?>">
                            <img src="<?php echo $icons;?>playlist.svg"/>
                            <span class="name">Playlist</span>
                        </div>
                    </a>
                    <a href="<?php echo $podcast_tab;?>">
                        <div class="element <?php if(isset($view) && $view=="podcast") echo "selected";?>">
                            <img src="<?php echo $icons;?>podcast.svg"/>
                            <span class="name">Podcast</span>
                        </div>
                    </a>
                    <a href="<?php echo $about_tab;?>">
                        <div class="element <?php if(isset($view) && $view=="about") echo "selected";?>">
                            <img src="<?php echo $icons;?>about.svg"/>
                            <span class="name">About</span>
                        </div>
                    </a>
                </div>
                
                <div id="channel-header" style="background:#<?php echo $colors_key['0'];?>;">
                
                    <?php if($other_chnl['exist']){?>
                    <div class="subs_button_parent">
                        <button class="subs_button subscribe-<?php $id="c9182u";echo $id;?>" onclick="subscribe('true','<?php echo $id;?>')">
                        subscribe
                        </button>
                        <div class="count">10,199,198</div>
                    </div>
                    <?php }?>
                    <div class="channel-dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $dp?>" class="channel_img"/>
                        <div class="name">
                            <?php echo $chnl_name;
                                if($verified){
                            ?>
                            <div style="display:inline-block;position:relative;top:-20px;text-shadow:0 0 10px rgba(100,100,100,1);">
                                <span style="width:20px;height:20px;background:none;display:inline-block;">
                                    <img src="<?php echo $icons;?>king.svg" height="20px" style="background:none;position:relative;top:50%;"/>
                                </span>
                                <span style="color:#fff;letter-spacing:4px;font-size:10px;display:inline-block;position:relative;top:3px;">OFFICIAL</span>
                            </div>
                            <?php }?>
                            <div class="slashtag">
                                <?php echo $slashtag;?>
                            </div>
                        </div>
                    </div>
                    <a href="" style="cursor:default;">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $wall_pic;?>" class="header-art"/>
                    </a>
                    
                </div>
                <?php if($other_chnl['exist']){?>
                <div id="social">
                    <?php if($other_chnl['exist']){?>
                    <span class="other_chnl">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $other_chnl['icon'];?>" style="height:100%;"/>
                        <span><?php echo $other_chnl['name']?></span>
                    </span>
                    <?php }?>
                    <a href="http://facebook.com/rettandlink" style="color:#fff;">
                        <img src="<?php echo $logos;?>facebook-logo.svg" class="links"/>
                    </a>
                    <a href="http://plus.google.com/rnl" style="color:#fff;">
                        <img src="<?php echo $logos;?>google-plus-logo.svg" class="links"/>
                    </a>
                    <a href="http://t.co/rettandlink" style="color:#fff;">
                        <img src="<?php echo $logos;?>twitter-logo.svg" class="links"/>
                    </a>
                    <a href="http://yputube.com/rettandlink" style="color:#fff;">
                        <img src="<?php echo $logos;?>youtube-logo.svg" class="links"/>
                    </a>
                </div>
                <?php }?>
                <?php 
                    if(isset($view)){
                        if($view=="songs"){
                ?>
                    <!---------------------------------------------------------->
                
                    <div class="channel-content">
                        <div class="new-post">
                            
                            <div id="post-trending" style="width:100%;">
                                <div class="top-liked-post-title">
                                    <span class="title-text">ALBUM
                                        <span class="title-text-next">ABC</span></span>

                                    <span class="more">
                                        <a href="<?php echo $bin;?>album-info.php" target="_blank">
                                            <img src="<?php echo $icons;?>open.svg"/>
                                            <span class="pop_more">
                                                VIEW ALL
                                            </span>
                                        </a>
                                    </span>
                                </div>
                                <?php 
                                    for($i=0;$i<4;$i++){
                                ?>
                                <div class="artist-list-post">
                                    <div class="artist-list-dp">
                                        <div class="artist-love">
                                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike14" onclick="artistlike(14)"/>
                                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike14" onclick="artistdislike(14)"/>
                                        </div>
                                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>alessia200x200.jpg" id='image'/>
                                    </div>
                                    <div class="artist-list-bottom">
                                        OUTLAWS
                                        <div style="font-weight:bold;">//ALESSIA054</div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            
                            <div id="post-trending" style="width:100%;">
                                <div class="top-liked-post-title">
                                    <span class="title-text">TRACKS
                                        <span class="title-text-next">SINGLE</span></span>

                                    <span class="more">
                                        <a href="<?php echo $bin;?>album-info.php" target="_blank">
                                            <img src="<?php echo $icons;?>open.svg"/>
                                            <span class="pop_more">
                                                VIEW ALL
                                            </span>
                                        </a>
                                    </span>
                                </div>
                                <?php 
                                    for($i=0;$i<4;$i++){
                                ?>
                                <div class="artist-list-post">
                                    <div class="artist-list-dp">
                                        <div class="artist-love">
                                            <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="artistunlike14" onclick="artistlike(14)"/>
                                            <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="artistlike14" onclick="artistdislike(14)"/>
                                        </div>
                                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $medium_profile_pics;?>bruno200x200.jpg" id='image'/>
                                    </div>
                                    <div class="artist-list-bottom">
                                        JUST THE WAY YOU ARE
                                        <div style="font-weight:bold;">//BRUNO054</div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!---------------------------------------------------------->
                <?php
                        }
                        else
                        if($view=="playlist"){
                ?>
                    <div class="channel-content">
                        <div class="new-post">

                            <!---------------songs-result-Post--------------------->
                            <div id="song-result-post" style="width:100%;">    
                                <div class="top-liked-post-title">
                                    <span class="title-text">HERE
                                        <span class="title-text-next">PLAYLIST</span>
                                    </span>
                                </div>
                                <?php for($i=0;$i<5;$i++){?>
                                <a href="<?php echo $bin."song-info.php"?>">
                                    <div class="post-content">
                                        <div class="post-content-pic">
                                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics;?>alessia50x50.jpg" id='image'/>
                                        </div>
                                        <div class="post-content-title" style="margin-left:10px;">
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
                                </a>
                                <?php }?>
                            </div>
                            <!--------------->
                            <div id="song-result-post" style="width:100%;">    
                                <div class="top-liked-post-title">
                                    <span class="title-text">MIND OF MINE
                                        <span class="title-text-next">SONGS</span>
                                    </span>
                                </div>
                                
                                <a href="<?php echo $bin."song-info.php"?>">
                                    
                                    <?php for($i=0;$i<5;$i++){?>
                                    <div class="post-content">
                                        <div class="post-content-pic">
                                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics;?>zyan50x50.jpg" id='image'/>
                                        </div>
                                        <div class="post-content-title" style="margin-left:10px;">
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
                                    <?php }?>
                                </a>
                            </div>
                        </div>
                    </div>
                
                <?php
                        }
                        else
                        if($view=="podcast"){
                ?>
            
                            <div class="channel-content">
                            <div class="new-post">    
                            <!--------------->
                                <?php for($i=0;$i<5;$i++){?>
                                <div id="song-result-post" style="width:100%;">    
                                    <div class="top-liked-post-title">
                                        <span class="title-text">MONDAY, 12 APR 2016 (10;30AM)
                                            <span class="title-text-next">PODCAST</span>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-content-pic">
                                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics;?>zyan50x50.jpg" id='image'/>
                                        </div>

                                        <div class="song-love">
                                            <span>
                                                <img src="<?php echo $icons;?>heart.svg" style="width: 15px;" id="songunlike<?php echo $i;?>" onclick="songlike(<?php echo $i;?>)"/>
                                            </span>
                                            <span>
                                                <img src="<?php echo $icons;?>heart-white.svg" style="width:15px;display:none;" id="songlike<?php echo $i;?>" onclick="songdislike(<?php echo $i;?>)"/>
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
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        
                <?php
                        }
                        else
                        if($view=="about"){
                ?>
                        
                        <div class="channel-content">
                            <div class="new-post">
                                <div class="about_content">
                                    <span class="bold">Subsribers</span>192,928,291
                                    <span class="bold">Views</span>102,928,291
                                    <div class="bold">Description</div>
                                    <div class="paragraph">
                                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                                    </div>
                                    <div class="bold">Contact</div>
                                    <div class="paragraph">
                                        rettandlink@theiremailprovider.providersdomain
                                    </div>
                                    <div class="bold">Connect</div>
                                    <table>
                                        <tr>
                                            <td>
                                                <a href="http://facebook.com/rettandlink">
                                                    <img src="<?php echo $logos;?>facebook-logo.svg"/><span>Facebook</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="http://plus.google.com/rnl">
                                                    <img src="<?php echo $logos;?>google-plus-logo.svg"/><span>Google Plus</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="http://t.co/rettandlink">
                                                    <img src="<?php echo $logos;?>twitter-logo.svg"/><span>Twitter</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="http://yputube.com/rettandlink">
                                                    <img src="<?php echo $logos;?>youtube-logo.svg"/><span>Youtube</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="http://paypal.com/@rettandlink">
                                                    <img src="<?php echo $icons;?>money.svg"/><span>jassusharma /Paypal</span>
                                                </a>
                                            </td>   
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                <?php
                        }
                    }
                    else{
                ?>
                <div class="channel-content">
                    <div class="new-post">
                        <div class="cover-post">
                            <div class="dp">
                                <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $full_profile_pics."./zara.jpg";?>"/>
                            </div>
                            <div class="info">
                                <a href="<?php echo $bin."song-info.php"?>">
                                    <div class="title">
                                        <?php echo "NEVER FORGET YOU";?>
                                    </div>
                                </a>
                                <div class="artist">
                                    By <?php echo "ZARA LARSSON";?>
                                </div>
                                <div class="views"> 
                                    Views <?php echo "12,231,211";?>
                                </div>
                                <div class="time">
                                    uploaded <?php echo "2 days";?> ago
                                </div>
                                <div class="download">
                                    <a href="./dowload.php?abc"><img src="<?php echo $icons;?>disk.svg"/></a>
                                    <a href="./dowload.php?abc"><img src="<?php echo $icons;?>video.svg"/></a>
                                </div>
                            </div>
                        </div> 
                        <div class="top-liked-post-title">
                            <span class="title-text">MOST RECENT
                                <span class="title-text-next">UPLOADS</span>
                            </span>
                        </div>
                        <div id="gallary-post">
                            <div class="gallary-post-overflow">
                                <div class="slider">
                                    <?php for($i=0;$i<10;$i++){?>

                                    <div class="mini-post">
                                        <div class="dp">
                                            <img src="<?php echo $medium_profile_pics."./zyan200x200.jpg";?>" style="width:100%;"/>
                                        </div>
                                        <div class="time">06:21</div>
                                        <div class="text">
                                            <div style="overflow:hidden;width:100%;color:#ff2b54;">
                                                PILLOW TALK
                                            </div>
                                            <div style="margin-top:4px;">
                                                Views 712,999,213
                                            </div>
                                            <div style="margin-top:4px;">
                                                3 days ago
                                            </div>
                                        </div>
                                         <div class="download">
                                                <a href="./dowload.php?abc"><img src="<?php echo $icons;?>disk.svg"/></a>
                                                <a href="./dowload.php?abc"><img src="<?php echo $icons;?>video.svg"/></a>
                                        </div>
                                    </div>

                                    <?php }?>
                                </div>
                            </div>
                            <div id="prev">
                                <img src="<?php echo $icons;?>left_arrow.svg"/>
                            </div>
                            <div id="next">
                                <img src="<?php echo $icons;?>right_arrow.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
            <!---------------------RIGHT-SIDE-MENU-------------------------->
            
            <div class="suggested-channel">
                <div class="elements">
                    <div class="top-liked-post-title">
                        <span class="title-text">CHANNEL
                            <span class="title-text-next">ARTISTS</span>
                        </span>
                    </div>

                <?php
                    for($i=5;$i<10;$i++){
                ?>
                    <a href="<?php echo $bin."artist-info.php";?>">
                        <div class="post">
                            <div class="dp">
                                <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics."./zyan50x50.jpg";?>"/>
                            </div>
                            <div class="title">
                                ZYAN MALIK
                            </div>
                        </div>
                    </a>
                <?php }?>
                </div>
                <div class="elements">
                    <div class="top-liked-post-title">
                        <span class="title-text">OUR OTHER
                            <span class="title-text-next">CHANNELS</span>
                        </span>
                    </div>
                    
                    <?php
                        for($i=0;$i<5;$i++){
                    ?>
                    <div class="post">
                        <div class="dp">
                            <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics."./gmm50x50.jpg";?>"/>
                        </div>
                        <div class="title">
                            Good Mythical Morning
                            <div class="subs_button_parent">
                                <button class="subs_button subscribe-<?php echo $i;?>" onclick="subscribe('true','<?php echo $i;?>')">
                                    subscribe
                                    </button>
                                <div class="count">10,199,198</div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="elements">
                    <div class="top-liked-post-title">
                        <span class="title-text">RELATED
                            <span class="title-text-next">CHANNELS</span>
                        </span>
                    </div>

                <?php
                    for($i=5;$i<10;$i++){
                ?>
                <div class="post">
                    <div class="dp">
                        <img src="<?php echo $icons;?>loading.gif" data-src="<?php echo $small_profile_pics."./randl50x50.jpg";?>"/>
                    </div>
                    <div class="title">
                        RETT AND LINK
                        <div class="subs_button_parent">
                            <button class="subs_button subscribe-<?php echo $i;?>" onclick="subscribe('true','<?php echo $i;?>')">
                                subscribe
                            </button>
                            <div class="count">10,199,198</div>
                        </div>
                    </div>
                </div>
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
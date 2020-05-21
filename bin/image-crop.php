<?php
require('./DIR.php');
$xh = $_POST['xh'];
$h = $_POST['h'];
$w = $_POST['w'];
$from = $_POST['from'];
$size = $_POST['size'];
?>
<body>
     <div class="image-editor" data-size="<?php echo $size;?>"data-link="<?php echo $includes.'save-cropped.php';?>" data-loading="<?php echo $icons;?>loading-black.gif" data-fromclass="<?php echo $from;?>">
        <div class="popup-container">
            <div class="head">
                <div class="close" onclick="$('.image-editor').css('display','none');">
                    <img src="<?php echo $icons;?>cross.svg"/>
                </div>
                <div class="cropit-image-input-button"><span>Select image</span></div>
                <input type="file" class="cropit-image-input" onchange="showhide()" hidden>
                <div class="export"><img src="<?php echo $icons."tick.svg"?>"/></div>
                <img src="<?php echo $icons."loading.gif";?>" class="loading"/>
                <span class="done"><img src="<?php echo $icons."tick.svg"?>"/><span class="text">Uploaded</span></span>
            </div>
            
            <span class="help"><span>CLICK SELECT IMAGE</span></span>
            
            <div class="rotate-ccw rotate"><img src="<?php echo $icons."rotate-left.svg"?>"/></div>
            <div class="rotate-cw rotate"><img src="<?php echo $icons."rotate-right.svg"?>"/></div>

            <div class="popup">
                <div class="cropit-preview">
                </div>
                <input type="range" class="cropit-image-zoom-input">
            </div>
        </div>
    </div>
</body>

<script src="<?php echo $script;?>jquery.cropit.js"></script>
<style>

.image-editor .popup{
    width:<?php echo $xh;?>px;
}
.cropit-preview{
    width: <?php echo $w;?>px;
    height: <?php echo $h;?>px;
}
</style>
<script>
    
$(document).ready(function(){
    
$('.rotate').css('display','none');
$('.popup').css('display','none');

$('.cropit-image-input-button').click(function(){
    $('.cropit-image-input').click();
});
    
$('.image-editor').cropit();

    $('.rotate-cw').click(function () {
        $('.image-editor').cropit('rotateCW');
    });
    $('.rotate-ccw').click(function () {
        $('.image-editor').cropit('rotateCCW');
    });

    var link =  $('.image-editor').attr('data-link');
    var toClass = '.'+$('.image-editor').attr('data-fromclass');
    var size = $('.image-editor').attr('data-size');
    
    var songName = 'channel_cover';

    $('.export').click(function(){
        var imageData = $('.image-editor').cropit('export',{originalSize: false});
        $('.image-editor .loading').css('display','block');
        $('.image-editor .head .loading').css('display','inline-block');
        $.post(link, {
                image: imageData,
                name: songName,
                size: size
        }
        , function (data, status){
            if(status=="success"){
                $('.image-editor .head .loading').css('display','none');
                $('.image-editor .head .done').css('display','inline-block');
                $('.image-editor .loading').css('display','none');
                $(toClass).attr('src',data);
            }
        });
    });
});
function showhide(){
    $('.image-editor .loading').css('display','none');
    $('.image-editor .done').css('display','none');
    $('.rotate').css('display','');
    $('.popup').css('display','');
}
</script>
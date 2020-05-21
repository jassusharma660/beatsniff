<?php
    require './DIR.php';
    error_reporting(0);

    $imgData = str_replace(' ','+',$_POST['image']);
    $imgName = str_replace(' ','+',$_POST['name']);
    $imgSize = str_replace(' ','+',$_POST['size']);
    $imgName = $imgName.random();
    $imgData =  substr($imgData,strpos($imgData,",")+1);
    $imgData = base64_decode($imgData);
    // Path where the image is going to be saved
    switch($imgSize){
        case 'full':    $rtn_url = explode('../',$full_profile_pics);
                        $url = $full_profile_pics;
            break;
        case 'medium':  $rtn_url = explode('../',$medium_profile_pics);
                        $url = $medium_profile_pics;
            break;
        case 'small':   $rtn_url = explode('../',$small_profile_pics);
                        $url = $small_profile_pics;
            break;
    }
    $rtn_url = "../".$rtn_url[2];
    $filePath = $url.$imgName.'.jpg';
    $rtn_filePath = $rtn_url.$imgName.'.jpg';
    // Write $imgData into the image file
    $file = fopen($filePath, 'w');
    fwrite($file, $imgData);
    fclose($file);
    echo $rtn_filePath;

function random($characters=25,$letters = '012345689AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz'){
    $str='';
    for ($i=0; $i<$characters; $i++) { 
        $str .= substr($letters, mt_rand(0, strlen($letters)-1), 1);
    }
    if(strlen($str)==$characters)
        return $str;
    else
        $this->random($characters,$letters);
    }
?>
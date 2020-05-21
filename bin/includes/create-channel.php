<?php
    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $info = $_POST['info'];
    
    if(!empty($name) && !empty($cat) && !empty($info)){
        $data = array("status"=>"true","url"=>"http://beatsniff.in/XZyAN6");
        echo json_encode($data);
    }
    else{
        $data = array("status"=>"false","error"=>"Fields can't be empty!","");
        echo json_encode($data);
    }
?>
<?php 
    
    error_reporting(0);
    /*////////////////////////////////////////////////////////
    
    REMEMBER TO INCLUDE:
    
    class.helper.php
    class.redirect.php
    Browser.php -> for browser detection
    config.php -> for config vars
    
    ///////////////////////////////////////////////////////*/
    class Checksession extends Redirect{
        
        function isSessionExist($cookie,$email){
            $data = $this->getDataFromUserSessionData('all',$email);
             
            if($data){
                if($this->destroyHashedStr($data['cookie'],$cookie)){
                    return true;
                } 
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        
    }
?>
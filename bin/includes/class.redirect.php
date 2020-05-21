<?php 
    
    //error_reporting(0);

    /*////////////////////////////////////////////////////////
    
    REMEMBER TO INCLUDE:
    
    class.helper.php
    Browser.php -> for browser detection
    config.php -> for config vars
    
    ///////////////////////////////////////////////////////*/
        
    class Redirect extends Register{
        
        function __construct($sucessRedirTo=null, $failRedirTo=null ,$sessionVars=null ,$checkSessionFirst=null){
            if($checkSessionFirst){
                if($this->isSessionExist(htmlspecialchars($sessionVars['what']),htmlspecialchars($sessionVars['for']))){
                    session_destroy();
                    session_start();
                    $_SESSION['session'] = $sessionVars;
                    header('location:'.$sucessRedirTo);
                }
                else{
                    header('location:'.$failRedirTo);
                }
            }
        }
        
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
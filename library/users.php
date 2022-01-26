<?php
    function check_login($username,$password){
        global $list_users;
        foreach($list_users as $user){
            if($username == $user['username'] && md5($password) == $user['password']){
                return true;
                show_array($user);
            }
        }
    }
    function is_login(){
        if(isset($_SESSION['is_login'])){
            return true;
            return false;

        }
    }
      
?>
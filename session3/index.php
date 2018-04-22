<?php
session_set_cookie_params(1);
session_start();

if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}else{
    $_SESSION['count']++;
}
echo $_SESSION['count']."回目の訪問です";
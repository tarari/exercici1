<?php
    ini_set('display_errors','On');
    session_start();
    include 'config.php';

    if(isset($_GET['page'])){
        $page=filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);
        if(in_array($page,$rutes)){
            $redir=$page;
        }else{
            $redir='error';
        }
    }else{
        $redir='home';
    }
    header('Location:'.$redir.'.php');

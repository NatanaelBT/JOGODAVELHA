<?php

if (!isset($_SESSION)) { session_start(); }
    


if (!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 1;
        
    }
    if (!isset($_SESSION['jogador']) && !isset($player1)) {
        $_SESSION['player1'] = $_POST['player'];
        
        if ($_SESSION['player1'] == "humanx") {
            $_SESSION['jogador'] = 'Humano X';
            
        } elseif ($_SESSION['player1'] == "humano") {
            $_SESSION['jogador'] = 'Humano O';
            
        } elseif ($_SESSION['player1'] == "skynetx") {
            $_SESSION['jogador'] = 'SKYNET X';
            
        } elseif ($_SESSION['player1'] == "skyneto"){
            $_SESSION['jogador'] = 'SKYNET O';
            
        }
    }
    
    


?>
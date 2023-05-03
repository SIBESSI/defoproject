<?php
    function getColor($table,$colors){
        if(isset($colors[$table])){
            return $colors[$table];
        }
        else{
            return "orange";
        }
    }
    
    $tables = [
        "Articles"      =>  "posts",
        "Categories"      =>  "category",
        "Utilisateurs"   =>  "admins"
    ];

    $colors = [
        "posts"     =>  "green",
        "category"  =>  "red",
        "admins"    =>  "blue"
    ];
<?php

function dump( $var,$type = "print_r")
{

    echo "
    <style>
    pre{
        font-familly:monospace;
        background:rgba(40,42,54,1);
        color:white;
        padding:10px 20px;
        border :2px solid white;
        world-wrap : break-word;
        resize : both;
        overflow: auto;
    }
    
       pre.hover ,pre:focus {
      with:min-content;}
       </style>
       ";

       
     echo "<pre>";
      if ($type == 'print_r') 
        print_r($var);
        else{
            var_dump($var);
            echo"</pre>";
}}

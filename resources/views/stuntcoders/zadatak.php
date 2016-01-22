<?php

function prostBroj( $broj){
    for($i= 2, $broj, $i++)    {
        if(ostatak($broj / $i) == false){
            return false;
        }

    }
}
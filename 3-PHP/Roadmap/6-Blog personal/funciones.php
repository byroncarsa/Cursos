<?php

function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}


// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}


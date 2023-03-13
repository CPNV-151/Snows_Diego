<?php
require "./model/snowsService.php";

function displaySnows(){
    $snows = getSnows();
    require "view/snows.php";
}
function snow($code){
    $snows = getSnow($code);
    $snow = $snows[0];
    require "view/aSnow.php";
}
<?php
function getSnows(){
    $snowsQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, active FROM snows';

    require_once 'model/dbConnector.php';
    $snows = executeQuerySelect($snowsQuery);

    return $snows;
}
function getSnow($code){
    $strSeparator = '\'';

    // Query to get the selected snow. The active code must be set to 1 to display only snows to display. It avoids possibilty to user selecting a wrong code (get paramater in url)
    $snowQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, description, photo, active FROM snows WHERE code =' . $strSeparator . $code . $strSeparator ;

    require_once 'model/dbConnector.php';
    $snow = executeQuerySelect($snowQuery);

    return $snow;
}
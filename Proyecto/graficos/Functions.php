<?php
function escapeXML($strItem, $forDataURL) {
	if ($forDataURL) {
		$strItem = str_replace("'","&apos;", $strItem);        
	} else {
		$findStr = array("%", "'", "&", "<", ">");
		$repStr  = array("%25", "%26apos;", "%26", "&lt;", "&gt;");
		$strItem = str_replace($findStr, $repStr, $strItem);        
	}
    $findStr = array("<", ">");
    $repStr  = array("&lt;", "&gt;");
    $strItem = str_replace($findStr, $repStr, $strItem);        
	return $strItem;
}

function obtenerPaleta() {
	return (((!isset($_SESSION['palette'])) || ($_SESSION['palette']=="")) ? "2" : $_SESSION['palette']);
}

function obtenerEstadoAnimacion() {
	return (($_SESSION['animation']<>"0") ? "1" : "0");
}

function obtenerColorFuente() {
    return "666666";
}

// MonthName function converts a numeric integer into a month name
// Param: $intMonth - a numver between 1-12, otherwise defaults to 1
// Param: $flag -  if true, short name; if true, long name;
function MonthName($intMonth,$flag) {

    $arShortMonth = array (1=>"Jan", 2=>"Feb", 3=>"Mar", 4=>"Apr", 5=>"May", 6=>"Jun", 7=>"Jul", 8=>"Aug", 9=>"Sep", 10=>"Oct", 11=>"Nov", 12=>"Dec");
    $arLongMonth  = array (1=>"January", 2=>"February", 3=>"March", 4=>"April", 5=>"May", 6=>"June", 7=>"July", 8=>"August", 9=>"September", 10=>"October", 11=>"November", 12=>"December");

    if ($intMonth<1 || $intMonth>12)
        $intMonth=1;

    if ($flag)
        return $arShortMonth[$intMonth];
    else
        return $arLongMonth[$intMonth];
}
?>
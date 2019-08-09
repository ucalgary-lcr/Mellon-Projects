<?php
/**
 * Created by PhpStorm.
 * User: Dung
 * Date: 5/5/2018
 * Time: 10:27 AM
 *
 */

$searchtring = str_replace(' ', '+', (empty($_GET["q"]) ? '""' : $_GET["q"]));

if ($_GET["t"] == "dms") {
    echo file_get_contents("https://server22007.contentdm.oclc.org/dmwebservices/index.php?q=dmQuery/cmh/subcol^" . $searchtring . "^exact^and/title!publis!date!creato!descri/title!descri!asc/50/1/0/0/1/1/json");
}

if ($_GET["t"] == "dmc") {
    echo file_get_contents("https://server22007.contentdm.oclc.org/dmwebservices/index.php?q=dmGetCollectionList/json");
}

if ($_GET["t"] == "ini") {
    echo file_get_contents("https://server22007.contentdm.oclc.org/dmwebservices/index.php?q=dmQuery/cmh/subcol^" . $searchtring . "^exact^and/title!publis!date!creato!descri/title!descri!asc/50/1/0/0/1/1/json");
}
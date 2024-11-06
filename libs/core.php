<?php

function getPage()
{
    if (isset($_GET["page"])) {
        $_SESSION["page"] = $_GET["page"];
    }
    if (!isset($_SESSION["page"])) {
        $_SESSION["page"] = "home";
    }
    return "../resources/views/" . $_SESSION["page"] . ".view.php";
}

function getLanguage()
{
    if (isset($_GET["taal"])) {
        $_SESSION["taal"] = $_GET["taal"];
    }
    if (!isset($_SESSION["taal"])) {
        $_SESSION["taal"] = "nl";
    }
    $json = file_get_contents("json/" . $_SESSION["taal"] . ".json");
    $taal = json_decode($json, true);
    return $taal;
}
<?php
session_start();
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http"). "://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));
require_once("./Controller/MainController.php");
$mainController = new MainController();
try {
    if (empty($_GET['page'])) {
        header("Location: ".URL."login");
    } else {
        $url = explode ("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }
    switch ($page) {
        case "accueil" :
            $mainController->accueil();
            break;
        case "login" :
            $mainController->login();
            break;
        case "validationLogin" :
            $isLogin = $mainController->seConnecter();
            if($isLogin){
                header("Location: ".URL."accueil");
                break;
            } else{
                header("Location: ".URL."login");
                break;
            }
        case "register" :
            $mainController->register();
            break;
        case 'registerUser':
            $mainController->registerUser();
            break;
        case "page2" :
            $mainController->page2();
            break;
        case "page3" :
            $mainController->page3();
            break;
        case "livre" :
            $mainController->livre();
            break;
        case "livreDetails" :
            $id = isset($url[1]) ? $url[1] : null;
            // Appelez la méthode en passant l'ID
            $mainController->livreDetails($id);
            break;
        default:
            throw new Exception ("La page n'existe pas");
    }
} catch (Exception $e) {
    $mainController->pageErreur($e->getMessage());
}
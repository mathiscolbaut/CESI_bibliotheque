<?php
require_once 'Services/ToolBox.php';
require_once 'Services/Render/Render.php';
require_once ("Model/MainManager/MainManager.php");
require_once ("Model/Utilisateur/Utilisateur.php");
#[AllowDynamicProperties] class MainController extends Render {

    private $mainManager;
    
    public function __construct()
    {
        parent::__construct(Render::class);
        $this->mainManager = new MainManager();
        $this->utilisateur = new Utilisateur();
    }
    public function accueil(){
        $data_page =[
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "page_css" => ["accueil.css"],
            "page_javascript" => ["accueil.js"],
            "view" => "View/Accueil/accueil.view.php",
            "template" => "View/Layout/base.php"
        ];
        $this->render($data_page);
    }

    public function login(): void {
        $data_page =[
            "page_description" => "Page de connection",
            "page_title" => "Se connecter",
            "page_css" => ["page1.css"],
            "view" => "View/login/login.view.php",
            "template" => "View/Layout/base.php"
        ];
        $this->render($data_page);
    }

    public function seConnecter()
    {
        $email = $_POST['mail'];
        $password = $_POST['mdp'];

        $isVerified = $this->utilisateur->seConnecter($email, $password);
        return $isVerified;
    }

    public function register() {
        $data_page =[
            "page_description" => "Page de création de compte",
            "page_title" => "S'enregister",
            "view" => "View/register/register.view.php",
            "template" => "View/Layout/base.php"
        ];
        $this->render($data_page);
    }
    public function page2 () {
        $data_page =[
            "page_description" => "Description de la page 2",
            "page_title" => "Titre de la page 2",
            "view" => "View/Page2/page2.view.php",
            "template" => "View/Layout/base.php"
        ];
        $this->render($data_page);
    }

    public function page3() {
        $data_page =[
            "page_description" => "Description de la page 3",
            "page_title" => "Titre de la page 3",
            "view" => "View/Page3/page3.view.php",
            "template" => "View/Layout/base.php"
        ];
        $this->render($data_page);
    }

    public function pageErreur ($msg){
        $data_page =[
            "page_description" => "Description de la page d'erreur",
            "page_title" => "Titre de la d'accueil",
            "msg" => $msg,
            "view" => "View/Error/404.error.view.php",
            "template" => "View/Layout/base.php"
        ];
        $this->render($data_page);
    }

    public function registerUser()
    {
        $nomUtilisateur = $_POST['nom'];
        $email = $_POST['mail'];
        $password = $_POST['mdp'];

        $isRegister = $this->utilisateur->inscrire($email, $password, $nomUtilisateur);

        if($isRegister){
            header("Location: ".URL."login");
        } else{
            header("Location: ".URL."register");
        }
    }
}
?>
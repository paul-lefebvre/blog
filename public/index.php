<?php

//Démarrage d'une session
session_start();

//Include du vendor
require '../vendor/autoload.php';

//Chargement de toutes les classes
function chargerClasse($classe){
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__."{$ds}..";
    $classeName = str_replace('\\', $ds,$classe);

    $file = "{$dir}{$ds}{$classeName}.php";
    if(is_readable($file)){
        require_once $file;
    }
}
spl_autoload_register('chargerClasse');


//Routes du site [GET = Récupérer] [POST = Envoyer]
$router = new \src\Router\Router($_GET['url']);

//Route principale --> Page d'accueil
$router->get('/', "Article#ListAll");

//Affichage de tout les articles
$router->get('/Article', "Article#ListAll");

//Mise à jour des articles
$router->get('/Article/Update/:id', "Article#Update#id");
$router->post('/Article/Update/:id', "Article#Update#id");

//Ajout d'articles
$router->get('/Article/Add', "Article#Add");
$router->post('/Article/Add', "Article#Add");

//Suppression d'articles
$router->get('/Article/Delete/:id', "Article#Delete#id");

//Fixture
$router->get('/Article/Fixtures', "Article#Fixtures");

//Modification des articles
$router->get('/Article/Write', "Article#Write");

//Lecture des articles
$router->get('/Article/Read', "Article#Read");

//Edition d'un article
$router->get('/Article/WriteOne/:id', "Article#Read#id");

//API des articles
$router->get('/Api/Article', "Api#ArticleGet");
$router->post('/Api/Article', "Api#ArticlePost");
$router->put('/Api/Article/:id/:json', "Api#ArticlePut#id#json");

//Page de contact : envoi d'email
$router->get('/Contact', 'Contact#showForm');
$router->post('/Contact/sendMail', 'Contact#sendMail');

//Page de connexion (login)
$router->get('/Login', 'User#loginForm');
$router->post('/Login', 'User#loginCheck');

//Page de déconnexion
$router->get('/Logout', 'User#logout');

//Page d'inscription
$router->get('/inscription', 'User#inscription');
$router->post('/inscription', 'User#inscription');

//Moteur de recherche
$router->post('/Article/Search/','Article#search');
$router->get('/dashboard/', 'User#pageDashboard');




//Lancement des routes
echo $router->run();


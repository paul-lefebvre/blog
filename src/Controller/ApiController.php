<?php

namespace src\Controller;

use src\Model\User;
use src\Model\Article;
use src\Model\Categorie;
use src\Model\Bdd;

class ApiController {


    //Récuperation des articles
    public function ArticleGet(){

        $article = new Article();
        $listArticle = $article->ArticleGetFiveLast(Bdd::GetInstance());
        return json_encode($listArticle);

    }


    //Poste d'articles
    public function ArticlePost(){

        $article = new Article();
        $article->setART_TITRE($_POST['ART_TITRE'])
            ->setART_DESCRIPTION($_POST['ART_DESCRIPTION'])
            ->setART_AUTEUR($_POST['ART_AUTEUR'])
            ->setART_DATEAJOUT($_POST['ART_DATEAJOUT'])
        ;

        //Ajout des articles en BDD
        $result = $article->SqlAdd(Bdd::getInstance());

        return json_encode($result);

    }


    //Put des articles dans l'API
    public function ArticlePut($idArticle,$json){

        $jsonData = json_decode($json);
        $articleSQL = new Article();

        $article = $articleSQL->SqlGet(BDD::getInstance(), $idArticle);

        if(isset($jsonData->ART_TITRE)){$article->setART_TITRE($jsonData->ART_TITRE);}
        if(isset($jsonData->ART_DESCRIPTION)){$article->setART_DESCRIPTION($jsonData->ART_DESCRIPTION);}
        if(isset($jsonData->ART_AUTEUR)){$article->setART_AUTEUR($jsonData->ART_AUTEUR);}
        if(isset($jsonData->ART_DATEAJOUT)){$article->setART_DATEAJOUT($jsonData->ART_DATEAJOUT);}

        $result = $article->SqlUpdate(BDD::getInstance());

        return json_encode($result);

    }







}



<?php

require_once 'modele/dao/CategorieDao.php';
require_once 'modele/domaine/Article.php';
require_once 'modele/domaine/Categorie.php';
require_once 'modele/dao/ArticleDao.php';




class Controller{
    function __construct()
    {
        
    }

    public function showAcceuil(){
        $articleDao = new ArticleDao();
        $categorieDao = new CategorieDao();

        $articles = $articleDao->getList();
        $categories = $categorieDao->getList();
        require_once 'vue/accueil.php';

    }

    public function showArticle($id){
        $articleDao = new ArticleDao();
        $categorieDao = new CategorieDao();

        $articles = $articleDao->getList($id);
        $categories = $categorieDao->getList($id);
        require_once 'vue/article.php';

    }
    

    public function showCategorie($id){
        $articleDao = new ArticleDao();
        $categorieDao = new CategorieDao();

        $articles = $articleDao->getByCategoryId($id);
        $categories = $categorieDao->getList($id);
        require_once 'vue/articleByCategorie.php';

    }

     public function showErrorPage(){
        require_once 'vue/error.php';
     }
}
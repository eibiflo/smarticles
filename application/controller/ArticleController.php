<?php

/**
 * RegisterController
 * Register new user
 */
class ArticleController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class. The parent::__construct thing is necessary to
     * put checkAuthentication in here to make an entire controller only usable for logged-in users (for sure not
     * needed in the RegisterController).
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        die("404 xD");
       // $this->View->render('Article/index');
    }

    public function show($param)
    {
        $articleModel = new ArticleModel();
        $article =  $articleModel->getArticle($param);


            $articleModel->updateUserCategoryClicks( $article->article_category);
            $articleModel->updateArticleClicks( $article->article_id);


        if($article == false){
            die("Ups another 404 xD");
        }

        $this->View->render('Article/index',[
          "article" => $article
        ]);
    }
}

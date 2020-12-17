<?php

/**
 * RegisterController
 * Register new user
 */
class categoryController extends Controller
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

        $categorymodel = new CategoryModel();

        //LOL SHowcase TODO Logik
        $aricles = $categorymodel->getTopArticles(12,3);
        $ariclesLatest = $categorymodel->getLatestArticles(4);


        $this->View->render('category/index',[
            "articles" =>  $aricles,
            "latest_articles" =>  $ariclesLatest
        ]);

    }

    public function show($param)
    {
        $articleModel = new CategoryModel();
        $article =  $articleModel->getArticleByCategory($param);




        if($article == false){
            die("Ups another 404 xD");
        }

        $this->View->render('Article/index',[
            "article" => $article
        ]);
    }
}

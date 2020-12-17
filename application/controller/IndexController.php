<?php

class IndexController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    public function index()
    {
        $categorymodel = new CategoryModel();

        //LOL SHowcase TODO Logik

      //  $aricles = $categorymodel->createArticleSQL(1,0,0);
      //  $ariclesLatest = $categorymodel->createArticleSQL(1,0,0);

        $aricles = $categorymodel->getTopArticles(12,1);
        $ariclesLatest = $categorymodel->getLatestArticles(4);


        $this->View->render('index/index',[
         "articles" =>  $aricles,
         "latest_articles" =>  $ariclesLatest
        ]);
    }
}

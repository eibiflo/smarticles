<?php

class CategoryModel{

    private $db;

    public function __construct()
    {
        $this->db = DatabaseFactory::getFactory()->getConnection();
    }


    public function getLatestArticles($limit = 6){
        $statement =  $this->db->prepare("SELECT * FROM articles LEFT JOIN article_category ON articles.article_category=article_category.article_category_id WHERE  article_show = 1 ORDER BY article_date DESC  LIMIT ? ");
        $statement->bindValue(1, $limit, PDO::PARAM_INT);
        $statement->execute();

        $articles = [];
        while($row = $statement->fetch()) {
        $articles[] = $row;
        }

        return $articles;
    }



    public function getArticle($slug){
        //TODO Preority BY User Insterests
        $statement =  $this->db->prepare("SELECT * FROM articles LEFT JOIN article_category ON articles.article_category=article_category.article_category_id WHERE articles.article_slug = ? and articles.article_show = 1");
        $statement->execute([$slug]);

        return $statement->fetch();
    }
    //Eventuell nicht die beste Implementation
    public function createArticleSQL($home, $latest, $category){
        $statement = "";
        if($home == true){


            $statement = "SELECT * FROM articles
            LEFT JOIN article_category ON articles.article_category=article_category.article_category_id
            LEFT JOIN article_stats ON articles.article_id=article_stats.article_id
            WHERE article_show = 1 AND ( ";

            $first = True;

            if(Session::get('cat_sports') == true){
                if($first == true){
                    $statement = $statement . "article_category = 1 ";
                    $first = false;
                }else{
                    $statement = $statement . " OR article_category = 1 ";
                }
            }
            if(Session::get('cat_entertainment') == true){
                if($first == true){
                    $statement = $statement . "article_category = 3 ";
                    $first = false;
                }else{
                    $statement = $statement . " OR article_category = 3 ";
                }
            }
            if(Session::get('cat_technology') == true){
                if($first == true){
                    $statement = $statement . "article_category = 4 ";
                    $first = false;
                }else{
                    $statement = $statement . " OR article_category = 4 ";
                }
            }
            if(Session::get('cat_politics') == true){
                if($first == true){
                    $statement = $statement . "article_category = 2 ";
                    $first = false;
                }else{
                    $statement = $statement . " OR article_category = 2 ";
                }
            }
            if(Session::get('cat_business') == true){
                if($first == true){
                    $statement = $statement . "article_category = 5 ";
                    $first = false;
                }else{
                    $statement = $statement . " OR article_category = 5 ";
                }
            }

           // var_dump(Session::get('get_learn') == false); die();
            if(Session::get('get_learn') == false) {
                $statement = $statement . ")  LIMIT ?";
            }else{
                $statement = $statement . ") ORDER BY article_stats.article_clicks DESC LIMIT ?";
            }

            //d($_SESSION);
            //var_dump($statement);
            //die();

           // $statement = "SELECT * FROM articles
            //LEFT JOIN article_category ON articles.article_category=article_category.article_category_id
           // LEFT JOIN article_stats ON articles.article_id=article_stats.article_id
           // WHERE article_show = 1  ORDER BY article_stats.article_clicks DESC LIMIT ?";
        }
        if($category == true) {
            $statement = "SELECT * FROM articles
            LEFT JOIN article_category ON articles.article_category=article_category.article_category_id
            LEFT JOIN article_stats ON articles.article_id=article_stats.article_id
            WHERE article_show = 1 AND  article_category = 5 LIMIT ?";

        }
            return $statement;
    }


    public function getTopArticles( $limit = 12, $mode){

        if(Session::get("user_id") != false){
            //user is Loggedin
            // die("OK"); Logik TODO
            if($mode == 1){
                $SQL = $this->createArticleSQL(1,0,0);

            }else if($mode == 2){
                $SQL = $this->createArticleSQL(0,1,0);

            }else if($mode == 3){
                $SQL = $this->createArticleSQL(0,0,1);

            }

            $statement =  $this->db->prepare($SQL);
            $statement->bindValue(1, $limit, PDO::PARAM_INT);
            $statement->execute();
        }else{
            $statement =  $this->db->prepare("SELECT * FROM articles LEFT JOIN article_category ON articles.article_category=article_category.article_category_id WHERE article_show = 1  LIMIT ? ");
            $statement->bindValue(1, $limit, PDO::PARAM_INT);
            $statement->execute();
        }


        $articles = [];
        while($row = $statement->fetch()) {
            //d($articles);
            $articles[] = $row;
        }

        return $articles;
    }

}
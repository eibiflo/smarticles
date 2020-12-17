<?php

class ArticleModel{

    private $db;

    public function __construct()
    {
        $this->db = DatabaseFactory::getFactory()->getConnection();
    }


    public function getArticle($slug){
        //TODO Preority BY User Insterests
        $statement =  $this->db->prepare("SELECT * FROM articles LEFT JOIN article_category ON articles.article_category=article_category.article_category_id WHERE articles.article_slug = ? and articles.article_show = 1");
        $statement->execute([$slug]);

        return $statement->fetch();
    }

    public static function updateUserCategoryClicks( $category){

        $user_id = Session::get('user_id');
        if(!empty($user_id) && !empty($category)){
       var_dump($category);

            $database = DatabaseFactory::getFactory()->getConnection();
            if ($category == 2) {
                $category = "user_clickedPolitics";
            }else if($category == 3){
                $category = "user_clickedEntertainment";

            }else if($category == 1){
                $category = "user_clickedSports";

            }else if($category == 4){
                $category = "user_clickedTechnology";
            }
            else if($category == 5){
                $category = "user_clickedBusiness";
            }

            $query = $database->prepare("UPDATE users SET ".$category." = ".$category."  +1 WHERE user_id = :user_id");
            $query->execute(array( 'user_id'=> $user_id));
        }

    }

    public static function updateArticleClicks($article_id){
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE article_stats SET article_clicks = article_clicks +1 WHERE article_id = :article_id");
        $query->execute(array(":article_id" => $article_id));


    }

}
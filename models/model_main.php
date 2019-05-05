<?php

class Model_Main extends Model
{
    public $count_news;
    public $count_news_category;
    public function __construct()
    {
        parent::__construct();
        $this->count_news = $this->bdConnect->query("SELECT count(*) FROM news")->fetch(PDO::FETCH_NUM);
    }

    public function get_news($offset)
    {
        $offset*= config['LIMIT_NEWS'];

        $result = $this->bdConnect->query("SELECT * FROM news ORDER BY ID DESC LIMIT ".config['LIMIT_NEWS']." OFFSET {$offset}")->fetchAll(PDO::FETCH_BOTH);
        $this->stopConnection();

        return $result;
    }
    public function get_news_category($offset, $category)
    {

        $offset*= config['LIMIT_NEWS'];

        $result = $this->bdConnect->query("SELECT * FROM news WHERE category='{$category}' ORDER BY ID DESC LIMIT ".config['LIMIT_NEWS']." OFFSET {$offset}")->fetchAll(PDO::FETCH_BOTH);
        $this->stopConnection();

        return $result;
    }

    public function get_count_category($category)
    {
        $this->count_news_category = $this->bdConnect->query("SELECT count(*) FROM news WHERE category='{$category}' ")->fetch(PDO::FETCH_NUM);
    }
}
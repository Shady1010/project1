<?php

class Model_news extends Model
{
    public $count_news;
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

   public function get_full_news($id)
   {
       $result = $this->bdConnect->query("SELECT * FROM news WHERE ID = {$id}")->fetchAll(PDO::FETCH_BOTH);
       $this->stopConnection();

       return $result ;

   }

}
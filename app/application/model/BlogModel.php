<?php


namespace App\application\model;


class BlogModel extends Model
{
    //select all blogs from the database
    public function all($offset = 0, $rowCount = 10)
    {
        $query = "SELECT * FROM `blogs` LIMIT " . $offset . "," . $rowCount . "; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }
    //select the lastest blog in the home page and retrive just 1 blog
    public function blog()
    {
        $query = "SELECT MAX(`created_at`),`title`,`picture`,`text`,`time` FROM `blogs` LIMIT 1; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }
}
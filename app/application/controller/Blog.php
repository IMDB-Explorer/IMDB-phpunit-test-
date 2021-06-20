<?php


namespace App\application\controller;
require_once 'app/application/model/Model.php';
require_once 'app/application/model/BlogModel.php';

use App\application\model\BlogModel;
use App\application\model\Model;

class Blog extends Controller
{
    // it will retrive the blogs from database with the pagination 
    public function blogs()
    {
        $numberOfRows = new Model();
        $count = $numberOfRows->numberOfRows('blogs');
        $count = $count[0]['COUNT(`id`)'] % 10;

        $count == 0 ? $pageNum = $count[0]['COUNT(`id`)'] / 10 : $pageNum = ($count[0]['COUNT(`id`)'] / 10) + 1;

        $arr = explode('/', CURRENT_ROUTE);

        $blogModel = new BlogModel();
        if (sizeof($arr) > 2)//get pagination size from url 
            $blogs = $blogModel->all(10 * ($arr[2] - 1) + 1, 10);

        else
            $blogs = $blogModel->all();

        return $this->view('bloglist_light', compact('blogs','pageNum'));
    }

}
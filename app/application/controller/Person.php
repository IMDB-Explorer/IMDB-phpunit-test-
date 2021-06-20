<?php


namespace App\application\controller;
require_once 'app/application/model/Model.php';
require_once 'app/application/model/PersonModel.php';

use App\application\model\Model;
use App\application\model\PersonModel;

class Person extends Controller
{
    // get all actors
    public function actors()
    {
        $numberOfRows = new Model();
        $count = $numberOfRows->numberOfRows('actors');
        $count = $count[0]['COUNT(`id`)'] % 10;

        $count == 0 ? $pageNum = $count[0]['COUNT(`id`)'] / 10 : $pageNum = ($count[0]['COUNT(`id`)'] / 10) + 1;
        $pageNum++;


        $arr = explode('/', CURRENT_ROUTE);

        $personModel = new PersonModel();
        if (sizeof($arr) > 2)
            $actors = $personModel->all('actors', 10 * ($arr[2] - 1) + 1, 10);

        else
            $actors = $personModel->all('actors');

        return $this->view('celebrity-grid', compact('actors', 'pageNum'));
    }

    // get actor information such as name, picture and ...
    public function actor($id)
    {
        $personModel = new PersonModel();
        $actor = $personModel->getActor($id[0]);
        $actor = $actor[0];

        $personModel = new PersonModel();
        $actorPictures = $personModel->getActorPicture($id[0]);

        $movieModel = new PersonModel();
        $actorMovies = $movieModel->getActorMovies($id[0]);

        return $this->view('celebrity-single', compact('actor', 'actorPictures', 'actorMovies'));
    }

    // get director information such as name, picture and ...
    public function director($director_id)
    {
        $personModel = new PersonModel();
        $director = $personModel->getDirector($director_id[0]);
        $director = $director[0];

        $personModel = new PersonModel();
        $directorPictures = $personModel->getDirectorPicture($director_id[0]);

        $movieModel = new PersonModel();
        $directorMovies = $movieModel->getDirectorMovies($director_id[0]);

        return $this->view('director-single', compact('director', 'directorPictures', 'directorMovies'));
    }
}
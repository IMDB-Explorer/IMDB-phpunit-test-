<?php

namespace App\application\controller;
session_start();
require_once 'app/application/model/Model.php';
require_once 'app/application/model/MovieModel.php';
require_once 'app/application/model/BlogModel.php';
require_once 'app/application/model/VoteModel.php';
require_once 'app/application/model/PersonModel.php';
require_once 'app/application/model/UserModel.php';

use App\application\model\BlogModel;
use App\application\model\MovieModel;
use App\application\model\PersonModel;
use App\application\model\UserModel;
use App\application\model\VoteModel;

class Home extends Controller
{
    public function home()
    {
        $movieModel = new MovieModel();
        $rewardedMovies = $movieModel->topMovies(" LIMIT 12");

        $movieModel = new MovieModel();
        $recentlyReleasedMovies = $movieModel->recentlyReleasedMovies(" LIMIT 9");

        $movieModel = new MovieModel();
        $mostRatedMovies = $movieModel->popularMovies(" LIMIT 9");

        $movieModel = new MovieModel();
        $newestMovies = $movieModel->recentlyReleasedMovies(" LIMIT 4");

        $actorModel = new PersonModel();
        $topActors = $actorModel->topActors();

        $blogModel = new BlogModel();
        $blog = $blogModel->blog();

        $voteModel = new VoteModel();
        $votes = $voteModel->votes();

        return $this->view('index_light', compact('rewardedMovies', 'recentlyReleasedMovies', 'mostRatedMovies',
            'newestMovies', 'topActors', 'blog', 'votes'));
    }

    public function recentlyReleasedMovies()
    {

        $movieModel = new MovieModel();
        $movies = $movieModel->recentlyReleasedMovies();
        $pageNum = 1;//for pagination just page one

        return $this->view('moviegridfw_light', compact('movies', 'pageNum'));
    }

    public function popularMovies()
    {
        $movieModel = new MovieModel();
        $movies = $movieModel->popularMovies();
        $pageNum = 1;

        return $this->view('moviegridfw_light', compact('movies', 'pageNum'));
    }

    public function vote()
    {
        $candidateId = 0;

        if (isset($_POST['item1']) and $_POST['item1'] == 14)
            $candidateId = 14;

        else if (isset($_POST['item2']) and $_POST['item2'] == 16)
            $candidateId = 16;

        else if (isset($_POST['item3']) and $_POST['item3'] == 17)
            $candidateId = 17;

        else if (isset($_POST['item4']) and $_POST['item4'] == 18)
            $candidateId = 18;

        $user = new UserModel();
        $checkUser = $user->userExists($_SESSION['userId']);
        if ($checkUser == true) {
            header("location:index-light.php?wrong=500");
            $this->redirectBack();
        }

        else {
            $voteModel = new VoteModel();
            $voteModel->storeVote(1, $candidateId, $_SESSION['userId']);
            $voteModel = new VoteModel();
            $voteModel->numberOfVotes($candidateId);
            $this->redirect("Home/home");
        }

    }

    public function aboutUs()
    {
        return $this->view('aboutUs');
    }
}
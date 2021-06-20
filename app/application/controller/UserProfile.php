<?php


namespace App\application\controller;

require_once 'App/application/model/UserModel.php';

use App\application\model\Model;
use App\application\model\MovieModel;
use App\application\model\UserModel;

class UserProfile extends Controller
{
    //retriev user info
    public function profile()
    {
        $user = new UserModel();
        $userProfile = $user->checkUserExists('id', $_SESSION['userId']);
        return $this->view('profile', compact('userProfile'));
    }

    //edit profile
    public function editProfile()
    {
        $userModel = new UserModel();
        $userModel->updateUserProfile($_SESSION['userId'],$_POST);
        $user = new UserModel();
        $userProfile = $user->checkUserExists('id', $_SESSION['userId']);
        return $this->view('profile', compact('userProfile'));
    }

    // add the movie watch list
    public function watchlist()
    {
        $numberOfRows = new MovieModel();
        $count = $numberOfRows->watchlistNumberOfRows($_SESSION['userId']);
        $totalNumberOfMovies = $count[0]['COUNT(`movie_id`)'];
        $count = $count[0]['COUNT(`movie_id`)'] % 10;

        $count == 0 ? $pageNum = $totalNumberOfMovies / 10 : $pageNum = ($totalNumberOfMovies / 10) + 1;

        $arr = explode('/', CURRENT_ROUTE);

        $movieModel = new MovieModel();
        if (sizeof($arr) > 2)
            $watchlist = $movieModel->favoriteMovies($_SESSION['userId'], 10 * ($arr[2] - 1) + 1, 10);

        else
            $watchlist = $movieModel->favoriteMovies($_SESSION['userId']);

        return $this->view('user-favorite-list', compact('watchlist', 'count'));
    }
}
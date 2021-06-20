<?php


namespace App\application\model;


use App\application\controller\Movie;

class MovieModel extends Model
{
    // select recently released top movies == top movies have rewards
    public function topMovies($request = "")
    {
        $query = "SELECT * FROM `movies` WHERE `release_date` > '۱۳۹۴' AND `rewards` IS NOT NULL" . $request . " ; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    // select recently released movies
    public function recentlyReleasedMovies($request = "")
    {
        $query = "SELECT * FROM `movies` WHERE `release_date` > '۱۳۹۶'" . $request . " ; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function popularMovies($request = "")
    {
        $query = "SELECT * FROM `movies` WHERE `score` IS NOT NULL ORDER BY `score` DESC " . $request . " ; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function favoriteMovies($id, $offset = 0, $rowCount = 12)
    {
        $query = "SELECT `id`,`movie_name`,`score`,`picture` FROM  (`movies` JOIN `watchlist` ON `id`=`movie_id`) WHERE `user_id`=" . $id . " LIMIT " . $offset . "," . $rowCount . ";";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function watchlistNumberOfRows($value)
    {
        $db = new Model();
        $movies = $db->select("SELECT COUNT(`movie_id`) FROM `watchlist` WHERE user_id = ? ;", [$value])->fetchAll();
        return $movies;
    }

    public function all($tableName, $offset = 0, $rowCount = 12)
    {
        $query = "SELECT * FROM " . $tableName . " LIMIT  " . $offset . "," . $rowCount . ";";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getMovieId($movieId)
    {
        $query = "SELECT * FROM `movies` WHERE `id` = " . $movieId . " ORDER BY `movie_name` ASC ; ";
        $result = $this->query($query)->fetchall();
        $this->closeConnection();
        return $result;
    }

    public function getMovie($movieId)
    {
        $query = "SELECT * FROM (`movies` JOIN `directors` ON `movies`.`director_id`=`directors`.`id`) WHERE `movies`.`id` = ? ";
        $result = $this->query($query, array($movieId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getMoviePics($movieId)
    {
        $query = "SELECT * FROM `movie_pictures` WHERE movie_id = ? LIMIT 4;";
        $result = $this->query($query, array($movieId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getMovieStars($movieId)
    {
        $query = "SELECT `first_name` , `last_name`,`picture`,`id` FROM (`actors` INNER JOIN `movie_actor` ON `id`=`actor_id`) WHERE movie_id = ? LIMIT 8; ";
        $result = $this->query($query, array($movieId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getMovieGenre($movieId)
    {
        $query = "SELECT * FROM `movie_genre` WHERE movie_id = ? LIMIT 4;";
        $result = $this->query($query, array($movieId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getComedyMovies()
    {
        $db = new Model();
        $movies = $db->select("SELECT * FROM (`movies` JOIN `movie_genre` ON `id`=`movie_id`) WHERE `genre` = ?; ", ['کمدی'])->fetchAll();
        return $movies;
    }

    public function getMovieComments($movieId)
    {
        $query = "SELECT * FROM (`comments` JOIN `users` ON `user_id`=`users`.`id`) WHERE movie_id = ? ; ";
        $result = $this->query($query, array($movieId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function storeMovie($movieId, $userId)
    {
        $db = new Model();
        $db->insert('watchlist', ['movie_id', 'user_id'], [$movieId, $userId]);
        return true;
    }

    public function storeComment($userId, $movieId, $title, $text)
    {
        $db = new Model();
        $db->insert('comments', ['user_id', 'movie_id', 'subject', 'text'], [$userId, $movieId, $title, $text]);
        return true;
    }

    // public function setMovieComment($movieId , $userId) {
    //     $db = new Model() ;
    //     $db->inster('comments' , ['user_id' , 'movie_id' , 'subjetc' , 'text'] , [$userId , $movieIds , $_POST['subject'] , $_POST['text'] ] ) ;
    //     return true ;
    // }
    // select recently released top movies == top movies have rewards

}

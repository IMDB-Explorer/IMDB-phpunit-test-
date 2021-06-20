<?php


namespace App\application\model;


class PersonModel extends Model
{
    public function all($tableName, $offset = 0, $rowCount = 10)
    {
        $query = "SELECT * FROM " . $tableName . " LIMIT " . $offset . "," . $rowCount . "; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    // get biography of person
    public function getActor($actorId)
    {
        $query = "SELECT * FROM `actors` WHERE id = ? ";
        $result = $this->query($query, array($actorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getActorPicture($actorId)
    {
        $query = "SELECT * FROM `actor_pictures` WHERE actor_id = ? LIMIT 4;";
        $result = $this->query($query, array($actorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getDirectorPicture($directorId)
    {
        $query = "SELECT * FROM `director_pictures` WHERE director_id = ? LIMIT 4;";
        $result = $this->query($query, array($directorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getActorMovies($actorId)
    {
        $query = "SELECT `movie_name`,`director_id`,`first_name`,`last_name`,`release_date`,`movies`.`picture` FROM 
                  (`movies` INNER JOIN `movie_actor` ON `movies`.`id` = `movie_actor`.`movie_id`
                            INNER JOIN `directors` ON `movies`.`director_id` = `directors`.`id`) WHERE actor_id = ? LIMIT 8; ";
        $result = $this->query($query, array($actorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getDirectorMovies($directorId)
    {
        $query = "SELECT `movies`.`id`,`movie_name`,`director_id`,`first_name`,`last_name`,`movies`.`picture`,`release_date` FROM 
                   (`movies` INNER JOIN `directors` ON `movies`.`director_id`=`directors`.`id`) WHERE `movies`.`director_id` = ? LIMIT 8; ";
        $result = $this->query($query, array($directorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getDirector($directorId)
    {
        $query = "SELECT * FROM `directors` WHERE id = ? ";
        $result = $this->query($query, array($directorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function topActors()
    {
        $query = "SELECT * FROM `actors` WHERE `score` IS NOT NULL ORDER BY `score` DESC ;";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

}
<?php

class MovieModelTest extends \PHPUnit\Framework\TestCase
{
    
    protected $user;

    public function setUp():void
    {
        $this->user = new \App\application\model\MovieModel;
    }

    // /** @test */
    // public function getMovieGenre()
    // {
    //     $genre= array(0=>array('movie_id' => '1',
    //                                 'genre'=>'اجتماعی',
    //                                 'created_at' => '2020-07-24 11:21:00',
    //                                 'updated_at'=> null,
    //                                ));
    //     $this -> user-> getMovieGenre(1);
    //     $this -> assertEquals($this -> user-> getMovieGenre(1), $genre);
    // }
    // /** @test */
    // public function getMovieStars()
    // {
    //     $actors= array(0=>Array('first_name' => 'پیمان',
    //                                 'laset_name'=>'مَعادی',
    //                                 'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Payman_Maadi_2019.jpg/220px-Payman_Maadi_2019.jpg',
    //                                 'id'=>'10'
    //                                ));
    //     $this->user-> getMovieStars(2);
    //     $this->assertEquals($this->user->getMovieStars(2), $actors);
    // }
    /** @test */
    public function topMovies()
    {
        $watchlist= array(0=>Array('COUNT(`movie_id`)' => '0'));
        $this->user ->watchlistNumberOfRows(0);
        $this->assertEquals($this->user ->watchlistNumberOfRows(0),$watchlist);
    }
    /** @test */
    public function storeComments()
    {
        $this->user->storeComment(2, 1, "طعم گیلاس","great movie!");
        $this->assertEquals($this->user->storeComment(2, 1, "طعم گیلاس","great movie!"),true);
    }

    /** @test */
    public function storeMovie()
    {
        $this->user->storeMovie(1, 2);
        $this->assertEquals($this->user->storeMovie(1, 2),true);
    }
}
?>
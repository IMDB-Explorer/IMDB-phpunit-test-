<?php

class MovieModelTest extends \PHPUnit\Framework\TestCase
{
    
    protected $user;

    public function setUp():void
    {
        $this->user = new \App\application\model\MovieModel;
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
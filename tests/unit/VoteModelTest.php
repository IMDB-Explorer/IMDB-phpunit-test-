<?php

class VoteModelTest extends \PHPUnit\Framework\TestCase
{
    
    protected $user;

    public function setUp():void
    {
        $this->user = new \App\application\model\VoteModel;
    }
    /** @test */
    public function numberOfVotes()
    {
        $this->user-> numberOfVotes(2);
        $this->assertEquals($this->user->numberOfVotes(2),true);
    }
    /** @test */
    public function storeVotes()
    {
        $this->user-> storeVote(1,14,2);
        $this->assertEquals($this->user->storeVote(1,14,2),true);
    }
}

?>
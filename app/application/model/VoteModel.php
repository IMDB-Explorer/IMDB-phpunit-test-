<?php


namespace App\application\model;


class VoteModel extends Model
{
    public function votes()
    {
        $query = "SELECT `title`,`first_name`,`last_name`,`candidate_id`,`picture`
                    FROM  (`votes` JOIN `vote_candidates` ON `id`=`vote_id` JOIN `actors` ON `candidate_id`=`actors`.`id`); ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();

        return $result;
    }

    public function numberOfVotes($id)
    {
        $query = "SELECT `candidate_id` FROM  `users_votes` WHERE `candidate_id` = " . $id . "; ";
        $result = $this->query($query)->fetchAll();
        $num = sizeof($result);

        $db = new Model();
        $db->update('actors',$id, ['score'], [$num+1]);

        return true;
    }

    public function storeVote($voteId, $candidateId, $userId)
    {
        $db = new Model();
        $db->insert('users_votes', ['vote_id', 'candidate_id', 'user_id'], [$voteId, $candidateId, $userId]);
        return true;
    }
}
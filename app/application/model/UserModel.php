<?php


namespace App\application\model;

class UserModel extends Model
{
// select user from DB to check if user exists or not
public function checkUserExists($field, $value)
{
    $db = new Model();
    $user = $db->select("SELECT * FROM `users` WHERE (" . $field . " = ?); ", [$value])->fetch();
    return $user;
}

// store user in DB
public function storeUser($request, $token)
{
    $db = new Model();
    $db->insert('users', ['username', 'email', 'password', 'token'], [$_POST['username'], $_POST['email'], $_POST['password'], $token]);
    return true;
}

public function checkAdmin()
{
    $db = new Model();
    $user = $db->select("SELECT * FROM `users` WHERE `id`=? ;", [$_SESSION['userId']])->fetch();
    if ($user != null)
        return true;
    else
        return false;
}

//    public function updatePassword($userId, $password)
//    {
//        $db = new Model();
//        $changed = $db->update('users', $userId, ['password'], [$password]);
//        if ($changed != null)
//            return true;
//        else
//            return false;
//    }

public function updateUser($id, $fields, $values)
{
    $db = new Model();
    $changed = $db->update('users', $id, $fields, $values);
    if ($changed == true)
        return true;
    else
        return false;
}

public function updateUserProfile($id, $user)
{
    $db = new Model();
    $changed = $db->update('users', $id, ['first_name', 'last_name'], [$user['first_name'], $user['last_name']]);
    if ($changed != null)
        return true;
    else
        return false;
}

public function userExists($tableName, $field, $id)
{
    $db = new Model();
    $user = $db->select("SELECT * FROM " . $tableName . " WHERE " . $field . "=? ;", [$id])->fetch();
//        $user = $db->select("SELECT * FROM `users_votes` WHERE `user_id`=? ;", [$id])->fetch();
    if ($user != null)
        return true;
    else
        return false;
}
}
<?php

function getUsers()
{
    return json_decode(file_get_contents(__DIR__.'/users.json'), true);
}

function getUsersById($id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id){
            return $user;
        }
    }
    return null;
}

function createUser($data)
{

}

function updateUser($data, $id)
{
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id){
            $users[$i] = array_merge($user, $data);

            header("Location: index.php");
        }
    }
    file_put_contents(__DIR__.'/users.json', json_encode($users));
}

function deleteUser($id)
{

}
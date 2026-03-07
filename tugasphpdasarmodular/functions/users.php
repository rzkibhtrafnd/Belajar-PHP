<?php

function findUserByEmail($users, $email)
{
    foreach ($users as $user) {
        if ($user["email"] == $email) {
            return $user;
        }
    }

    return null;
}
?>
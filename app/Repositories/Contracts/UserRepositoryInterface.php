<?php namespace App\Repositories\Contracts;

use App\Models\User;

interface UserRepositoryInterface {

    /**
     * Returns all active users.
     *
     * @return mixed
     */
    public function allActive();

    /**
     * Updates the user.
     *
     * @param $input
     * @param User $user
     * @return mixed
     */
    public function updateUser($input,User $user);
}
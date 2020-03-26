<?php

use Demency\Commons\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Create a user
 *
 * @param array $overrides
 * @param int   $amount
 *
 * @return Collection|User[]|User
 */
function createUser($overrides = [], $amount = 1){
    $users = factory(User::class, $amount)->create($overrides);
    if (count($users) == 1) {
        return $users->first();
    }
    return $users;
}

<?php

namespace App\Adapters\Arcturus;

use App\Interfaces\UserInterface;

class UserAdapter implements UserInterface {
    protected $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function getOnlineFriends(int $total = 10) {
        return $this->userModel->friends()
            ->select(['user_two_id', 'users.id', 'users.username', 'users.look', 'users.motto', 'users.last_online'])
            ->join('users', 'users.id', '=', 'user_two_id')
            ->where('users.online', '1')
            ->inRandomOrder()
            ->limit($total)
            ->get();
    }

    // TODO: Add other methods
}

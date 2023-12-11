<?php
namespace App\Adapters\Factories;

use App\Adapters\Arcturus\UserAdapter as ArcturusUserAdapter;
use App\Adapters\Comet\UserAdapter as CometUserAdapter;
use App\Interfaces\UserInterface;
use App\Models\User;

class UserAdapterFactory {
    public static function create(User $userModel): UserInterface {
        $emulator = config('habbo.site.emulator_type');

        if ($emulator === 'comet') {
            return new CometUserAdapter($userModel);
        }

        return new ArcturusUserAdapter($userModel);
    }
}

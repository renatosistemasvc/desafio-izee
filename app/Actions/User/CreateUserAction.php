<?php

namespace App\Actions\User;

use Auth;
use Exception;
use App\Models\User;

class CreateUserAction
{
    public function execute($data)
    {
        $data["password"] = bcrypt($data["password"]);

        $user = User::create($data);

        return $user;
    }
}

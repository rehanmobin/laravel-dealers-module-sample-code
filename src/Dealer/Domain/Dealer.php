<?php

namespace Carnomaly\Dealer\Domain;

use Illuminate\Foundation\Auth\User;

class Dealer extends User
{
    protected $guarded = ['id'];
    protected $hidden = ['password', 'remember_token'];

    public function getAuthPassword()
    {
        return $this->password;
    }
}

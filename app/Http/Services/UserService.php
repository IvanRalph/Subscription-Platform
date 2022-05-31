<?php

namespace App\Http\Services;

use App\Models\UsersWebsites;

class UserService
{
    protected $model;

    public function __construct(){
        $this->model = new UsersWebsites();
    }

    public function getUserEmailsByWebsite($websiteId)
    {
        $userWebsites = $this->model->whereWebsiteId($websiteId)->with('users')->get()->pluck('users.email');

        return $userWebsites;
    }
}

<?php

namespace App\Http\Services;

use App\Http\Contracts\SubscriptionInterface;
use App\Models\UsersWebsites;

class SubscriptionService implements SubscriptionInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = new UsersWebsites();
    }

    public function subscribe($websiteId, $userId)
    {
        $subscription = UsersWebsites::create([
            'website_id' => $websiteId,
            'user_id' => $userId
        ]);

        return $subscription;
    }


}

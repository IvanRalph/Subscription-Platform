<?php

namespace App\Http\Contracts;

interface SubscriptionInterface
{
    public function subscribe($websiteId, $userId);
}

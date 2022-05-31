<?php

namespace App\Http\Controllers;

use App\Http\Contracts\SubscriptionInterface;
use App\Models\UsersWebsites;
use Illuminate\Http\Request;

class UsersWebsitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $websiteId
     * @param $userId
     * @return \Illuminate\Http\JsonResponse
     */
    public function store($websiteId, $userId, SubscriptionInterface $subscription)
    {
        $sub = $subscription->subscribe($websiteId, $userId);

        return response()->json([
            'success' => true,
            'data' => $sub
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersWebsites  $usersWebsites
     * @return \Illuminate\Http\Response
     */
    public function show(UsersWebsites $usersWebsites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersWebsites  $usersWebsites
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersWebsites $usersWebsites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersWebsites  $usersWebsites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersWebsites $usersWebsites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersWebsites  $usersWebsites
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersWebsites $usersWebsites)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;

class SubscriptionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriptionRequest $request): \Illuminate\Http\JsonResponse
    {
        $subscription = Subscription::create($request->validated());
        return response()->json($subscription, 201);
    }
}

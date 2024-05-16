<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Http\Requests\StoreSubscriptionRequest;
class SubscriptionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriptionRequest $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validated();
        $subscription = Subscription::create($validated);
        return response()->json($subscription, 201);
    }
}

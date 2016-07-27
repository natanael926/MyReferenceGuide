<?php

// $app->get('subscriptions')
// 

// use App\Http\Controllers\SubscriptionController;

$app->get('/', function () use ($app) {

	dd(new SubscriptionController);
    // return $app->version();
});
	

$app->get('subscription', [
	'as' => 'subscription', 'uses' => 'SubscriptionController@index'
]);

$app->get('subscription/{subscriptionId}', [
	'as' => 'subscription/{subscriptionId}', 'uses' => 'SubscriptionController@show'
]);
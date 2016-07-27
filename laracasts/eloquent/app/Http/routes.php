<?php


$app->get('/', function () use ($app) {
	
	return 'Hola mundo';

});


$app->post('subscription', 'SubscriptionController@store');
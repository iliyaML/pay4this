<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_j8dnNtTDo67qXhWPo2RtfOpV');

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken']; // Stripe token

// Create customer in Stripe

$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

// Charge the customer

$charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "currency" => "usd",
    "description" => "Intro to React",
    "customer" => $customer->id
));

// Redirect to success page

header('Location: success.php?tid=' . $charge->id . '&product=' . $charge->description);
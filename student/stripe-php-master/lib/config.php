<?php
// require_once('vendor/autoload.php');//use for composer
require_once('./stripe-php-master/init.php');
$stripe = [
    "secret_key"      => "sk_test_51QaGWQBGQ45oGDbrewARukeBVxTYbuYTfb4v6yrcWD1iaLn0JXfKPnOw49mYIqthAuTXB4FyLMXHerIV7eXsH6IF00jQOKnR4Z",
    "publishable_key" => "pk_test_51QaGWQBGQ45oGDbrt4OTJuYCtEQb7Tj3oRrXhzOmfABSDHroi6K664KPSrdW83OSyvZvofeLRPNIrUJDPDzK5jYl00hPF9O5Yf",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
<?php
require(__DIR__ . '/stripe-php-master/init.php');

$publishableKey="pk_test_51Icr5eSJRxjYjvt5bBS94m57E8rhgj3gQs08aldPsvOjWF6vJ1VsuJE9ZXsJBI3bKFq5SVpxt2Nre6QJBwhGNQAw00Qofkxpsr";
$secretKey="sk_test_51Icr5eSJRxjYjvt5VwsYxD4IdeMwwfxSzQfupjaRQP4kQN5uVCT29E6F97svN1eFmQgRNtRNY2HZeowbVApNclhP00KEY65VX9";

\Stripe\Stripe::setApiKey($secretKey);

?>
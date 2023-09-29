<?php
require('stripe-php-master/init.php');
$Publishable_key="

pk_test_51NvIdGAMvf7wNKEmcnFjEibDO7zIlmGjqpQySuw3rlkVZ3EtBGdpOq7e5fONqkJRuebNoqtg1kmVbP5xXwQtHDbc00ESNGsphc";
$Secret_key="

sk_test_51NvIdGAMvf7wNKEmBUIVig8zhi79350nOd1XPXzkLPXIdLHTcy8uKuNCbP1i1CydarsR4T8N7UJGMjuz1QxRpzKO008J7ssGZI"; 
\Stripe\Stripe::setApiKey($Secret_key);
?>
<?php
session_start();
require('config.php');

if(isset($_POST['stripeToken'])){
\Stripe\Stripe::setVerifySslCerts(false);
$token=$_POST['stripeToken'];

$email=$_POST['stripeEmail'];
$data=\Stripe\Charge::create(array(
    "amount"=>$_SESSION['amount'],
    "currency"=>"inr",
    "description"=>"donation",
    "source"=>$token,
    "receipt_email"=>$email,
));
\Stripe\PaymentIntent::create([
    'amount' => $_SESSION['amount'],
    'currency' => 'inr',
    'payment_method_types' => ['card'],
    'receipt_email' => $email,
  ]);

}
?>
<html>
<head><title>Payment Done</title>
<style>
html{
    background: url("/Images/final1.jpeg") no-repeat center center fixed;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    
}
.main{
    position:fixed;
    top:450px;
    right:250px;
    left:250px;
    bottom:20px;
    width: 800px;
  height: 200px;
  padding: 20px;
  box-sizing: border-box;
  background:white;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Style/style.css">
</head>
<body>
<div class="main">
<p>Thank you for your donation of <?php echo $_SESSION['amount']/100 ?> from email: <?php echo $email ?>. You will receive email conformation.<br><br>
Save the african child, the world's largest continent with highest poverty rate where childrens has to die without food. Your donation will be used to provide the best meals, enreachment care to our recident poor families. It is your generosity and support that makes our work possible.<br><br>
On behalf of everyone at donation campain, especially thankyou for your compassion and support.</p><br>
<a href="index.php"><button>Go Home</burron></a>


</div>
</body>
</html>
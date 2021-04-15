<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<?php
require('config.php');
?>

<head>
	<title>Donation</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <link rel="stylesheet" href="/Style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
       .info{
           position:relative;
           width: 800px;
           height: 250px;
           padding: 20px;
           box-sizing: border-box;
           background:#e6ffff;
       }
	</style>

</head>

<body>
	<header>
        <img class="logo" src="/Images/logo.jpg" alt="Logo" width="150" height="60">
        <nav>
            <ul class="nav_link">
                <li><a href="index.php">Donation</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Blog</a></li>
            </ul>
        </nav>
        <a class="button button1" href="index.php"><button>Contact</button></a>
    </header>
	<main>
   
    <?php 
    if(isset($_GET["amount"])&& $_GET["amount"]>0){ 
        ?>
        
       <form action="paymentcheck.php" method='post'>
      
      <?php $amount=$_GET["amount"];
        $modif=$amount*100; 
        
        $_SESSION['amount'] = $modif;

        ?>
        <script
       src="https://checkout.stripe.com/checkout.js" class="stripe-button"
       data-key="<?php echo $publishableKey?>"
       data-amount=<?php echo $modif ?>
       data-name="donation"
       data-description="donation"
       data-image=""
       data-currency="inr"
       ></script>
       <div class="info"><br><p> <h2><u>Since it is a test payment integration, please use default test card.</u><br>
        Email address: <i>Please provide real email address. Since the receit will be send to that address</i><br>
        Card: 4242 4242 4242 4242<br>
        Exp. Date: Any greater then today's date. Eg.; 12/30<br>
        CVC:123
        </h2></p></div>
       </form>
       <?php }else{ ?>
        <form action="payment.php" metnod="get">
        <label for="fname"><h2>Enter the amount:</h2></label><br>
        <input type="text" id="amount" name="amount"placeholder="eg.,500"><br><br>
        <button type="submit">Donate</button>
        
    </form>
    <?php } ?>
       
    </main>
    
   
</body>
</html>

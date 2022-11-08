<html lang="en">
<head>
 
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700;1,800&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="main.css">
 
 <title>e-Track</title>
</head>

<body>
<nav class="">
<a href="#" class="headerLink"><img class="logo-ico" src="favicon.ico" alt="e"/><h4 class="logo pt-2">Track</h4></a>
</nav>


 <main>
  
 <div class="welcome-container">
  <h1>Welcome Gentle</h1>
   </div>


<!-- the following section holds the section-div for the links -->
<section class="link-section">
<div class="sections-container container">

<a href="addingTransaction.php" class="sect">
 <img src="plus-lg.svg" alt="add transaction" class="section-icon"/>
 <h5>Add transaction</h5>
</a>

<a href="setGoals.php" class="sect">
 <img src="arrow-up-right-square.svg" alt="goals" class="section-icon"/>
<h5>Goals</h5>
</a>

<a href="viewTransaction.php" class="sect">
<img src="calendar3.svg" alt="view transactions" class="section-icon"/>
<h5>View transactions</h5>
</a>

</div>
</section>

<section class="link-section mt-5">
 
<div class="sections-container container total-balance-container">
<h6>Your current balance:</h6>
<h4>$1000</h4>
</div>
</section>

<h5 class="text-center mt-5 mb-4">Transaction history</h5>
 </main>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
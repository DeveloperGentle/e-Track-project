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
 <!-- navigation bar is a single link to the landing page as every other needed link is in the sections-container and the log
out link is at the bottom of the page -->
 <nav>
<a href="#" class="headerLink"><img class="logo-ico" src="favicon.ico" alt="e"/><h4 class="logo pt-2">Track</h4></a>
</nav>



 <main>
  
 <div class="welcome-container">
  <h1>Welcome Gentle</h1>
   </div>


<!-- the following section holds the section-div for the links -->
<section class="link-section">
<div class="sections-container container">
<!-- dividing 3 sections, add,view transactions and goals into links so user can click on one and
 be directed to that page -->

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
<br/>
<br/>
<h3 class="text-center">Add transaction</h3>
<br/>

<!-- form for transaction -->
<form method="POST" action="" class="form-container container">
 <!-- arranging the form fields in a bootstrap grid -->
<div class="row">
 <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
 <input class="form-control me-2 mb-3" type="number" placeholder="Expense">
 <input class="form-control me-2" type="text" placeholder="Transaction name">
 </div>
 <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
 <input class="form-control me-2 mb-3" type="number" placeholder="Income">
 <select class="form-select" id="validationCustom04" required>
      <option   value="">Choose...</option>
      <option>...</option>
    </select>
</div>

</div>
<div class="row mb-3">
 <!-- textarea for transaction details like in previous one -->
 <textarea name="" placeholder="Transaction details..."   rows="8" class="form-control  me-2 transaction-details"></textarea>
</div>

<div class="row">
 <button class="btn btn-outline-success search create-btn" name="submit">Create</button>
</div>
</form>

<a href="#" class="log-out-link">Log out</a>
 </main>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
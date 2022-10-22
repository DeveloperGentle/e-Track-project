<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
<script defer src="node_modules/swup/dist/swup.min.js"></script>
<script defer src="expend.js"></script>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./Fontawesome/fontawesome-free-6.1.1-web/css/all.min.css" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/2026f77c4a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="side-menu">
        <ul style="margin-bottom: -2vh;margin-top:-3.6vh;margin-left: 1vw;">
            <li>
        <div class="brand-name">
            
              
            <h1><a href="index.php">e-Track</a></h1>
        
     
        </div>
    </li>
</ul>
        <ul>
            <a href="/Expend/index.php"><li><i class="fa-solid fa-house"></i> &nbsp; &nbsp;Home</li></a>
            <a href="/Expend/transaction.php"><li> <i class="fa-solid fa-chart-line"></i> &nbsp; &nbsp;Transactions</li></a>
            <a href="/Expend/income.php"><li> <i class="fa-solid fa-user"></i> &nbsp; &nbsp;Income</li></a>
            <a href="/Expend/expense.php"><li> <i class="fa-sharp fa-solid fa-gear"></i> &nbsp; &nbsp;Expenses</li></a>
        </ul>

        <ul style="position:relative; top:43.5vh;margin-left: 1vw;">
           <a href="#" class="logOutLink"> <li>Log out</li></a>
        </ul>
    </div> 
<div class="transition-fade  container-m" id="swup">
<div class="content-1">
<div class="row-heading">
<div class="row-1">
<div class="Tran"><h1 id="transactionsHeader">Transactions</h1></div>
</div>
<div class="filterFlex">
<div class="content-2">
<form action="" method="POST">
<input type="text" placeholder="Search"> 
</form>
</div>
<div class="filter">
<a href="/Expend/addTransaction.php"><button class="add"><i class="fa-solid fa-plus"></i></button></a>
</div>
</div>
<div class="Trans-1">
<div class="totalFlex">
<h3>Total:</h3>
<p class="total">$10,091</p>
</div>
<div class="totalFlex">
<div class="innerFlex">
<h4 class="productName">Cars</h4>
<p class="date">10/12/2022</p>
</div>
<p class="amount">$10,091</p>
</div>
<div class="totalFlex">
 <div class="innerFlex">
<h4 class="productName">Groceries</h4>
<p class="date">10/11/2022</p>
</div>
<p class="amount">$60</p>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
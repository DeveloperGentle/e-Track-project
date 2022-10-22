<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="node_modules/swup/dist/swup.min.js"></script>
    <script defer src="expend.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>modal</title>
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
    
    <div class="container-m transition-fade incomeModal" id='swup'>
<div class="modal">
    <h1 style="font-weight:500;font-size:2.5em;">Add Transaction</h1>
    <p style="text-align: center;">Details</p>
    <div><hr style="border-top: 1px solid #929292; border-bottom: none;"></div>
    <p>Type</p>

    <div style="display:flex; align-items:center; gap:15px;"><div><input type="radio" checked name="transactionChoice"> Income</div> <div><input type="radio" name="transactionChoice"> Expense</div></div>
    <div>
    <div class="modalL"><label for="amount">Amount</label></div>
    
    <div><input type="number" placeholder="$00.00" id="amount" name='amount' class="modalInput"></div>
    </div>
    <div>
    <div class="modalL"><label for="name">Name</label></div>
    <div><input type="text" placeholder="Name" id="name" name='transactionName' class="modalInput"></div>
    </div>
    <div>
    <div class="dateL"><label for="date">Date</label></div>
    <div><input type="date" id="date" name='date'></div>
    </div>
    <div>
    <p style="float:right;"><button type="button" class="createBtn">Create</button></p>
    </div>
</div>

    </div>
</body>
</html>
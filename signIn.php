<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
       
<script defer src="node_modules/swup/dist/swup.min.js"></script>
<script defer src="expend.js"></script>
    <link rel="stylesheet" href="expend.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700;1,800&display=swap" rel="stylesheet">
    <title>e-Track</title>
</head>
<body>
    <header>
        <nav>
        <div><p class="title"><a href='#' class="titleLink">e-Track</a></p></div>
        
        <div class='naVlinkDiv'><a href="#" class="navLink">Home</a> <a class="navLink" href="#">About</a> <a  class="navLink" href="#">Contact</a><div class="menuBar">&#9776;</div></div>
        </nav>
        <div class="dropdown">
            <p><a href="#" class="n">Home</a></p>
             <p><a class="n" href="#">About</a> </p>
             <p><a  class="n" href="#">Contact</a></p>
        </div>
    </header>
   
    <main class="transition-fade" id='swup'>
    <div class="header">
       
        <div class="welcomeFlex">
            <h2 class="welcomeMessage">Welcome Back</h2>
            
        </div>
       <form action="" method='POST'>
        <div class="formbody">
          
                <div class='labels'><label for="email" >Email</label></div>
         
            <div class="input">
                <input type="email" spellcheck = 'false' placeholder="example@email.com" id="email">
                <div class="error"></div>
            </div>
        
            <div class='labels'><label for="password">Password</label></div>
        
        <div class="input">
            <input type="password" spellcheck = 'false' name="password" id="password" placeholder="Password">
            <div class="error"></div>
        </div>
            <input type="submit"class='loginBtn' value="Log in"/>
        </div>
       </form>
       <p><small>Don't have an account?    <a  href="/Expend/signUp.php" >Create an account</a></small></p>
    </div>  
    </main>

    <footer>
        <p>Copyright © 2022. All rights reserved.</p>
    </footer>
    
</body>
</html> 

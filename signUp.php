<?php
$errors = ['email' => '','password' => ''];
$email = $password = '';
if(isset($_REQUEST['submit'])) {
   //email check
   if(empty($_REQUEST['email'])) {
    $errors['email'] = 'Email is required';
   }
   else {
    $email = $_REQUEST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email address is invalid';
    }
   }


   //password check
   if(empty($_REQUEST['password'])) {
    $errors['password'] = 'Password field cannot be empty';
   }

   else {
    $password = $_REQUEST['password'];
    if(strlen($password) < 6 || strlen($password) > 12) {
        $errors['password'] = 'Password must be 6 - 12 characters long';
    }
}

if(array_filter($errors)) {
//errors in form
}

else {
    header('Location: signIn.php');
}
}
//end of POST check


?>


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
            <h2 class="welcomeMessage">Create an account on e-Track</h2>
           </div>
       <form action="signUp.php" method='POST'>
        <div class="formbody">

       
            
                <div class='labels'><label for="email" >Email</label></div>
          
            <div class="input">
                <input type="text" spellcheck = 'false' name='email' placeholder="example@email.com" value='<?php echo $email ?>' id="email">
                <div class="error"><?php echo htmlspecialchars($errors['email']) ?></div>
            </div>
  
            <div class='labels'><label for="password">Password</label></div>
        
        <div class="input">
            <input type="password" spellcheck = 'false' name="password" id="password" name='password' value='<?php echo $password ?>' placeholder="Password">
            <div class="error"><?php echo htmlspecialchars($errors['password']) ?></div>
        </div>

        
            <input type="submit"class='loginBtn' name='submit' value="Sign up"/>
        </div>
       </form>
       <p><small>Already have an account? <a   href="/Expend/signIn.php">Sign in</a></small></p>
    </div>  
    </main>

    <footer>
        <p>Copyright © 2022. All rights reserved.</p>
    </footer>
   

<!-- //         let menuBar = document.querySelector('.menuBar')
//         let dropdown = document.querySelector('.dropDown')
//         menuBar.addEventListener('click', function() {
// if(dropDown.style.height === '0%') {
//     dropdown.style.height = '100%'
//     dropdown.style.overflow = 'visible'
// }
// else {
//     dropdown.style.height = '0%'
//     dropdown.style.overflow = 'hidden'
// }
//         })
    //     if(document.body.style.width <= '850px') {
    //     menuBar.addEventListener('click', function() {
    //         if(links[0].style.fontSize == 0&& links[1].style.fontSize == 0 && links[2].style.fontSize == 0 ) {
    //       links[0].style.fontSize = 'initial'
    //       links[1].style.fontSize = 'initial'
    //       links[2].style.fontSize = 'initial'
    //     }

    //     else {
    //         links[0].style.fontSize = 0
    //       links[1].style.fontSize = 0
    //       links[2].style.fontSize = 0
    //     }}
    //     )
    // } -->
   
</body>
</html> 

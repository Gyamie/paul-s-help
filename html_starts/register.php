<?php  include('config/db_connect.php'); ?>

<?php

$first_name = $last_name = $email = $password = $confirm_password = " ";
$errors = array('first_name' => " ", 'last_name' => " ", 'email' => " ", 'password'=> " ", 'confirm_password' => " ");

if(isset($_POST['submit'])){

//checking validation
if(empty($_POST['first_name'])){
    $errors['first_name'] = "first_name is required <br>";
}else{
 $first_name = $_POST['first_name'];
 if(!preg_match('/^[a-zA-Z\s]+$/',$first_name)){
     $errors['first_name'] = "first_name must be letters and spaces only </br>";
     
 }
}

if(empty($_POST['last_name'])){
    $errors['last_name'] = "last_name is required <br>";
}else{
 $last_name = $_POST['last_name'];
 if(!preg_match('/^[a-zA-Z\s]+$/',$first_name)){
     $errors['last_name'] = "last_name must be letters and spaces only </br>";
     
 }
}

if(empty($_POST['email'])){
    $errors['email'] = "email address is required <br>";
}else{
 $email = $_POST['email'];
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $errors['email'] = "email address must be valid </br>";
     
 }
}

if(empty($_POST['password'])){
    $errors['password'] = "password is required <br>";
}else{
    $password = $_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        $errors['password'] = "Password must be at least 8 characters,contain at least one number, one upper case letter, 
        one lower case letter and one special character.";
      
 }
}

if(empty($_POST['confirm_password'])){
  $errors['confirm_password'] = "confirm password is required <br>";
   }else{
    $confirm_password= $_POST['confirm_password'];
    if($_POST["confirm_password"] !== $_POST["password"]) {
    $errors['confirm_password'] = "confirm_password is invalid";
 }
}
 
if(array_filter($errors)){
    echo "form invalid";
}

}

 //$hashed_password = password_hash($password, PASSWORD_DEFAULT ['cost' => 12]);
?>

<?php include('template/header.php') ;?>
  


<section class = "hero"> 
          
      <h1 style = "padding-top:10rem;">We are here to help your foot look the best.</h1>
          <svg class = "down-arrow" viewBox="0 0 16 132" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.29289 131.707C7.68341 132.098 8.31658 132.098 8.7071 131.707L15.0711 125.343C15.4616 124.953 15.4616 124.319 15.0711 123.929C14.6805 123.538 14.0474 123.538 13.6568 123.929L7.99999 129.586L2.34314 123.929C1.95262 123.538 1.31945 123.538 0.928927 123.929C0.538402 124.319 0.538402 124.953 0.928927 125.343L7.29289 131.707ZM7 -4.37114e-08L6.99999 131L8.99999 131L9 4.37114e-08L7 -4.37114e-08Z" fill="black"/>
            </svg>

</section>
     

   <hr> <hr>  

   <!-- form begining -->
  
   <section class="RForm"> 
   <div class = "Rcontainer">
     <form action="register.php" method="POST">
         <h1>Register</h1>
         <div class="Rform-inner">
             <div class = "Rinput-holder">
             <input type="text" class="Rinput-text" name = "first_name" value = "<?php echo htmlspecialchars($first_name);?>" > 
             <span class ="label">first_name</span>
             <div style ="color:red;"><?php echo $errors['first_name'];?></div> 
             </div>
             <div class = "Rinput-holder">
             <input type="text" class="Rinput-text" name = "last_name" value = "<?php echo htmlspecialchars($last_name);?>" > 
             <span class ="label">last_name</span>
             <div style ="color:red;"><?php echo $errors['last_name'];?></div> 
             </div>

             <div class = "Rinput-holder">
             <input type="text" class="Rinput-text" name = "email" value = "<?php echo htmlspecialchars($email);?>"> 
             <span class ="label">Email Address</span>
             <div style ="color:red;"><?php echo $errors['email'];?></div>
             </div>
              
             <div class = "Rinput-holder">
             <input type="text" class="Rinput-text" name = "password" value = "<?php echo htmlspecialchars($password);?>"> 
             <span class ="label">password</span>
             <div style ="color:red;"><?php echo $errors['password'];?></div>
             </div>

             <div class = "Rinput-holder">
             <input type="text" class="Rinput-text" name = "confirm_password" value = "<?php echo htmlspecialchars($confirm_password);?>">
             <span class ="label">confirm password</span>
             <div style ="color:red;"><?php echo $errors['confirm_password'];?></div>
             </div>
         
             <center>
             <input type = "submit" name = "submit" value = "submit">
</center>
              <p>click here on <a href="login.php">login</a></p>
         </div>
     </form>
     </div>

     <!-- end of form -->

     <br><br><br>
     <section class = "more-know"> 
          <h3><u> We are here to help your foot look the best.</u></h3>
<p>Sneaker history, like any great source of history, happens to produce riveting narratives. Kicks aren't only 
worn on the court. They are personally built, crafted and designed for individuals.
Because of that, amazing backstories go hand in hand with these shoes. Michael Jordan's 
line of kicks stands out as the poster child of compelling narratives, but there are so many other options out there.
        </p>
      </section>
</section> 
        </div>


        <?php include('template/footer.php') ;?>

        <script src = "js/index.js"></script>

<?php

$name = $email = $comment = $message= "";
$errors = array('name' => " ", 'email' => " ", 'comment'=> " ", 'message' => " ");

if(isset($_POST['submit'])){

//checking validation
if(empty($_POST['name'])){
    $errors['name'] = "name is required <br>";
}else{
 $name = $_POST['name'];
 if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
     $errors['name'] = "name must be letters and spaces only </br>";
     
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


if(empty($_POST['message'])){
   $errors['message'] = "message is required <br>";
  }else{
    $message = $_POST['message'];
      if(!preg_match('/^[a-zA-Z\s]+$/',$message)){
          $errors['message'] = "message must be letters and spaces only </br>";
          
      }
     }
}

// end of validation ?>


<?php include('template/header.php') ;?>

      <section class = "hero"> 
          <h1 style = "padding-top:10rem;">We are here to help your foot look the best.</h1>
          <svg class = "down-arrow" viewBox="0 0 16 132" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.29289 131.707C7.68341 132.098 8.31658 132.098 8.7071 131.707L15.0711 125.343C15.4616 124.953 15.4616 124.319 15.0711 123.929C14.6805 123.538 14.0474 123.538 13.6568 123.929L7.99999 129.586L2.34314 123.929C1.95262 123.538 1.31945 123.538 0.928927 123.929C0.538402 124.319 0.538402 124.953 0.928927 125.343L7.29289 131.707ZM7 -4.37114e-08L6.99999 131L8.99999 131L9 4.37114e-08L7 -4.37114e-08Z" fill="black"/>
            </svg>
      </section>
      <br> <br>

   <hr> <hr> 
   <br> <br> <br> <br>
   <section class="mainForm"> 
   <div class = "form_container">
     <form action="contact.php" method="POST">
         <h1>Contact Us!</h1>
         <div class="form-inner">
             <div class = "input-holder">
             <input type="text" class="input-text" name = "name" value = "<?php echo htmlspecialchars($name);?>" > 
             <span class ="label">Full Name</span>
             <div style ="color:red;"><?php echo $errors['name'];?></div>
             </div>

             <div class = "input-holder">
             <input type="text" class="input-text" name = "email" value = "<?php echo htmlspecialchars($email);?>"> 
             <span class ="label">Email Address</span>
             <div style ="color:red;"><?php echo $errors['email'];?></div>
             </div>
              
             <div class = "input-holder">
             <input type="text" class="input-text" name = "comment" value = "<?php echo htmlspecialchars($comment);?>"> 
             <span class ="label">comment</span>
             <div style ="color:red;"><?php echo $errors['comment'];?></div>
             </div>

             <div class = "input-holder">
             <textarea type="text" class="input-text" name = "message" value = "<?php echo htmlspecialchars($message);?>"></textarea>
             <span class ="label">Message</span>
             <div style ="color:red;"><?php echo $errors['message'];?></div>
             </div>
             <center>
             <input type = "submit" name = "submit" value = "submit">
</center>
         </div>
     </form>
     </div>

</section>
        </div>


        <?php include('template/footer.php') ;?>
        <script src = "js/index.js"></script>

<?php
 //if user comme from REQUEST
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['username']; 
  $email = $_POST['email']; 
  $phone = $_POST['phone']; 
  $msg = $_POST['message']; 

  //creating Array of errors
  $formError = Array();
  if(strlen($name)<=3){
    $formError[] = 'the name most be larger !!';
  }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- icones -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- design css -->
  <link rel="stylesheet" href="css/contact.css">  
  <!-- normalize css -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>Contact</title>
</head>
<body>
  <div class="error-msg">
    <?php
    if(isset($formError)){
      foreach($formError as $error){
        echo $error . "<br>";
      }
    }
    ?>
  </div>
  <div class="container">
  <h1 class="text-center">Contact Me</h1>
    <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
      <input
        type="text" 
        class="form-control" 
        name="username" 
        placeholder="Username">
        <i class="fa-solid fa-circle-user"></i>
      <input 
        type="text" 
        class="form-control" 
        name="email" 
        placeholder="Email">
        <i class="fa-solid fa-envelope"></i>
      <input 
        type="text" 
        class="form-control" 
        name="phone" 
        placeholder="phone number">
        <i class="fa-solid fa-phone"></i>
      <textarea 
        name="message" 
        class="form-control contact-text" 
        placeholder="Your Message">
      </textarea>
      <input 
        type="submit" 
        class="btn btn-success " 
        value="Send message">
        <i class="fa-solid fa-paper-plane send-icone"></i>
    </form>
  </div>
  <script src="js/jquery-1.12.4.min (1).js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
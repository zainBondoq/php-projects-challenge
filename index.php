<?php
$name = '';
$error = '';
if(isset($_POST['submit'])){
  // Check if name is empty
  if(empty($_POST['name'])){
    $error = "Please enter your name.";
  } else {
    // Sanitize input
    $name = htmlspecialchars($_POST['name']);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP First App</title>
    <style>
      * {
        font-family: sans-serif;
      }
      .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .holder {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .hero {
        margin-bottom: 20px;
        font-size: 24px;
        align-items: center;
        text-align: center;
      }
      .error {
        color: red;
        margin-bottom: 10px;
        text-align: center;
      }
      .holder input[type="text"] {
        height: 30px;
        font-size: 16px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 250px;
      }
      .holder input[type="submit"] {
        margin-top: 10px;
        height: 36px;
        font-size: 18px;
        color: white;
        border: none;
        width: 250px;
        background-color: crimson;
        cursor: pointer;
      }
      .footer {
        margin-top: 20px;
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <h1 class="hero">
      👋🏻 Welcome
      <?php echo $name; ?>
      to Log In 👋🏻
    </h1>
    <?php if($error): ?>
    <div class="error">
  
      <?php echo $error; ?></div>
    <?php endif; ?>
    <div class="container">
      <div class="holder">
        <form action="index.php" method="post">
          <input type="text" placeholder="Enter username.." name="name" />
          <input type="submit" name="submit" value="Submit" />
        </form>
      </div>
    </div>
    <h4 class="footer">Made with <span>❤️</span></h4>
  </body>
</html>

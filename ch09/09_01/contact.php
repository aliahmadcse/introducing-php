<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Get and post</title>
  <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
  <h1>Contact Us</h1>
  <form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
    <p>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
    </p>
    <p>
      <label for="comments">Comments:</label>
      <textarea name="comments" id="comments"></textarea>
    </p>
    <p>
      <input type="submit" name="send" id="send" value="Send Comments">
    </p>
  </form>
  <pre>
    <?php
    if ($_GET) {
      echo 'The $_GET array is set: <br>';
      print_r($_GET);
    }
    elseif($_POST){
      echo 'The $_POST array is set: <br>';
      print_r($_POST);
    }
    ?>
</pre>
</body>

</html>
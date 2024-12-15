<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/index.css" />
    <script src="assets/index.js"></script>
    <title>PHP Form Demo</title>
  </head>
  <body>
    <?php
      // custom alert function
      function alert($string) {
        echo "<script>alert('$string');</script>";
      }

      // On form submission
      if(isset($_POST["submit"])) { // Name of $_POST variable, what's in the name=''
        // If submitted
        if(isset($_POST["name"]) && isset($_POST["age"])) {
          // If both name and age have values
          alert("Name value: " . $_POST["name"] . "\\nAge value: " . $_POST["age"]);
        }
      }
    ?>
    <form method="POST" onsubmit="return validate();">
      <label for="name">Name:</label>
      <input type="text" name="name" required/>
      <br/><br/>
      <label for="age">Age:</label>
      <input type="number" name="age" required/>
      <br/><br/>
      <input type="submit" name="submit" value="Test" />
    </form>
  </body>
</html>

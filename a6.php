
<?php

require "validate.php";
require "results.php";

//VALIDATION RESULTS
$val_results = array();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Assignment 6</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
            $.validate();
      });
    </script>

  </head>
  <body>

    <div class="wrapper">

      <h1>Assignment 6: Form Validation with jQuery and PHP</h1>

      <form action="a6.php" method="post">

        <label for="email">  Please enter your email address:

          <input type="text" name="email" id="email" data-validation="email" placeholder="john.smith@example.com" 
                 value="<?php if(isset($_POST['email'])) { echo $_POST['email'];}?>">

          <?php $val_results[] = validate('email'); ?>

        </label>

        <fieldset>
          <legend> Please select your three favorite animals:</legend>

            <input type="checkbox" name="animals[]" id="chicken" value="chicken" data-validation="checkbox_group" 
                   data-validation-qty="min3"
                   <?php if(isset($_POST['animals']) && in_array("chicken", $_POST['animals'])){ echo "checked='checked'";}?>>
              <label for="chicken">Chicken</label>

            <input type="checkbox" name="animals[]" id="cow" value="cow" data-validation="checkbox_group" 
                   data-validation-qty="min3"
                   <?php if(isset($_POST['animals']) && in_array("cow", $_POST['animals'])){ echo "checked='checked'";}?>>
              <label for="cow">cow</label>

            <input type="checkbox" name="animals[]" id="whale" value="whale" data-validation="checkbox_group" 
                   data-validation-qty="min3"
                   <?php if(isset($_POST['animals']) && in_array("whale", $_POST['animals'])){ echo "checked='checked'";}?>>
              <label for="whale">whale</label>

            <input type="checkbox" name="animals[]" id="bee" value="bee" data-validation="checkbox_group" 
                   data-validation-qty="min3"
                   <?php if(isset($_POST['animals']) && in_array("bee", $_POST['animals'])){ echo "checked='checked'";}?>>
              <label for="bee">  bee</label>

            <input type="checkbox" name="animals[]" id="doggo" value="doggo" data-validation="checkbox_group" 
                   data-validation-qty="min3"
                   <?php if(isset($_POST['animals']) && in_array("doggo", $_POST['animals'])){ echo "checked='checked'";}?>>
              <label for="doggo">doggo</label>

            <input type="checkbox" name="animals[]" id="kitten" value="kitten" data-validation="checkbox_group" 
                   data-validation-qty="min3"
                   <?php if(isset($_POST['animals']) && in_array("kitten", $_POST['animals'])){ echo "checked='checked'";}?>>
              <label for="kitten">kitten</label>

            <input type="checkbox" name="animals[]" id="jellyfish" value="jellyfish" data-validation="checkbox_group" 
                   data-validation-qty="min3"
                   <?php if(isset($_POST['animals']) && in_array("jellyfish", $_POST['animals'])){ echo "checked='checked'";}?>>
              <label for="jellyfish">jellyfish</label>

              <?php $val_results[] = validate('animals'); ?>

        </fieldset>

        <label for="date">  Please enter your favorite date: (yyyy/mm/dd)

          <input type="text" name="date" id="date" data-validation="date" data-validation-format="yyyy/mm/dd" placeholder="yyyy/mm/dd"
                 value="<?php if(isset($_POST['date'])) { echo $_POST['date'];}?>">

          <?php  $val_results[]= validate("date"); ?>
      </label>

        <input type="reset" name="" value="Reset Form">

        <input type="submit" value="submit form">

      </form>

      <?php displayResults($val_results); ?>

      </div> <!--END WRAPPER -->

  </body>
</html>

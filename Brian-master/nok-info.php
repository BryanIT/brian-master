<?php
include('config.php');
include('session.php');
  $msg = '';
  $errors = array();
if (isset($_POST['submit'])) {
  $FirstName =$db->real_escape_string(htmlspecialchars($_POST["firstname"]));
  $surname =$db->real_escape_string(htmlspecialchars($_POST["surname"]));
  $relationship =$db->real_escape_string(htmlspecialchars($_POST['relationship']));
  $contact =$db->real_escape_string(htmlspecialchars($_POST["contact"]));
  $address1 =$db->real_escape_string(htmlspecialchars($_POST["address1"]));
  $address2 =$db->real_escape_string(htmlspecialchars($_POST["address2"]));
  $postalCode =$db->real_escape_string(htmlspecialchars($_POST["postalCode"]));
  $city =$db->real_escape_string(htmlspecialchars($_POST["city"]));

  if (count($errors) == 0) {
      require_once 'session.php';
    $sql = "INSERT INTO `nextofkin`('userID',`FirstName`, `Surname`, `relationship`, `contact`, `addres1`, `address2`, `postalCode`, `city`) VALUES ('$login_id','$FirstName','$surname','$relationship','$contact','$address1','$address2','$postalCode','$city')";
    $run = mysqli_query($db,$sql);
    if ($run) {
       
      $msg = '<div class="alert alert-success">successful update</div>';
      // header("Location:Infopanel.php");
      // exit;
    }else{
      $msg = '<div class="alert alert-danger">Unsuccessful update</div>';
    }
  } else {
    $msg = '<div class="alert alert-danger">Error occurred</div>';
  }
  
}
?>
<html lang="en">

  <head>

    <meta charset "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
     shrink-to-fit=no, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="minutiae.css">

  </head>

  <body>
    <!--Main Column Element-->
    <div class="col-sm-12">
      <!--Card Element-->
      <div class="card bg-secondary text-black">
        <div class="card-title">
          <img class="image-responsive center" src="tj3logo.png" alt="Card image">
        </div>

        <form method="post" id="fileForm" role="form" enctype="multipart/form-data">
        <fieldset><legend class="text-center"> <span id="title"> Next of Kin Details </span> <br /><small>(<span class="req">
          <strong>required *</strong></span> )</small></legend>
            <div class="alert">
            <?php 
              echo $msg;
            ?>
            </div>

          <div class="row">
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label for="firstname"><span class="req">* </span> First name : </label>
              <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required />
              <div id="errFirst">
              </div>
            </div>

              <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="surname"><span class="req">* </span> Surname : </label>
                <input class="form-control" type="text" name="surname" id = "txt"
                  onkeyup = "Validate(this)" required />
                <div id="errLast">
                </div>
              </div>
          </div>

          <div class="form-group">
            <label for="email"><span class="req">* </span> Relationship :</label>
            <input class="form-control" required type="text" name="relationship" id = "email"  onchange="email_validate(this.value);" />
            <div class="status" id="status">
            </div>
          </div>

          <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Contact :</label>
            <input class="form-control" required type="tel" maxlength="10" name="contact" id="phone"  placeholder="Phone Number"  onchange="email_validate(this.value);" />
            <div class="status" id="status">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label for="address1"><span class="req">* </span> Address 1 : </label>
              <input required type="text" name="address1" id="phone" class="form-control"
                maxlength="10" onkeyup="validate(this);"/>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label for="Postcode"><span class="req">* </span> Postal code : </label>
              <input required type="text" name="postalCode" id="postcode" class="form-control"
                maxlength="10" onkeyup="validate(this);"/>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label for="address2"> Address 2 : </label>
              <input type="text" name="address2" id="phone" class="form-control" onkeyup="validate(this);"/>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label for="dateofbirth"><span class="req">* </span>City : </label>
              <input required type="text" name="city" id="city" class="form-control" onkeyup="validate(this);"/>
            </div>
          </div>

          <!-- <div class="form-group">

            <?php //$date_entered = date('d/m/Y H:i:s'); ?>
            <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
            <input type="hidden" value="0" name="activate" />
            <hr />

            <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ?
              'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">  
            <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">
              terms and conditions</a> for Registration.</label>
            <span class="req">* </span>
          </div> -->

          <div class="form-group">
            <input class="btn btn-success" type="submit" name="submit" value="Register" />
          </div>


        </fieldset>
        </form>
        <!--/Register form -->
      </div>
      <!--/Card Element-->
    </div>
    <!--/Column Element-->
  </body>

</html>

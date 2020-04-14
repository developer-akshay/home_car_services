<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
    <?php    session_start();     
    ?>
    <!-- partial:index.partial.html -->
    <!-- multistep form -->
    <form id="msform" method="$_POST" action="user_login.php">
      <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">ADDRESS</li>
          <li>confirm</li>
          <li>payment mode</li>
        </ul>
      <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">ADDRESS CHECK</h2>
          <h3 class="fs-subtitle">This is step 1</h3>
          <input type="text"  name="email"        placeholder="Email"       value="<?php echo$_SESSION['email']; ?>"/>
          <textarea           name="address"      placeholder="Address"     value="<?php echo$_SESSION['address']; ?>"></textarea>
          <input type="text"  name="city"         placeholder="city"        value="<?php echo$_SESSION['city']; ?>"/>
          <input type="text"  name="postal_code"  placeholder="postal code" value="<?php echo$_SESSION['postal_code']; ?>"/>
          <input type="text"  name="phone"        placeholder="phone"       value="<?php echo$_SESSION['phone']; ?>"/>

          <!-- edit karna ha  -->
          <input type="submit" name="editf1" class="action-button" value="Edit" />
          <!-- edit it -->

          <input type="button" name="next"     class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
          <h2 class="fs-title">PAKAGE SELECTED</h2>
          <h3 class="fs-subtitle">Marvellous choice…</h3>
          <input type="text"    name="twitter"  placeholder="pakage" />
          <input type="button"  name="previous" class="previous action-button" value="Previous" />
          <input type="button"  name="next"     class="next action-button" value="Next" />
        </fieldset>
        
        <fieldset>
          <h2 class="fs-title">PAYMENT MODE</h2>
          <h3 class="fs-subtitle">We will never sell it</h3>
          cash in hand:<input type="radio" name="cash on delivery" placeholder="First Name" />
          
          
          <input type="button" name="previous"  class="previous action-button" value="Previous" />
          <input type="submit" name="submit"    class="submit action-button" value="Submit" />
        </fieldset>
    </form>
    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>

</body>
</html>

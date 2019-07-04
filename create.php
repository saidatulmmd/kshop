<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders || K - Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">K - Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li class="active"><a href="orders.php">My Orders</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

<h2>Add Product</h2>
<table>
	<tr>
		<td><label for="id">Id</label></td>
		<td><input type="text" name="id" size="50"/></td>
	</tr>
	<tr>
		<td><label for="code">Product Code</label></td>
		<td><input type="text" name="code" size="50"/></td>
	</tr>
	<tr>
		<td><label for="name">Product Name</label></td>
		<td><input type="text" name="name" size="50"/></td>
	</tr>
	<tr>
		<td><label for="desc">Description</label></td>
		<td><textarea name="desc" rows="10" cols="40"></textarea></td>
	</tr>
	<tr>
		<td><label for="image">Product Image Name</label></td>
		<td><input type="text" name="image" size="50"/></td>
	</tr>
	<tr>
		<td><label for="qty">Quantity</label></td>
		<td><input type="text" name="qty" size="50"/></td>
	</tr>
	<tr>
		<td><label for="price">Price</label></td>
		<td><input type="text" name="price" size="50"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Add Product"/></td>
	</tr>
</table>
	</form>
</body>
</html>
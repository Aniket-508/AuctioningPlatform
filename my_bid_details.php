<?php
session_start(); 
include("database.php");
$id_name=$_GET['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AUCTIONING FORUM</title>

<meta name="keywords" content="photo blog template, free website layout, CSS, download HTML" />

<meta name="description" content="Photo Blog Template, Free xHTML/CSS Layout, Free Website Template from TemplateMo.com" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#templatemo_container #templatemo_left_section #templatemo_left_content #form3 table {
	text-align: center;
}
</style>
</head>

<body>

<div id="templatemo_container">

  <div id="templatemo_left_section">

   <div id="templatemo_left_header">

     <div id="templatemo_left_title"> AUCTIONING FORUM </div>

     <div id="templatemo_left_slogan"> Enjoy With Bidding Application...</div>

     <div id="templatemo_latest"><a href="#"> NEW PRODUCTS </a></div>

   </div>

   <div id="templatemo_left_menu">

     <div class="templatemo_topmenu">

       <ul>
         <li><a href="user_profile.php" >HOME</a></li>
         <li ><a href="add_product.php">ADD PRODUCT</a> </li>
          <li><a href="my_bid.php" >MY BIDDING</a></li>
         <li class="current"><a href="category.php">CATEGORIES</a></li>
        
          <li><a href="index.html">LOGOUT</a></li>
       </ul>

      </div>

   </div>

   <div id="templatemo_left_content">

     <h1>BIDDING DETAILS</h1>

     <form id="form3" name="form3" method="post" action="">
       <table width="100%" border="0" cellspacing="5">
         <tr>
         <?php
		
		$s=mysql_query("select * from bidding Where product_name='$id_name'");
while($row=mysql_fetch_array($s))
{
		 ?>
         
         
            <?php
}

?>
       </table>
     </form>
     <table width="90%" border="0">
       <tr>
       <td width="24%"><h4>Product Name</h4></td>
         <td width="24%"><h4>BEDDER NAME</h4></td>
         <td width="24%"><h4>BIDDING PRICE</h4></td>
         <td width="28%"><h4>E-MAIL</h4></td>
       </tr>
        <?php
		 include('database.php');
		$s=mysql_query("select * from bidding where product_name='$id_name' ");
while($row=mysql_fetch_array($s))
{
		 ?>
         <tr>
          <td><?php echo $row['product_name']; ?></td>
         <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['bid_price']; ?></td>
           <td><?php echo $row['email']; ?></td>
         </tr>
         <?php
$row++;
}
?>
     </table>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="templatemo_right_section">

    <div id="templatemo_right_top"></div>

    <div id="templatemo_right_search">

      <form id="form1" name="form1" method="post" action="">

        <label>

        <input type="text" name="search_item" id="search_item" />

        </label>

            <label>

            <input type="submit" name="search_btn" id="search_btn" value="Search" />

        </label>

      </form>

    </div>
    <div id="templatemo_contact"><h2>QUICK CONTACT</h2>

      <p>Tel: 010-100-1001<br />

        Fax: 020-200-2002<br />

        Email: info [at] AUCTIONING FORUM</p>

    </div>

  </div>

  <div id="templatemo_footer">Copyright ©  Your AUCTIONING FORUM</div>

</div>
</body>
</html>
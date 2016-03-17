<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Bootstrap 101 Template</title>

    <link href="includes/style.css" rel="stylesheet">
  </head>
  <body>
  <form action="<?php echo base_url();?>index.php/insert/insertdata" method="post" >
  <table>
  <tr>
    <th>Email</th>
    <th>Adress</th>
  </tr>
  <tr>
    <td>
    <input type="email" name='email'  placeholder="Email"></td>
    <td>
    <input type="text" name="adress"   placeholder="Adress"></td>
  </tr>
  <tr>
    <th>Contact</th>
    <th>Password</th>
  </tr>
  <tr>
    <td>
    <input type="text" name="contact" placeholder="Contact"></td>
    <td>
    <input type="password" name="password"  placeholder="Password">

    <input type="submit" value="Click To insert " name="submit" >
    </td>
  </tr>
  
</table>
 </form>

 <table>
   <tr>
     <td>#</td>
     <td>Email</td>
     <td>Contact</td>
     <td>Password</td>
     <td>Address</td>
   </tr>
   <?php 
   $i=1;
    foreach ($Student as $Result) {
   ?>
   <tr>
     <td><?php echo $i;?></td>
     <td><?php echo $Result->email; ?></td>
     <td><?php echo $Result->contact; ?></td>
     <td><?php echo $Result->password; ?></td>
     <td><?php echo $Result->adress; ?></td>
   </tr>
   <?php $i++;} ?>
 </table>
 </body>
</html>
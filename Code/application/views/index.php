<!DOCTYPE html>
<html>
<head>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
    width: 500px;
    margin-left:300px; 
}


</style>
</head>

<body>
<div >
  <form action="<?php echo base_url(); ?>index.php/insert/insertdata" method="post">
    <input type="text" id="fname" name="first" placeholder="First Name" >

    <input type="text" id="lname" name="last" placeholder="Last Name">

    <label for="country">State</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" name="saveinfo" value="Submit">
  </form>
</div>
<div >
    <table>
      <tr  style="font-size: 20px; ">
        <td>
          First Name&nbsp;&nbsp;|&nbsp;&nbsp;
        </td>
        <td>
          Last Name&nbsp;&nbsp;|&nbsp;&nbsp;
        </td>
        <td>
          State &nbsp;&nbsp;|&nbsp;&nbsp;
        </td>
        <td>
          Delete &nbsp;&nbsp;|&nbsp;&nbsp;
         </td> 
        <td>
          Edit
         </td>
      </tr>
      <?php 
      $i=1;
      foreach ($Student as $row) 
      {
       ?>
      <tr >

        <td >
          <font color="#6b6b47"><?php echo $row->first; ?></font>
        </td>
        <td>
          <font color="#6b6b47"><?php echo $row->last; ?></font>
        </td>
        <td>
          <font color="#6b6b47"><?php echo $row->state; ?></font>
        </td>
        <td>
        <a href="<?php echo  base_url(); ?>index.php/insert/deldata/<?php echo $row->id; ?>">Delete</a>
        </td>
         <td>
        <a href="<?php echo  base_url(); ?>index.php/insert/edit/<?php echo $row->id; ?>">Edit</a>
        </td>
      </tr>
      <?php $i++; } ?>
    </table>
</div>


</body>
</html>

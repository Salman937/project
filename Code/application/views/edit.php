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
    width: 400px;
    margin-left:300px; 
}


</style>
</head>

<body>
  <div >
    <form action="<?php echo base_url(); ?>index.php/insert/updatedata" method="post">
 <input type="text" id="fname" name="first" placeholder="First Name" value="<?php echo $edit->first ?>" >
   <input type="text" id="lname" name="last" placeholder="Last Name" value="<?php echo $edit->last ?> " >

    <label for="country">State</label>
    <select id="country" name="country" value="<?php echo $edit->State ?>" >
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
      <input type="hidden" name="ID" value="<?php echo $edit->id ?>"> 
      <input type="submit" name="updateinfo" value="Submit">
  </form>
</div>


</body>
</html>

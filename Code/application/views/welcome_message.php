<?php $this->load->view('includes/header'); ?>
<form action="<?php echo base_url(); ?>index.php/welcome/savedata" method="post">
	 <label>User Name </label>
	 <input type="text" name="username">
     <label>Password</label>
     <input type="text" name="password">
     <input type="submit" value="submit" name="saveinfo"> 

</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Comments With Ajax</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
<script src="jquery.js"> </script>

<script type="text/javascript">

$(function()
{
	showdata();
	
	$('#save').click(function()
	{
		var namestudent =  $('#studentname').val();
		var genderstudent =  $('#gender').val();
		var phonestudent =  $('#phone').val();
		$.ajax({
			
			url   :"salman.php",
			type  :"POST",
			async :false,
			data  :
					{
						   buttonsave : 1,
						   studentname : namestudent,
						   gender   : genderstudent,
						   phone  : phonestudent
					},
			success : function(result)
			{
				showdata();
			}
	});
		
	});
	
})

function showdata()
{
	$.ajax({
		url  : "salman.php",
		type  : "POST",
		async  : false,
		data : 
		{
			showtable : 1
		},
		success : function(re)
		{

			$('#showdata').html(re);
		}
	});
	
}
</script> 

  </head>
  <body>
        
		<!-- Navbar Strat  -->
		
		<nav class="navbar navbar-inverse">
		   <div class="container-fluid">
		    <div class="navbar-header">
			  <a class="navbar-brand" href="#">
				
			  </a>
			</div>
		  </div>
		</nav>
		
		<!-- Navbar Ends  -->
		
		<!-- form Strat  -->
		     
			<div id="testforajax">
<tr>


<td>
      <div class="col-sm-2">
    <input type="text" class="form-control" id="studentname"  name="studentname" placeholder="Studnet Name"> 
	</div>
	</td>
</tr>


<td>
 <div class="col-sm-2">
    <input type="text" class="form-control" id="gender"  name="gender" placeholder="Gender"> 
	</div></td>
</tr>


<td>
<div class="col-sm-2">
    <input type="text" class="form-control" id="phone"  name="phone" placeholder="Phone"> 
	</div> </td>
</tr>
<input type="button" value="save" id="save" class="btn btn-default">

</div> 
<div>
 

</div>


		<!-- form Ends  -->

		
		<!-- Table Strat  -->
	<br>	
          <div class="container">
		    <div class="col-sm-5">
			   <div class="table-responsive">
                 <table border="1">
 <thead>
 <th>ID</th>
 <th>StudnetName</th>
 <th>Gender</th> 
 <th>Phone</th>
 <th>Action</th>
 </thead>
 <tbody id="showdata">  </tbody>
 
 </table>
               </div>
			</div>
          </div> 
		
		<!-- Table Ends  -->
		
		
		
		
		
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
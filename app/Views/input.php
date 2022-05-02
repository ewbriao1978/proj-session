<!DOCTYPE html>
<html lang="en">
<head>
<style>
	.mystyle{
		color: red
	}
</style>
	
	<title>My session project</title>
	<!-- -->
</head>
<body>
	<?php
		if (session()->get('my_messageOk')){
	?>
	<div class="mystyle">
		<?php echo "<strong>".session()->getFlashdata('my_messageOk')."</strong>";?>
	</div>

 <?php
		}
 ?>

<form action="<?php echo base_url('myviewroute');?>" method = "post"> 

<label for = "nameinput"> Input something here </label>
<input type="text" name = "inputData">

<button type "submit" name="submit">Submit</button>

</form>




</body>
</html>

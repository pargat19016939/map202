<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
	

<form action="/courses/insertdata" method="POST">
  <p>
	    <label>Course id</label></p>
  <input type="text" name="courseid">


  <p>
	   <label>Department</label></p>

  <input type="text" name="department">
 
  <p>
	   <label>Program</label></p>
  <input type="text" name="program">
 
    <p>
		 <label>Course Name</label></p>
  <input type="text" name="coursename">
 
  <br>
	<br>
  <button type="submit">Submit</button>	 
</form>
	</div>
<?php require_once 'app/views/templates/footer.php' ?>
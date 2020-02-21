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
	 <?php
   $isSuccessfull=$data['is_insert_successfull'];
    if(isset($isSuccessfull))
    {
        if($isSuccessfull)
        {
            echo "<div> <strong>A record has been inserted successfully.</strong></div>";
        }
        else{
            echo "<div> <strong>Insertion Failed.</strong></div>";
        }
    }
  ?>
</form>
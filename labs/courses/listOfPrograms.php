<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <ul class="list-group">
  <?php
  foreach($data['programs'] as $programs)
  {
   
	   $prog=$programs['program'];
	  
    	$pd=$data["department"]."/".$programs["program"];
	  
	  echo "<li><a href='$pd'>$prog</li>";
	  
  } 
  ?>
  </ul>
</div>
<?php require_once 'app/views/templates/footer.php' ?>
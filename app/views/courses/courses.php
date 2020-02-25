<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
 <ul>
  <?php
  foreach($data['courses'] as $courses)
  { 
	  	echo '<li>'.$courses['coursename'].'</li>';
  } 
  ?>
  </ul>	
</div> 
<?php require_once 'app/views/templates/footer.php' ?>
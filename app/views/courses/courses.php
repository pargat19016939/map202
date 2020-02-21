<?php require_once 'app/views/templates/header.php' ?>
  <ul>
  <?php
  foreach($data['courses'] as $courses)
  { 
	  echo "<li>$courses['courseName']<li>";
  } 
  ?>
  </ul>
<?php require_once 'app/views/templates/footer.php' ?>
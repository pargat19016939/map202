<?php require_once 'app/views/templates/header.php' ?>
  <ul>
  <?php
  foreach($data['departments'] as $department)
  {
	  $department_text=$department['department'];
	  echo "<li><a href='courses/$department_text'>$department_text</a><li>";
  } 
  ?>
  </ul>
<?php require_once 'app/views/templates/footer.php' ?>
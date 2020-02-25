<?php require_once 'app/views/templates/header.php' ?>
<div class="container" style="margin-top: 100px;">
  <ul>
  <?php
  foreach($data['departments'] as $department)
  {
	  $d=$department['department'];
	  
	  echo "<li><a href='courses/$d'>$d</a></li>";
  } 
  ?>
  </ul>
</div>
<?php require_once 'app/views/templates/footer.php' ?>
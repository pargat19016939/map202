<?php require_once 'app/views/templates/header.php' ?>
  <ul>
  <?php
  foreach($data['programs'] as $programs)
  {
    $program=$programs['program'];
    $dlink=$data["department"]."/".$programs["program"];
	  echo "<li><a href='$dlink'>$program</li>";
  } 
  ?>
  </ul>
<?php require_once 'app/views/templates/footer.php' ?>
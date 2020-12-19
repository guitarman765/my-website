<?php
  include_once 'header.php';
?>

<section>
  <h1>A title</h1>
  <p>Some Content</p>
</section>

<section>
  <form method="GET">
    <input type="text" name="person">
    <button>SUBMIT</button>
  </form>

<?php
  // Takes form data and echos out the string below.
  $name = $_GET['person'];
  echo $name." is a handsome fellow!";
?>

<br>
<br>

<?php
  echo strlen("Hi Daniel");
 ?>

</section>

<?php
 include_once 'footer.php';
?>

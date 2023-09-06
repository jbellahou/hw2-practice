<?php
$pageTitle = "Get result";
include "view-header.php";
?>
    <h1>Get result</h1>
<?php
if (isset($_GET['my-name'])) {
  ?>
  <p>The name sent is:</p>
  <?php
  echo $_GET['my-name'];
} else {
  ?>
  <p>No data was sent to the page.</p>
  <?php
}
include "view-footer.php";
?>

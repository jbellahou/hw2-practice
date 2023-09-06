<?php
$pageTitle = "Get result";
include "view-header.php";
?>
    <h1>Get result</h1>
<?php
include "view-footer.php";

function getDisplay() {
if (isset($_GET['my-name'])) {
  return "<p>The name sent is:</p>" . $_GET['my-name'];
} else {
  return "<p>No data was sent to the page.</p>";
}
}
?>

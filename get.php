<?php
$pageTitle = "Get page";
include "view-header.php";
?>
    <h1>Get page</h1>
<form method="get" action="get-result.php">
  <input type="text" name="my-name">
  <input type="submit" value="Get data">
</form>
<?php
include "view-footer.php";
?>

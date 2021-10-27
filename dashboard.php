<?php
include_once 'header.php'
?>

<section>
<?php
if (isset($_SESSION['useruid'])) {
        echo "<p> Hello There   ".$_SESSION['useruid']." !!</p>";
        }
?>


</section>

<?php
include_once 'footer.php'
?>
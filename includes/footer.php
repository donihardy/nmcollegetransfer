<?php   
$startYear = 2011;
$thisYear = date('Y');
if ($thisYear > $startYear) {
	$thisYear = date('Y');
    $copyright = "$startYear&ndash;$thisYear";
} else {
	$copyright = $startYear;
}
?>

<footer class="navbar-fixed-bottom">
      <div id="footerContent">
        <div id="leftFooter">
          <h4><a href="http://stemup.unm.edu">STEM UP © <?php echo $copyright; ?></a></h4>
          1716 Las Lomas Road NE &nbsp;  Albuquerque, NM 87131 &nbsp; <a href="tel:1-505-277-1723">505-277.1723</a>
          <h5><a href="mailto:stemup@unm.edu">Contact STEM UP</a></h5>
        </div>
      </div>
    </footer>

 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-submenu.min.js" defer></script>
    <script src="js/navbar.js"></script>
    <script src="js/script.js"></script>

    </body>
  </html>
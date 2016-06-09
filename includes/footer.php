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
          1716 Las Lomas Road NE &#149  Albuquerque, NM 87131 &#149 <a href="tel:1-505-277-1723">505-277.1723</a>
          <a href="mailto:stemup@unm.edu"><h5>Contact STEM UP</a></h5>
        </div>
      </div>
    </footer>
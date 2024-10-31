<?php
include 'admin/koneksi.php';
$querySetting = mysqli_query($koneksi, "SELECT * FROM general_setting ORDER BY id DESC");
$rowSetting = mysqli_fetch_assoc($querySetting);
?>
<footer id="footer" class="footer light-background">

<div class="container">
  <div class="copyright text-center ">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Kelly</strong> <span>All Rights Reserved<br></span></p>
  </div>
  <div class="social-links d-flex justify-content-center">
    <a href="<?php echo $rowSetting['ig_link'] ?>"><i class="bi bi-instagram"></i></a>
    <a href="<?php echo $rowSetting['linkedin_link'] ?>"><i class="bi bi-linkedin"></i></a>
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer>
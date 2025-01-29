<?php
  $searches = $conn->query("SELECT COUNT(keyword) AS count, keyword FROM searches
  GROUP BY keyword ORDER BY count DESC LIMIT 5");

 $searches->execute();

 $allSearches = $searches->fetchAll(PDO::FETCH_OBJ);
?>

<footer class="site-footer">


      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
            <?php foreach ($allSearches as $search) : ?>
              <li><a href="#" class=""><?php echo $search->keyword; ?></a></li>
              <?php endforeach; ?>
              <!--<li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li-->
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="https://www.facebook.com/"><span class="icon-facebook"></span></a>
              <a href="https://x.com/"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>
              <a href="https://www.linkedin.com/in/rajkishor-verma-7a8433254/"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>Jobportal. All rights reserved
            </small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="<?php echo APPURL; ?>/js/jquery.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/stickyfill.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/jquery.easing.1.3.js"></script>
    
    <script src="<?php echo APPURL; ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo APPURL; ?>/js/quill.min.js"></script>

    <script src="<?php echo APPURL; ?>/js/bootstrap-select.min.js"></script>
    
    <script src="<?php echo APPURL; ?>/js/custom.js"></script>
   
   
     
  </body>
</html>
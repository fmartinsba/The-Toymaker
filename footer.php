
    <footer >
      <div class="footer-container">
        <div class="content-wrap">
          <?php wp_nav_menu(array(
            'theme_location'=>'secondary',
  				  'container'=>false,
  				  'menu_class'=>'nav-menu'));
          ?>
          <p class="copyright">All content copyright 2016</p>
          <p>Website by <a href="http://fernandomartins.com.au" target="_blank">Fernando Martins</a> <br> Icon pack by <a href="https://icons8.com" target="_blank">Icons8</a></p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>

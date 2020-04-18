    <footer class="footer">
      <div>
        <span>&copy; <?=date('Y')?> Jax Code v1.0.0. </span>
      </div>
      <div>
        <nav class="nav">
          <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
          <a href="change-log.html" class="nav-link">Change Log</a>
          <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="assets/js/dashforge.js"></script>

    <!-- append theme customizer -->
    <script src="lib/js-cookie/js.cookie.js"></script>
    <script src="assets/js/dashforge.settings.js"></script>
    <script>
      $(function(){
        'use script'

        window.darkMode = function(){
          $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function() {
          $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if(hasMode === 'dark') {
          darkMode();
        } else {
          lightMode();
        }
      })
    </script>
  </body>
</html>

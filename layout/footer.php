        </div>      
      </div>
    
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- Bootstrap Js CDN -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      <script type="text/javascript">
          $(document).ready(function ($) {
            var url = window.location.href;
            var activePage = url;
            $('a').each(function () {
                var linkPage = this.href;
                if (activePage == linkPage) {
                    $('ul li').removeClass('active');
                    $(this).closest("li").addClass("active");
                }
            });
        });
      </script>
        
      
    </body>
</html>
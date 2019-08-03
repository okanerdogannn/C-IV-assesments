<!-- Footer -->
<footer id='my_footer'  class="container-fluid text-center py-3">
        <div  class="container">
            
            <div class="row">
                <div class="col-sm-4"><small>Copyright © <?php bloginfo('name'); echo " "; echo date("Y");   ?></small></div>
                <div class="col-sm-4 my-2">
                   <a href=""> <i class="fa fa-facebook rounded-circle p-2 bg-social" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-snapchat-ghost rounded-circle p-2 bg-social" aria-hidden="true"></i></a>
                   <a href=""> <i class="fa fa-instagram rounded-circle p-2 bg-social" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-4" id="footermenu" > <?php wp_nav_menu( array('theme_location' => 'footer_menu') ); ?></div>
            </div>
            
        </div>
</footer>
    <!-- /Footer -->
      
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>
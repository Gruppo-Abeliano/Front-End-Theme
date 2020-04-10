        <div id="main-page-footer-div">
            <div id="footer-div-site">
                <div id="copyright">
                    <div id="copyright-text" class="d-none d-md-none d-lg-block d-xl-block">
                        <h6>GRUPPO ABELIANO</h6>
                    </div>
                    <div id="copyright-sy">
                        <h6>&#169;  2020</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.0.6/jquery.mousewheel.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var number = Math.random() * 1500;

        // PROJECT PAGE START
        $("#project-page-proj-text").hide();

        setTimeout(function() {
            $("#project-page-proj-code").addClass("proj-page-effect");
        }, number + 1100);

        setTimeout(function() {
            $("#project-page-proj-name").addClass("proj-page-effect");
        }, number + 1500);

        setTimeout(function() {
            $("#project-page-proj-text").slideDown(750);
        }, number + 1750);

        
        $(document).ready(function(){
            var totalWidth = 0;
            $('#infinite-scroll-container').children().each(function(){
                totalWidth += $(this).outerWidth();
            });
            $('#infinite-scroll-container').css('width', totalWidth);
        });

        $(function() {
            $('#infinite-scroll').removeClass('hover'); 
            $("#infinite-scroll").mousewheel(function(event, delta) {

            this.scrollLeft -= (delta * 50);
            event.preventDefault();
            });
            $('#infinite-scroll').addClass('hover');
        });
        

        // PROJECT PAGE END
        

        $(document).ready(function(){

             var number = Math.random() * 1500;

             setTimeout(function() {
                 $("#loading-gif").remove();
             }, number);

            $("#loading-screen").delay(number).animate(
                {width: '0%'},
                1000,
                function() {
                    $('body').css('overflowY', 'scroll');
                    ("#loading-screen").remove();
                });

        });
    </script>
    </body>
</html>


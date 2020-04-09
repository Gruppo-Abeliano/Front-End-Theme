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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){

            $(".proj-col-3").stop().hover(function() {

                $(this).siblings().each(function() {
                    $(this).css("z-index", "-99999");
                    $(this).css("border-right", "0px solid transparent");
                    $(this).stop(true, true).animate({"margin-right": '-=1.1vw'}, 500);
                });

            }, function(){
                $(this).siblings().each(function() {
                    $(this).css("z-index", "0");
                    $(this).stop(true, true).animate({"margin-right": '+=1.1vw'}, 500);
                    $(this).delay(500).css("border-right", "1px solid #888");
                });
            });

        });
        

        $(document).ready(function(){

             var number = Math.random() * 1500;

             setTimeout(function() {
                 $("#loading-gif").remove();
             }, number);

            $("#loading-screen").delay(number).animate(
                {width: '0%'},
                1000,
                function() {
                    $('body').css('overflow', 'scroll');
                    ("#loading-screen").remove();
                });

        });
    </script>
    </body>
</html>


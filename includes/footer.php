
        <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-center">
                        
                        &copy; <script>document.write(new Date().getFullYear())</script> Team x</a>, Covid 19 Sri lanka
                        
                    </p>
                </div>

        </div>
    </div>

    </body>

    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Covid 19 Public Distribution System</b> -- From team x."

            },{
                type: 'info',
                timer: 4000
            });

    	});
    </script>
    
    <script>
        $(document).ready(function(){
            reset(0); 
        });
        function reset (time) {
            $( ".tab-1" ).slideUp(time);
            $( ".tab-2" ).slideUp(time);
            $( ".tab-3" ).slideUp(time);
            $( ".tab-4" ).slideUp(time);
            $( ".tab-5" ).slideUp(time);
        }
    </script>

</html>

		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	
	

	

<!--validation rules-->
		<script src="{{asset('admin/js/admincustomjs.js')}}"></script><!--custome script-->

	<!-- Required vendors -->

<!-- 	
	<script src="{{asset('admin/vendor/global/global.min.js')}}"></script> -->
	<!-- <script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script> 
	 <script src="{{asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script> -->
	
	<!-- Apex Chart -->
	<script src="{{asset('/admin/vendor/apexchart/apexchart.js')}}"></script>
	
	<script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{asset('admin/vendor/peity/jquery.peity.min.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>
	
	<script src="{{asset('admin/vendor/owl-carousel/owl.carousel.js')}}"></script>
	
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
	<script src="{{asset('admin/js/dlabnav-init.js')}}"></script>
	<script src="{{asset('admin/js/demo.js')}}"></script>
    <script src="{{asset('admin/js/styleSwitcher.js')}}"></script>
	<script>
		function JobickCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.front-view-slider').owlCarousel({
					loop:false,
					margin:30,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					autoWidth:true,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['', ''],
					responsive:{
						0:{
							items:1
						},
						
						480:{
							items:1
						},			
						
						767:{
							items:3
						},
						1750:{
							items:3
						}
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					JobickCarousel();
				}, 1000); 
			});
	</script>

</body>
</html>
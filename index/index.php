<!DOCTYPE html>
<html>
	<head>
		<title>TOff-stock market analysis</title>
		<link rel="stylesheet" href="uptable.css"></link>
		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
	    <link rel="stylesheet" href="css/animate.css">
	    <link rel="stylesheet" href="css/custom.css">

	    <!-- js -->
	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/owl.carousel.min.js"></script>
	    <script src="js/isotope.pkgd.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.actual.min.js"></script>
	<script>
		function contact_verification()
			{
				var name=document.myform.email.value;
				var atposition=x.index("@");
				var dotposition=x.lastindex(".");
				if(atposition<1||dotposition<atposition+2||dotposition+2=x.length)
					{
						alter('please enter valid mail id \n atposition:'+atposition+'\n dotposition:'+dotposition);
						return false;
						
					}
				else
					{
				
				alert('your form has been submitted successfully');
				clearform()
					}
			}
		function clearform()
			{
				if(document.getElementById)
					{
						document.myform.reset();
					}
				
			}
	</script>
	<style>
		<style>
	.table
		{
			padding-top:9%;
		}
	
	.table:after 
		{
			    content: ""; 
			    display: block; /* This will put the pseudo element on its own line. */
			    margin: 0 auto; /* This will center the border. */
			    width: 50%; /* Change this to whatever width you want. */
			    padding-top: 20px; /* This creates some space between the element and the border. */
			    border-bottom: 2px solid black; /* This creates the border. Replace black with whatever color you want. */
			    position:relative;
		}
	.button {
    background-color: Grey;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 50%;
}
</style>
	</style>
	</head>

	<body>
		<div id="wrapper">
			<div id="overlay-1">
				<section id= "navigation">
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  					<div class="container-fluid">
	    					<div class="navbar-header">
	      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        		<span class="ion-navicon"></span>
					      		</button>
					      		<a class="navbar-brand" href="#">TOFF</a>
					    	</div>
	    					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      					<ul class="nav navbar-nav navbar-right">
								<li><a href="#wrapper">Home</a></li>
								<!--<li><a href="#Finance">Finance</a>-->
		      						<li><a href="#about">About-Us</a></li>
		      						<!--<li><a href="#our_service">Service</a></li>-->
		        					<li><a href="#team">Team</a></li>
		        					<!--<li><a href="#portfolio">Portfolio</a></li>
		        					<li><a href="#price_table">Price Table</a></li>
		        					<li><a href="#blog">Blog</a></li>
		        					<li><a href="#testimonial">Testimonials</a></li>-->
		        					<li><a href="#contact">Contact us</a></li>
							    </ul>
	    					</div>	<!-- collapse navbar-collapse -->
	  					</div>	<!-- container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->
				<section id="starting">
					<div class="text-center starting-text">
						<h1 class="rene">TOFF!!</h1>
						<h2>Adding new dimensions to stock market analysis</h2>
						<center><!--<input type="button" class="button" value="Finance">--><a href="#Finance" class="button">Finance</a></center>
					</div>

				</section>
				<div id="bottom" class="bottom text-center">
			        <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			    </div>
			</div><!-- overlay-1 -->
		</div>	<!-- wrapper --><!---remove if needed--->	
		<section id="Finance">
			<div class="container">
				<div class="row text-center" id="heading">
					<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
						<h3>STOCKS</h3>
	                	<hr class="full">
	                	<br/>
					</div>
				</div>	<!-- row -->
			<?php
				$dbc=mysqli_connect('localhost','root','ashika1301','IT') or die ('error connecting to Mysql server');
				$sql="select id,Stock_name,Overall_Sentiment,Recent_Sentiment from stock_table ORDER BY id  DESC";/*to display the recently added record to top of the table*/
				$result=mysqli_query($dbc,$sql);
				?>



				<div class="table">
				<center>
				<table border="0"cellpadding="50" cellspacing="60"width="900">
					<tr>
						<!--<th><center><u>id</u></th></center><br>--->
						<th><center><u>STOCK NAME</u></th></center><br>
						<th><center><u>OVERALL SENTIMENT</u></center></th>
						<th><center><u>RECENT SENTIMENT</u></center></th>
						<!--<th><u>VIEW</u></th>--->
					</tr>
					<tr>
				</center>
				<?php
				while($row=mysqli_fetch_array($result))
					{
				?>
					<!--<td><center><?php echo $row['id']?></center></td>-->
					<td><center><?php echo $row['Stock_name']?></center></td>
					<td><center><?php echo $row['Overall_Sentiment']?></center></td>
					<td><center><?php echo $row['Recent_Sentiment']?></center></td>
					<!--<td><?php echo $row['file']?></td>--->
					<!--<td><?php echo $row['updatetd_dated_at']?></td>-->
					<!--<td><a href ="uploaded_pdf_files/<?php echo $row['file']?>">view Stock</a></td>-->
					</tr>
				<?php
					}
				?>
				</center>
				</table>
				</div>
				</div>
			</div>	<!-- row -->
		</section>	<!-- about us -->

			
			
		<!-- About Us --><!---remove if needed--->
		<section id="about">
			<div class="container">
				<div class="row text-center" id="heading">
					<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
						<h3>About Us</h3>
	                	<hr class="full">
	                	<br/>
					</div>
				</div>	<!-- row -->
				<div class="row about-us-text">
					<div class="col-md-8 col-md-offset-2">
						<p class="text-center">This website is created as a part of the Internet technology project. In this website prediction is based on the stentiment analysis which takes information from various trusted resource and gives an efficient output that helps the cutomer in making stock market related decisions. we would also like to help the community by bringing some more accurate predictions which will soon be added to the website. We are sure it will more value to this website. </p>
					</div>
				</div>	<!-- row -->
				<div class="row main_content">
					<div class="col-md-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure>
							<img class="pro img-responsive center-block" src="images.jpeg">
						</figure>
						<h5 class="text-center">sentiment analysis</h5>
						<div class="row">
							<div class="col-xs-12 text-center" style="border-right: 1px solid #f4f4f4">
                                <div style="display: inline; width: 60px; height: 70px;">
                                    <input type="text" class="knob" data-readonly="true" value="90" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; /* color: rgb(57, 204, 204); */ padding: 0px; -webkit-appearance: none; background: none;">
                                </div>
                            </div>	<!-- col-xs-12 -->
						</div>	<!-- row -->
					</div>	<!-- col-md-4 -->

					<div class="col-md-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure><!--img/3-col-icons-android.png--->
							<img class="pro img-responsive center-block" src="index.jpeg">
						</figure>
						<h5 class="text-center">graphical view</h5>
						<div class="row">
							<div class="col-xs-12 text-center" style="border-right: 1px solid #f4f4f4">
	                            <div style="display: inline; width: 60px; height: 60px;">  	
	                            	<input type="text" class="knob" data-readonly="true" value="80" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; /* color: rgb(57, 204, 204); */ padding: 0px; -webkit-appearance: none; background: none;">
	                            </div>
	                        </div>	<!-- col-xs-12 -->
						</div>	<!-- row -->
					</div>	<!-- col-md-4 -->

					<div class="col-md-4 wow animated zoomIn" data-wow-delay="0.1s">
						<figure>
							<img class="pro img-responsive center-block" src="pred.jpeg">
						</figure>
						<h5 class="text-center">Stock market prediction(yet to be done)</h5>
						<div class="row">
							<div class="col-xs-12 text-center" style="border-right: 1px solid #f4f4f4">
	                            <div style="display: inline; width: 60px; height: 60px;">
	                                <input type="text" class="knob" data-readonly="true" value="75" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; /* color: rgb(57, 204, 204); */ padding: 0px; -webkit-appearance: none; background: none;">
	                        	</div>	
	                    	</div>	<!-- col-xs-12 -->
						</div>	<!-- row -->
					</div>	<!-- col-md-4 -->
				</div><!-- row main_content -->
			</div>	<!-- container -->
		</section>	<!-- about us -->

		

		<!-- Our Team -->
	    <section id="team">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			<h3>Our Team</h3>
		                	<p>We can satisfy your demand</p>
		                	<hr class="full">
		                	<br/>
		        		</div>
		    		</div>
			
			    	<div class="row main_content">
				    	<div class="col-md-4 col-sm-6 text-center">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="" alt="Nazim">
				    			</div>
				    		</div>
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s">Nazim Girach</h4>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s">Student,Computer science Department</p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">3rd year B.Tech compuetr science department Student at Presidency University and An important contributor to this website.Artificial intelligence enthusiast trying to implement his skills in this website  to give best user experiance. </p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<a href="#" data-toggle="tooltip" title="Contact with Facebook" class= "team-facebook">
				        				<i class="fa fa-facebook"></i>
				        			</a>
				        		
				        			<a href="#" data-toggle="tooltip" title="Contact with Twitter" class= "team-twitter">
				        				<i class="fa fa-twitter"></i>
				        			</a>
				        		
				        			<a href="#" data-toggle="tooltip" title="Contact with Google-plus"class= "team-google-plus">
				        				<i class="fa fa-google-plus"></i>
				        			</a>
				        		</div>	
				        	</div>
				    	</div>	<!-- col-md-4 -->
					
			
				    	<div class="col-md-4 col-sm-6 text-center">
				    		<div class= "row wow animated zoomIn" data-wow-delay="0.6s">
				    			<div class= "col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="" alt= "Ashika" >
				    			</div>
				    		</div>
				        	<h4 class= "wow animated fadeInUp" data-wow-delay= "0.7s">Ashika.S.Athavar</h4>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.8s">Student, computer science Department</p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.9s">3rd year B.Tech computer science department student at Presidency University interest feilds being data analytics tries to deploy various technologies in this website such that creates a good user experiance  </p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">	
				        		<div class= "team-member-contact">
				        			<a href="#" data-toggle="tooltip" title="Contact with Facebook" class= "team-facebook">
				        				<i class="fa fa-facebook"></i>
				        			</a>
				        			<a href="#" data-toggle="tooltip" title="Contact with Twitter" class= "team-twitter">
				        				<i class="fa fa-twitter"></i>
				        			</a>
				        			<a href="#" data-toggle="tooltip" title="Contact with Google-plus"class= "team-google-plus">
				        				<i class="fa fa-google-plus"></i>
				        			</a>
				        		</div>
				        	</div>
					
				    	</div>	<!-- col-md-4 -->
					
				    	<div class="col-md-4 col-sm-6 text-center">
				    		<div class= "row wow animated zoomIn" data-wow-delay="0.6s">
				    			<div class= "col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="" alt= "image" >
				    			</div>
				    		</div>
				        	<h4 class= "wow animated fadeInUp" data-wow-delay= "0.7s">--(future contributers)---</h4>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.8s">Student, computer science Department</p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.9s">3rd year B.Tech computer science department student at Presidency University interest feilds being data analytics tries to deploy various technologies in this website such that creates a good user experiance  </p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">	
				        		<div class= "team-member-contact">
				        			<a href="#" data-toggle="tooltip" title="Contact with Facebook" class= "team-facebook">
				        				<i class="fa fa-facebook"></i>
				        			</a>
				        			<a href="#" data-toggle="tooltip" title="Contact with Twitter" class= "team-twitter">
				        				<i class="fa fa-twitter"></i>
				        			</a>
				        			<a href="#" data-toggle="tooltip" title="Contact with Google-plus"class= "team-google-plus">
				        				<i class="fa fa-google-plus"></i>
				        			</a>
				        		</div>
				        	</div>
					
				    	</div>	<!-- col-md-4 -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	<!-- team -->
		<!-- contact -->
	    <section id= "contact">
	    	<div class= "container">
				<div class="row text-center" id= "heading">
					<div class= "bg-image">
						<div class= "col-lg-6 col-lg-offset-3 share-text wow animated zoomInDown" id= "heading-text">
							<h3 class= "text-center">Stay Connected</h3>
		                	<p>We want to connect people like you.</p>
		                	<hr class= "full">
		                	<br/>
						</div>
					</div>
				</div>
				<div class= "row text-center main_content">
					<div class= "col-md-6 col-md-offset-3 text-center">
						<form name ="myform" method="POST" action="contact.php">
							<div class= "form">
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user fa-fw"></i>
	  								</span>
									
								 	<input class="form-control" type="text" placeholder="Name" name="name" required>
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-envelope-o fa-fw"></i>
	  								</span>
									
								 	<input class="form-control" type="text" placeholder="Email address" name="email" id="test_id"required>
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-tags fa-fw"></i>
	  								</span>
									
								 	<input class="form-control" type="text" placeholder="Subject" name="subject">
								</div>
							</div>
							<div class="input-group margin-bottom-sm">
									<span class="input-group-addon">
										<i class="fa fa-comment-o fa-fw"></i>
									</span>
								
								<textarea class="form-control" rows="6" type= "text" placeholder="Your Message" name="message" required></textarea>
							</div>
							<input class="btn btn-primary send" type="submit" value="Send Message" name="contact" onclick="contact_verification();">
						</form>
					</div>	
				</div>
				<div class= "row">
					<div class= "col-md-6 col-md-offset-3 text-center">
						<ul class="socials-icons">
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i class="fa fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i class="fa fa-skype"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
	    </section>	<!-- contacts --> 
			
		<!-- footer -->
		<section id= "footer" class= "main-footer">
			<div class= "row">
				<div class= "logo text-center">
					<h1>Toff</h1>
				</div>
			</div>
			<div class= "row">
				<div class= "copyright text-center">
					<p>Presidency University,computer science department<a href="http://themewagon.com"><span class= "theme"></span></a></p>
				</div>
			</div>
		</section><!-- footer -->

		<!-- js -->
		<script>
			$(document).ready(function() {
  				$("#client-speech").owlCarousel({
  					autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
  				});
			});
		</script>
		<script>
 			new WOW().init();
		</script>
		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="js/dashboard.js"></script>
       
	</body>
</html>

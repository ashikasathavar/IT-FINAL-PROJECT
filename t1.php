<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	
	$(document).ready(function(){	
	$("button").click(function(){	 
	$.ajax({ 
		url:'d1.txt',	   
		success:function(data)
		   {
		   var stock_data = data.split(/\r?\n|\r/);
		    var stock_table_data = '<table class="table table-bordered table-striped">';
		    for(var count = 0; count < stock_data.length; count++)
		    	{
				     var cell_data = stock_data[count].split(",");
				     stock_table_data+='<tr>';
				     for(var cell_count=0; cell_count < cell_data.length; cell_count++)
			   			  {	
							//      document.getElementById("sampletable").innerHTML=cell_count;
							      if(count === 0)
								      {
								      	 stock_table_data += '<th>'+ cell_data[cell_count] +'</th>';
								      }
							      else
								      {
								      	stock_ table_data += '<td>'+ cell_data[cell_count] +'</td>';
							      	      }
		    				 }
		    		stock_ table_data+='</tr>';
		    	}
			   stock_ table_data+= '</table>';
			 $('#sampletable').html( stock_table_data);
		   }
			   
	         	  });
		 });
		 
	});
	</script>
	
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
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function contact_verification(email)
			{
			var val=document.myform.name.value;
			var mailid=document.myform.email.value;
			atpos = emailid.indexof("@");
			dotpos=emailid.lastindexof(".");
			var val1=document.myform.subject.value;
			if(!isNaN(val))
						{
							alert('enter a valid name');
							document.myform.name.focous;
						}
				else if(val.length>=20)
					{
						alert('please enter shorter name');
						document.myform.name.focous;
			
					}
			 if(document.myform.email.value=="")
				{
				else if(!isNaN(mailid))
							{
								alert('please enter a valid mail id');
							}
					
								else if(atpos<1 ||(dotpos-atpos<2))
									{
										alert('please enter a valid mail id ');
										document.myform.email.focous();
										return false;
						
									}
								else
									{
										alert("your form was successfully submitted");
										clearform()
										return true;
						
									}
}
			
			if(!isNaN(val1))
				{
					alert('please enter a valid subject');
				}
			var val2=document.myform.message.value;
				{
					 else if(document.myform.message.value=="")
						{
							alert('please enter a message');
						}
		
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
	
	.table
		{
			    padding-top:9%;
		}
	
	.table:after 
		{
			    content: ""; /*before and after are the pseudo elements*/
			    display: block; /* This will put the pseudo element on its own line. */
			    margin: 0 auto; /* This will center the border. */
			    width: 50%; /* Change this to whatever width you want. */
			    padding-top: 20px; /* This creates some space between the element and the border. */
			    border-bottom: 2px solid black; /* This creates the border. Replace black with whatever color you want. */
			    position:relative;
	
		}
	.button {
			    background: rgba(0,0,0,0.4);
			    border: none;
			    
			    padding: 15px 32px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			    border-radius: 12px;
			  
		}
.table
		{
			padding-top:9%;
		}
	
	.table 
		{
			    content: ""; 
			    display: block; /* This will put the pseudo element on its own line. */
			    margin: 0 auto; /* This will center the border. */
			    width: 90%; /* Change this to whatever width you want. */
			    padding-top: 19px; /* This creates some space between the element and the border. */
			    border-bottom: 2px solid black; /* This creates the border. Replace black with whatever color you want. */
			    position:relative;
			    font-size:20px;
			    font-family:"Times new Roman",Times,serif;
			    border-spacing: 5px 1rem;
		}
	.div
		{
			 	float:center;
		}


	th ,td
		{
	   		 	border-bottom: 1px solid #ddd;
		}
	table
		{
			
			    border-collapse: separate;
			    border-spacing: 15px 50px;

		}
	#Finance
		{

			 padding-top:3%;
		}
	#footer
		{
				position:absolute;
				bottom=0;
				width:100%;
				height:25px;
				background:rgb(105,105,105);;

		}
	table
		{
				padding-bottom:35%;
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
					      		<a class="navbar-brand" href="#">toff</a>
					    	</div>
	    					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      					<ul class="nav navbar-nav navbar-right">
								<li><a href="#wrapper">Home</a></li>
		      						<li><a href="t2.php">More</a></li>
							    </ul>
	    					</div>	<!-- collapse navbar-collapse -->
	  					</div>	<!-- container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->
				<section id="starting">
					<div class="text-center starting-text" >
						<p><font color="#eeeeee">
						<h1 class="rene">toff!!</h1></font></p>
						<p><font color="#e0e0e0"><h2 >Adding new dimensions to stock market analysis</h2></font></p>
						<center><a href="#Finance" class="button">Finance</a></center>
						
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
				<div><h3>STOCKS</h3>
	                	<hr class="full"></div>
	                	<br/>
					</div>
				</div>	<!-- row -->
				<center> <img src="2.gif" alt="icon" style="width:135px;height:132px;"> </center>
			<!---place code after this--->
				
				<div class="container">
				<div class="table-responsive">
				<br />
				  <!-- <div align="center">
				     <button name="load_data" id="load_data" style="width:200px"class="btn btn-info">Load Data</button>
				    </div>-->
				  <br />
				<div id="sampletable">
  				<center>
				<?php

					echo "<html><body><table>";
					$f=fopen("score-lol.csv","r");
					while(($line=fgetcsv($f)) !== false){
				
								$row=$line[0].'|'.$line[1].'|'.$line[2].'|'.$line[3].'|';
								$cells=explode(";",$row);
								echo "<tr>";
								foreach($cells as $cell){
					
								echo "<td>" . htmlspecialchars($cell) ."</td>";
								}
								echo "</tr>\n";
								}
						fclose($f);
					echo"</table></body></html>";
			/*$row=1;
				if($handle = fopen("sampledata.csv","r")!== False){
				 echo "<table>";
				while(($data = fgetcsv($handle, 100 ,","))!== False) {
					$num = count($data);
					if($row==1){
						echo '<thead><tr>';
						}
					else{
						echo '<tr>';
						}
					for($c=0 ; $c<$num ; $c++)
						{
							if(empty($data[$c]))
						{
							$value="&nbsp;";
						}else{
						$value=$data[$c];
						}
						if($row ==1)
						{
							echo '<th>'.$value.'</th>';
						}else
						{
							echo '<td>'.$value.'</td>';
						}
					}
					if($row==1){
						echo '</tr></thead></tbody>';
					} else{
						echo '</tr>';
						}
					$row++;
					}
					echo '</tbody></table>';
					fclose($handle);*}*/
				
			
										
					?>
				</center>
				  </div>
				</div>
				</div>
			<!---place code before this-->
				</div>
				</div>
			</div>	<!-- row -->
		</section>	<!-- about us -->
		<!---<section id="footer">
			<center><p style="color:black">Internet technology</p></center>
		</section>--->
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





<?php
				$dbc=mysqli_connect('localhost','root','ashika1301','IT') or die ('error connecting to Mysql server');
				$sql="select id,Stock_name,Overall_Sentiment,Recent_Sentiment from stock_table ORDER BY id  DESC";/*to display the recently added record to top of the table*/
				$result=mysqli_query($dbc,$sql);
				?>



				<div class="table">
				<center>
				<table border="0"cellpadding ="0" cellspacing ="0"width ="1000">
					<tr>
						<!--<th><center><u>id</u></th></center><br>--->
						<th><center>STOCK NAME</th></center><br>
						<th><center>OVERALL SENTIMENT</center></th>
						<th><center>RECENT SENTIMENT</center></th>
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

<!--<?php
						$file=fopen("data.csv","r");
						while(!feof($file))
						{
							$content=fgetcsv($file);
							$count=count($content);
							for($i=0;$i<$count;$i++)
								{
									echo $content[$i] ."\t";
								}
						echo "<br />";
						}



				?>--->


<script src="jquery.min.js"></script>
			<script>
				function opsi (data){
					var allRows =samplefile.split(/\r?\n|\r/);
					var table = "<table>";
					for( var singleRow=0;singleRow< allRound.length;sigleRow++) {
						if(singleRow === 0){
							table +="<thead>";
							table +="<tr>";
							}
						else
							{
								table  +="<tr>";
							}
					var rowCells= allRows[singleRow].split(',');
					for(var rowSingleCell=0;rowSingeCell < rowCells.length;rowSingleCell++){
						if(singleRow===0)
						{
						table +="<th>";
						table += rowCells[rowSingleCell];
						table +="</th>";
						} else {
						table +="<td>";
						table +=rowCells[rowSingleCell];
						table +="</td>";
					}
				}
				if(singleRow ===0)
					{
						table +="</tr>";
`						table +="</thead>";
						table +="<tbody>";
						} else {
						table +="</tr>";
					}
				}
			table+="</tbody>";
			table+="</table>";
			$("body").append (table);
			}
		$.ajax({
			url:"samplefile.csv",
			dataType: "text",
			}).done(opsi);
			</script>

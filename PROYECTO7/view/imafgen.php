<!--<img src="../image/"<?php echo $value ?>" height ='250px' width='150'" >-->


foreach($fuente as $indice => $value) :
							if($indice !='id'){?>
								<tr>
									<?php if($indice =='foto'){
									echo "<td rowspan='7' id='fotofuente' width='50%'>". $value."</td>";
									}?>					    		
					    
							  	</tr>

							  	<th>

							  	</th>


							  <tr>
							    <td width="10%">Alto</td>
							    <td width="15%"><?php if($indice =='foto'){ echo $value; }?></td>
							  </tr>
							   <tr>
							    <td>Ancho</td>
							    <td><?php if($indice =='ancho'){ echo $value; }?></td>
							  </tr>
							  <tr>
							    <td>Largo</td>
							    <td><?php if($indice =='largo'){ echo $value; }?></td>
							  </tr>
							   <tr>
							    <td>Luces</td>
							    <td><?php if($indice =='luces'){ echo $value; }?></td>
							  </tr>
							   <tr>
							    <td>Precio</td>
							    <td><?php if($indice =='precio'){ echo $value; }?></td>
							  </tr>
							   <tr>
							    <td>Stock</td>
							    <td><?php if($indice =='stock'){ echo $value; }?></td>
							  </tr>
							
							<?php 
							}
							?>							
							
						<?php
						endforeach;
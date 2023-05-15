<?php
						foreach ($fuentes as $indice => $value) {
							?><div class="pelis" style="display: inline-block;">

								<?php
									//foreach ($value as $indice => $fuente) {
										if($indice =='foto'){?>

											<img src="../imagenes/"<?php echo $value ?>" height ='250px' width='150'" >
										<?php
										}else{
											echo "<span>".$value."</span>";
										}
									?>									


								</div>
						<?php
												

						}
					
					?>
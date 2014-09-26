<?php
/**
 * @package super simple news page
 */
?>

					
					
					<li class="flex-item">
						<a href='<?php the_permalink();?>'>
							<?php if (has_post_thumbnail()){
									the_post_thumbnail('thumbnail');
								  }
							the_title(
								$before = '<h1>',
								$after = '</h1>', 
								$echo = true);
							?>
						</a>
					</li>
                

						

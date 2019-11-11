<?php
	$attachment_id = block_value( 'heroImage' );
	$smallImage =  wp_get_attachment_image_src( $attachment_id, 'home-hero' );
?>

<div class="hero" style="background-image: url(<?php echo $smallImage[0]; ?>);">
	<div class="hero__info">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5>PRÁCTICO</h5>
					<p>
						Un método que reúne los conceptos necesarios para orientar  al cliente cualquier negocio
					</p>
				</div>
				<div class="col-md-4">
					<h5>TRASNVERSAL</h5>
					<p>
						Enfoque para todos las empresas on/off, grandes y pequeñas
					</p>
				</div>
				<div class="col-md-4">
					<h5>PERSONALIZABLE</h5>
					<p>
						Los contenidos de esta web se pueden aplicar a la situación particular de cualquier sector
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

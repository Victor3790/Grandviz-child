<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Grandviz
 */
?>
<div class="hero">
	<div class="hero__info">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5><?php echo get_field('titulo_asset_1'); ?></h5>
					<p>
						<?php echo get_field('texto_asset_1'); ?>
					</p>
				</div>
				<div class="col-md-4">
					<h5><?php echo get_field('titulo_asset_2'); ?></h5>
					<p>
						<?php echo get_field('texto_asset_2'); ?>
					</p>
				</div>
				<div class="col-md-4">
					<h5><?php echo get_field('titulo_asset_3'); ?></h5>
					<p>
						<?php echo get_field('texto_asset_3'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="introduction">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-3 verticalLine">
				<h1><?php echo get_field('titulo_introduccion'); ?></h1>
			</div>
			<div class="columns col-xs-12 col-lg-9">
				<p>
					<span class="capital"><?php echo substr(get_field('texto_introduccion'), 0, 1); ?></span>
					<?php echo substr(get_field('texto_introduccion'), 1); ?>
				</p>
			</div>

		</div>
	</div>
</div>

<div class="strategy">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<h2><?php echo get_field('texto_seccion_uno'); ?></h2>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="button__wrapper">
					<a href="<?php echo get_field('link_boton_seccion_uno'); ?>">
						<div class="button button--white">
							<p><?php echo get_field('boton_seccion_uno'); ?></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="model">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3><?php echo get_field('pre_titulo_seccion_dos'); ?></h3>
				<h2><?php echo get_field('titulo_seccion_dos'); ?></h2>
				<div class="divider"></div>
				<p>
					<?php echo get_field('texto_seccion_dos'); ?>
				</p>
			</div>
			<div class="col-xs-12">
				<div class="row">
					<div class="icon__container col-xs-12 col-lg-3">
						<i aria-hidden="true" class="fas iconsmind iconsmind-internet"></i>
						<h2><?php echo get_field('titulo_asset_4'); ?></h2>
						<p>
							<?php echo get_field('texto_asset_4'); ?>
						</p>
					</div>

					<div class="icon__container col-xs-12 col-lg-3">
						<i aria-hidden="true" class="fas iconsmind iconsmind-cube-molecule-2"></i>
						<h2><?php echo get_field('titulo_asset_5'); ?></h2>
						<p>
							<?php echo get_field('texto_asset_5'); ?>
						</p>
					</div>

					<div class="icon__container col-xs-12 col-lg-3">
						<i aria-hidden="true" class="fas iconsmind iconsmind-heart-1"></i>
						<h2><?php echo get_field('titulo_asset_6'); ?></h2>
						<p>
							<?php echo get_field('texto_asset_6'); ?>
						</p>
					</div>

					<div class="icon__container col-xs-12 col-lg-3">
						<i aria-hidden="true" class="fas iconsmind iconsmind-diamond"></i>
						<h2><?php echo get_field('titulo_asset_7'); ?></h2>
						<p>
							<?php echo get_field('texto_asset_7'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="numbers">
	<span class="hiddenNumber"><?php echo get_field('porcentage_numero_1') ?></span>
	<span class="hiddenNumber"><?php echo get_field('porcentage_numero_2') ?></span>
	<span class="hiddenNumber"><?php echo get_field('porcentage_numero_3') ?></span>
	<span class="hiddenNumber"><?php echo get_field('porcentage_numero_4') ?></span>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-3 animation num1 numbers__item">
				<i class="iconsmind iconsmind-love-user" aria-hidden="true"></i><br>
				<span id="num1">0</span><span>%</span>
				<div>
					<p><?php echo get_field('porcentage_texto_1'); ?></p>
				</div>
			</div>

			<div class="col-xs-12 col-md-3 animation num2 numbers__item">
				<i class="iconsmind iconsmind-affiliate" aria-hidden="true"></i><br>
				<span id="num2">0</span><span>%</span>
				<div>
					<p><?php echo get_field('porcentage_texto_2'); ?></p>
				</div>
			</div>

			<div class="col-xs-12 col-md-3 animation num3 numbers__item">
				<i class="fa fa-comments" aria-hidden="true"></i><br>
				<span id="num3">0</span><span>%</span>
				<div>
					<p><?php echo get_field('porcentage_texto_3'); ?></p>
				</div>
			</div>

			<div class="col-xs-12 col-md-3 animation num4 numbers__item">
				<i class="iconsmind iconsmind-statistic" aria-hidden="true"></i><br>
				<span id="num4">0</span><span>%</span>
				<div>
					<p><?php echo get_field('porcentage_texto_4'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="customer-strategy">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div>
					<h2><?php echo get_field('titulo_seccion_tres'); ?></h2>
					<p>
						<?php echo get_field('texto_seccion_tres'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-xl-3">
				<a href="<?php echo get_field('link_asset_8'); ?>">
					<div id="customer-strategy__item-1"class="customer-strategy__item">

						<div class="customer-strategy__item--hover">
							<h4><?php echo get_field('titulo_asset_8'); ?></h4>
							<p><?php echo get_field('texto_asset_8'); ?></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-xl-3">
				<a href="<?php echo get_field('link_asset_9'); ?>">
					<div id="customer-strategy__item-2"class="customer-strategy__item">

						<div class="customer-strategy__item--hover">
							<h4><?php echo get_field('titulo_asset_9'); ?></h4>
							<p><?php echo get_field('texto_asset_9'); ?></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-xl-3">
				<a href="<?php echo get_field('link_asset_10'); ?>">
					<div id="customer-strategy__item-3"class="customer-strategy__item">

						<div class="customer-strategy__item--hover">
							<h4><?php echo get_field('titulo_asset_10'); ?></h4>
							<p><?php echo get_field('texto_asset_10'); ?></p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-xl-3">
				<a href="<?php echo get_field('link_asset_11'); ?>">
					<div id="customer-strategy__item-4"class="customer-strategy__item">

						<div class="customer-strategy__item--hover">
							<h4><?php echo get_field('titulo_asset_11'); ?></h4>
							<p><?php echo get_field('texto_asset_11'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<div id="article-container" class="container">
	<div class="row">
		<div class="content__container--custom article-container--custom">
			<h2><?php echo get_field('titulo_posts'); ?></h2>
			<?php echo do_shortcode("[ic_add_posts post_type='post' showposts='6' template='content.php' ignore_sticky_posts='no']"); ?>
		</div>
	</div>
</div>


  <div class="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8">
          <h2><?php echo get_field('titulo_suscripcion'); ?></h2>
          <p>
						<?php echo get_field('texto_suscripcion'); ?>
          </p>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="button__wrapper">
						<a href="https://elviajedelcliente.com/elements/suscripcion/">
							<div class="button button--white">
								<p>SUSCRÍBETE YA</p>
							</div>
						</a>
          </div>
        </div>
      </div>
    </div>
  </div>

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

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'page' );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

<div class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php echo get_field('header'); ?></h2>
        <p>
          <?php echo get_field('texto'); ?>
        </p>
      </div>
      <div class="col-xs-12">
        <form id="agile-form" action="https://elviajedelcliente.agilecrm.com/formsubmit" style="width:100%;" method="GET">
        <fieldset class="subscribe__field-container">

        <!-- Form Name -->
        <legend class="subscribe__form-name">Bloque suscripcion</legend>
        <div style="display: none; height: 0px; width: 0px;">
        <input type="hidden" id="_agile_form_name" name="_agile_form_name" value="Bloque suscripcion">
        <input type="hidden" id="_agile_domain" name="_agile_domain" value="elviajedelcliente">
        <input type="hidden" id="_agile_api" name="_agile_api" value="1gb5drl3am5p3cg8gmit27vvoh">
        <input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="#">
        <input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
        <input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg" value="Gracias por suscribirte">
        <input type="hidden" id="_agile_form_id_tags" name="tags" value="">

        <input type="hidden" id="_agile_form_id" name="_agile_form_id" value="4961427001507840">
        </div>
        <!-- Text input-->
        <div class="subscribe__text-input-container">
          <label class="subscribe__text-input-label" for="agilefield-2">Email</label>
          <input class="subscribe__text-input" id="agilefield-2" name="email" type="email" placeholder="" class="agile-height-default">
        </div>
        <!-- Multiple Checkboxes -->
        <div class="subscribe__checkbox-container">
          <label class="subscribe__checkbox-text" for="multiple_checkboxes_1574880659532">He leído y acepto <a style="color: #000;" href="https://elviajedelcliente.com/politica-de-privacidad/">la política de privacidad y cookies</a><span> *</span></label>
          <label class="subscribe__checkbox-option" for="multiple_checkboxes_1574880659532-0">
            <input class="subscribe__checkbox" type="checkbox" name="multiple_checkboxes_1574880659532-0" id="multiple_checkboxes_1574880659532-0" value="Acepto">
            Acepto
          </label>
        </div>


        <!--recaptcha aglignment-->
        <!-- Button -->
        <div class="subscribe__button">
          <label>&nbsp;</label>
          <div>
            <button style="padding: 10px 20px;" type="submit" class="button--white">Suscribirse</button>
            <br><span id="agile-error-msg"></span>
          </div>
        </div>

        </fieldset>
        </form>
        <script type="text/javascript">
        (function(a){var b=a.onload,p=true;isCaptcha=false;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};var formLen=document.forms.length;for(i=0;i<formLen;i++){if(document.forms.item(i).getAttribute("id")== "agile-form"){a.document.forms.item(i).onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v5(this)}catch(b){this.submit()}}}}})(window);
        </script>

      </div>
    </div>
  </div>
</div>

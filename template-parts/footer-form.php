<?php $nonce = wp_create_nonce('g_child_nonce'); ?>

<form id="footer-form" style="width:100%;" data-nonce="<?php echo $nonce; ?>">
  <fieldset class="subscribe__field-container">

  <input type="hidden" name="action" value="g_child_subscription">
  <input type="hidden" name="nonce" value="<?php echo $nonce; ?>">

  <!-- Text input-->
  <div class="subscribe__text-input-container">
    <label class="subscribe__text-input-label" for="email">Email</label>
    <input class="subscribe__text-input" name="email" type="text" placeholder="">
  </div>

  <!-- Multiple Checkboxes -->
  <div class="subscribe__checkbox-container">
    <label class="subscribe__checkbox-text" for="multiple_checkboxes">
      He leído y acepto <a href="https://elviajedelcliente.com/politica-de-privacidad/">la política de privacidad y cookies</a>*
    </label>

    <label class="subscribe__checkbox-option" for="multiple_checkboxes_accept">
      <input class="subscribe__checkbox" type="checkbox" name="multiple_checkboxes_accept" value="Acepto">
      Acepto
    </label>
  </div>

  <!-- Button -->
  <div class="subscribe__button">
    <button style="padding: 10px 20px;" type="submit" class="button--white">
      Suscribirse
    </button>
  </div>

  </fieldset>
  <div class="subscribe__result" id="footer-result"></div>
</form>

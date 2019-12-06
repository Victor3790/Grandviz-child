jQuery(document).ready( function() {
   jQuery('#agile-form').submit(function(e) {
      e.preventDefault();
      jQuery.ajax({
         type : 'post',
         url : gChildAjax.ajaxurl,
         data : jQuery(this).serialize(),
         success: function(response) {
           jQuery('#result').html(response);
         }
      });
   });
});

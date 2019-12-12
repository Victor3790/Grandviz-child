jQuery(document).ready( function() {

  jQuery('.popUp__x').click(function(){
    jQuery('.popUp').hide('slide');
  });

   jQuery('#footer-form').submit(function(e) {
     register(e, jQuery(this), '#footer-result');
   });

   jQuery('#popUp-form').submit(function(e) {
     register(e, jQuery(this), '#popUp-result');
   });

   function register(e, form, result){
     e.preventDefault();
     jQuery.ajax({
        type : 'post',
        url : gChildAjax.ajaxurl,
        data : form.serialize(),
        success: function(response) {
          let parsedResponse = JSON.parse(response);

          if(parsedResponse.state === 1){
            _agile.set_email(parsedResponse.mail);
          }

          jQuery(result).html(parsedResponse.message);
        }
     });
   }
});

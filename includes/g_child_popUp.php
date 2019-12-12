<?php
function g_child_popUp(){
    $waitingTime = get_field( 'tiempo_de_espera' ) * 1000;
?>
<script type="text/javascript">
  jQuery(document).ready( function() {
    _agile.get_email({
      success: function(data){
        if(data.email === 'null'){
          let delay = <?php echo $waitingTime; ?>;
          setTimeout(function(){
            jQuery( '.popUp' ).show('slide');
          }, delay);
        }
      },
      error: function(data){
          console.log(data.error);
      }
    })

  });
</script>
<?php
}
?>


<?php
 function g_child_subscription() {
   require ('curl_wrap.php');
   check_ajax_referer('g_child_nonce', 'nonce');
   $mail = $_POST['email'];
   $checkBox = $_POST['multiple_checkboxes_1574880659532-0'];
   if(!is_email($mail)){
     exit('Ingresa una dirección de correo válida');
   }
   if(empty($checkBox)){
     exit('Debes aceptar la política de privacidad.');
   }

   $contact_email = $_POST['email'];

   $contact_json = array(
     "properties"=>array(
       array(
         "name"=>"email",
         "value"=>$contact_email,
         "type"=>"SYSTEM"
       )
     )
   );

   $contact_json = json_encode($contact_json);
   $result = curl_wrap("contacts", $contact_json, "POST", "application/json");
   $resultArray = json_decode($result, true);
   if(empty($resultArray['id'])){
     echo 'No pudimos registrarte al Newsletter, por favor intentalo más tarde';
   }else{
     echo 'Gracias por registrarte.';
   }


 	 wp_die(); // this is required to terminate immediately and return a proper response
 }

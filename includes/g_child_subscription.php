
<?php
 function g_child_subscription() {
   require ('curl_wrap.php');
   check_ajax_referer('g_child_nonce', 'nonce');
   $mail = $_POST['email'];
   $checkBox = $_POST['multiple_checkboxes_accept'];
   if(!is_email($mail)){
     $jsonResult = array('state'    =>    0,
                         'message'  =>    'Ingresa un mail válido.',
                         'mail'     =>    'null'
                        );
     exit(json_encode($jsonResult));
   }
   if(empty($checkBox)){
     $jsonResult = array('state'    =>    0,
                         'message'  =>    'Debes aceptar la política de privacidad.',
                         'mail'     =>    'null'
                        );
     exit(json_encode($jsonResult));
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
     $jsonResult = array('state'    =>    0,
                         'message'  =>    'No pudimos registrarte al Newsletter, por favor intentalo más tarde',
                         'mail'     =>    'null'
                        );
     exit(json_encode($jsonResult));
   }else{
     $jsonResult = array('state'    =>    1,
                         'message'  =>    'Gracias por registrarte.',
                         'mail'     =>    $contact_email
                        );
     exit(json_encode($jsonResult));
   }


 	 wp_die(); // this is required to terminate immediately and return a proper response
 }

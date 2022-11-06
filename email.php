<?php
    
       
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email =  $_POST['email'];
    $message = $_POST['message'];

      // Set your email address where you want to receive emails. 
      
       $from = "contact@naukrihold.com";
       $to = 'm3mpropertygroup@gmail.com';
       $subject = 'Contact Query From Website';
       
       $headers = "From: ".$name." <".$email."> \r\n";
       
       $message.= "\r\n Customer Details: \r\n";
	   $message.=" Name:- ".$name. "\r\n";
	   $message.=" Mobile:- ".$phone. "\r\n";
						
	   $message.=" Email:- ".$email. "\r\n";
						
	  // $message.=" Message:- ".$message. "\r\n";
       
       $send_email = mail($to,$subject,$message,$headers);
       
       
       $response=array();
       
       if($send_email == true){
           $response['status'] = 200;
           $response['message'] = 'success';
       }else{
           $response['status'] = 500;
           $response['message'] = 'failed';
       }
       
       echo json_encode($response);

     //  echo ($send_email) ? 'success' : 'error';
       
       

?>
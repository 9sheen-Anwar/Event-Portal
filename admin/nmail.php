<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "	nausheenanwar39@gmail.com";
         $subject = "This is subject";
         

         $message = "<h1>POLYWEEK IS ARRIVING SOON</h1>";
         
         $header = "From:womenspolyevent@gmail.com \r\n";
         
         $header  = "MIME-Version: 1.0\r\n";
         $header  = "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
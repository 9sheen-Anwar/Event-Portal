 <?php
         
         if(isset($_POST['submitted']))
        { 
            
            $to1 = $_POST['email'];
        
            $sub = $_POST['subject'];
            $mess = $_POST['message'];
            
            
         $to = "$to1";
    
         $subject = "$sub";
         

         $message = "<h1>$mess</h1>";
         
         $header = "From:nausheenanwar39@gmail.com \r\n";
         $header  = "MIME-Version: 1.0\r\n";
         $header  = "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
             echo "<script>alert('Message sent successfully...') </script>";
            
         }else {
             echo "<script>alert('Message could not be sent...') </script>";
            
         }
         }
      ?>



<html>
<head>
<style>
    #block2{
    border: 2px solid gray;
    width: 90%;
    height: 93%;
    margin-left: 7%;
    margin-top: 40px;
    background-color: silver;
}



</style>

</head>

<body>
    <div id="block2" >
    <center style="margin-top: 18%">
	<form action="#" method="POST">
                            <input type="hidden" name="submitted" value="true"/>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: abc@ab.com" type="text" name="email" />
                        </p>
                      
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" />
                        </p>
                    </form>
                    </center>
				</div>




</body>





</html>
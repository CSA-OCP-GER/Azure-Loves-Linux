<html>
   <header>
     <title>Welcome in your new Linux machine</title>
   </header>
   <body>
     <h1>
       Welcome to your new Linux VM
     </h1>
     <br>
     <p>Here you have some information about this VM:<p>
     <?php
       $publicIp = exec ("curl ifconfig.co");
       print ("The public IP address this host uses to reach the public Internet is " . $host . "\n");
     ?>
   </body>
</html>

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
     <ul>
     <?php
       $privateIp = exec ("hostname -i");
       $publicIp = exec ("curl ifconfig.co");
       $uname = exec("uname -a");
       $cpu = exec("grep 'model name' /proc/cpuinfo");
       $hostname = exec ("hostname");
       $date = exec ("date");
       $cmd = "curl freegeoip.net/json/" . $publicIp;
       $locationInfo = shell_exec($cmd);
       $location = json_decode($locationInfo, true);
       $country = $location["country_name"];
       $region = $location["region_name"];
       $city = $location["city"];
       //$cmd = "dig -x " . $publicIp . " +short";
       //$fqdn = $shell_exec ($cmd);
       print ("<li>Hostname: " . $hostname . "</li>\n");
       print ("<li>The private IP address is " . $privateIp . "</li>\n");
       print ("<li>The public IP address this host uses to reach the public Internet is " . $publicIp . "</li>\n");
       print ("<li>I seem to be close to " . $city . ", " . $country . "</li>\n");
       //print ("<li>Trying to reverse lookup the public IP with dig: " . $fqdn . "</li>\n");
       print ("<li>Kernel information: " . $uname . "</li>\n");
       print ("<li>CPU information: " . $cpu . "</li>\n");
       print ("<li>Current time: " . $date . "</li>\n");
     ?>
     </ul>
   </body>
</html>

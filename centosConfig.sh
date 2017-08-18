# Install Apache and PHP
sudo yum update -y
sudo yum install httpd -y
sudo yum install php -y
sudo systemctl start httpd
sudo systemctl enable httpd

# Delete default web site and download a new one
sudo rm /var/www/html/index.html
sudo yum install wget curl -y
sudo wget https://raw.githubusercontent.com/CSA-OCP-GER/azure-loves-linux/master/index.php -P /var/www/html/

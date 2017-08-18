# Install Apache and PHP
sudo apt-get update
sudo apt-get install apache2 -y
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql curl -y
sudo systemctl restart apache2

# Delete default web site and download a new one
sudo rm /var/www/html/index.html
sudo apt-get install wget -you
sudo wget https://raw.githubusercontent.com/CSA-OCP-GER/azure-loves-linux/master/index.php -P /var/www/html/

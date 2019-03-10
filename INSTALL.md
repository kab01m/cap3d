sudo apt-get update
sudo apt-get install git php-dev

sudo modprobe w1-gpio
sudo echo w1-gpio >> /etc/modules

git clone https://github.com/kab01m/cap3d.git
wget http://getcomposer.org/composer.phar

wget http://getcomposer.org/composer.phar
php composer.phar create-project --stability='dev' ronanguilloux/php-gpio php-gpio



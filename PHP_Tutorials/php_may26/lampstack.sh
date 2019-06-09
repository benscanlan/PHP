curl -s -O https://pear.php.net/install-pear-nozlib.phar
sudo php install-pear-nozlib.phar -d /usr/local/lib/php -b /usr/local/bin
#https://superuser.com/questions/292127/how-to-install-php-pear-pecl-and-apc-with-homebrew-on-mac-os-x
# /local/lib/php -b /usr/local/bin
# [PEAR] Archive_Tar    - installed: 1.4.7
# [PEAR] Console_Getopt - installed: 1.4.2
# [PEAR] Structures_Graph- installed: 1.1.1
# [PEAR] XML_Util       - installed: 1.4.3
# [PEAR] PEAR           - installed: 1.10.9
# Wrote PEAR system config file at: /private/etc/pear.conf
# You may want to add: /usr/local/lib/php to your php.ini include_path

pear version

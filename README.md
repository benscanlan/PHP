# PHP
Learning PHP
Break up project into assignments.

## User Authentication
    cd july16
_
      username:realname:iterations:80000:salt:hash
      alpha:Al Phang:80000:0058B9..D970C4:63E75CA4..3AF24935
      alpha:Al Phang:80000:0058B9..D970C4:63E75CA4..3AF24935
      alpha:Al Phang:80000:0058B9..D970C4:63E75CA4..3AF24935

### Updating Hashes
You can update the hashes behind the scenes when they visit again.
### Blueprint
https://github.com/AbhishekBiswal/PHP-Facebook-Login
Found: after searching github "php user authentication"
### Strategy
https://nakedsecurity.sophos.com/2013/11/20/serious-security-how-to-store-your-users-passwords-safely/
1. Use a random salt for each users password hash creation.
Note: "/dev/urandom on Unix-like systems – you as good as guarantee that each salt is unique"
2. "key derivation function -> key stretching"
To prevent weak passwords from being brute forced an intermediary library is used to create a password that is ultimately hashed.
### Potential Strategies
Use exact authentication module from senior project. (for now)
## User Cookies
    cd php_july7_murachs
## Basic Class
    cd php_july6
## Integrating Google Maps
    cd php_july4
Deliverables:
1. Create a php site that takes and address or has clickable address and redirects to google map site.
- site can be a single page
- must have a redirect link
2. Maybe take subset of sql db of Roseville addresses and make all clickable to target on a page. (Load database onto page.)
## Calling Python Scripts From <PHP?>
    cd php_june14_python
## Empty
    cd php_june21
## User Toggle CSS Dark Mode
    cd php_june13
    cd php_june9
## Graph
    cd php_may30
## Install PEAR and PECL on Mac OS X
    cd php_may26
## Calculator
    cd php_may23

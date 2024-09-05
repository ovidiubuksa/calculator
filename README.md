Steps to setup this little app

1. git clone https://github.com/ovidiubuksa/calculator.git
2. composer install

Usage:

php bin/calculator.php 5 ^ 0 -> 5 to power 0 (zero)
php bin/calculator.php 8 sqrt 3 -> square root of order of a number
php bin/calculator.php 9 sqrt -> basic square root

Running the PHPUnit test:
vendor/bin/phpunit tests/CalculatorTest.php

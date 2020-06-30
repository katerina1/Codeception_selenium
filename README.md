# Codeception_selenium

Short Installation and Set-up Steps for Codeception (on windows7):
1. Install composer - tool for dependency management in PHP  (https://getcomposer.org/download/)
2. Install codeceptin + webdriver via composer in cmd or gitbash: composer require --dev codeception/module-webdriver
3. Run php "../vendor/Codeception/Codeception/codecept" bootstrap in cmd to create codeception configuration and test directories (unit, acceptance, functional).
4. Create test file in acceptance suite  :  php "./Codeception/Codeception/codecept" generate:cest acceptance Login
5. Download chromeDriver and Selenium Standalone Server and start server with command : java -jar selenium-server-standalone-3.141.59.jar
6. Tests can be run via command: php ./codeception/codeception/codecept run acceptance

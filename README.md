# PHP test

## Installation

In terminal, run the following:
  - git clone https://github.com/ChanDetera/PHP_Test_Optimy.git
  - composer install
  - cp .env.example .env (Note: .env should not be included in the repo. But since this is a test, I included it.)

After running commands:
  - Create an empty database named "phptest" on your MySQL server
  - Import the dbdump.sql in the "phptest" database
  - Put your MySQL server credentials in the .env file
  - You can test the demo script in your shell: "php index.php"

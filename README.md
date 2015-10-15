# doctrineexamplebug
Illustrates a bug with entity listeners.

When 

Installation instructions

1. Run composer to install dependancies php composer.phar install 
2. Update boostrap.php with a valid database connection details. Mysql can be used as the db driver.
3. php vendor/bin/doctrine orm:schema-tool:create to create the test database
4. php examplebug.php

###Expected output is 

listener gets called
update 1


###Actual output is 

listener gets called
update 1
listener gets called
update 2

 

# Worklog
Worklog is a sample PHP bootstrap application 

In this early stage, this application is more like empty shell, but will grow in time. 
Even after a while I do not expect this application will become more than "proof of concept" app.

To install it you need to install symfony components with composer and web front-end components with bower. 

In the project root folder execute composer install command :
    worklog>composer install

In the web folder execute bower install command :
    worklog/web>bower install startbootstrap-sb-admin-2


#Database connection
Configuration for database connection is in src/Application.php file. 

This application support Symfony DBAL Migrations for database schema development. 
Database connection for migrations tool is saved in migrations-db.php file. 


More information about this proof of concept application: http://bisaga.com/blog/tag/worklog/
 

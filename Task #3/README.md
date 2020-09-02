## Setting Up Steps
- Open XAMPP and Start Apache and MySQL.
- Open XAMPP folder, Find Htdocs folder, Here you can add the project folder on localhost.
- Open your browser and type URL (localhost) then press "phpMyAdmin"
- Select Query Tap then write SET PASSWORD FOR 'root'@'localhost' = PASSWORD('your_root_password');
- Also change to this line in config.inc.php: $cfg['Servers'][$i]['auth_type'] = 'cookie';
- Open your browser and type URL (localhost/name folder of your project/ name of the file you want to run) ex:http://localhost/task_folder/index.php.

## Screenshots


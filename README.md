SausageFest LAN Party Script
============================
This is the script in use for the SausageFest LAN party site at http://sflan.joelnichols.co.uk. While I cannot guarantee that it'll be good quality code, useful for anything at all and won't cause everything in the world to explode, it may be useful to those who want to setup a LAN party site and don't mind investing a fair bit of techincal knowledge.

Installation
-------------
Getting SFLAN up and running isn't overly difficult, but I'm assuming some basic knowledge here.

1.  Upload the script in its entirety to your web server.
2.  Create the following folders:
tmp
tmp/cache
tmp/cache/models
tmp/cache/persistent
tmp/log
Make sure that these folders are writable by your web server.
3.  Rename app/Config/database.php.default to database.php and add in your database information
4.  Import sflan.sql to your database, phpMyAdmin works well for this.
5.  Edit app/Config/core.php replacing Security.salt and Security.cipherSeed with your own unique values.

Once all this is done you should be ready to go. 

Modifications
--------------
The main thing you'll likely what to change is the appearance of the site. To put it simply, all of the template files are in app/View. The main file you'll want to make changes to is app/View/Layouts/default.ctp, which is the primary template for the site. 

All of the stylesheets are in app/Webroot/css and all of the javascripts are in app/Webroot/js. 

License
-------
This script is governed under the Creative Commons Attribution 3.0 unported license (CC BY 3.0). See http://creativecommons.org/licenses/by/3.0/

CakePHP is governed under the MIT license.

Bootstrap is governed under the Apache License v2.0.

Questions / Comments?
---------------------
Any questions or comments? Feel free to contact me.

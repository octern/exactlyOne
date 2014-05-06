##ExactlyOne  
 
The simplest possible way to exchange exactly one piece of information

###Setup instructions
1. Put all files in a directory on your server. 
1. Set permissions for sp.txt so that the PHP scripts can write to it.
2. For security, sp.txt can be moved outside your web directory. If you do this, you need to update `spget.php` and `spcatch.php` with the new location. 

###Planned improvements
* Move all config options into one place
  * location of sp.txt
  * placeholder text for input field
  * maybe custom locations for image and favicon
  * maybe options about what info can be entered (number vs. text)
* Allow multiple instances on one server using a code in URL
  * Would probably need to switch to a database-backed system, though it would be nice if we could keep things simple.
* Reduce / simplify jquery dependencies to speed up loading. 

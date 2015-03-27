##ExactlyOne  
 
The simplest possible way to exchange exactly one piece of information

I created this when I was helping a friend with some mental health issues, and we needed a quick, unobtrusive, accessible-anywhere way for them to keep me apprised of their mood throughout the day. Both parties keep the page open in their browser, and they can easily push a single piece of information back and forth.

###Setup instructions
1. Put all files in a directory on your server. 
1. Set permissions for sp.txt so that the PHP scripts can write to it.
2. By default, you can open sp.txt in your browser in order to see history. If you would prefer for this not to be accessible, you can move the file outside your webroot. You then need to update `spget.php` and `spcatch.php` with the new location. 

###Planned improvements
* Move all config options into one place
  * location of sp.txt
  * placeholder text for input field
  * maybe custom locations for image and favicon
  * maybe options about what info can be entered (number vs. text)
* Allow multiple instances on one server
  * Would probably need to switch to a database-backed system, though that violates the "simplest possible" rule.
* Reduce / simplify jquery dependencies to speed up loading. 

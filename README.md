Show all media in a folder with PHP
------------------------------------

A simple webpage to display all images, video and audio files in a folder with PHP.

Large images will be displayed smaller than their original dimensions.

Video and Audio files will display HTML5 controls and can be played by HTML5 player.

You can specify how many media you want to display per pages.

##### LOGIN
## How it works

* The system is coded 100% in PHP (although a minimal knowledge of HTML is required).
* The visual framework used is [Bootstrap](http://getbootstrap.com).
* There are four main pages: `login.php` shows the login form, `index.php` the default password-protected area, `logout.php` simply ends the session and `config.php` stores the user's information.

## How to use it

1. Download the source files to your computer.
2. Open `config.php` with your favorite text editor (I suggest you use [Atom](https://atom.io)) and find the variables `$Username` and `$Password`.
3. Change the username and password (note that you have to use the salted version of your password generate USING https://onlinephp.io/password-hash and put in config.php file. 
4. Save the files, upload them to your webserver and give it a try.

###### EXTRA:

* If you want to password-protect any page, just add this snippet of code at the beginning of it:

```php
<?php
  session_start(); /* Starts the session */
  if($_SESSION['Active'] == false){ /* Redirects user to login.php if not logged in */
    header("location:login.php");
    exit;
  }
?>
```

#### Media Reading 
Copy 'inc' folder [`inc`] in your root folder (or wherever your index file is).

In your index page :

in the head

    <!-- style for media insertion -->
    <link rel="stylesheet" type="text/css" href="inc/ins-media.css">

in the body

    <!-- media insertion -->
    <?php include "ins-media.php"; ?>


### Settings
Adapt values in [`config.php`] according to your needs.

    *   folderPath : path to media folder,
    *   types : which Media file types will be displayed,
    *   sortByName : to sort by name. Default false, Media will be sorted by last modified date,
    *   reverseOrder : to invert sort order, if 'true'
    *                   if sorted by date, ordered by newests Media (uses EXIF data if possible),
    *                   if sorted by name order is naturally inverted,
    *   dateFormat : date format in label (http://php.net/manual/en/function.date.php)
    *   usePagination : true/false,
    *   mediaPerPage : number of Media per pages if usePagination true


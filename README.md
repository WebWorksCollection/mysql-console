mysql-console
=============

## $(whatisit) ##
A simple MySQL Console using MySQL Improved Extension

## Features ##
* Execute query from a simple textarea
* Automatic table column detection and resize
* Shows alert on syntax error

## Installation

Change the following line in index.php to your MySQL host, username, password and default database.

```php
$mysqli = new mysqli('localhost', 'user', '123456', 'default');
```

Copy and paste `index.php` and `style.css` anywhere, then enjoy!

## Requirements ##
* [PHP 4.1.13+ | 5.0.7+] (http://www.php.net/manual/en/book.mysqli.php)

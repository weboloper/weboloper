# weboloper
A multi-module Phalcon application  (Acl, Auth, SecurityPlugin, Volt)

This is a sample multi-module application for [Phalcon Framework](https://github.com/phalcon/cphalcon). 


## Get Started

### Requirements

To run this application on your machine, you need at least:

* >= PHP 5.5
* >= Phalcon 3.0
* Apache Web Server with `mod_rewrite enabled`, and `AllowOverride Options` (or `All`) in your `httpd.conf` or Nginx Web Server
* Latest [Phalcon Framework](https://github.com/phalcon/cphalcon) extension installed/enabled
* MySQL >= 5.1.5

Then you'll need to create the database and initialize schema:

```bash
echo 'CREATE DATABASE weboloper' | mysql -u root
cat schemas/weboloper.sql | mysql -u root vokuro
```

Also you can override application config by creating `app/config/config.php` 

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
cat schemas/weboloper.sql | mysql -u root weboloper 
```

Also you can override application config by creating `app/config/config.php` 


## Notes
### Auth
Password for all users set as "12312313"

### Modules
Weboloper uses Frontend module for publishing, and Backend module for administration.

### @toDo
Private resources are located at /core/common/plugins/Security/SecurityPlugin.php, move private resources to seperate file to config folder
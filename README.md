# deta-php-engine
PHP Runtime / Engine for Deta.Space
This Project is a PHP Runtime / Engine for Deta.Space. It is based on [PHP Version 8.1.8](https://www.php.net/) and uses the Internal Webserver.

## Features
- PHP 8.1.8
- Internal Webserver

[PHP Info](https://github.com/tuefekci/deta-php-engine/blob/main/phpinfo.png)

## Installation / Usage
Clone this repo and make changes to the spacefile for your type of project.

Put your PHP Code in the php/webroot folder if you need more than one php micro duplicate the php folder and the spacefile config for the micro.

### How to use
- Clone this repo
- Make changes to the spacefile
- Put your PHP Code in the php/webroot folder
- Deploy to Deta
  
### How to use with multiple PHP Micros
- Clone this repo
- Make changes to the spacefile
- Put your PHP Code in the php/webroot folder
- Duplicate the php folder and the spacefile config for the micro
- Deploy to Deta

### Routing
You need to setup your project, framework etc. to use native PHP routing. The internal webserver is not able to handle routing via htaccess or other methods.

### PHP Extensions
The following PHP Extensions are installed:
- bcmath
- calendar
- ctype
- curl
- dom
- exif
- fileinfo
- filter
- gd
- iconv
- inotify
- libxml
- mbstring
- mongodb
- mysqlnd
- pcntl
- pdo
- pdo_mysql
- pdo_sqlite
- phar
- posix
- readline
- redis
- shmop
- simplexml
- soap
- sockets
- sqlite3
- swoole
- openssl
- tokenizer
- xml
- xmlreader
- xmlwriter
- zlib
- zip
- ffi
- micro

If you need more extensions, if they are available for the latest php version please open an issue.

### PHP Config
If you need to change the php config, you can do so by creating a php.ini file and linking it via the --with-config-file command in the server.sh file.

## TODO:
- [ ] Add more PHP Extensions
- [ ] Setup CI/CD
- [ ] Setup smaller builds for faster deployment
- [ ] Add more PHP Versions
- [ ] Add more PHP Config Options

## Changelog
### 0.1.0
- Initial Release

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Credits
- [Deta](https://deta.sh/)
- [PHP](https://www.php.net/)
- [static-php-cli](https://github.com/crazywhalecc/static-php-cli/blob/bash-version/README-en.md)


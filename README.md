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

## Performance
The performance of this runtime is not as good as the native runtime. This is due to the fact that the runtime is based on the internal webserver and not on the native php-fpm. The performance is still good enough for most use cases.

```

          /\      |‾‾| /‾‾/   /‾‾/
     /\  /  \     |  |/  /   /  /
    /  \/    \    |     (   /   ‾‾\
   /          \   |  |\  \ |  (‾)  |
  / __________ \  |__| \__\ \_____/ .io

  execution: local
     script: loadtest.js
     output: -

  scenarios: (100.00%) 1 scenario, 20 max VUs, 2m50s max duration (incl. graceful stop):
           * default: Up to 20 looping VUs for 2m20s over 3 stages (gracefulRampDown: 30s, gracefulStop: 30s)


     ✓ status was 200

     checks.........................: 100.00% ✓ 1705      ✗ 0
     data_received..................: 3.3 MB  23 kB/s
     data_sent......................: 1.3 MB  8.9 kB/s
     http_req_blocked...............: avg=806.49µs min=0s      med=0s      max=85.95ms  p(90)=0s       p(95)=78.68µs
     http_req_connecting............: avg=224.95µs min=0s      med=0s      max=19.62ms  p(90)=0s       p(95)=0s
     http_req_duration..............: avg=18.85ms  min=12.14ms med=15.02ms max=342.88ms p(90)=25.32ms  p(95)=30.57ms
       { expected_response:true }...: avg=18.85ms  min=12.14ms med=15.02ms max=342.88ms p(90)=25.32ms  p(95)=30.57ms
     http_req_failed................: 0.00%   ✓ 0         ✗ 5115
     http_req_receiving.............: avg=142.77µs min=0s      med=0s      max=2.58ms   p(90)=847.64µs p(95)=999.03µs
     http_req_sending...............: avg=54.98µs  min=0s      med=0s      max=1.96ms   p(90)=150.08µs p(95)=448.33µs
     http_req_tls_handshaking.......: avg=564.95µs min=0s      med=0s      max=68.76ms  p(90)=0s       p(95)=0s
     http_req_waiting...............: avg=18.65ms  min=12.05ms med=14.78ms max=342.63ms p(90)=25.12ms  p(95)=30.46ms
     http_reqs......................: 5115    36.309256/s
     iteration_duration.............: avg=1.06s    min=1.04s   med=1.05s   max=1.48s    p(90)=1.07s    p(95)=1.1s
     iterations.....................: 1705    12.103085/s
     vus............................: 1       min=1       max=20
     vus_max........................: 20      min=20      max=20

```

## TODO:
- [ ] Replace Internal Webserver with Webserver or Process Manager
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


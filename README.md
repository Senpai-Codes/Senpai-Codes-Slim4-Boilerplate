# Senpai Codes Slim4 Boilerplate

Senpai Codes Server Template

### Tech

Senpai Codes Slim4 Boilerplate uses a number of open source projects to work properly:

* [Slim4] - Great ADR FrameWork
* [slim/twig-view] - symfony templating engine
* [cakephp/database] - Fast and easy to extend.
* [symfony/mailer] - SMTP component helps sending emails. 
* [bootstrap] - great UI boilerplate for modern web apps
* [webpack] - JS & CSS compiling

### Installation

Senpai Codes Slim4 Boilerplate requires

> [Node.js](https://nodejs.org/) v10+

> [NPM](https://nodejs.org/) v6+

> [Composer](https://getcomposer.org/) v1.1+

> [PHP](#) v7.3+

Install the dependencies and devDependencies and start the server.

```sh
Open terminal (CTRL+ALT+T)
$ git clone https://github.com/Senpai-Codes/Senpai-Codes-Slim4-Boilerplate.git
$ cd Senpai-Codes-Slim4-Boilerplate
$ npm install 
$ composer install
$ npm run build
Copy config/settings-env.php to config/settings.php
Change your Configurations(DB.SMTP,...)
$ php -S localhost:8888 public/index.php
Open Web Browser at http://localhost:8888/
```

### Development

Want to contribute? Great!

Senpai Codes Clock uses Webpack for fast developing.
Make a change in your file and hit **npm run build** to see your updates!








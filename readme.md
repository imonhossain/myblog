# Personal Blog Site
This Project will cover creating a very simple blog. It will only consist of posts. The front-end will only be some pages, an index page to list all posts and a view page to view a post.

There will be a backend control panel for managing posts and admins, this guide will also include a user authentication system to login administrators.

## Features
- AngularJS 1.x, RequireJS, UI-Router and OcLazyLoading, RestAngular
- Laravel 5.4
- PHP >= 5.6.4
- Tokenizer PHP Extension
- XML PHP Extension
- Themes: Bootstrap
- MySql
- Keyboard support

## Installation
```
git clone https://github.com/mdshohelrana/myblog.git
cd myblog
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

## Author
MD. SHOHEL RANA

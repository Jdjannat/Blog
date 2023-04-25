<p align="center">
<a href="https://pigjian.com/">
<img src="https://pigjian.com/uploads/Logo.png" alt="Powered By Jiajian Chan" width="160">
</a>
</p>

<p align="center">🎈 PJ Blog is an open source blog built with Laravel and Vue.js. <a href="https://pigjian.com">https://pigjian.com</a></p>

<p align="center">
  <b>Special thanks to the generous sponsorship by:</b>
  <br><br>
  <a href="https://www.upyun.com">
    <img src="https://pigjian.com/storage/logo/upyun.png" width=300>
  </a>
</p>

# PJ Blog

This is a powerful blog, I try to build the blog more beautiful, more convenient. 

`Laravel 5.*` and `Vuejs 2.*` combined with the establishment of a good response and quickly dashboard, the dashboard made through the `Vuejs` component development.

I believe it will be better and better. If you are interested in this, you can join and enjoy it.

Here is [documents](https://manual.pigjian.com/)

[Example](http://example.pigjian.com)

## Basic Features

- Manage users, articles, discussions and media
- Statistical tables
- Categorize articles
- Label classification
- Content moderation
- Own comments system
- Multi-language switching
- Markdown Editor
- Roles & Permissions
- and more...

[PJ Blog](https://github.com/jcc/blog) Laravel 7.*

## Server Requirements

- PHP >= 7.2.5
- Node >= 6.x
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Preview

![New Blog](https://cdn.pigjian.com/cover/2018/09/07/d2T4cAjTagf5L1rXH1FjLsFkJVffsPIGPkHEl2A5.jpg)

![New Blog](https://cdn.pigjian.com/cover/2018/09/07/4b7ExtB6NHZVh8n5KnW2673Ej6gwtLm1SUAubtpa.jpg)

## Install

### 1. Clone the source code or create new project.

```shell
git clone https://github.com/jcc/blog.git
```

OR

```shell
composer create-project jcc/blog
```

### 2. Set the basic config

```shell
cp .env.example .env
```

Edit the `.env` file and set the `database` and other config for the system after you copy the `.env`.example file.

### 2. Install the extended package dependency.

Install the `Laravel` extended repositories: 

```shell
composer install -vvv
```

Install the `Vuejs` extended repositories: 

```shel
npm install
```

Compile the js code: 

```shel
npm run dev

// OR

npm run watch

// OR

npm run production
```

### 3. Run the blog install command, the command will run the `migrate` command and generate test data.

```shell
php artisan blog:install
```

## Contributors

- [Jainam Darji](https://github.com/Jdjannat)

## Project installation steps

- Step 1 : `composer Install`
- Step 2 : `composer update`
- Step 3 : `composer dumpa`
- Step 4 : `nvm use 16.15.1`
- step 5 : `npm install`
- step 6 : `npm run dev` or `npm run watch`
- Step 7 : `php artisan key:generate`
- Step 8 : `php artisan migrate:refresh --seed`
- Step 9 : `./clean-up.sh`


## Admin Login

- Email Id : jainam@gmail.com 
- Password : 12345678 

## Thanks




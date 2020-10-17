# CakePHP - PingCRM

A demo application to illustrate how Inertia.js works with CakePHP.

## Installation

Clone the repo locally:

```sh
git clone git@github.com:ishanvyas22/cakephp-pingcrm.git
cd cakephp-pingcrm
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm install
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp config/.env.example config/.env
```

Create a database of your choice, and simply update your configuration accordingly.

Run database migrations:

```sh
bin/cake migrations migrate
```

Run database seeder:

```sh
bin/cake migrations seed --seed=DatabaseSeed
```

Run the dev server (the output will give the address):

```sh
bin/cake server
```

You're ready to go! Visit Ping CRM in your browser, and login with:

- **Username:** johndoe@example.com
- **Password:** secret

## Running tests

To run the CakePHP PingCRM tests, run:

```
phpunit
```

# CakePHP - PingCRM

A demo application to illustrate how Inertia.js works with CakePHP.

![](https://raw.githubusercontent.com/ishanvyas22/cakephp-pingcrm/master/screenshot.png)

## Installation

1. Download the repo locally:

    Via [composer](https://getcomposer.org/):
    ```sh
    composer create-project ishanvyas22/cakephp-pingcrm
    ```

    **or**

    Via cloning the git repo:
    ```sh
    git clone git@github.com:ishanvyas22/cakephp-pingcrm.git
    ```

2. Install PHP dependencies:

    ```sh
    composer install
    ```

3. Install NPM dependencies:

    ```sh
    npm install
    ```

4. Build assets:

    ```sh
    npm run dev
    ```

## Setup

1. Create `.env` file

    ```sh
    cp config/.env.example config/.env
    ```

2. Connect to database. Create a database of your choice, and simply update your configuration accordingly.

    Run database migrations:
    ```sh
    bin/cake migrations migrate
    ```

    Run database seeder:
    ```sh
    bin/cake migrations seed --seed=DatabaseSeed
    ```

3. Run the dev server (the output will give the address):

    ```sh
    bin/cake server
    ```

You're ready to go! Visit CakePHP PingCRM in your browser, and login with:

- **Username:** johndoe@example.com
- **Password:** secret

## ❤️  Support The Development
**Do you like this project? Support it by donating:**

<a href="https://www.buymeacoffee.com/ishanvyas" target="_blank">
    <img src="https://www.buymeacoffee.com/assets/img/custom_images/purple_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" >
</a>

<a href="https://www.patreon.com/ishanvyas">
    <img src="https://c5.patreon.com/external/logo/become_a_patron_button@2x.png" width="160">
</a>

**or** [Paypal me](https://paypal.me/IshanVyas?locale.x=en_GB)


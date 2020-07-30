# High Level Requirements

Create a small web app that will allow a user to access project credentials that they have stored. The web app will have the following requirements:

- Each user will need to log-in with email and password
- Upon log-in, the user will be taken to a new page where they can see existing projects and add new ones
- All passwords will be displayed with an asterisk for each character of the password
- Upon clicking "Create New Projects" button, the user will be taken to a new page to submit new project credentials
- Create project page will have autocomplete based on existing projects in the DB for the project input
- Each project entry in the table will have a "Show Password" button which can be used to display the hidden password. This event will be registered in the DB saving the user which grabbed the password, project credentials retrieved and the timestamp of the event

## Technologies Used

- HTML
- Laravel
- PHP
- MySQL
- Vue
- CSS
- jQuery
- Bootstrap

## Requirements to Use This App

- Must have a virtual server tool like MAMP or equivalent
- Must have node installed
- Must have composer installed
- Clone this repo onto your local machine
- Download a copy of the DB
- Update env file with the DB credentials --> DB name: access_project_credentials, user: root, password: root
- Run npm install
- After copying the repo, you will need to generate a key for this app by running command: php artisan key:generate
- Run this command to establish a connection to the DB: composer dump-autoload

## Available URL's

- Login page can be reached via http://127.0.0.1:8000 or whicever URL your virtual server tool establishes
- Registration page is available for testing additional accounts but is not required -> http:127.0.0.1:8000/register
- Projects page can be reached via http:127.0.0.1:8000/projects but note you need to be logged-in to access this page

## Test Accounts

- Three test accounts with dummy projects have been created. Their credentials are below:

- user1@email.com , user1password
- user2@email.com , user2Password
- user3@email.com , password3User
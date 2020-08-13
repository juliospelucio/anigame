# Anigame


Anigame is a simple way to save your favorite game titles and japanese anime shows.

  - CRUD your animes and games;
  - Upload anime/game covers;
  - Give them a score.

# Instalation

Anigame requires [PHP](https://www.php.net/downloads.php) 7.2.5+ to run.

Install the dependencies and devDependencies and run server with [Artisan](https://laravel.com/docs/7.x/artisan) command.

```sh
$ cd anigame
$ composer install
$ php artisan serve
``` 

A small portion of this project utilizes Vue.js to render some dinamic components.

[Node.js](https://nodejs.org/) will be needed to fully use this project features.
On the root folder of the project install all dependencies, and compile the files.

```sh
$ npm install
$ npm run dev
``` 

Or...

```sh
$ npm install && npm run watch
``` 

# Environment

Further configurations of local development goes in the file **.env.example**. Just rename it and set up local variables(APP, DB).
Afterwards, run all the migrations:
```sh
$ php artisan migrate
``` 
***Ready to Use***


# Ebook app

## Description:

Basic web app developed with Laravel framework. 

## Project features

- Guest page for review
- Admin page with authentication
- CRUD operations in Admin page
- Filter books by authors
- WYSIWYG editor

## Launch instructions:

-   If you do not have composer package manager installed on your system, install it (installation instructions [here](https://getcomposer.org/download)).
-   Clone this repository or download it as a ZIP package.
-   Open it with Visual Studio Code or your preferred code editor.
-   Create a new schema(database) in you MySQL server.
-   Rename **'.env.example'** file to **'.env'** inside of the project's root directory and configure the database information.
-   Using GitBash, CMD or other terminal in your code editor:
    -   run if composer is installed locally <pre>php <'path to composer.phar file location'>/composer.phar install</pre>
    -   run if composer is installed on your system globally  <pre>php composer.phar install</pre>
-   Run <pre>php artisan key:generate</pre>
-   Run migrations to create tables<pre>php artisan migrate</pre> 
-   Fill tables with dummy data <pre>php artisan db:seed</pre>
-   Follow the link that appears in the terminal after running <pre>php artisan serve</pre>


## Screenshots

![1](https://user-images.githubusercontent.com/72792707/133806156-54900533-14e8-444e-b8cb-9a613f26a03d.JPG)
![2](https://user-images.githubusercontent.com/72792707/133806159-267b4bef-475a-4988-992f-5e1435ffc828.JPG)
![3](https://user-images.githubusercontent.com/72792707/133806163-089455e0-8b1d-4078-81cd-6061a697da48.JPG)
![4](https://user-images.githubusercontent.com/72792707/133806164-aa50cf5d-8ea7-4280-8070-0cb0b657e3e7.JPG)
![7](https://user-images.githubusercontent.com/72792707/133806657-ecee0f76-6ef5-4beb-b0cb-31e1b963192a.JPG)

## Author:

[Tomas L.](https://github.com/tomas-land)
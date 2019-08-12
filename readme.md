<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Parent Hierarchical

This app is simple build for small unit test:

- [This app consist of adding the family relation by the user and finding their ascendant and descendant, by email.]




## Running app on local Machine 

To run the app we have to do the following steps,
- **[Clone the app form](https://github.com/Vibepasson123/parent-hierarchical.git)**
- **[Create a new database in MySQL/configure in .env file and migrate with command ](php artisan migrate)**
- **[Install neo4j is not in local machine and configure the database in the file ExampleComponent.Vue and      InformationPage.Vue in the function connet inside the method and to download the neo4j click on this link ](https://neo4j.com/download/)**
- **[install the node_modele by the command](npm install,and after installation run the "command npm run watch")**


## Running the application 

To run the application register the user and go to add information as the database will be empty, in the form add information select the relation from the select box and add the email of your relative try to avoid the dupicaltion of father mother grand father and grand mother because due to lack of time I could not put the validation for these four relationship.
    To see the results enter the email on main page and hit submit button it will navigate to a table with all information. To come back just click on the square button the top left side of the table header.
 
## Contributing

  As this application is just for unit test no contribution is required.

## Security Vulnerabilities

No test where conducted due to the lack of time, only the functionalty test was counducted which may vary form person to person

## License

No License is overthrone on this application 

# Blog with Laravel

This is a ready made blog build with laravel just to make your effort easy. You can setup your blog in just 30 min.

## Getting Started

If you have no idea about Laravel , I would suggest you to check it [here](http://laravel.com/docs/5.4) . You need your system to be ready as per Laravel system requirement.

### Packages in there. 

This has

* [Laravel](http://laravel.com/docs/5.4)5.4
* [Clean Blog](https://startbootstrap.com/template-overviews/clean-blog/) for  blog template.
* [SB Admin](https://startbootstrap.com/template-overviews/sb-admin/) for the admin panel

### Pre Requirement

In your system Laravel 5.4 installation should be up and runnign well . Else you'll have to spend time on fixing things rather than this blog.  


### Installing

A step by step details how you can make it up and running in your system.

Change your DB credential in .env file.
```
DB_DATABASE=<DATABASENAME YOU CREATED>
DB_USERNAME=<MYSQL USERNAME>
DB_PASSWORD=<MYSQL PASSWORD>

```

Create tables . Run 

```
php artisan migrate

```
Have some data to see how it look . Run

```

php artisan db:seed

```

As we have all model under app\Model and the namespace is App\Model for all model . you need to change in auth file . Change in cofig/auth.php

```
'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Model\User::class,
        ],
    ],

```

We using local storage to save all post related files . You need to create a soft link to storage

```
php artisan storage:link

```


Now all set . You can fire 

```

php artisan serve

```


and your blog is up 

```

http://localhost:8000

```


### Admin Panel

```

http://localhost:8000/login

```

Admin credenetial 

```


admin@example.com
admin123

```

You can see your admin panel and start your first post.

Will keep updating the comments and visitors module . 

## Contributing

When contributing to this repository, please first discuss the change you wish to make via issue, email, or any other method with the owners of this repository before making a change.


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details






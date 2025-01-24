## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Database setup
The recommended database is MySQL / Mariadb. You can however use a database of your choice

Steps:
    1. Create a database named simbaziwani. If you wish to change the name, remember to update the .env file
    2. Create a database user (username and password of your choice)
    3. Record the username and password in the .env file
    4. If you are are not usin localhost, specify the DB host in the .env file
    5. When done, run the following command to  execute migrations
        [php artisan migrate]

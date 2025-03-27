<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
<<<<<<< HEAD


```
realestate
├─ .editorconfig
├─ app
│  ├─ Http
│  │  └─ Controllers
│  │     ├─ API
│  │     │  └─ PropertyController.php
│  │     ├─ Controller.php
│  │     ├─ DatabaseController.php
│  │     ├─ LoginController.php
│  │     ├─ PropertyController.php
│  │     └─ RegisterController.php
│  ├─ Models
│  │  ├─ Property.php
│  │  └─ User.php
│  └─ Providers
│     └─ AppServiceProvider.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  └─ 0001_01_01_000002_create_jobs_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ css
│  │  └─ app.css
│  ├─ favicon.ico
│  ├─ img
│  │  ├─ 1920.jpeg
│  │  ├─ 1921.jpg
│  │  ├─ 1924.jpeg
│  │  ├─ avatar-holder.jpeg
│  │  ├─ blogs
│  │  │  ├─ blog.jpeg
│  │  │  ├─ dP7VlxxYkPaL5kDbLOYBM9hoqhQCgHhNbVedUJkx_medium.jpeg
│  │  │  ├─ SbCxE4CcXDEpTiDi0i2P5Qi19vGtulvQ3NP1QKZM_medium.jpeg
│  │  │  ├─ trouver-courtier.jpeg
│  │  │  └─ zCnIuLxyIzQxM44pe9CfYCVOTokSRE8UDZSw3WUN_medium.jpeg
│  │  ├─ logo.png
│  │  ├─ properties
│  │  │  └─ collection_img.png
│  │  └─ REMAX_logo.png
│  ├─ index.php
│  ├─ js
│  │  └─ app.js
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ frontend
│  │  ├─ blog.html
│  │  ├─ blogs.html
│  │  ├─ css
│  │  │  └─ app.css
│  │  ├─ img
│  │  │  ├─ 1920.jpeg
│  │  │  ├─ 1921.jpg
│  │  │  ├─ 1924.jpeg
│  │  │  ├─ avatar-holder.jpeg
│  │  │  ├─ blogs
│  │  │  │  ├─ blog.jpeg
│  │  │  │  ├─ dP7VlxxYkPaL5kDbLOYBM9hoqhQCgHhNbVedUJkx_medium.jpeg
│  │  │  │  ├─ SbCxE4CcXDEpTiDi0i2P5Qi19vGtulvQ3NP1QKZM_medium.jpeg
│  │  │  │  ├─ trouver-courtier.jpeg
│  │  │  │  └─ zCnIuLxyIzQxM44pe9CfYCVOTokSRE8UDZSw3WUN_medium.jpeg
│  │  │  ├─ logo.png
│  │  │  ├─ properties
│  │  │  │  └─ collection_img.png
│  │  │  └─ REMAX_logo.png
│  │  ├─ index.html
│  │  ├─ js
│  │  │  └─ app.js
│  │  ├─ login.html
│  │  ├─ profile.html
│  │  ├─ properties.html
│  │  ├─ property.html
│  │  └─ register.html
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ auth
│     │  ├─ login.blade.php
│     │  └─ register.blade.php
│     ├─ home
│     │  └─ index.blade.php
│     └─ layouts
│        ├─ app.blade.php
│        ├─ nonavbar.blade.php
│        └─ partials
│           └─ header.blade.php
├─ routes
│  ├─ api.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 1830410e6add2c9a16bc2e2c0f223fe5.php
│  │     ├─ 2043c7b01c02db284d08afb3493ddce9.php
│  │     ├─ 5625a64003b2c7394d6ac76a4bacc352.php
│  │     ├─ 9c54d125a757f090476b1f08c7b6c699.php
│  │     ├─ d37ada5898a9055f1d55c998d3571226.php
│  │     └─ db22992a1c80cbfc72f9e4913ad16a29.php
│  └─ logs
├─ tests
│  ├─ Feature
│  │  └─ ExampleTest.php
│  ├─ Pest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ vite.config.js

```
=======
>>>>>>> 2e5eb90de0a4395c1a40c44558093b1e0e202cb9

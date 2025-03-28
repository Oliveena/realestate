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



```
realestate
├─ .editorconfig
├─ app
│  ├─ Http
│  │  └─ Controllers
│  │     ├─ BlogArticleController.php
│  │     ├─ CommentController.php
│  │     ├─ Controller.php
│  │     ├─ DatabaseController.php
│  │     ├─ HomeController.php
│  │     ├─ LoginController.php
│  │     ├─ MessageController.php
│  │     ├─ ProfileController.php
│  │     ├─ PropertyController.php
│  │     ├─ RegisterController.php
│  │     └─ UserController.php
│  ├─ Models
│  │  ├─ BlogArticle.php
│  │  ├─ Comment.php
│  │  ├─ Image.php
│  │  ├─ Message.php
│  │  ├─ Property.php
│  │  └─ User.php
│  ├─ Providers
│  │  └─ AppServiceProvider.php
│  └─ View
│     └─ Components
│        ├─ AppLayout.php
│        ├─ BaseLayout.php
│        ├─ GuestLayout.php
│        └─ SearchForm.php
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
├─ dailyscrum.txt
├─ database
│  ├─ cp5114_team3.sql
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_images_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2025_03_26_041254_create_blogarticles_table.php
│  │  ├─ 2025_03_26_041729_create_comments_table.php
│  │  ├─ 2025_03_26_042139_create_properties_table.php
│  │  ├─ 2025_03_26_042926_create_messages_table.php
│  │  └─ 2025_03_26_214434_create_images_table.php
│  └─ seeders
│     ├─ CommentSeeder.php
│     ├─ DatabaseSeeder.php
│     └─ UserSeeder.php
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
│  │  ├─ avatar
│  │  │  ├─ avatar-holder.jpeg
│  │  │  ├─ beepboop.png
│  │  │  └─ defaultavatar.webp
│  │  ├─ blogs
│  │  │  ├─ blog.jpeg
│  │  │  ├─ defaultillustration.jpeg
│  │  │  ├─ dP7VlxxYkPaL5kDbLOYBM9hoqhQCgHhNbVedUJkx_medium.jpeg
│  │  │  ├─ laundry-room-reno-hero-image-1024x683.jpeg
│  │  │  ├─ province-relocation-hero-image-1024x683.jpg
│  │  │  ├─ rlp-CBlog-Spring-Rec-2025-Nat-1024x576.jpg
│  │  │  ├─ SbCxE4CcXDEpTiDi0i2P5Qi19vGtulvQ3NP1QKZM_medium.jpeg
│  │  │  ├─ small-spaces-hero-image-1024x683.jpg
│  │  │  ├─ Tile-installation-hero-image-1024x683.jpg
│  │  │  ├─ trouver-courtier.jpeg
│  │  │  └─ zCnIuLxyIzQxM44pe9CfYCVOTokSRE8UDZSw3WUN_medium.jpeg
│  │  ├─ facebook.png
│  │  ├─ google.png
│  │  ├─ logo.png
│  │  ├─ properties
│  │  │  ├─ c11.jpg
│  │  │  ├─ c12.jpg
│  │  │  ├─ c13.jpg
│  │  │  ├─ c21.jpg
│  │  │  ├─ c22.jpg
│  │  │  ├─ c23.jpg
│  │  │  ├─ c24.jpg
│  │  │  ├─ collection_img.png
│  │  │  ├─ farm11.jpg
│  │  │  ├─ farm12.jpg
│  │  │  ├─ farm13.jpg
│  │  │  ├─ farm14.jpg
│  │  │  ├─ l11.jpg
│  │  │  ├─ l12.jpg
│  │  │  ├─ l13.jpg
│  │  │  ├─ l14.jpg
│  │  │  ├─ m11.jpg
│  │  │  ├─ m12.jpg
│  │  │  ├─ m13.jpg
│  │  │  ├─ re11.jpg
│  │  │  ├─ re12.jpg
│  │  │  ├─ re13.jpg
│  │  │  ├─ re15.jpg
│  │  │  ├─ re21.jpg
│  │  │  ├─ re22.jpg
│  │  │  ├─ re23.jpg
│  │  │  └─ re24.jpg
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
│  │  ├─ addproperty.html
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
│  │  ├─ property.html
│  │  ├─ propertysearch.html
│  │  └─ register.html
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ auth
│     │  ├─ login.blade.php
│     │  └─ register.blade.php
│     ├─ blogs
│     │  ├─ create.blade.php
│     │  ├─ edit.blade.php
│     │  ├─ index.blade.php
│     │  └─ show.blade.php
│     ├─ components
│     │  ├─ fb-button.blade.php
│     │  ├─ google-button.blade.php
│     │  ├─ layouts
│     │  │  └─ header.blade.php
│     │  └─ property-item.blade.php
│     ├─ home
│     │  └─ index.blade.php
│     ├─ layouts
│     │  ├─ app.blade.php
│     │  ├─ base.blade.php
│     │  └─ guest.blade.php
│     ├─ profile
│     │  ├─ edit.blade.php
│     │  └─ show.blade.php
│     └─ property
│        ├─ create.blade.php
│        ├─ edit.blade.php
│        ├─ index.blade.php
│        ├─ search.blade.php
│        └─ show.blade.php
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
│  │     ├─ 08ac742a84c4041582bc2421a18c6063.php
│  │     ├─ 0b5a81008e2dc4e9dd672437ffb166a8.php
│  │     ├─ 12729614c46e753ab51cefe439532596.php
│  │     ├─ 13916423674b8cf5fe698f52b3988481.php
│  │     ├─ 2043c7b01c02db284d08afb3493ddce9.php
│  │     ├─ 50e9f88aea9325db5e68ce3fbcc59f87.php
│  │     ├─ 5a5755ef91eac67aeb916ccfdea4940d.php
│  │     ├─ 6d94e299da1892262a4d9cc1c2e54b4a.php
│  │     ├─ 6e39605cfd555b2c1a6fd79cc7479915.php
│  │     ├─ 8df74b81520850ce2ce3c9b5b72db795.php
│  │     ├─ 95176059bed072455419dbeee2ab9ab1.php
│  │     ├─ 99da47e9917975843f8c9afe6c7b84eb.php
│  │     ├─ 9c54d125a757f090476b1f08c7b6c699.php
│  │     ├─ a32fe3858ae744d69755e0dfdf0eb105.php
│  │     ├─ a3dd6ddca5a9aeb931d21735be2737ff.php
│  │     ├─ b28085c34ad08537468ad92da86b1749.php
│  │     ├─ c06bb2f15345199cdd45f52fcc0ad12b.php
│  │     ├─ d37ada5898a9055f1d55c998d3571226.php
│  │     └─ db22992a1c80cbfc72f9e4913ad16a29.php
│  └─ logs
│     └─ laravel.log
├─ tests
│  ├─ Feature
│  │  └─ ExampleTest.php
│  ├─ Pest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ vite.config.js

```
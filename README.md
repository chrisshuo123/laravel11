# My Basic Laravel Learning Process
### Part 1: Blade Templating Engine
**Branch:** part1_bladeTemplatingEngine <br>
I've learned the basic in understanding the Laravel's Route and the Blade's page inside the views
### Part 2: Blade Component
**Branch:** part2_bladeComponent <br>
I've learned to implement component by using the php artisan make:component whether it requires class & views or views only _(without class)_, and how to use the components to organize navbar, navlink, header, and layout.<br>
At first, each pages in the resources/views/home.blade.php _(let's set home.blade.php page as an example)_, was in a single page format like normal PHP MVC does _in the 'Views' section_.  From here, there are 4 artisan make:components to implement:<br>
<ol>
    <li>
        <b>php artisan make:component Navbar</b><br>
        Learned to move the whole <nav> tag into this resources/views/components/navbar.blade.php page.  To show my Navbar on my home.blade.php page, '<x-navbar></x-navbar>' tag that recently the navbar located at.
    </li>
    <li>
        <b>php artisan make:component Header --view</b><br>
        Every web page contains 'header' after navbar on the most top page.  To manage header, I move the <header> tag from home.blade.php into the resources/views/components/header.blade.php page, while replacing the recent <header> tag position in home.blade.php with '<x-header></x-header>' tag.  To show the Header title according to the visited webpage, I change the Header name with '{{ $slot }}', that will be called via the 'routes' directory.
    </li>
    <li>
        <b>php artisan make:component Layout</b><br>
        To ease frustrations from HTML tags, I move the whole <html> and <!DOCTYPE html> tag from home.blade.php into this resources/views/components/layout.blade.php page.  For any contents inside the <body><main>...</main></body>, I give a {{ $slot }}, so any contents that needs to be filled, I filled them in the main 'home.blade.php' with <x-layout></x-layout> tag.
    </li>
    <li>
        <b>php artisan make:component NavLink --view</b><br>
        Every navbar requires button animations to notify the users in what page they're now on.  Whenever I'm in the home.blade.php, the 'Home' navbar button will be highlighted, and If the user moves to another page let's say on 'About Us' page, the 'About Us' navbar button will be highlighted (set to active), while non-activing the 'Home' navbar button.  The whole conditional operator and the tailwind are all moved to this resources/views/components/nav-link.blade.php page, from the resources/views/components/navbar.blade.php page, leaving the Navbar Button in the <x-nav-link></x-nav-link> only shows links. For simple navbar button routing.
    </li>
</ol>
<br>
***
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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

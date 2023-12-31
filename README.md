## Exemplo de tela de páginação super rápido
<p align="center">
https://bandit.network/app
</p>

## Acessando views Mysql Laravel
<p align="center">
https://www.youtube.com/watch?v=jHMGphmGD2k
</p>


## Charts open source

<p align="center">
https://www.chartjs.org/docs/latest/
</p>
<p align="center">
https://d3js.org/
</p>
<p align="center">
https://developers-dot-devsite-v2-prod.appspot.com/chart/interactive/docs/gallery?hl=pt-br
</p>


## Acessar o sistema
<p align="center">
Página principal do Sistema.
</p>
<img src="https://galaxyz.com.br/images/document-digital-prometheus-syscon/pagina-principal.PNG">  

## Configurar Tema do CSS
<p align="center">
Para configurar, abra o arquivo layout.blade.php que esta em:
document-digital-prometheus-syscon\resources\views\components
e edite as linhas abaixo e coloque o seu IP


href="http://192.168.1.117:8000/build/assets/app-9b35bda6.css" />
href="http://192.168.1.117:8000/build/assets/app-43c05ea5.js" />
href="http://192.168.1.117:8000/build/assets/app-9b35bda6.css" />
src="http://192.168.1.117:8000/build/assets/app-43c05ea5.js">


</p>
<br/>
<p align="center">

- [Configure conforme sua necessidade, projeto local:
- [Desenvolvendo sistema Documento Digital em Laravel 
- [Local do projeto de Teste: C:\tools-xampphp\server\htdocs\workspace-laravel\document-digital-prometheus
- [Comando seeder referente a permissões de usuarios
- [php artisan make:seeder UserTableSeeder
- [php artisan db:seed

- [Configurar arquivo hosts do Windows
- [127.0.0.1       documento

## Configurar arquivo no servidor XAMPP local: server\apache\conf\extra\httpd-vhosts.conf
<VirtualHost *:80>
    ServerAdmin kleber@galaxyz.com.br 
    DocumentRoot "C:/tools-xampphp/server/htdocs/workspace-laravel/document-digital-prometheus-syscon"
    ServerName documento
    ServerAlias documento
    ErrorLog "public"
    CustomLog "public" common
</VirtualHost>


- [Para abrir o projeto, mapear virtual hosts e hosts do windows:
C:\tools-xampphp\server\htdocs\workspace-laravel\document-digital-prometheus-syscon/public

</p>


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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



-- 
new users migration
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

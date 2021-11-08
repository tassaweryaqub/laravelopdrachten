<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## De installatie (bijv wamp.net server)
Voer de volgende stappen uit om met deze opdrachten aan de slag te gaan.
<ul>
    <li>Clone het project in een directory</li>
    <li>Maak in wamp.net een project aan en zet de document root op de public map. Gebruik minimaal php versie 8</li>
    <li>Zorg dat je bij de phpMyAdmin kan komen</li>
    <li>Maak 2 databases aan, 1 voor de website en 1 voor testen
        <ul>
            <li>Database 1: opdrachten</li>
            <li>Database 2: opdrachtentest (Let op, gebruik je een andere naam, wijzig dit in phpunit.xml</li>
        </ul>
    </li>
    <li>Maak een .env file aan, en kopier de .env.example daar naartoe</li>
    <li>In de .env file, check de database naam (opdrachten) en de username (root)</li>
    <li>Ga naar je root directory van je project in de terminal, en voer daar uit: composer install</li>
    <li>Voer dan in de terminal uit: php artisan key:generate</li>
</ul>

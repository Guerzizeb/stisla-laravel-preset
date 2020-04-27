# Stisla Preset for Laravel Framework

## Introduction

- Provides a skeleton preset based on Stisla Template.

## Installation
```
composer require guerzizeb/stisla-laravel-preset
```

## Usage
```
php artisan ui stisla [--auth]
```
--auth is optional, use it ti generate login and registration scaffolding...

Then run 
```
npm install
```
```
npm run dev
```
to compile your fresh scaffolding

# Add auth view
you can auth views later by running
```
php artisan stisla:auth [--force]
```


## License

[MIT](LICENSE.md)

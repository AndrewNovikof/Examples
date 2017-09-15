# Example project for Laravel

### 1. Installation

`composer require andrewnovikof/objects`

### 2. Service Provider

* Add `AndrewNovikof\Objects\ObjectsServiceProvider::class` to your `providers[]` array in `config\app.php`.

### 3. Facade

* Add `'Objects' => AndrewNovikof\Objects\Facades\Objects::class` to your `facades[]` array in `config\app.php`.

### 4. Config

You can publish the config file with:

```bash
php artisan vendor:publish --provider="AndrewNovikof\Objects\ObjectsServiceProvider" --tag="config"
```

### 4. Example objects

You can publish the Example objects files with:

```bash
php artisan vendor:publish --provider="AndrewNovikof\Objects\ObjectsServiceProvider" --tag="objects"
```
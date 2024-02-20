# Laravel Nova FAQs
Exposes some simple FAQ functionality within Laravel Nova.

## Installation
Installation for this package is simple, just require the package via composer:

```bash
composer require creode/laravel-nova-faqs
```

## Usage

### Migrations
Once installed, you will need to run the migrations to create the required database tables:

```bash
php artisan migrate
```

### Configuration
You will also need to publish the config file to set up the required settings:

```bash
php artisan vendor:publish --tag="nova-faqs-config"
```

This will create a `config/nova-faqs.php` file which you can use to configure the package.

### Customising the FAQ Model
The default Event model can be replaced to allow you to add new features to it within your main application. This can easily be done by changing the model in the `config/nova-faqs.php` file:

```php
// config/nova-faqs.php
return [
    ...
    'faqs_model' => App\FaqModel::class,
    ...
];
```

### Querying FAQs
You can make queries on blogs by using the Repository class:

```php
use Creode\LaravelNovaFaqs\Repositories\FaqRepository;

$faqRepository = new FaqRepository();
$faqs = $faqRepository->all();
```

### Seeding FAQs
You can seed FAQs using the EventFactory:

```bash
php artisan db:seed --class="Creode\LaravelNovaFaqs\Database\Seeders\FAQsDatabaseSeeder"
```

## Dependencies
This package depends on the following packages:

- [TipTap](https://github.com/manogi/nova-tiptap) - For rendering WYSIWYG content.
- [Laravel Repository](https://github.com/creode-modules/laravel-repository/) - For allowing a repository pattern to be used for querying the database.
- [Nova Sortable](https://github.com/outl1ne/nova-sortable) - For allowing items to be sorted.
- [Nova Publishable](https://github.com/creode-modules/nova-publishable) - For allowing items to be published or unpublished.
- [Laravel Nova](https://nova.laravel.com/) - For the admin interface.

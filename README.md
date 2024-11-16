<p align="center"><img src="/art/logo.svg" width="50%" alt="Logo Laravel Pint"></p>

<p align="center">
<a href="LICENSE.md">
    <img src="https://img.shields.io/packagist/l/icodestuff-io/laravel-notes.svg?style=flat-square" alt="Packagist License">
</a>

<a href="https://github.com/icodestuff-io/laravel-notes/actions">
    <img src="https://img.shields.io/github/workflow/status/icodestuff-io/laravel-notes/run-tests?style=flat-square" alt="Github Workflow Status">
</a>
<a href="https://scrutinizer-ci.com/g/icodestuff-io/laravel-notes/?branch=master">
    <img src="https://img.shields.io/scrutinizer/coverage/g/icodestuff-io/laravel-notes.svg?style=flat-square" alt="Coverage Status">
</a>
<a href="https://packagist.org/packages/icodestuff-io/laravel-notes">
    <img src="https://img.shields.io/packagist/dt/icodestuff-io/laravel-notes.svg?style=flat-square" alt="Packagist Downloads">
</a></p>
Laravel Notes is a flexible and easy-to-use package that adds a notes system to your Laravel application. It’s well-tested, highly configurable, and works seamlessly with multiple Laravel versions.

---

## Features

- Flexible notes system.
- Easy setup & configuration.
- IDE-friendly and well-documented.

---

## Table of Contents

1. [Installation and Setup](#installation-and-setup)
2. [Configuration](#configuration)
3. [Usage](#usage)
4. [Contribution Guidelines](#contribution)
5. [Security](#security)
6. [Credits](#credits)

---

## 1. Installation and Setup

### Installation via Composer

Install the package using Composer:

~~~
composer require icodestuff/laravel-notes
~~~

### Setup for Laravel

> **Note:** This package will automatically register itself for Laravel `>= 5.5`.

For earlier versions, manually register the service provider in `config/app.php`:

~~~
'providers' => [
    // Other service providers...
    Icodestuff\LaravelNotes\LaravelNotesServiceProvider::class,
],
~~~

Publish the configuration file:

~~~
php artisan vendor:publish --provider="Icodestuff\LaravelNotes\LaravelNotesServiceProvider"
~~~

---

## 2. Configuration

Customize the package by editing `config/notes.php`:

~~~
return [
    'database' => [
        'connection' => env('DB_CONNECTION', 'mysql'),
        'prefix'     => null,
    ],
    'authors' => [
        'table' => 'users',
        'model' => App\User::class,
    ],
    'notes' => [
        'table' => 'notes',
        'model' => Icodestuff\LaravelNotes\Models\Note::class,
    ],
];
~~~

---

## 3. Usage

### Adding Notes to Models

Use the `HasManyNotes` trait in your model:

~~~
use Icodestuff\LaravelNotes\Traits\HasManyNotes;

class Post extends Model {
    use HasManyNotes;
}
~~~

Add a note:

~~~
$post = App\Post::first();
$note = $post->createNote('This is a note!');
~~~

Add a note with an author:

~~~
$user = App\User::first();
$note = $post->createNote('Note with author', $user);
~~~

Retrieve notes:

~~~
$notes = $post->notes;
~~~

---

### Using the `HasOneNote` Trait

For managing a single note on a model, use the `HasOneNote` trait:

~~~
use Icodestuff\LaravelNotes\Traits\HasOneNote;

class Post extends Model {
    use HasOneNote;
}
~~~

Access the note:

~~~
$note = $post->note;
~~~

---

### Retrieve Author's Notes

Add the `AuthoredNotes` trait to your `User` model to retrieve all notes authored by a user:

~~~
use Icodestuff\LaravelNotes\Traits\AuthoredNotes;

class User extends Model {
    use AuthoredNotes;
}
~~~

Retrieve the author's notes:

~~~
$user = App\User::first();
$notes = $user->authoredNotes;
~~~

---

### Find a Specific Note by ID

To find a note by its ID:

~~~
$post = App\Post::first();
$note = $post->findNote(1);
~~~

> **Note:** The `findNote` method is only available in the `HasManyNotes` trait.

---

## Contribution

Feel free to submit any issues or pull requests! Please read the [contribution guidelines](CONTRIBUTING.md) first.

---

## Security

If you discover any security issues, please email arcanedev.maroc@gmail.com instead of using the issue tracker.

---

## Credits

- [ARCANEDEV](https://github.com/arcanedev-maroc)
- [Solomon Antoine](https://github.com/Solomon04)
- [All Contributors](https://github.com/icodestuff-io/laravel-notes/graphs/contributors)

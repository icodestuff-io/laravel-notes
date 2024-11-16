<p align="center"><img src="/art/logo.svg" width="50%" alt="Logo Laravel Pint"></p>

<p align="center">
<a href="LICENSE.md">
    <img src="https://img.shields.io/packagist/l/icodestuff-io/laravel-notes.svg?style=flat-square" alt="Packagist License">
</a>
<a href="https://github.com/icodestuff-io/laravel-notes">
    <img src="https://img.shields.io/badge/For%20Laravel-5.1%20to%2010.x-orange.svg?style=flat-square" alt="For Laravel">
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
- Tested for maximum code quality.
- Supports Laravel 5.1 through 10.x.
- Built with ❤️ and ☕.

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

### Version Compatibility

| Laravel                      | Laravel Notes                            |
|------------------------------|------------------------------------------|
| ![Laravel v9.x][laravel_9_x] | ![Laravel Notes v9.x][laravel_notes_9_x] |
| ![Laravel v8.x][laravel_8_x] | ![Laravel Notes v8.x][laravel_notes_8_x] |
| ![Laravel v7.x][laravel_7_x] | ![Laravel Notes v7.x][laravel_notes_7_x] |
| ![Laravel v6.x][laravel_6_x] | ![Laravel Notes v6.x][laravel_notes_6_x] |
| ![Laravel v5.8][laravel_5_8] | ![Laravel Notes v5.x][laravel_notes_5_x] |
| ![Laravel v5.7][laravel_5_7] | ![Laravel Notes v4.x][laravel_notes_4_x] |
| ![Laravel v5.6][laravel_5_6] | ![Laravel Notes v3.x][laravel_notes_3_x] |
| ![Laravel v5.5][laravel_5_5] | ![Laravel Notes v2.x][laravel_notes_2_x] |
| ![Laravel v5.4][laravel_5_4] | ![Laravel Notes v1.x][laravel_notes_1_x] |
| ![Laravel v5.3][laravel_5_3] | ![Laravel Notes v0.x][laravel_notes_0_x] |
| ![Laravel v5.2][laravel_5_2] | ![Laravel Notes v0.x][laravel_notes_0_x] |
| ![Laravel v5.1][laravel_5_1] | ![Laravel Notes v0.x][laravel_notes_0_x] |

[laravel_9_x]:  https://img.shields.io/badge/version-9.x-blue.svg?style=flat-square "Laravel v9.x"
[laravel_8_x]:  https://img.shields.io/badge/version-8.x-blue.svg?style=flat-square "Laravel v8.x"
[laravel_7_x]:  https://img.shields.io/badge/version-7.x-blue.svg?style=flat-square "Laravel v7.x"
[laravel_6_x]:  https://img.shields.io/badge/version-6.x-blue.svg?style=flat-square "Laravel v6.x"
[laravel_5_8]:  https://img.shields.io/badge/version-5.8-blue.svg?style=flat-square "Laravel v5.8"
[laravel_5_7]:  https://img.shields.io/badge/version-5.7-blue.svg?style=flat-square "Laravel v5.7"
[laravel_5_6]:  https://img.shields.io/badge/version-5.6-blue.svg?style=flat-square "Laravel v5.6"
[laravel_5_5]:  https://img.shields.io/badge/version-5.5-blue.svg?style=flat-square "Laravel v5.5"
[laravel_5_4]:  https://img.shields.io/badge/version-5.4-blue.svg?style=flat-square "Laravel v5.4"
[laravel_5_3]:  https://img.shields.io/badge/version-5.3-blue.svg?style=flat-square "Laravel v5.3"
[laravel_5_2]:  https://img.shields.io/badge/version-5.2-blue.svg?style=flat-square "Laravel v5.2"
[laravel_5_1]:  https://img.shields.io/badge/version-5.1-blue.svg?style=flat-square "Laravel v5.1"

[laravel_notes_9_x]: https://img.shields.io/badge/version-9.x-blue.svg?style=flat-square "LaravelNotes v9.x"
[laravel_notes_8_x]: https://img.shields.io/badge/version-8.x-blue.svg?style=flat-square "LaravelNotes v8.x"
[laravel_notes_7_x]: https://img.shields.io/badge/version-7.x-blue.svg?style=flat-square "LaravelNotes v7.x"
[laravel_notes_6_x]: https://img.shields.io/badge/version-6.x-blue.svg?style=flat-square "LaravelNotes v6.x"
[laravel_notes_5_x]: https://img.shields.io/badge/version-5.x-blue.svg?style=flat-square "LaravelNotes v5.x"
[laravel_notes_4_x]: https://img.shields.io/badge/version-4.x-blue.svg?style=flat-square "LaravelNotes v4.x"
[laravel_notes_3_x]: https://img.shields.io/badge/version-3.x-blue.svg?style=flat-square "LaravelNotes v3.x"
[laravel_notes_2_x]: https://img.shields.io/badge/version-2.x-blue.svg?style=flat-square "LaravelNotes v2.x"
[laravel_notes_1_x]: https://img.shields.io/badge/version-1.x-blue.svg?style=flat-square "LaravelNotes v1.x"
[laravel_notes_0_x]: https://img.shields.io/badge/version-0.x-blue.svg?style=flat-square "LaravelNotes v0.x"

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

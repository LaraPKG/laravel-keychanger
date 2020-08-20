# Laravel KeyChanger

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/d1a83d391c324d8db325ea67ad545ab6)](https://app.codacy.com/gh/LaraPKG/laravel-keychanger?utm_source=github.com&utm_medium=referral&utm_content=LaraPKG/laravel-keychanger&utm_campaign=Badge_Grade_Dashboard)
[![Build Status](https://travis-ci.com/LaraPKG/laravel-keychanger.svg?branch=master)](https://travis-ci.com/LaraPKG/laravel-keychanger)

KeyChanger allows you to pass a json string, object or an array and it will recursively re-key it using the case you give it. This package was created to handle situation like `$someImportedData->SomeKey` so we can use a nice `$someImportedData->someKey` for example, to assist in readable clean code.

-   Camel Case
-   Pascal Case
-   Snake Case
-   Kebab Case
-   Studly Case

## Installation

*Note:* Php key changer requires php ^7.4

`composer require ronappleton/php-key-changer`

## Usage

`use RonAppleton\PhpKeyChanger\PhpKeyChanger;`

`$reKeyed = PhpKeyChanger::reKey($array, 'snake');`

You can use any of the above cases, and you can pass in a Json object, a Json string or an Array, it will be return the same type that you pass in.

## Credits

I used `Illuminate\Support\Str` as the basis of the StringConverters class`, many thanks Taylor Otwell and all contributors.

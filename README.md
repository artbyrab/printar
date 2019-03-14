# Printar a PHP print_r output formatter

![Image](files/graphics/bitmap-logo-large.png?raw=true)

Print your objects and arrays with ease with Printar, a print_r output formatter.

What is worse than debugging your code? Yep, you guessed it typing out pre and pre every time you want to print something out. So with that in mind i have created Printar. Printar makes it easy to print your arrays and objects with the pre tags automatically wrapped.

## Requirements

* PHP 5.5 +

## Features

* Will save your from developing arthiritus in your fingers from typing pre
* Using Printar will cost you nothing!
* You can easily extend Printar with your own personality stamp(not that you will need it Printar has enough already!)
* Waa! You're still reading this, quit aleady and get using Printar!

## Installation

The reccomended way to install is via Composer.
Either install in the project via terminal
```
$ composer require artbyrab/printar:~1.0
```

or add it to your composer.json file
```
"artbyrab/printar": "~1.0"
```

## Usage

Using Printar is super simple.

### 1) Include Printar into your page:
```
use artbyrab\printar\Printar;
```

### 2)Render your variable:
```
Printar::render($array);
```

That is it!

## Extending Printar

Woah you can extend Printar? Of course you can and what is more it's incredibly simple!

To extend Printar:

* Read the extending guide:
    * [Extending Guide](documents/extending.md)




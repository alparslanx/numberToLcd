# Number To LCD (string)

LCD string representation of an integer value using a 3x3 grid of space, underscore, and pipe characters for each digit.

## Getting Started

Installation is simple! php7 and composer suffice.

### Requirements

```
PHP 7^
COMPOSER
```

### Installing

Download the project and go to the project directory.

```
install composer
```

run command.

## Running the project

The project works only with the terminal, you will encounter errors in other methods.

Go to the project folder and execute the following command.

```
php creator.php 523
```

You will receive such an answer:
```
._.   ._.   ._.   
|_.   ._|   ._|   
._|   |_.   ._| 
```


## Running the tests

We have 2 tests (12 assertions) that inspect the factory method and control the output.

```
phpunit
```

If you get an answer like the following, everything is alright!

```
OK (2 tests, 12 assertions)
```
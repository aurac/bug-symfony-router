# Symfony 7.3 - Doctrine Controller Resolver Path Bug Reproducer

Bug reproducer for Doctrine EntityValueResolver with path-type route parameters.

## Requirements

- PHP >= 8.2
- Composer

## Installation

```bash
composer install
```

## Database Setup

```bash
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load --no-interaction
```

## Run

```bash
symfony serve
```

Or with PHP built-in server:

```bash
php -S localhost:8000 -t public
```

## Test Routes

- `/` - Index page describing bug

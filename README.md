# Laravel Get Config

A simple artisan command to return the value for a given config key. Supports nested retrieval and object export.

## Use case

You're probably thinking, "Why do I need this?". To be fair, you probably don't. However, there are a few cases where retrieving config values via a command can make life easier:

- Running Laravel in a serverless environment
- Running Laravel in a PaaS (Platform as a Service, ie: Heroku, etc)

In a typical self-hosted Laravel application, you can SSH into your server and run `php artisan tinker`, and then `config($key)`.

This is not possible in serverless environment (Vapor), as there's no machine to SSH into. In a PaaS, it is usually possible, although can be a bit inconvenient.

## Usage

If you have access to running commands for your Laravel application, simply run:

```bash
php artisan config:get KEY
```

Where KEY can be a dot notation config key value: `database` or `database.connections.mysql`, etc.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email security@ohseesoftware.com instead of using the issue tracker.

## Credits

-   [Owen Conti](https://github.com/ohseesoftware)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
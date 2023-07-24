# Checkout theme - In development...

An checkout theme including the checkout, cart and accounts views.

Screenshots...

## Installation

```
composer require rapidez/checkout-theme
```

And publish the "core overwrite views" so the views from this package are used instead of the default ones:
```
php artisan vendor:publish --provider="Rapidez\CheckoutTheme\ServiceProvider" --tag=core-overwrites
```

Add these colors to your `tailwind.config.js`
```
primary: colors.green[700],
secondary: colors.gray[400],
enhanced: {
    ...
}
```

This package also requires the `SKU` functionality to be enabled in the image resizer, which is normally enabled by default.

## Configuration

Publish the configuration file and have a look at the options `config/rapidez-checkout-theme.php`
```
php artisan vendor:publish --provider="Rapidez\CheckoutTheme\ServiceProvider" --tag=config
```

## Customizations

If you want you *could* publish the views. But it's recommended to only publish and change the views you need so when there is an update you don't have to compare all views with the new version. Also keep in mind this is an opinionated theme, if you want/need to change a lot it's better to build your own in terms of upgradability.
```
php artisan vendor:publish --provider="Rapidez\CheckoutTheme\ServiceProvider" --tag=views
```

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.

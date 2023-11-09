# Rapidez Checkout Theme

An **opinionated** checkout theme for [Rapidez](https://github.com/rapidez/rapidez). This theme differs from the core checkout in the following ways:

- Updated UI in the cart and checkout with address cards, nicer base components, and combined login/credentials step
- Beautified UI in the account center with a landing page and simplified navigation
- Overhaul of the component structure, allowing for limitless control over every part of the checkout theme without hassle

...Image...

## Installation

```
composer require rapidez/checkout-theme
```

To use the views from this package instead of the default ones, you'll need to publish the "core overwrite views" with the following command:
```
php artisan vendor:publish --provider="Rapidez\CheckoutTheme\ServiceProvider" --tag=core-overwrites
```

If you've already overwritten these by yourself before you installed this package, you will have to manually overwrite these as the publish command will not overwrite already existing files.

Add these colors to your `tailwind.config.js` and modify them to your liking:
(Alternatively, you could add these to a separate file and add it as a preset to your tailwind.config.js)
```
colors: {
    ct: {
        enhanced: {
            DEFAULT: '#40C42A',
        },
        inactive: {
            DEFAULT: '#8A8275',
            100: '#F6F4EE',
        },
        disabled: '#EBE8DE',
        accent: {
            DEFAULT: '#FEAB05',
        },
        primary: {
            DEFAULT: '#625B50',
        },
        border: '#EAE7DC',
        error: '#DF241D',
    },
},
```

This package also requires the `SKU` functionality to be enabled in the image resizer. This is normally enabled by default.

## Configuration

Publish the configuration file and have a look at the options `config/rapidez-checkout-theme.php`
```
php artisan vendor:publish --provider="Rapidez\CheckoutTheme\ServiceProvider" --tag=config
```

## Payment-icons

We have provided a set of payment icons for your convenience. To integrate these icons into your project and enable the functionality of adding or modifying icons, please execute the following command:
```
php artisan vendor:publish --provider="Rapidez\CheckoutTheme\ServiceProvider" --tag=payment-icons
```

For future deployment purposes, it might be a good idea to add this command to your composer post-autoload-dump script.

## Customizations

If you want you *could* publish the views. But it's recommended to only publish and change the views you need so when there is an update you don't have to compare all views with the new version. Also keep in mind this is an opinionated theme, if you want/need to change a lot it's better to build your own in terms of upgradability.
```
php artisan vendor:publish --provider="Rapidez\CheckoutTheme\ServiceProvider" --tag=views
```

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.

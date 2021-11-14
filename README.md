# GlaivePro/lib-webtopay

Fork of `paysera/lib-webtopay` with testing enabled and PHP8.0 support.

Aiming for more maintenance, cleanup, PHP8.1 support etc. if the time allows.

Description from the source of the fork:

> The Checkout API (Payment Gateway API) allows for the collection of online payments with many payment methods. 
> The Checkout API is easy to integrate – simply use one of our methods and the checkout processes will be performed 
> automatically. The library can be used to check all the necessary security parameters of transferred and received data.
> More information can be found in [the documentation](https://developers.paysera.com/en/checkout/basic).

## Version support

The `master` branch is intended to be usable on current PHP versions.

The legacy lib that supports PHP 5.5-8.0 and includes a built megafile is
maintained on the [v1 branch](https://github.com/GlaivePro/lib-webtopay/tree/v1).

## Installation

```sh
composer require glaivepro/libwebtopay
```

## Development

Requires git, PHP and composer. Clone the repo and install dev dependencies:

```sh
git clone https://github.com/GlaivePro/lib-webtopay.git
composer update
```

### Testing

```sh
composer test
```

### Code style checking

```sh
composer cs
```

## Roadmap

- Fix PHP8.1 support
- Convert pseudo-namespaces to real namespaces
- Improve test coverage
- Remove demo from the archive like [here](https://github.com/paysera/lib-webtopay/pull/2)

## Demo

> Note: this is inherited from the source of the fork. No plans on active maintenance.

demo_shop is a simple example how you can integrate library to your project.
It also shows how to get payment methods available for your project and specific amount.

Demo needs write permissions to folder /var to function properly.
If you want to test demo online, also change parameters in includes/config.php file to your project's.
If you are testing offline, demos will still work, but webtopay.com will be unable to send callback to your site - 
you can login to your account and copy-and-paste the callback link in your browser in that case.

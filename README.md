# Rupiah Helper

An advanced and flexible **Rupiah Currency Helper** for Laravel. This package provides functions to format numbers into Rupiah format (`IntToRupiah`), convert Rupiah format back to integers (`RupiahToInt`), and convert numbers to Indonesian text (`Terbilang`). It includes extensive options to customize the currency format to suit your needs, making it a powerful tool for handling Rupiah in Laravel applications.

## Features

- **IntToRupiah**: Format integers into Rupiah currency (IDR or Rp) with customizable options.
- **RupiahToInt**: Convert Rupiah-formatted strings back to integers.
- **Terbilang**: Convert numbers to Indonesian text representation (terbilang).


## Installation

To install the package, run the following command in your Laravel project:

```bash
  composer require karyasystem/rupiah-helper
```


## Usage

#### `IntToRupiah`
Use this function to format an integer into Rupiah currency format

```php
use Rupiah;

$formattedRupiah = Rupiah::IntToRupiah(1000000, 'Rp'); // Rp 1,000,000
$formattedRupiah = Rupiah::IntToRupiah(1000000); // IDR 1,000,000 (default is 'IDR')
```
#### options
- `currency`: (optional) 'Rp' or 'IDR' (default is 'Rp')
- `format`: (optional) Choose to display thousands separator, decimal point, etc.
---
#### `RupiahToInt` 
Use this function to convert a Rupiah-formatted string back to an integer.

```php
$intValue = Rupiah::RupiahToInt('Rp 1,000,000'); // 1000000
```
---
#### `Terbilang` 
Use this function to convert numbers into their Indonesian text representation.

```php
$text = Rupiah::Terbilang(1234567); // "Satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh"
```


## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.


## License
This package is open-source and available under the [MIT](https://choosealicense.com/licenses/mit/) License.

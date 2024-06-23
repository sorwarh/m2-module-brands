# Sorwar_Brands

[![Latest Stable Version](https://poser.pugx.org/sorwarh/m2-module-brands/v/stable)](https://packagist.org/packages/sorwarh/m2-module-brands)
[![Total Downloads](https://poser.pugx.org/sorwarh/m2-module-brands/downloads)](https://packagist.org/packages/sorwarh/m2-module-brands)
[![License](https://poser.pugx.org/sorwarh/m2-module-brands/license)](https://packagist.org/packages/sorwarh/m2-module-brands)

## Overview

The `Sorwar_Brands` module for Magento 2 allows you to manage and display brands in your Magento store. This module provides an easy way to create and manage brand information, and display them on the frontend. Additionally, you can download brand information using Magento CLI.

## Features

- Manage brands from the admin panel.
- Display brands on the frontend.
- Brand-specific pages to showcase products by brand.
- Download brand information via Magento CLI.
- Easy to install and configure.

## Requirements

- Magento 2.3.x, 2.4.x
- PHP 7.3 or higher

## Installation

### Using Composer

1. Navigate to your Magento 2 root directory.
2. Run the following commands:

    ```bash
    composer require sorwarh/m2-module-brands
    bin/magento module:enable Sorwar_Brands
    bin/magento setup:upgrade
    bin/magento setup:di:compile
    bin/magento setup:static-content:deploy
    ```

### Manual Installation

1. Download the module from the [GitHub repository](https://github.com/sorwarh/m2-module-brands).
2. Extract the downloaded archive.
3. Copy the src contents to `app/code/Sorwar/Brands` directory.
4. Run the following commands:

    ```bash
    bin/magento module:enable Sorwar_Brands
    bin/magento setup:upgrade
    bin/magento setup:di:compile
    bin/magento setup:static-content:deploy
    ```

## Configuration

1. Go to `Stores > Configuration > Sorwar > Brands`.
2. Configure the module settings according to your needs.

## Usage

### Managing Brands

1. Navigate to `Marketing > Brands`.
2. Click on `Add New Brand` to create a new brand.
3. Fill in the brand details and save.

### Displaying Brands on Frontend

- Brands will be displayed on the frontend based on the configuration.
- You can link products to brands via the product edit page in the admin panel.

### Downloading Brands via CLI

1. To download brand information, run the following command in your Magento root directory:

    ```bash
    bin/magento sorwar:brands:csv
    ```

2. This command will generate a CSV file containing the brand information in the `var/export` directory.

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## Support

For support, please open an issue on the [GitHub repository](https://github.com/sorwarh/m2-module-brands/issues).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
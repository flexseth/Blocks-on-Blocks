# Using this package
- Resources
 - [WordPress Plugin Development intro](https://developer.wordpress.org/plugins/intro/)
 - [wp-scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) package
- Rationale
- Instructions
- Wrap up

## Dependencies
 This package requires Node.js 14.0.0 or later, and npm 6.14.4 or later. It is not compatible with older versions.

## Pseudocode
In the folder you want to create a new Block Plugin, create the plugin directory name.
Example folder name: your-unique-slug-acronym-plugin-name


```shell
# Navigate to your plugins folder
cd plugins

# Create a new directory for your plugin, with your unique slug
mkdir block_plugin-settings-page-screen-options
cd block_plugin-settings-page-screen-options

# npm init - context for creating blocks and plugins

# PACKAGE INFO      # DESCRIPTION                               # DEFAULTS
# ==========================================================================================================
# package name:     Helpful if packaged with other plugins      // Defaults to directory name
# version:          What version number is this plugin on?      // Defaults to 1.0.0 
# description:      What does this plugin do?                   // Defaults to emptry string
# Entry-point:      (js) file that loads with the plugins       // Defaults to index.js
# test command:     Script name to test this plugin             // Defaults to no testing script (js file)
# git repository:   Source of truth distributed plugin files    // Defaults to emptry string
# keywords:         Command-delimitted list (see options)       // Defaults to empty string
# author:           List of authors                             // Defaults to emptry string
# license:          Software License - GNU/MIT/etc              // Defaults to ISC
# bugs link:        Link to report issues                       // Defaults to repository/issues 
# homepage:         About this plugin                           // Defaults to repository/#readme   



# Make note of these settings, you will use them later
# For simplicity starting out, make the plugin entry-point "index.js". 
# npm init

# Not included in NPM INIT....
# Scripts: What scripts are packaged with this plugin


# Install the WordPress scripts package in this directory
npx i @wordpress/scripts --save-dev
# Once completed, all of the packages necessary to use React + WordPress are here.

# Make a source directory for your files
mkdir src 


# Add the plugin entry-point with a simple alert
echo "alert('Made it into index.js!')" > src/index.js
```

## Add scripts to build the plugin
Update package.json
- Open `package.json` in your code editor.
- Change the `scripts` section to include the build scripts
- To do this, replace everything after `scripts:` (including `{}`) with this code

```json
{
        "build": "wp-scripts build",
        "check-engines": "wp-scripts check-engines",
        "check-licenses": "wp-scripts check-licenses",
        "format": "wp-scripts format",
        "lint:css": "wp-scripts lint-style",
        "lint:js": "wp-scripts lint-js",
        "lint:md:docs": "wp-scripts lint-md-docs",
        "lint:pkg-json": "wp-scripts lint-pkg-json",
        "packages-update": "wp-scripts packages-update",
        "plugin-zip": "wp-scripts plugin-zip",
        "start": "wp-scripts start",
        "test:e2e": "wp-scripts test-e2e",
        "test:unit": "wp-scripts test-unit-js"
    }
```

# Register the plugin on the server
Add a [Plugin Header](https://developer.wordpress.org/plugins/plugin-basics/header-requirements/) in php for your file, so you can activate it.

```shell
touch src/index.php
```

Now open the plugin's index file and update your plugin information. 
This is what will show up on the WordPress.org Plugin Repository.

```php
/**
 * Plugin Name
 *
 * @package           BlockPlugins
 * @author            John Doe
 * @copyright         2019 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Settings Page Screen Options
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name
 * Author URI:        https://example.com
 * Text Domain:       block-plugins
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */
```

# Start Webpack
npm run start

    
# Start making changes
Change into the source directory and work on your files. 

# Register the block
# TODO: 
- php registration of block
- edit JS files
- glue together
- test

# Add the block to the Plugins Settings screen
# TODO: Instructions

# Add your plugin registration
# touch index.php

# Update the plugin loading point... 
# TODO: Add notes

# Add default styles...

# Conquer?

# Add your plugin entry-point - Whatever you typed into npm init

# Activate your plugin
wp plugin activate plugin-settings-page-screen-options

# Test - Once activated, every time you go to a new page the alert should fire (this is annoying, but you're there!)

# Remove the alert and start coding in JavaScript to do stuff!

```
---

## More info
Learn  more about the `wp-scripts` package [here](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/).

## Wrap-up
This will install the necessary packages to get your project started. It could take some time to install the package.



# Add the extra scripts, start, etc, into package.json
# (replace the scripts in your package.json)
```

-----------------

# Add scripts to Webpack
See wp-scripts [capabilities](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/#:~:text=the%20capabilities%20included.-,Example,-%3A)

<!-- Open package.json and change your scripts to this: 

```json
 "scripts": {
        "build": "wp-scripts build",
        "check-engines": "wp-scripts check-engines",
        "check-licenses": "wp-scripts check-licenses",
        "format": "wp-scripts format",
        "lint:css": "wp-scripts lint-style",
        "lint:js": "wp-scripts lint-js",
        "lint:md:docs": "wp-scripts lint-md-docs",
        "lint:pkg-json": "wp-scripts lint-pkg-json",
        "packages-update": "wp-scripts packages-update",
        "plugin-zip": "wp-scripts plugin-zip",
        "start": "wp-scripts start",
        "test:e2e": "wp-scripts test-e2e",
        "test:unit": "wp-scripts test-unit-js"
    }
``` -->
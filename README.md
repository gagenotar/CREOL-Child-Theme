# CREOL Child Theme

A child theme to supplement the Colleges Theme

## Installation Requirements

This theme is developed and tested against WordPress 4.7.3+ and PHP 5.3.x+.

## Required Plugins

* Advanced Custom Fields PRO
* UCF Spotlight plugin
* UCF Section plugin
* UCF News plugin
* UCF Events plugin

## Supported Plugins

## Other Recommended Plugins

## Configuration

## Development

### Changelog 

#### 1.0.0 ####

* removed all files and code not needed for current version of website 

### Requirements

* Requires UCF-Colleges Theme https://github.com/UCF/Colleges-Theme

### Instructions
1. Clone the Main-Site-Theme repo into your development environment, within your WordPress installation's themes/ 
directory: git clone https://github.com/UCF/Main-Site-Theme.git
2. cd into the Main-Site-Theme directory, and run npm install to install required packages for development into 
node_modules/ within the repo
3. Copy gulp-config.template.json, make any desired changes, and save as gulp-config.json.
4. Run gulp default to process front-end assets.
5. If you haven't already done so, create a new WordPress site on your development environment, install the required 
plugins listed above, and set the Main Site Theme as the active theme.
6. Make sure you've done all the steps listed under "Configuration" above.
7. Run gulp watch to continuously watch changes to scss and js files. If you enabled BrowserSync in gulp-config.json, 
it will also reload your browser when scss or js files change.

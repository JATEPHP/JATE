# JATE
Just Another Template Engine

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/XaBerr/JATE/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/XaBerr/JATE/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/XaBerr/JATE/badges/build.png?b=master)](https://scrutinizer-ci.com/g/XaBerr/JATE/build-status/master)
[![Code Climate](https://codeclimate.com/github/XaBerr/JATE/badges/gpa.svg)](https://codeclimate.com/github/XaBerr/JATE)
<br>
[![Latest Unstable Version](https://poser.pugx.org/xaberr/jate/v/unstable)](https://packagist.org/packages/xaberr/jate)
[![License](https://poser.pugx.org/xaberr/jate/license)](https://packagist.org/packages/xaberr/jate)
[![This is a forkable respository](https://img.shields.io/badge/forkable-yes-brightgreen.svg)](https://basicallydan.github.io/forkability/?u=XaBerr&r=JATE&l=PHP)

## WHAT IS JATE?
JATE is a new light and hackable CMS for PHP.
It's simple to lern and simple to customize.
JATE contains the minimum of libraries and functions to get you started.
Recommend the use of Bootstrap3, all examples use it.
## REQUIREMENTS
JATE requires PHP 5.4 or higher.
## HOW TO INSTALL
Install or download JATE to the root folder of your project.
### DOWNLOADS
###### BOWER
```
bower install JATE
```
###### COMPOSER
```
composer require xaberr/jate:dev-master
```
###### MANUAL
Download and uncompress zip file from GitHub.
## GETTING STARTED
Copy and paste an example in your root.<br>
There are 3 main sections.
 - the libraries that are contained in dist/jate.
 - the pages that are contained in bundles divided into MVC.
 - the modules that you can create that are contained in modules.

You start by creating an html interface in _bundles/views_.<br>
Then you have to continue creating a model that injects tags in the view in _bundles/models_.<br>
Creates a class for each page that you want to have in your app in _bundles/controller_.<br>
Each time you add a page, remember to connect it with the class in config/router.json file.<br>
Check out the examples to see more detail.<br>
Check out the dist/jate/functions all functions ready to go.<br>

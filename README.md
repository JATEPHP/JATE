# JATE
Just Another Template Engine

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/XaBerr/JATE/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/XaBerr/JATE/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/XaBerr/JATE/badges/build.png?b=master)](https://scrutinizer-ci.com/g/XaBerr/JATE/build-status/master)
[![Code Climate](https://codeclimate.com/github/XaBerr/JATE/badges/gpa.svg)](https://codeclimate.com/github/XaBerr/JATE)
<br>
[![Latest Unstable Version](https://poser.pugx.org/xaberr/jate/v/unstable)](https://packagist.org/packages/xaberr/jate)
[![License](https://poser.pugx.org/xaberr/jate/license)](https://packagist.org/packages/xaberr/jate)
[![This is a forkable respository](https://img.shields.io/badge/forkable-yes-brightgreen.svg)](https://basicallydan.github.io/forkability/?u=XaBerr&r=JATE&l=PHP)

## HOW TO INSTALL
###### BOWER
```
bower install JATE
```
Copy and paste the file _jate.php_ from _bower_components/JATE/dist/_ in the root of your project and be sure that the files point in the right path. Once done include _jate.php_ in _index.php_ of your project to be able to take advantage of its capabilities.
###### COMPOSER
```
composer require xaberr/jate:dev-master
```
Copy and paste the file _jate.php_ from _vendor/xaberr/jate/dist/_ in the root of your project and be sure that the files point in the right path. Once done include _jate.php_ in _index.php_ of your project to be able to take advantage of its capabilities.
###### MANUAL
Download and uncompress zip file from GitHub.
## NATIVE
JATE is system in PHP for simply manage HTML, CSS and JS.
Recommend the use of Bootstrap3, all examples use it.
## WHAT IS JATE?
JATE is a new light and hackable CMS.
It's simple to lern and simple to customize.
JATE contains the minimum of libraries and functions to get you started.
## HOW DOES IT TO WORK?
There are 3 main sections.
 - the libraries that are contained in dist/jate.
 - the pages that are contained in pages.
 - the modules that you can create that are contained in modules.

On your pages must have a template page that inherits from html.<br>
It will be the one that sets the gui.<br>
Each additional page is inherited from template.<br>
So you will not have to rewrite the same page layout code.<br>
Each time you add a page, remember to connect the parameter php with the class in config/router.json file.<br>
Check out the examples to see more detail.<br>
Check out the dist/jate/functions all functions ready to go.<br>

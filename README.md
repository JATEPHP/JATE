# JATE
Just Another Template Engine

[![Code Climate](https://codeclimate.com/repos/56967a41b175617550007660/badges/345708f215bf82bc7fdf/gpa.svg)](https://codeclimate.com/repos/56967a41b175617550007660/feed)
[![Latest Unstable Version](https://poser.pugx.org/xaberr/jate/v/unstable)](https://packagist.org/packages/xaberr/jate)
## HOW TO INSTALL
###### BOWER
```
bower install JATE
```
Copy and paste the file _jate.php_ from _bower_components/JATE/_ in the root of your project and be sure that the files point in the right path. Once done include _jate.php_ in _index.php_ of your project to be able to take advantage of its capabilities.
###### COMPOSER
```
composer require xaberr/jate:dev-master
```
Copy and paste the file _jate.php_ from _vendor/xaberr/jate/_ in the root of your project and be sure that the files point in the right path. Once done include _jate.php_ in _index.php_ of your project to be able to take advantage of its capabilities.
###### MANUAL
Download and uncompress zip file from GitHub.
## NATIVE
JATE is system in PHP for simply manage HTML, CSS and JS.
Recommend the use of Bootstrap3.


## GETTING STARTED
###### WHAT'S INCLUDED
Zip file contains a root of basic project.
```
JATE/
├─classes/
├─css/
├─functions/
├─guis/
├─img/
├─jate/
├─js/
├─modules/
├─pages/
├─config.php
├─index.php
├─jate.php
├─status.php
```
The _jate/_ folder is the only one reserved for engine.
All others folders are containers for our PHP, HTML, JS, CSS.
Every file in these folders (except _css/_, _js/_) is auto-included in the project.
Config.php is used to set the connection settings to the database and other parameters.

## BASIC TEMPLATE
Suppose you want to make a home of your project,
then you will need to begin 4 files:
_home.php_, _index.php_, _template.php_ and _gui.php_.

**Index:** Shorter.

**Template:** Common settings in all other pages.

**Home:** Inherited from template, is the 1st true page of your web app.

**Gui:** It is the page where it is injected the html code processed by jate.


The page Template contains the Template class must inherit from the class Html.
The basic class Html, has provided these parameters to be injected into the Gui.
```
$this->modules = array();
$this->data["template"]        = "";
$this->data["brand"]           = array(" "," ");
$this->data["menu"]            = "";
$this->data["title"]           = "";
$this->data["subtitle"]        = "";
$this->data["content"]         = "";
$this->data["footer"]          = "";
$this->data["pagePath"]        = array();
$this->data["css"]             = array();
$this->data["js"]              = array();
$this->data["jsVariables"]     = array();
$this->data["metaDescription"] = array();
$this->data["metaKeywords"]    = array();
$this->data["metaAuthor"]      = array();
```
_brand_ is an array contain the name and image of the brand.

_pagePath_ is an array contain the logical level of the page, such as: documents> private> today => (documents, private, today).

_css_ and _js_ are arrays contains the relative path of the file.

_jsVariables_ contains an array of arrays containing the pair variable name, value.

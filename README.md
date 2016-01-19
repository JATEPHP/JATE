# JATE
Just Another Template Engine

[![Code Climate](https://codeclimate.com/repos/56967a41b175617550007660/badges/345708f215bf82bc7fdf/gpa.svg)](https://codeclimate.com/repos/56967a41b175617550007660/feed)
## HOW TO INSTALL
###### BOWER
```
bower install JATE
```
Just can copy and paste the file _jate.php_ in the root of your project and be sure that the files point in the right path. Once done include _jate.php_ in _index.php_ of your project to be able to take advantage of its capabilities.
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
├─class/
├─css/
├─function/
├─gui/
├─jate/
├─js/
├─page/
├─config.php
├─index.php
├─jate.php
├─status.php
```
The **jate/** folder is the only one reserved for engine.
All others folders are containers for our PHP, HTML, JS, CSS.
Every file in these folders (except **css/**, **js/**) is auto-included in the project.
Config.php is used to set the connection settings to the database and other parameters.

## BASIC TEMPLATE
Suppose you want to make a home of your project,
then you will need to begin 4 files:
_home.php_, _index.php_, _template.php_ and _gui.php_.

Index -> Shorter.

Template -> Common settings in all other pages.

Home -> Inherited from template, is the 1st true page of your web app.

Gui -> It is the page where it is injected the html code processed by jate.


The page Template contains the Template class must inherit from the class Html.
The basic class Html, has provided these parameters to be injected into the Gui.
```
$this->modules = array();
$this->data["template"]     = "";
$this->data["brand"]        = array(" "," ");
$this->data["menu"]         = "";
$this->data["title"]        = "";
$this->data["subtitle"]     = "";
$this->data["content"]      = "";
$this->data["footer"]       = "";
$this->data["pagePath"]     = array();
$this->data["css"]          = array();
$this->data["js"]           = array();
$this->data["jsVariables"]  = array();
```
_brand_ is an array that contains the name and image of the brand.

_pagePath_ is an array that contains the logical level of the page, such as: documents> private> today => (documents, private, today).

_css_ and _js_ arrays that contain the relative path of the file.

_jsVariables_ contains an array of arrays containing the pair variable name, value.

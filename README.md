# JATE
Just Another Template Engine

## HOW TO INSTALL
###### BOWER
```
bower install JATE
```
Not to move the entire project folder from the bower can copy and paste the file only _jate.php_ and place it in the root of your project ensuring that the files pointed to are in the right path. Once done just include _jate.php_ in _index.php_ of your project to be able to take advantage of its capabilities.
###### MANUAL
Just download and uncompress zip file from GitHub.
## NATIVE
A system in PHP to better handle HTML, CSS and JS.
Recommend the use of Bootstrap.


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
Every file in these folders (except **css/**, **js/**) is space included in the project.
Config.php is used to set the connection settings to the database and other parameters.

## BASIC TEMPLATE
Suppose you want to make a home of your project,
then you will need to begin 4 files:
_home.php_, _index.php_, _template.php_ and _gui.php_.

Index -> Shorter.
Template -> template of all pages.
Home -> is a common inherited from the page template.
Gui -> It is the page where it is injected the html code processed by template.php.

The page Template that contains the Template class must inherit from the class Html.
The basic class Html, has provided these parameters to be injected into the gui.
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

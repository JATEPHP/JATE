---
title: "Config"
permalink: /components/config
excerpt: "config."
last_modified_at: 2018-08-05T16:28:04-05:00
toc: true
---

## App
In this configuration file you can add attributes (ex. `"foo":"100"`) from which you can access all the classes that will be inherited from the _Template_ through the command `$this->app->foo`.<br>
There are also two reserved attributes:
- __urlCaseSensitive__: this allows you to disable the case sensitive of the url
- __cache__: this allows you to disable the cache of all js and css in the app

```json
{
  "urlCaseSensitive": false,
  "cache": {
    "css": true,
    "js":  true
  }
}
```

## Connection
To enable the connection to the database, set `"enable":true` and fill the other fields.<br>
Only one engine can be selected at the same time, especially the _pdo_ entry uses a mysql connection using pdo.
```json
{
  "enable":    false,
  "user":      "",
  "password":  "",
  "database":  "",
  "server":    "",
  "engine": {
    "pdo":        true,
    "mysqli":     false,
    "postgresql": false
  }
}

```

## Loader
This array contains an ordered list of folders from which all php files will be automatically included.<br>
The files inside the folder will be loaded randomly so if you have any dependencies you have to use the `jRequire("file.php");` command.<br>
Using the `modules/*` syntax means that the `modules` folder is a folder that contains subfolders to include.
```json
[
  "modules/*",
  "bundles/models",
  "bundles/controllers"
]

```

## Router
This file connects the URL and the classes that will generate the pages for them.<br>
The default page for missing URLs is set by the attribute _defaultPage_.<br>
Let's consider a generic line `["/Page1/$foo", "Page01",  ["Hello", "World!"]]`:
- __"/Page1/$foo"__: This is the URL, in particular `$foo` is a parameter that will be passed to the application through the command `$this->page["foo"]`.
- __"Page01"__: that will generate the page.
- __["Hello", "World!"]__: These are two additional parameters that can be used through commands `$this->page[0]` and `$this->page[1]`.

```json
{
  "defaultPage" : ["Page404", []],
  "pages": [
    ["/Page404", "Page404", []],
    ["/",        "Home",    []],
    ["/Home",    "Home",    []],
    ["/Page1",   "Page01",  []]
  ]
}

```

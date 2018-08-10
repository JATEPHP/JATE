---
title: "App"
permalink: /config/app
excerpt: "app."
last_modified_at: 2018-08-05T16:28:04-05:00
toc: false
---

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

---
title: "Router"
permalink: /config/router
excerpt: "router."
last_modified_at: 2018-08-05T16:28:04-05:00
toc: false
---

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

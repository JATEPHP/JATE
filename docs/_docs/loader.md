---
title: "Loader"
permalink: /config/loader
excerpt: "loader."
last_modified_at: 2018-08-05T16:28:04-05:00
toc: false
---

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

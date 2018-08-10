---
title: "Sql"
permalink: /functions/sql
excerpt: "sql."
last_modified_at: 2018-03-19T16:28:04-05:00
toc: true
---

**Warning:** Require JATE 0.5.4 or higher.
{: .notice--warning}

Upload a file from `/bundles/sql/` and after a parsing with twig returns a string.
```java
void sql( String $_path, Array $_parameters )
```

## Parameters
* **$_path**: The path of the file you want to open.
* **$_parameters**: Is an array of content for pug and twig stuff.

## Return Values
Return a string of html.

## Examples
```php
<?php
$temp = sql("file1.sql", ["name" => "foo"]); // string with some html
?>
```

---
title: "jBlock"
permalink: /functions/jblock
excerpt: "jBlock."
last_modified_at: 2018-03-19T16:28:04-05:00
toc: true
---

Turn on output buffering.<br>
```java
void jBlock ()
```

## Parameters
None.

## Return Values
None.

## Examples
```php
<?php
jBlock();
?>
<div>
</div>
<?php
$temp = jBlockEnd(); // $temp === "<div></div>"
?>
```

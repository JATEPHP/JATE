---
title: "Functions"
permalink: /components/functions
excerpt: "functions."
last_modified_at: 2018-08-05T16:28:04-05:00
toc: true
---

## jBlock
Turn on output buffering.<br>
```java
void jBlock ()
```

### Parameters
None.

### Return Values
None.

### Examples
```php
<?php
  jBlock();
  ?>
  <div></div>
  <?php
  $temp = jBlockEnd(); // $temp === "<div></div>"
?>
```
<br>
<br>
<br>
<br>
<br>
## jBlockClose
Alias for jBlockEnd.
<br>
<br>
<br>
<br>
<br>
## jBlockEnd
Get current buffer contents and delete current output buffer.<br>
```java
void jBlockEnd( String $_type, Array $_parameters )
```

### Parameters
* **$_type**: The type of the buffer contents, could be html, pug, jade, twig, md. Default is html.
* **$_parameters**: Is an array of content for pug and twig stuff. Default is an empty array.

### Return Values
Return a string of html.

### Examples
```php
<?php
jBlock();
?>
.content
<?php
$temp = jBlockEnd("pug"); // $temp === "<div class='content'></div>"
?>
```
<br>
<br>
<br>
<br>
<br>
## jBlockFile
Turn on output buffering.<br>
```java
void jBlockFile( String $_path, Array $_parameters )
```

### Parameters
* **$_path**: The path of the file you want to open.
* **$_parameters**: Is an array of content for pug and twig stuff.

### Return Values
Return a string of html.

### Examples
```php
<?php
$temp = jBlockFile("bundles/views/file1.twig"); // string with some html
?>
```
<br>
<br>
<br>
<br>
<br>
## jBlockFileMan
Turn on output buffering.<br>
```java
void jBlockFile( String $_path, String $_type, Array $_parameters )
```

### Parameters
* **$_path**: The path of the file you want to open.
* **$_type**: The type of the file contents, could be html, pug, jade, twig, md.
* **$_parameters**: Is an array of content for pug and twig stuff.

### Return Values
Return a string.

### Examples
```php
<?php
$temp = jBlockFileMan("bundles/views/file1.txt", "md"); // string with some markdown
?>
```
<br>
<br>
<br>
<br>
<br>
## jRequire

The jRequire statement includes and evaluates the specified file using relative path.<br>
```java
void jRequire ( String $_path )
```

### Parameters
* **$_path**: The path of the file you want to include.

### Return Values
None.

### Examples
```php
<?php
  jRequire("../Module01.php");
?>
```

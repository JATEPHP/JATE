# Example 07

## Why moduels?
Modules are the best way to carry classes and functions between project and project. A model is a set of php files contained in a folder. You can manage the models as you like. You can specify the path of your modules through the `config/modules.json` file.
```json
[
  "single/module",
  "folders/ofModules/*"
]
```
Everything that comes inside the folder is automatically included in the project.

## JATE Modules
JATE uses a standard for modules.
```php
<?php
  class ModuleExample extends Module {
    public function __construct() {
      parent::__construct();
    }
    public function init() {}
    public function draw() {}
  }
?>
```
The __\_\_construct__ should not be modified.<br>
The __init__ function is used instead of the constructor.<br>
The __draw__ function is used if the module needs to return the html code.<br>
If these two functions are not enough you can freely add the others.

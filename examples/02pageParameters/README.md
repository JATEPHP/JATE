# Example 02

There are two types of parameters that can be passed to the page, both must be specified in `/config/router.json`.
- __URL's Parameters__: When you specify the routing you can prepend the `$` to indicate that part of the path is a variable. For example, if we set `$item` as a parameter of the URL `"/Items/$item"` by accessing the page `www.mywebsite.com/Items/coffee` I'm able read the variable `$this->parameters["page"]["item"];` where its value is `coffee`.
- __Static Parameters__: They are appended as an array. You can access to these parameters as an array with `$this->parameters["page"][0]`.

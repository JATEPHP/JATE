var store = [{
        "title": "01 Essential",
        "excerpt":"You can fine the example here.CLI (Recommended) Install npm Run the following command to install the cli npm install jate-cli -g Go to the folder where you want to create the new project and run jate install example Four simple steps (General Rule) All files outside /config /bundles and folders...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/01-essential",
        "teaser":null},{
        "title": "02 Advance",
        "excerpt":"You can fine the example here.CLI (Recommended)  Install npm  Run the following command to install the cli    npm install jate-cli -g        Go to the folder where you want to create the new project and run    jate install advance      ","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/02-advance",
        "teaser":null},{
        "title": "03 React",
        "excerpt":"You can fine the example here.CLI (Recommended)  Install npm  Run the following command to install the cli    npm install jate-cli -g        Go to the folder where you want to create the new project and run    jate install react        npm install        npm run watch      ","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/03-react",
        "teaser":null},{
        "title": "Page Not Found",
        "excerpt":"Sorry, but the page you were trying to view does not exist — perhaps you can try searching for it below.","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/404.html",
        "teaser":null},{
        "title": "App",
        "excerpt":"In this configuration file you can add attributes (ex. \"foo\":\"100\") from which you can access all the classes that will be inherited from the Template through the command $this-&gt;app-&gt;foo.There are also two reserved attributes: urlCaseSensitive: this allows you to disable the case sensitive of the url cache: this allows you...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/config/app",
        "teaser":null},{
        "title": "Connection",
        "excerpt":"To enable the connection to the database, set \"enable\":true and fill the other fields.Only one engine can be selected at the same time, especially the pdo entry uses a mysql connection using pdo.{ \"enable\": false, \"user\": \"\", \"password\": \"\", \"database\": \"\", \"server\": \"\", \"engine\": { \"pdo\": true, \"mysqli\": false, \"postgresql\":...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/config/connection",
        "teaser":null},{
        "title": "Creating a database",
        "excerpt":"Warning: This example uses MYSQL, to use different databases modify the file config/connection.json, putting only the selected database engine to true.Warning: This example uses PDO, be sure to have enabled the extension extension=php_pdo_mysql.dll.We create a database of heros, for example:CREATE DATABASE IF NOT EXISTS `db-hero`;USE `db-hero`;CREATE TABLE IF NOT EXISTS...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/creating-a-database",
        "teaser":null},{
        "title": "Download",
        "excerpt":"Install with cli or download JATE to the root folder of your project.CLI (Recommended) Install npm Run the following command to install the cli npm install jate-cli -g Go to the folder where you want to create the new project and run jate install example -p projectHero DOWNLOADSGITgit clone https://github.com/XaBerr/JATE.gitBOWERbower...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/download",
        "teaser":null},{
        "title": "Html-class",
        "excerpt":"Introduction Html inheriting The Html class is the main class, all models are built inheriting from it.The most important model is the Template from which all the controllers used to render the pages will be inherited.The Html class provides methods and attributes, in particular two are the most important init...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/html-class/list",
        "teaser":null},{
        "title": "Insert page",
        "excerpt":"To create the page we do the same as before, we add [\"/heros/insert\", \"Insert\", []],and&lt;li class=\"nav-item\"&gt; &lt;a class=\"nav-link\" href=\"heros/insert\"&gt;insert&lt;/a&gt;&lt;/li&gt;and then we create the bundles/models/Insert.php file with the following code:&lt;?php class Insert extends Template { public function init() { parent::init(); $this-&gt;tags[\"title\"] .= \"Insert\"; $this-&gt;tags[\"content\"] = \"&lt;div&gt;Hello world!&lt;/div&gt;\"; } }?&gt;Let’s create this...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/insert-page",
        "teaser":null},{
        "title": "jBlock",
        "excerpt":"Turn on output buffering.void jBlock ()ParametersNone.Return ValuesNone.Examples&lt;?phpjBlock();?&gt;&lt;div&gt;&lt;/div&gt;&lt;?php$temp = jBlockEnd(); // $temp === \"&lt;div&gt;&lt;/div&gt;\"?&gt;","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/jblock",
        "teaser":null},{
        "title": "jBlockClose",
        "excerpt":"Alias for jBlockEnd.","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/jblockclose",
        "teaser":null},{
        "title": "jBlockEnd",
        "excerpt":"Get current buffer contents and delete current output buffer.void jBlockEnd( String $_type, Array $_parameters )Parameters $_type: The type of the buffer contents, could be html, pug, jade, twig, md. Default is html. $_parameters: Is an array of content for pug and twig stuff. Default is an empty array.Return ValuesReturn a...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/jblockend",
        "teaser":null},{
        "title": "jBlockFile",
        "excerpt":"Upload a file from a specific path ($_path) and after a parsing returns a string.void jBlockFile( String $_path, Array $_parameters )Parameters $_path: The path of the file you want to open. $_parameters: Is an array of content for pug and twig stuff.Return ValuesReturn a string of html.Examples&lt;?php$temp = jBlockFile(\"bundles/views/file1.twig\", [\"name\"...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/jblockfile",
        "teaser":null},{
        "title": "jBlockFileMan",
        "excerpt":"Upload a file with specific type ($_type) from a specific path ($_path) and after a parsing returns a string.void jBlockFile( String $_path, String $_type, Array $_parameters )Parameters $_path: The path of the file you want to open. $_type: The type of the file contents, could be html, pug, jade, twig,...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/jblockfileman",
        "teaser":null},{
        "title": "jRequire",
        "excerpt":"The jRequire statement includes and evaluates the specified file using relative path.void jRequire ( String $_path )Parameters  $_path: The path of the file you want to include.Return ValuesExamples&lt;?php  jRequire(\"../Module01.php\");?&gt;","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/jrequire",
        "teaser":null},{
        "title": "Js and css",
        "excerpt":"Suppose we want to color our heroes page with a css (works similar to js).We create a /projectHero/css folder and inside we create ourHero.css filebody { background-color: rgb(205,205,205);}Let’s go to the page Hero.php and simply we include the file like this:&lt;?php public function init() { parent::init(); $this-&gt;addFiles([ \"css/Hero.css\" ]); $this-&gt;addModules([...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/js-and-css",
        "teaser":null},{
        "title": "JATE Introduction",
        "excerpt":"Just Another Template EngineWHAT IS JATE?JATE is a new light and hackable framework for PHP.It’s simple to learn and simple to customize.JATE contains the minimum of libraries and functions to get you started.Recommend the use of Bootstrap4, all examples use it.FEAUTURES Thought to write less code Designed to focus only...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/",
        "teaser":null},{
        "title": "Loader",
        "excerpt":"This array contains an ordered list of folders from which all php files will be automatically included.The files inside the folder will be loaded randomly so if you have any dependencies you have to use the jRequire(\"file.php\"); command.Using the modules/* syntax means that the modules folder is a folder that...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/config/loader",
        "teaser":null},{
        "title": "Router",
        "excerpt":"This file connects the URL and the classes that will generate the pages for them.The default page for missing URLs is set by the attribute defaultPage.Let’s consider a generic line [\"/Page1/$foo\", \"Page01\", [\"Hello\", \"World!\"]]: “/Page1/$foo”: This is the URL, in particular $foo is a parameter that will be passed to...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/config/router",
        "teaser":null},{
        "title": "Run first page",
        "excerpt":"Warning: Make sure you have enabled .htaccess files on your web server before using JATE.Before you start make sure you have downloaded and started a web server like: wamp, xampp, easyphp.Once you have downloaded JATE you come up with a folder in a similar situation to /phpRoot/projectHero/.../JATE, the path may...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/run-first-page",
        "teaser":null},{
        "title": "Sql",
        "excerpt":"Warning: Require JATE 0.5.4 or higher.Upload a file from /bundles/sql/ and after a parsing with twig returns a string.void sql( String $_path, Array $_parameters )Parameters $_path: The path of the file you want to open. $_parameters: Is an array of content for pug and twig stuff.Return ValuesReturn a string of...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/sql",
        "teaser":null},{
        "title": "Structure",
        "excerpt":"project └ bundles ├ controllers ├ models └ viewsA page is made up of two parts.The first is the page, the chassies, the structure that will match a file inside bundles/controllers. For example, the Login page will have a Login.php file that will contain a class that will handle the...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/structure",
        "teaser":null},{
        "title": "The use of models",
        "excerpt":"Now we’ve accomplished the project by associating a feature page with a page, but for example we would like to have a single page that deals with insert and display heros. The concept of the models now comes into play. What we will do in this section is: we will...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/use-of-models",
        "teaser":null},{
        "title": "The use of views",
        "excerpt":"In general, when we write the html code within our php we use the form:&lt;?php private function printPage() { jBlock(); ?&gt; &lt;div&gt;{{insert|raw}}&lt;/div&gt; &lt;div&gt;{{view|raw}}&lt;/div&gt; &lt;?php return jBlockEnd(\"twig\", [ \"view\" =&gt; $this-&gt;modules[\"View\"]-&gt;draw(), \"insert\" =&gt; $this-&gt;modules[\"Insert\"]-&gt;draw() ]); }?&gt;Although this methodology is very quick and easy to visualize, in general this form is not...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/use-of-views",
        "teaser":null},{
        "title": "Version 0.2.6",
        "excerpt":"Index Structure Download JATE Run first page Creating a database database View page Insert page The use of models The use of views Js and css1 Structureproject └ bundles ├ controllers ├ models └ viewsA page is made up of two parts.The first is the page, the chassies, the structure...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/version-0-2-6",
        "teaser":null},{
        "title": "Version 0.2.7",
        "excerpt":"Attention form version 0.2.6 to 0.2.7 was added the config/modules.json file to load the modules.[  \"modules/*\"]","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/version-0-2-7",
        "teaser":null},{
        "title": "View page",
        "excerpt":"Workflow JATE We want to create a new page called view, it must show us the list of our heroes. The first step to do is go to config/router.json and add a new line inside the array pages: [\"/heros/view\", \"View\", []],Doing this we say to the JATE that when it...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/view-page",
        "teaser":null},{
        "title": "View",
        "excerpt":"Warning: Require JATE 0.5.4 or higher.Upload a file from /bundles/views/ and after a parsing returns a string.void view( String $_path, Array $_parameters )Parameters $_path: The path of the file you want to open. $_parameters: Is an array of content for pug and twig stuff.Return ValuesReturn a string of html.Examples&lt;?php$temp =...","categories": [],
        "tags": [],
        "url": "http://localhost:4000/JATE/functions/view",
        "teaser":null},]

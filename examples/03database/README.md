# Example 03

## To run this example, you have to load this file `/database.sql` in your database.

The parameters for configuring MYSQL database are contained in `/config/connection.json`.
The connection is handled through the function `makeConnection()` contained in the `/bundles/models/Template.php` file.
Once the connection is linked, JATE provides you some query functions:
- `$this->query("query ")`: Used to make general queries.
- `$this->queryFetch("query")`: Used to do SELECT. Returns an array fetch.
- `$this->queryArray("query")`: Used to do SELECT. Return to a normal array.
- `$this->queryInsert("query")`: Used to make INSERT. Return the id of the row inserted.

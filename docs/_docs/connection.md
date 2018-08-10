---
title: "Connection"
permalink: /config/connection
excerpt: "connection."
last_modified_at: 2018-08-05T16:28:04-05:00
toc: false
---

To enable the connection to the database, set `"enable":true` and fill the other fields.<br>
Only one engine can be selected at the same time, especially the _pdo_ entry uses a mysql connection using pdo.
```json
{
  "enable":    false,
  "user":      "",
  "password":  "",
  "database":  "",
  "server":    "",
  "engine": {
    "pdo":        true,
    "mysqli":     false,
    "postgresql": false
  }
}

```

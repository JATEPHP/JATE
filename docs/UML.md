# Html : Module
+ construct( parameters : array )
+ draw()
+ getCss()
+ getJs()
+ getJsVars()
+ addJsVar()
+ addJsVars()

# Module : Query
+ addModule( module : class )
+ addModules( modules : array )

# File
+ addFile( file : string )
+ addFileRequired( file : string )
+ addFiles( files : array )
+ addFilesRequired( files : array )
+ getFiles()
+ getFile()

# Connection
+ construct( connection : JConfig )

# JConfig
+ construct( path : string )

# ServerVars
+ construct()

# Query
+ addConnection( path : string, name = "default" : string )
+ setConnection( name : string )
+ query( name : string )
+ queryInsert( name : string )
+ queryFetch( name : string )
+ queryArray( name : string )

# Router
+ construct( path : string, urlCaseSensitive : bool )
+ getCurrentPage()

# WebApp
+ construct( routerPath : string )
+ draw()

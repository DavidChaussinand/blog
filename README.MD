## configuration du virtualHost

```

<VirtualHost *:80>

    DocumentRoot "C:/xampp/htdocs/blog/"
    ServerName blog.local
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common

</VirtualHost>
<VirtualHost *:80>
       DocumentRoot "C:/xampp/htdocs/"
       ServerName localhost
</VirtualHost>
```

##### rajout du localhost

```

    127.0.0.1       localhost
    ::1             localhost
    127.0.0.1	    blog.local
    ::1		        blog.local
```

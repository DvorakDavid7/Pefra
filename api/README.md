# Pefra API

To be able to connect to the database create class `Config`
in api root with following public properties:

```php
class Config
{
    public static string $hostname = "";
    public static int $port = 0;
    public static string $username = "";
    public static string $password = "";
    public static string $database = "";
}
```


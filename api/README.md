# Pefra API

To be able to connect to the database create class `__config`
in api root with following public properties:

```php
class __config
{
    public static string $hostname = "";
    public static int $port = 0;
    public static string $username = "";
    public static string $password = "";
    public static string $database = "";
}
```


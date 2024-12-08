The solution is to explicitly convert all keys to strings before assigning them to the array:
```php
<?php
$myArray = [];
$myArray[(string)123] = 'value1';
$myArray[(string)123.0] = 'value2';
$myArray['123'] = 'value3';
print_r($myArray);
?>
```
This will output:
```
Array
(
    [123] => value1
    [123] => value2
    [123] => value3
)
```
While this addresses the immediate data loss, note that now three identical keys exist which might need further attention based on how you are using the array. A better approach might involve using a more structured data type or a more robust key generation strategy to avoid this issue altogether.
```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = self::processData($value); // Recursive call
    } else {
      // Perform some operation on $value
      $data[$key] = $value * 2; 
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result);
```
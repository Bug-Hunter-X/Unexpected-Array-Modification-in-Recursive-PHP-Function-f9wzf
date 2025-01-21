```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = self::processData($value); // Recursive call
    } else {
      // Perform some operation on $value
      $newData[$key] = $value * 2; 
    }
  }
  return $newData;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result);
```
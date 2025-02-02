The solution is to use strict comparison (===) instead of loose comparison (==).  Strict comparison checks both the value and the type of the operands. This prevents the unintended equality between '0' and false.

```php
<?php
$str = '0';
$bool = false;

if ($str === $bool) {
    echo "'0' is equal to false (Strict Comparison)";
} else {
    echo "'0' is NOT equal to false (Strict Comparison)";
}
?>
```
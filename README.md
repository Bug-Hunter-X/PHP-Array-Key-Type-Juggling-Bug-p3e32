# PHP Array Key Type Juggling Bug

This repository demonstrates a subtle bug in PHP related to how it handles array keys and type juggling.  When using non-string values as keys in associative arrays, PHP implicitly converts them to strings, potentially leading to unexpected data overwriting.

## Bug Description
The bug arises from PHP's loose type system. When you attempt to use an integer or float as an array key, PHP silently converts it to a string representation.  This can cause multiple values to be assigned to the same key if different types are used.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output. You will see that only one value is stored instead of three due to the key type juggling. 

## Solution
The solution involves ensuring that all array keys are explicitly strings. By casting all keys to strings before assigning, we prevent implicit type conversion and avoid the bug.

## Additional Notes
This bug highlights the importance of understanding PHP's type handling and using explicit type conversions to avoid unexpected behavior.
# Basic Calculator

This is a basic calculator class written in PHP that allows you to perform basic arithmetic operations such as addition, subtraction, multiplication, and division.

## Usage

To use the calculator, follow these steps:

1. Create an instance of the `Calculator` class: `$calculator = new Calculator();`
2. Perform arithmetic operations by calling the appropriate methods:
    - Addition: `$calculator->add($num);`
    - Subtraction: `$calculator->subtract($num);`
    - Multiplication: `$calculator->multiply($num);`
    - Division: `$calculator->divide($num);`
        - Note: Division by zero will throw an exception.
3. Retrieve the result by calling the `getResult()` method: `$result = $calculator->getResult();`

## Example

Here's an example that demonstrates the usage of the calculator:

```php
$calculator = new Calculator();
$calculator->add(5);
$calculator->subtract(3);
$calculator->multiply(2);
$calculator->divide(4);
echo "Result: " . $calculator->getResult();

```
## The above example will output:

```php
Result: 2 
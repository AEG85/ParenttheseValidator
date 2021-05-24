Parentheses Validator
=

Данный пакет позволяет использовать инструмент для валидации строки,
содержащей открывающиеся и закрывающиеся круглые скобки.

Установка
-

```bash
composer require psr/log
```

**Примеры использоватния**
-

```php
<?php

use AEG85\Helpers\ParenthesesValidator;

$string = '((((((test))))test))()(()()()())((( test   (((())))))) () ()()';
$flag = ParenthesesValidator::validateBrackets($string);

if ($flag)
    echo "Ok";
else
    echo "Bad";
?>
```
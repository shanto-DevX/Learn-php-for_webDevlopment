- Use for Same sections
- Use for manage Code
- create common file for funcions

### Include

- একটা ফাইল যত ইচ্ছা ততবার include করে লোড করানো যাবে মেইন ফাইলে

```php
    📂 include.php
    include("./test_hello.php");

    📂 test_hello.php
    echo "hello World";
```

```php
    📂 include.php
    include("./test_hello.php");

    📂 test_hello.php
    for($i=1;$i<=10;$i++){
        echo "$i ";
        include_once("./test_hello.php");
        echo "</br>";
    }
```

### include_once

- file এর ডাটা যদি লুপ এর মধ্যে থাকে কিন্তু আমি চাই একবার লোড করবে তখন include_once ফাংশন এর ব্যবহার করতে হবে।

```php
<?php

    for($i=1;$i<=10;$i++){
        echo "$i ";
        include_once("./test_hello.php");
        echo "</br>";
    }
?>
```

### Requird

- requird দিলে ফাইল একবার এর অধিক লোড নিবে।
- requird দিলে ফাইল এর নাম ঠিক না থাকলে Fatal error দিবে
- include এ ফাইলের নাম ভুল হলে Warning দিবে

```php
    📂 include.php
    requird("./test_hello.php");

    📂 test_hello.php
    echo "hello World";
```

### Requird_once

- Requird_once দিলে ফাইল একবার লোড নিবে।
- Requird_once দিলে ফাইল এর নাম ঠিক না থাকলে Fatal error দিবে

```php
    📂 include.php
    requird_once("./test_hello.php");

    📂 test_hello.php
    echo "hello World";
```

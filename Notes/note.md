# php Language Note

---

### 🔗 Learn Links

- 👨‍💻1️⃣ [Basic php Crash Course](https://www.youtube.com/watch?v=_TST9dVptls)

- 👉 [Basic Playlist - H](https://www.youtube.com/playlist?list=PL8p2I9GklV44cSOlKzB_0TrzxEgwfvicK)

- 👉 [PHP For Beginners - Complete Laracasts Course](https://www.youtube.com/watch?v=fw5ObX8P6as&list=PL3VM-unCzF8i1GY_NqCRNE-TUZhUIak5l)

- 👉 [Basic To Advance - E](https://www.youtube.com/playlist?list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-)

- 👉 [Basic To Advance - H](https://www.youtube.com/playlist?list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs)

* 👉 https://www.phptutorial.net/

* 👉

---

## http://localhost/learnPHP/01_index.php

---

### Note

- php -> hypertext Preprocessor
- php -> server-side scripting language
  ![Server side script](image.png)
  ![alt text](image-1.png)

- Case Sensative না
- variable এর ক্ষেত্রে Case Sensative
- [.] dot হচ্ছে concatenation

---

### CODE

```php
<?php
    echo "Hello World";
?>
```

---

### Comment

```php

# Single Line ❌
// Single Line
/* Multiline*/

```

#### Echo in php

- display output
- echo is INcase-sesative

```php
    echo "Hello PHP echo";
    ECHO "Hello ECHO";
```

#### Variable in php

```php
  $num = 10;
  $num2 = 20;
  $result = $num + $num2;
  echo $result."<br>";
  var_dump($result)
```

##### Varible Rulse

- variable start with $
- variable name can't start number / spacial caractrer
- variable name start with \_ or letter
- variable is case sebsative

#### PHP in HTML

```php
echo "<h1 style='color:red'>Php with Html<h1>";
echo "<h2 style='color:green'>Php with Html<h2>";
echo "<h3 style='color:teal'>Php with Html<h3>";


<?php
   $name = "Hello PHP";
   $red = "red";
   $green = "green";

?>

<h1 style='color:<?php echo $red?>'>Now LEarning <?php echo $name; ?></h1>
<h1 style='color:<?php echo $green?>'>Now LEarning <?php echo $name; ?></h1>

```

#### ERROR PHP

- find php.ini
- find display_error & on


### Constant
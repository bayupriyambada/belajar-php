<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "OOP";
    echo "<br>";

    // public, protected, private

    class MyClass
    {
        public $publicProperty;
        protected $protectedProperty;
        private $privateProperty;

        public function __construct()
        {
            $this->publicProperty = "Public Property";
            $this->protectedProperty = "Protected Property";
            $this->privateProperty = "Private Property";
        }

        public function publicMethod()
        {
            echo "This is a public method.<br>";
        }

        protected function protectedMethod()
        {
            echo "This is a protected method.<br>";
        }

        private function privateMethod()
        {
            echo "This is a private method.<br>";
        }

        public function accessPropertiesAndMethods()
        {
            echo $this->publicProperty . "<br>";
            echo $this->protectedProperty . "<br>";
            echo $this->privateProperty . "<br>";

            $this->publicMethod();
            $this->protectedMethod();
            $this->privateMethod();
        }
    }

    $obj = new MyClass();

    echo $obj->publicProperty . "<br>"; // Dapat diakses dari luar class
    // echo $obj->protectedProperty; // Tidak dapat diakses dari luar class
    // echo $obj->privateProperty; // Tidak dapat diakses dari luar class

    $obj->publicMethod(); // Dapat dipanggil dari luar class
    // $obj->protectedMethod(); // Tidak dapat dipanggil dari luar class
    // $obj->privateMethod(); // Tidak dapat dipanggil dari luar class

    $obj->accessPropertiesAndMethods(); // Semua properti dan metode dapat diakses melalui metode ini
    ?>
</body>

</html>
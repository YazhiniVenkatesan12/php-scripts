<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>this is a php page</h1>
    <pre>
    <?php
    echo "Hello World! \n"; // outputs welcome message

    $a = "yazhini";
    echo "i'm " . $a . "\n";

    echo "length of a is:" . strlen($a) . "\n";
    echo "word count of a string is:" . str_word_count("function counts the number of words in a string") . "\n";
    $x = 25;
    $y = 18;
    echo "x+y= " . $x + $y . "\n";

    echo "<h3> replace string</h3>";
    $m = "Hello World!";
    echo $m . "\n";
    echo str_replace("World", "yazhini", $m);

    echo "<h3>string slice</h3>";
    echo substr($m, 6, 5);

    echo "<h3>difference b/w single and double quotes</h3>";
    $p = "yazh";
    echo "Hello $p \n";
    echo 'Hello $p';

    echo "<h3> returns datatype</h3>";
    var_dump(10); //returns datatype
    var_dump($x);
    var_dump("yazhini");
    var_dump(1.23);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);

    echo "<h3>scope</h3>";
    function add()
    {
        $z = 30; //local
        global $w; //global
        $w = 12;
        echo "w+z=" . $w + $z . "\n";
    }
    add();
    echo "w=" . $w . "\n";

    echo "<h3>class and object</h3>";
    class IT
    {
        public $student;
        public $marks;
        public function __construct($student, $marks)
        {
            $this->student = $student;
            $this->marks = $marks;
            echo "My name is " . $this->student . "\n my mark is:" . $this->marks;
        }
    }
    $IT = new IT("yazhini", 95);
    ?> 
    </pre>
</body>

</html>
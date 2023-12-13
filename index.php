<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 15 - PHP Basics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="border shadow text-center m-5 p-5">
        <h1 class="fw-bold">Activity 15 - PHP Basics</h1>
        <hr>
        <section class="container border shadow  p-5 text-center">
        <div class="row">
            <div class="col">
                <?php
                print "<h6>Task 2: Variable Declaration and Data Types</h6>";
                //Task 2: Variable Declaration and Data Types
                $name = "John Doe";
                $age = 23;
                $isMale = true;
                echo "$name <br> ";
                echo "$age  <br>";
                echo "$isMale(true)  <br>";
                ?>
            </div>
            <div class="col">
                <?php
                print "<h6>Task 3: Conditionals</h6>";
                //Task 3: Conditionals
                if($age > 10){
                    echo "Legal Age";
                }else{
                    echo "You are a minor";
                }
                ?>
            </div>
            <div class="col">
                <?php
                print "<h6>Task 4: Loops</h6>";
                //Task 4: Loops
                print "<h6>For Loop:</h6>";
                //For loop
                for ($count = 9; $count >= 1; $count--){
                echo $count;
                }
                print "<h6>While Loop:</h6>";
                //While loop
                $COUNT = 1;
                while ($COUNT < 10){
                echo $COUNT;
                $COUNT++;
                }
                ?>
            </div>
        </div>
    </section>

    <section class="border shadow text-center m-5 p-5">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <?php
                    print "<h4>Task 5: Arrays</h4>";
                    //Task 5: Arrays
                    print "<h6>Indexed Array:</h6>";
                    $colors = array("red", "green", "blue");
                    foreach($colors as $color) {
                        echo "<li>".$color."</li>";
                    }
            
                    print "<h6>Associative Array:</h6>";
                    $person = array(
                        "Name" => "Johnny",
                        "Age" => 36,
                        "City" => "Davao"
                    );
            
                    foreach($person as $prop => $value){
                        echo "<li>".$prop ." : ".$value."</li>";
                    }
                    ?>
                </div>
                <div class="col">
                    <?php
                    print "<h4>Task 6: Functions</h4>";
                    function sum($x, $y){
                        echo $x + $y;
                    }
                    echo sum(6, 9);
                    ?>
            </div>
        </div>
    </section>

    <section class="border shadow text-center m-5 p-5">
        <form method="POST" action="person.php">
            <label class="fw-bold" for="name">Name</label>
            <input class="form-control" required type="text" name="name" id="name">
            <button class="btn border bg-black text-white rounded mt-2">Submit</button>
        </form>
    </section>

    </section>

    

    

    
    
</body>
</html>
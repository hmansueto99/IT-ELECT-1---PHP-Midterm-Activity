<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Records</title>
</head>
<body>

<?php
$file = "students.txt";


if (isset($_POST['save'])) {

   
    $id     = htmlspecialchars($_POST['IdNum']);
    $fname  = htmlspecialchars($_POST['FirstName']);
    $lname  = htmlspecialchars($_POST['LastName']);
    $age    = htmlspecialchars($_POST['Age']);
    $course = htmlspecialchars($_POST['Course']);
    $yearlevel = htmlspecialchars($_POST['YearLevel']);

   
    $line = "Id no: $id | FirstName: $fname | LastName: $lname | Age: $age | Course: $course | YearLevel: $yearlevel\n";

    
    $handle = fopen($file, "a");
    fwrite($handle, $line);
    fclose($handle);

    echo "<p>Student saved!</p>";
}


if (isset($_POST['clear'])) {
   
    $handle = fopen($file, "w");
    fclose($handle);
    echo "<p>All records cleared!</p>";
}


if (file_exists($file)) {
    echo "<h3>Registered Students</h3><pre>";
    echo htmlspecialchars(file_get_contents($file));
    echo "</pre>";
}
?>

<p><a href="index.php">Back to Registration Form</a></p>

</body>
</html>

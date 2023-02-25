<table border="10">
    <?php session_start();
    echo "<tr>";
    echo "<tr>" . "<td>" . "first name:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['name'] . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . "last name:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['lastname'] . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . "age:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['age'] . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . "grade:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['grade'] . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . "school name:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['school'] . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . "job:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['job'] . "</td>" . "<tr>";
    $c = $_SESSION['picture'];
    echo "<tr>" . "<td>" . " image uploaded:" . "</td>" . "<tr>";

    echo "<tr>" . "<td>" . " <img src='picture/$c' width='150px' height='150px'>" . "</td>" . "<tr>";

    echo "</tr>";
    ?>
</table>
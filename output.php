<table border="10">
    <?php session_start();
    echo "<tr>";
    echo "<tr>" . "<td>" . "first name:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['name'] . " " . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . "last name:" . "</td>" . "<tr>";
    echo "<tr>" . "<td>" . $_SESSION['lastname'] . "</td>" . "<tr>";
    $c = $_SESSION['picture'];
    echo "<tr>" . "<td>" . " image uploaded:" . "</td>" . "<tr>";

    echo "<tr>" . "<td>" . " <img src='picture/$c' width='150px' height='150px'>" . "</td>" . "<tr>";

    echo "</tr>";
    ?>
</table>
<?php
$test = array(
    1 => 'one',
    2 => 'two',
    3 => 'three'
);
?>

<!DOCTYPE html>
<html>

<body>

    <h1>
        <?php echo "Hello from PHP"; ?>
    </h1>

    <p>My first paragraph.</p>

    <?php echo 4 + 123; ?>


    <script>
        const mydata = <?php echo json_encode($test); ?>;
    </script>
    <script>
        // create a <p> node with text form `mydata`
        const para = document.createElement("p");
        const node = document.createTextNode(mydata["1"]);
        para.appendChild(node);
        // add it to the body
        document.body.appendChild(para);
    </script>

</body>


</html>
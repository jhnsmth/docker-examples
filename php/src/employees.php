<?php
$name_filter = $_GET['name'] ?? "";

include_once 'db.php';

$statement = $pdo->prepare("SELECT
        e.emp_no,
        @full_name AS full_name,
        d.dept_name AS department,
        cte.title,
        e.birth_date,
        e.gender
    FROM
        employees e
        JOIN current_title_emp cte ON cte.emp_no = e.emp_no
        JOIN current_dept_emp cde ON cde.emp_no = e.emp_no
        JOIN departments d ON cde.dept_no = d.dept_no
    WHERE (@full_name := CONCAT(e.first_name, ' ', e.last_name)) LIKE ?
    ORDER BY e.emp_no
    LIMIT 100");
$statement->execute(['%' . $name_filter . '%']);
$employees = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <title>Employees</title>
</head>

<body>
    <main class="container">
        <form method="GET">
            <input type="search" id="search" name="name" value="<?= $name_filter ?>" placeholder="Enter employees name" />
            <input type="submit" value="Submit" />
        </form>
        <table role="grid">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Title</th>
                    <th scope="col">Birth date</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as &$row) : ?>
                    <tr>
                        <th scope="row"><?= $row['emp_no'] ?></th>
                        <td><?= $row['full_name'] ?></td>
                        <td><?= $row['department'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['birth_date'] ?></td>
                        <td><?= $row['gender'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>Book and Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <?php if (isset($_POST['isbn']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['available'])): ?>
            <h2>Book</h2>
            <table class="table">
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                </tr>
                <tr>
                    <td><?= $_POST['isbn'] ?></td>
                    <td><?= $_POST['title'] ?></td>
                    <td><?= $_POST['author'] ?></td>
                    <td><?= $_POST['available'] ?></td>
                </tr>
            </table>
        <?php endif; ?>

        <?php if (isset($_POST['customer_id']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])): ?>
            <h2>Customer</h2>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?= $_POST['customer_id'] ?></td>
                    <td><?= $_POST['first_name'] ?></td>
                    <td><?= $_POST['last_name'] ?></td>
                    <td><?= $_POST['email'] ?></td>
                </tr>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>

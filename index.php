<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book and Customer Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            background-color: #ffffff;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #ff6600; /* Orange color */
        }

        .form-label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border: 1px solid #cccccc;
            border-radius: 5px;
            height: 40px;
            font-size: 16px;
            padding: 10px;
            color: #333333;
        }

        .btn-primary {
            background-color: #ff6600;
            border: none;
            border-radius: 5px;
            height: 40px;
            font-size: 16px;
            color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #cc5500;
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .custom-button:hover {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <h2 class="card-title">Book Form</h2>
                    <form action="store_book.php" method="post">
                        <div class="form-group">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="author" class="form-label">Author:</label>
                            <input type="text" id="author" name="author" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="isbn" class="form-label">ISBN:</label>
                            <input type="text" id="isbn" name="isbn" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="available" class="form-label">Available:</label>
                            <input type="available" name="available" id="available" class="form-control" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Store Book</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <h2 class="card-title">Customer Form</h2>
                    <form action="store_customer.php" method="post">
                    <div class="form-group">
                            <label for="customerId" class="form-label">customer_id:</label>
                            <input type="text" name="customer_id" id="customer_id" class="form-control" placeholder="ID" required>
                        </div>
                        <div class="form-group">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Store Customer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h2>Read Data</h2>
    <div class="button-container">
        <a href="read_customer.php" class="custom-button">Customer Info</a>
        <a href="read_books.php" class="custom-button">Books Info</a>
    </div>
</body>
</html>

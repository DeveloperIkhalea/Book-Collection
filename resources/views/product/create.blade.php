<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Book</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        div {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #dcdcdc;
            border-radius: 6px;
            font-size: 16px;
            color: #555;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #5dade2;
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #5dade2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #3498db;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            input[type="text"], button[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf  <!-- CSRF protection -->

        <h1>Create a Book</h1>
        
        <div>
            <label for="name">Book Name:</label>
            <input type="text" name="name" required>
        </div>
        
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" required>
        </div>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>

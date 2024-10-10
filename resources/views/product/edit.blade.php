<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Book</title>
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #3498db;
            --background-color: #f4f7f6;
            --input-border-color: #ccc;
            --input-focus-color: #3498db;
            --text-color: #333;
            --danger-color: #e74c3c;
            --border-radius: 8px;
            --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-size: 28px;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        div {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: var(--text-color);
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--input-border-color);
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: var(--input-focus-color);
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #2c81ba;
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
    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
        @csrf 
        @method('PUT')  

        <h1>Edit a Book</h1>
        
        <div>
            <label for="name">Book Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>
    
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" value="{{ $product->author }}" required>
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>

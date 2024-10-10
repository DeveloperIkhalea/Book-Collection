<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #4CAF50;
            --danger-color: #e74c3c;
            --text-color: #333;
            --background-color: #f9f9f9;
            --table-background: #fff;
            --table-shadow: rgba(0, 0, 0, 0.1);
            --font-family: 'Arial', sans-serif;
            --font-size-base: 1rem;
            --border-radius: 4px;
            --padding: 15px;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--background-color);
            margin: 0;
            padding: 2rem;
        }

        h1 {
            text-align: center;
            color: var(--text-color);
            margin-bottom: 2rem;
            font-size: 2.25rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: var(--table-background);
            box-shadow: 0 4px 8px var(--table-shadow);
        }

        th, td {
            padding: var(--padding);
            text-align: left;
            font-size: var(--font-size-base);
        }

        th {
            background-color: var(--secondary-color);
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: bold;
        }

        a:hover {
            color: #2c3e50;
        }

        form {
            display: inline;
        }

        input[type="submit"], .edit-btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"] {
            background-color: var(--danger-color);
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #c0392b;
        }

        .edit-btn {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            display: inline-block;
        }

        .edit-btn:hover {
            background-color: #2980b9;
        }

        .create-btn {
            background-color: var(--secondary-color);
            color: white;
            padding: 0.75rem 1.25rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            display: inline-block;
            margin-bottom: 20px;
        }

        .create-btn:hover {
            background-color: #43a047;
        }

        /* Mobile first responsive design */
        @media (max-width: 768px) {
            table, th, td {
                font-size: 0.9rem;
            }

            h1 {
                font-size: 1.75rem;
            }

            table {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th, td {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <h1>Books</h1>

    <div>
        <a href="{{ route('product.create') }}" class="create-btn">Create</a>
    </div>
    
    <div>
        <table>
            <tr>
                <th>NAME</th>
                <th>Author</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->author }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product->id]) }}" class="edit-btn">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('product.delete', ['product' => $product->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

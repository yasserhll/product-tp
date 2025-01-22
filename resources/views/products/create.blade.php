<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input, textarea, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>

            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" min="0" required>

            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
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

        p {
            font-size: 16px;
            margin: 10px 0;
        }

        p strong {
            color: #007bff;
        }

        .status {
            font-weight: bold;
        }

        .status-active {
            color: green;
        }

        .status-inactive {
            color: red;
        }

        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>

        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p>
            <strong>Status:</strong>
            <span class="status {{ $product->status ? 'status-active' : 'status-inactive' }}">
                {{ $product->status ? 'Active' : 'Inactive' }}
            </span>
        </p>

        <a href="{{ route('products.index') }}" class="back-button">Back to List</a>
    </div>
</body>
</html>

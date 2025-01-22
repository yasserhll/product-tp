<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #5a5a5a;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin: 10px 0 5px;
        }

        form input[type="text"],
        form textarea,
        form select {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        form textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 10px 15px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4">{{ $product->description }}</textarea>

            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="1" {{ $product->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$product->status ? 'selected' : '' }}>Inactive</option>
            </select>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

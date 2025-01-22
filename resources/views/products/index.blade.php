<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .actions a, .actions form button {
            margin-right: 10px;
            text-decoration: none;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .actions a {
            color: #fff;
            background-color: #007bff;
        }

        .actions a:hover {
            background-color: #0056b3;
        }

        .actions form button {
            color: #fff;
            background-color: #dc3545;
        }

        .actions form button:hover {
            background-color: #c82333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .status-active {
            color: green;
            font-weight: bold;
        }

        .status-inactive {
            color: red;
            font-weight: bold;
        }

        .add-product {
            display: block;
            text-align: center;
            margin: 20px 0;
            color: #fff;
            background-color: #28a745;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .add-product:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Products List</h1>
        <a href="{{ route('products.create') }}" class="add-product">Add New Product</a>

        <h2>Max Price: ${{ number_format($maxPrice, 2) }}</h2>
        <h2>Min Price: ${{ number_format($minPrice, 2) }}</h2>
        <h2>Average Price: ${{ number_format($avgPrice, 2) }}</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            @if ($product->status)
                                <span class="status-active">Active</span>
                            @else
                                <span class="status-inactive">Inactive</span>
                            @endif
                        </td>
                        <td class="actions">
                            <a href="{{ route('products.show', $product->id) }}">View</a>
                            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">No Products Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <br><br>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        <br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $product->description }}</textarea>
        <br><br>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1" {{ $product->status ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$product->status ? 'selected' : '' }}>Inactive</option>
        </select>
        <br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>

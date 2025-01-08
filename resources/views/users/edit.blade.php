<form method="POST" action="{{ route('users.update', $User->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $User->name }}">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $User->email }}">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
    </div>
    <button type="submit">Update User</button>
</form>

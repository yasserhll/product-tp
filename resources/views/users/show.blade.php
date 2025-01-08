<div>
    <h1>{{ $User->name }}</h1>
    <p>{{ $User->email }}</p>
</div>
<a href="{{ route('users.index') }}">Back to Users</a>

<!DOCTYPE html>
<html>
<head>
    <title>Edit School</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; padding: 30px; }
        .form-card { background: white; padding: 25px; max-width: 500px; margin: 0 auto; border-radius: 8px; box-shadow: 0 2px 10px #ccc; }
        input { width: 92%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #3498db; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Edit School Details</h2>
        <form action="{{ route('school.update', $school->id) }}" method="POST">
            @csrf
            <input type="text" name="name" value="{{ $school->name }}" required>
            <input type="email" name="email" value="{{ $school->email }}" required>
            <input type="text" name="contact" value="{{ $school->contact }}" required>
            <input type="text" name="address" value="{{ $school->address }}" required>
            <button type="submit">Update School</button>
        </form>
    </div>
</body>
</html>
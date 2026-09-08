<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; padding: 30px; }
        .form-card { background: white; padding: 25px; max-width: 500px; margin: 0 auto; border-radius: 8px; box-shadow: 0 2px 10px #ccc; }
        input { width: 92%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #9b59b6; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Edit Teacher Details</h2>
        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
            @csrf
            <input type="text" name="name" value="{{ $teacher->name }}" required>
            <input type="email" name="email" value="{{ $teacher->email }}" required>
            <input type="text" name="contact" value="{{ $teacher->contact }}" required>
            <input type="text" name="subject" value="{{ $teacher->subject }}" required>
            <button type="submit">Update Teacher</button>
        </form>
    </div>
</body>
</html>
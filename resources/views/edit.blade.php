```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h2>Edit User</h2>

        <form action="{{ route('models.update', $models->id) }}" method="GET">

            <div class="mb-3">
                <label>Name</label>

                <input type="text"
                       name="name"
                       value="{{ $models->name }}"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>

                <input type="email"
                       name="email"
                       value="{{ $models->email }}"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Password</label>

                <input type="text"
                       name="password"
                       value="{{ $models->password }}"
                       class="form-control">
            </div>

            <button type="submit" class="btn btn-success">
                Update
            </button>

            <a href="{{ route('models.index') }}" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>

</body>

</html>
```

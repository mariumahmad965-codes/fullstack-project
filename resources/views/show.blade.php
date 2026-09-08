<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h2 class="mb-4">Users List</h2>

        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($models as $model)

                    <tr>

                        <td>{{ $model->id }}</td>

                        <td>{{ $model->name }}</td>

                        <td>{{ $model->email }}</td>

                        <td>

                            <a href="{{ route('models.edit', $model->id) }}"
                                class="btn btn-primary">
                                Edit
                            </a>

                            <a href="{{ route('models.delete', $model->id) }}"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this user?')">
                                Delete
                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="text-center">
                            No data found
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>School Parent Teacher Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .buttons {
            text-align: center;
            margin: 30px 0;
        }

        button {
            padding: 12px 25px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .school-btn {
            background-color: #3498db;
            color: white;
        }

        .parent-btn {
            background-color: #2ecc71;
            color: white;
        }

        .teacher-btn {
            background-color: #9b59b6;
            color: white;
        }

        .form-section {
            display: none;
            background: white;
            padding: 25px;
            margin: 20px auto;
            max-width: 700px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ccc;
        }

        input {
            width: 95%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-btn {
            background-color: #333;
            color: white;
            padding: 10px 25px;
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        .edit {
            background-color: #3498db;
            color: white;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .delete {
            background-color: #e74c3c;
            color: white;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>

<h1>School, Parents & Teachers Management</h1>

<div class="buttons">

    <button class="school-btn" onclick="showForm('school')">
        School
    </button>

    <button class="parent-btn" onclick="showForm('parent')">
        Parents
    </button>

    <button class="teacher-btn" onclick="showForm('teacher')">
        Teachers
    </button>

</div>


<!--SCHOOL FORM  -->

<div id="school" class="form-section">

    <h2>School Form</h2>

    <form action="{{ route('school.store') }}" method="POST">

        @csrf

        <input type="text" name="name" placeholder="School Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="text" name="contact" placeholder="Contact" required>

        <input type="text" name="address" placeholder="Address" required>

        <button type="submit" class="submit-btn">
            Save School
        </button>

    </form>


    <h2>School Data</h2>

    <table>

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        @forelse($schools as $school)

        <tr>

            <td>{{ $school->name }}</td>
            <td>{{ $school->email }}</td>
            <td>{{ $school->contact }}</td>
            <td>{{ $school->address }}</td>

            <td>
                <a href="{{ route('school.edit', $school->id) }}"
                   class="edit">
                    Edit
                </a>

                <a href="{{ route('school.delete', $school->id) }}"
                   class="delete">
                    Delete
                </a>
            </td>

        </tr>

        @empty

        <tr>
            <td colspan="5">No school data found.</td>
        </tr>

        @endforelse

    </table>

</div>


<!--PARENT FORM  -->

<div id="parent" class="form-section">

    <h2>Parent Form</h2>

    <form action="{{ route('parent.store') }}" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Parent Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="text" name="contact" placeholder="Contact" required>

        <input type="text" name="child_name" placeholder="Child Name" required>

        <button type="submit" class="submit-btn">
            Save Parent
        </button>

    </form>


    <h2>Parent Data</h2>

    <table>

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Child Name</th>
            <th>Action</th>
        </tr>

        @forelse($parents as $parent)

        <tr>

            <td>{{ $parent->name }}</td>
            <td>{{ $parent->email }}</td>
            <td>{{ $parent->contact }}</td>
            <td>{{ $parent->child_name }}</td>

            <td>
                <a href="{{ route('parent.edit', $parent->id) }}"
                   class="edit">
                    Edit
                </a>

                <a href="{{ route('parent.delete', $parent->id) }}"
                   class="delete">
                    Delete
                </a>
            </td>

        </tr>

        @empty

        <tr>
            <td colspan="5">No parent data found.</td>
        </tr>

        @endforelse

    </table>

</div>


<!--  TEACHER FORM -->

<div id="teacher" class="form-section">

    <h2>Teacher Form</h2>

    <form action="{{ route('teacher.store') }}" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Teacher Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="text" name="contact" placeholder="Contact" required>

        <input type="text" name="subject" placeholder="Subject" required>

        <button type="submit" class="submit-btn">
            Save Teacher
        </button>

    </form>


    <h2>Teacher Data</h2>

    <table>

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Subject</th>
            <th>Action</th>
        </tr>

        @forelse($teachers as $teacher)

        <tr>

            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->contact }}</td>
            <td>{{ $teacher->subject }}</td>

            <td>
                <a href="{{ route('teacher.edit', $teacher->id) }}"
                   class="edit">
                    Edit
                </a>

                <a href="{{ route('teacher.delete', $teacher->id) }}"
                   class="delete">
                    Delete
                </a>
            </td>

        </tr>

        @empty

        <tr>
            <td colspan="5">No teacher data found.</td>
        </tr>

        @endforelse

    </table>

</div>


<!-JAVASCRIPT -->

<script>

function showForm(formId)
{
    let sections = document.querySelectorAll(".form-section");

    sections.forEach(function(section)
    {
        section.style.display = "none";
    });

    document.getElementById(formId).style.display = "block";
}

</script>

</body>
</html>
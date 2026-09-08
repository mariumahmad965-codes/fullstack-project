<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  {{-- <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      padding: 24px;
      font-family: Arial, sans-serif;
      background: #f3f6fb;
      color: #1f2937;
    }
    form {
      width: min(100%, 420px);
      padding: 28px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(31, 41, 55, .12);
    }
    h1 { margin: 0 0 22px; font-size: 24px; }
    label { display: block; margin: 16px 0 7px; font-weight: 600; }
    input {
      width: 100%;
      padding: 11px 12px;
      border: 1px solid #cbd5e1;
      border-radius: 7px;
      font: inherit;
    }
    input:focus { outline: 2px solid #93c5fd; border-color: #2563eb; }
    .gender-options { display: flex; gap: 18px; }
    .gender-options label { display: flex; align-items: center; gap: 6px; margin: 0; font-weight: 400; }
    .gender-options input { width: auto; }
    button {
      width: 100%;
      margin-top: 24px;
      padding: 12px;
      border: 0;
      border-radius: 7px;
      background: #2563eb;
      color: white;
      font: inherit;
      font-weight: 700;
      cursor: pointer;
    }
    button:hover { background: #1d4ed8; }
  </style> --}}
</head>
<body>
  <form action="{{route('user.store') }}" method="POST">
    @csrf
    <h1>Contact Form</h1>

    <label for="name">Name</label>
    <input id="name" name="name" type="text" placeholder="Enter your name" required />

    <label for="email">Email</label>
    <input id="email" name="email" type="email" placeholder="Enter your email" required />

    <label for="password">Password</label>
    <input id="password" name="password" type="password" placeholder="Enter your password" required />

    <input type="submit" value="Submit" />
  </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale 1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Student Management</title>
<style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
  }

  .sidebar {
    width: 200px;
    background-color: #f1f1f1;
    padding-top: 10px;
    overflow-y: auto;
  }

  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }

  .sidebar a.active {
    background-color: #04AA6D;
    color: white;
  }

  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }

  @media screen and (max-width: 768px) {
    .sidebar {
      width: 100%;
      position: relative;
      height: auto;
    }

    .sidebar a {
      float: left;
    }

    .sidebar a,
    .sidebar a:hover {
      text-align: center;
    }
  }
</style>

</head>
<body>
<div class="d-flex" style="height: 100vh; overflow: hidden;">
  <!-- Sidebar -->
  <div class="sidebar">
    <a class="{{ request()->is('/') || request()->is('students*') ? 'active' : '' }}" href="{{ url('/students') }}">Student</a>
    <a class="{{ request()->is('teachers*') ? 'active' : '' }}" href="{{ url('/teachers') }}">Teacher</a>
    <a class="{{ request()->is('courses*') ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a>
    <a class="{{ request()->is('batches*') ? 'active' : '' }}" href="{{ url('/batches') }}">Batches</a>
    <a class="{{ request()->is('enrollments*') ? 'active' : '' }}" href="{{ url('/enrollments') }}">Enrollment</a>
    <a class="{{ request()->is('payments*') ? 'active' : '' }}" href="{{ url('/payments') }}">Payment</a>
  </div>

  <!-- Main content -->
  <div class="flex-grow-1 p-4 overflow-auto" style="background-color: #f8f9fa;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <a class="navbar-brand" href="#"><h2>Student Management</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    @yield('content')
  </div>
</div>
</body>
</html>
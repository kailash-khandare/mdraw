  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="card shadow-lg rounded border-0 mx-auto" style="max-width: 480px; background: linear-gradient(135deg, #e0f7fa, #ffffff);">
  <div class="card-body">
    <h4 class="card-title mb-4 fw-bold text-center text-primary">Sign Up</h4>
    <form action="quary.php" method="POST" enctype="multipart/form-data" novalidate>
      <div class="mb-3">
        <label for="inputName" class="form-label fw-semibold">Name</label>
        <input type="text" name="name" id="inputName" class="form-control form-control-lg" placeholder="Enter your name" required>
      </div>
      <div class="mb-3">
        <label for="inputEmail" class="form-label fw-semibold">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control form-control-lg" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="inputPassword" class="form-label fw-semibold">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control form-control-lg" placeholder="Create a password" required>
      </div>
      <div class="mb-4">
        <label for="inputProfilePic" class="form-label fw-semibold">Profile Picture</label>
        <input type="file" name="profilePic" id="inputProfilePic" class="form-control" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold shadow-sm">Sign Up</button>
    </form>
  </div>
</div>

<style>
  /* Smooth input focus */
  .form-control:focus {
    box-shadow: 0 0 8px rgba(13, 110, 253, 0.5);
    border-color: #0d6efd;
    transition: border-color 0.3s, box-shadow 0.3s;
  }

  /* Button hover */
  .btn-primary:hover, .btn-primary:focus {
    background-color: #0056b3;
    border-color: #0056b3;
    box-shadow: 0 4px 12px rgba(0, 86, 179, 0.4);
    transition: background-color 0.3s, box-shadow 0.3s;
  }

  /* Label color for better readability */
  .form-label {
    color: #222;
  }
</style>


<?php
session_start();
require_once 'connection.php'; // include the database connection file

$conn = db_conn(); // call the connection function

// Prepare and execute the query
$stmt = $conn->prepare("SELECT name, email, profile_pic FROM user ORDER BY id DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();

// Fetch the data
$user = $result->fetch_assoc();

// Store in variables
$name = $user['name'] ?? '';
$email = $user['email'] ?? '';
$profilePath = $user['profile_pic'] ?? 'default.png';
?>

<?php
// Fetch all posts from DB (latest first)
$postQuery  = $conn->prepare("
  SELECT post.caption, post.image, user.name, user.profile_pic 
  FROM post 
  JOIN user ON post.user_id = user.id 
  ORDER BY post.id DESC 
  LIMIT 1
");
$postQuery->execute();
$result = $postQuery->get_result();
?>

<?php
$query = "
    SELECT p.*, COUNT(l.id) AS like_count
    FROM post p
    LEFT JOIN likes l ON p.id = l.post_id
    GROUP BY p.id
    ORDER BY p.id DESC
";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Instagram Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body { background: #fafafa; }
    .story-img { border: 2px solid #df3974; padding: 2px; }
    .suggested img, .profile-img { border-radius: 50%; }
    .rightbar { position: sticky; top: 80px; }
    .navbar-brand { font-family: 'Segoe UI', sans-serif; font-weight: bold; letter-spacing: 1px; }
    .post-img { object-fit: cover; height: 350px; width: 100%; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-light bg-white border-bottom py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Instagram</a>
    <form class="d-flex mx-auto" style="max-width: 250px;">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    </form>
    <div>
<a type="button" class="" data-bs-toggle="modal" data-bs-target="#signupModal">
 Sign Up
</a>      
<a href="#" class="me-3">💬</a>
      <a href="#">❤️</a>
    </div>
  </div>
</nav>
<div class="container mt-4">
  <div class="row">
    <!-- Feed -->
    <div class="col-md-8">
      <!-- Stories Section -->
      <div class="d-flex mb-4">
        <div class="text-center me-4">
          <img src="https://randomuser.me/api/portraits/men/1.jpg" width="60" height="60" class="rounded-circle border border-primary story-img shadow-sm">
          <div><small class="text-secondary fw-semibold">Adam</small></div>
        </div>
        <div class="text-center me-4">
          <img src="https://randomuser.me/api/portraits/women/2.jpg" width="60" height="60" class="rounded-circle border border-primary story-img shadow-sm">
          <div><small class="text-secondary fw-semibold">Lily</small></div>
        </div>
        <div class="text-center me-4">
          <img src="https://randomuser.me/api/portraits/men/3.jpg" width="60" height="60" class="rounded-circle border border-primary story-img shadow-sm">
          <div><small class="text-secondary fw-semibold">Ben</small></div>
        </div>
      </div>

      <!-- Create Post Form -->
      <div class="card p-4 mb-4 shadow-sm rounded">
        <h4 class="mb-3 fw-bold">Create Post</h4>
        <form action="upload_post.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="caption" class="form-label fw-semibold">Caption</label>
            <textarea name="caption" class="form-control" rows="2" required></textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Image</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-success fw-semibold px-4">Post</button>
        </form>
      </div>

      <!-- Posts Loop -->
      <?php while ($post = $result->fetch_assoc()): ?>
        <div class="card mb-4 shadow-sm rounded">
          <img src="<?= htmlspecialchars($post['image']) ?>" class="card-img-top rounded-top">
          <div class="card-body">
            <p class="card-text"><?= htmlspecialchars($post['caption']) ?></p>

            <!-- Like Button -->
            <form action="like_post.php" method="POST" class="d-inline me-2">
              <input type="hidden" name="post_id" value="<?= $post['id']; ?>">
              <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                ❤️ Like (<?= $post['like_count']; ?>)
              </button>
            </form>

            <!-- Comment Toggle Button -->
            <button type="button" class="btn btn-outline-primary btn-sm rounded-pill px-3" onclick="toggleCommentBox(<?= $post['id'] ?>)">
              💬 Comment
            </button>

            <!-- Comment Box -->
            <div id="comment-box-<?= $post['id'] ?>" class="mt-3" style="display: none;">
              <form action="comment_post.php" method="POST" class="mb-2">
                <input type="hidden" name="post_id" value="<?= $post['id']; ?>">
                <div class="input-group">
                  <input type="text" name="comment" class="form-control rounded-start" placeholder="Write a comment..." required>
                  <button class="btn btn-primary rounded-end" type="submit">Post</button>
                </div>
              </form>

              <?php
                $comment_query = $conn->prepare("SELECT comment FROM comments WHERE post_id = ? ORDER BY created_at DESC");
                $comment_query->bind_param("i", $post['id']);
                $comment_query->execute();
                $comment_result = $comment_query->get_result();
              ?>
              <div class="border rounded p-2" style="max-height: 150px; overflow-y: auto;">
                <?php while ($cmt = $comment_result->fetch_assoc()): ?>
                  <p class="mb-1 small">💬 <?= htmlspecialchars($cmt['comment']) ?></p>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- Right Sidebar -->
    <div class="col-md-4 d-none d-md-block rightbar">
      <!-- Profile Card -->
      <div class="card mb-3 shadow-sm rounded">
        <div class="card-body d-flex align-items-center">
          <div class="position-relative d-inline-block me-3">
            <img src="<?= htmlspecialchars($profilePath) ?>" width="70" height="70" class="rounded-circle border border-primary shadow-sm" style="object-fit: cover;">
            <a href="#" class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle small d-flex justify-content-center align-items-center text-decoration-none"
               style="width: 25px; height: 25px; font-size: 14px; border: 2px solid white;">
              +
            </a>
          </div>

          <div>
            <h5 class="text-primary fw-bold mb-1"><?= htmlspecialchars($name) ?></h5>
            <h6 class="text-secondary fst-italic"><?= htmlspecialchars($email) ?></h6>
          </div>
        </div>
      </div>

      <!-- Suggestions Card -->
      <div class="card shadow-sm rounded suggested">
        <div class="card-body">
          <strong>Suggestions For You</strong>
          <div class="d-flex align-items-center mt-3">
            <img src="https://randomuser.me/api/portraits/men/19.jpg" width="30" height="30" class="rounded-circle border border-primary shadow-sm">
            <span class="ms-2 fw-semibold">Mike</span>
            <a href="#" class="ms-auto btn btn-link btn-sm fw-semibold text-primary">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->
</div> <!-- container -->


<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="background: linear-gradient(135deg, #2c3030ff, #ecd2d2ff);">
      <button type="button" class="btn-close align-stop" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">

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
  </div>
</div>
<script>
  // Toggle comment box visibility
  function toggleCommentBox(postId) {
    const box = document.getElementById('comment-box-' + postId);
    if (box.style.display === 'none' || box.style.display === '') {
      box.style.display = 'block';
    } else {
      box.style.display = 'none';
    }
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
  function toggleCommentBox(postId) {
    const box = document.getElementById("comment-box-" + postId);
    if (box.style.display === "none") {
      box.style.display = "block";
    } else {
      box.style.display = "none";
    }
  }
</script>

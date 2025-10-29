<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Courses - Leverage Money Smartly</title>
  <link rel="stylesheet" href="lms.css">

  <style>
    /* Force remove underline for course buttons/links */
    a.btn,
    a.btn-primary,
    .btn a,
    .card a.btn,
    .card a.btn-primary {
      text-decoration: none !important;
      color: white !important;
      border: none !important;
      outline: none !important;
      display: inline-block;
    }

    a.btn:hover,
    a.btn-primary:hover,
    .btn a:hover,
    .card a.btn:hover,
    .card a.btn-primary:hover {
      text-decoration: none !important;
      color: white !important;
    }
  </style>
</head>
<body>
  <?php include 'nav.php'; ?>

  <section id="courses" class="page-content">
    <div class="container">
      <div class="section-header">
        <h2>My Courses</h2>
        <p>Manage and access all your enrolled courses</p>
      </div>
      
      <div class="course-grid">
        <div class="card">
          <div class="card-content">
            <h3>Cybersecurity</h3>
            <p>Learn to protect computer systems, networks, and data from cyber threats</p>
            <div class="progress-bar">
              <div class="progress-value" style="width: 55%"></div>
            </div>
            <p>55% Complete</p>
            <a href="cybersecurity.php" class="btn btn-primary">Continue Learning</a>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <h3>Statistics</h3>
            <p>Learn to collect, analyze, and interpret data to make informed decisions</p>
            <div class="progress-bar">
              <div class="progress-value" style="width: 40%"></div>
            </div>
            <p>40% Complete</p>
            <a href="statistics.php" class="btn btn-primary">Continue Learning</a>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <h3>Law</h3>
            <p>Understand legal principles, rules, and regulations to navigate complex legal systems</p>
            <div class="progress-bar">
              <div class="progress-value" style="width: 0%"></div>
            </div>
            <p>0% Complete</p>
            <a href="law.php" class="btn btn-primary">Start Learning</a>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <h3>Business</h3>
            <p>Develop skills to manage, lead, and innovate in a global business environment</p>
            <div class="progress-bar">
              <div class="progress-value" style="width: 0%"></div>
            </div>
            <p>0% Complete</p>
            <a href="business.php" class="btn btn-primary">Start Learning</a>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <h3>Psychology</h3>
            <p>Explore human behavior, thoughts, and emotions to understand individuals and relationships</p>
            <div class="progress-bar">
              <div class="progress-value" style="width: 0%"></div>
            </div>
            <p>0% Complete</p>
            <a href="psychology.php" class="btn btn-primary">Start Learning</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>
</html>

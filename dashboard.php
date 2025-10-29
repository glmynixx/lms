<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Leverage Money Smartly</title>
  <link rel="stylesheet" href="lms.css">
</head>
<body>
  <?php include 'nav.php'; ?>
  <section id="dashboard" class="page-content">
    <div class="container">
      <div class="section-header">
        <h2>My Dashboard</h2>
        <p>Track your progress and manage your learning journey</p>
      </div>
      
      <?php include 'calendar.php'; ?>
      <div class="dashboard-flex">
        <div class="course-grid">
          <div class="widget">
            <div class="widget-header">
              <h3>Current Courses</h3>
              <span>2 Active</span>
            </div>

            <a href="cybersecurity.php" class="card-link">
              <div class="card">
                <div class="card-content">
                  <h3>Cybersecurity</h3>
                  <p>Instructor: Lesyel Romero</p>
                  <div class="progress-bar">
                    <div class="progress-value" style="width: 10%"></div>
                  </div>
                  <p>10% Complete</p>
                </div>
              </div>
            </a>

            <a href="statistics.php" class="card-link">
              <div class="card">
                <div class="card-content">
                  <h3>Statistics</h3>
                  <p>Instructor: Emilio Banzon</p>
                  <div class="progress-bar">
                    <div class="progress-value" style="width: 25%"></div>
                  </div>
                  <p>25% Complete</p>
                </div>
              </div>
            </a>
          </div>
        </div>

        <a href="statistics.php" class="card-link">
        <div class="widget">
          <div class="widget-header">
            <h3>Upcoming Deadlines</h3>
          </div>
          
          <div class="card">
            <div class="card-content">
              <h3>Activity: Business Statistics</h3>
              <p>Course: Statistics</p>
              <p>Due: November 15, 2025</p>
            </div>
          </div>
        </a>

          <a href="cybersecurity.php" class="card-link">
          <div class="card">
            <div class="card-content">
              <h3>Activity: Research a recent cybersecurity attack</h3>
              <p>Course: Cybersecurity</p>
              <p>Due: November 13, 2025</p>
            </div>
          </div>
        </div>
      </a>
       
        <div class="widget">
          <div class="widget-header">
            <h3>Recent Activity</h3>
          </div>
           <a href="cybersecurity.php" class="card-link">
          <div class="card">
            <div class="card-content">
              <h3>Completed Week 1: Cybersecurity</h3>
              <p>Cybersecurity - November 07</p>
            </div>
          </div>
        </a>
          <a href="statistics.php" class="card-link">
          <div class="card">
            <div class="card-content">
              <h3>Completed Quiz 1: Introduction to Statistics</h3>
              <p>Statistics - November 06</p>
            </div>
          </div>
        </a>
        </div>
      </div>
    </div>
  </section>
  <style>

  a.card-link,
  a.card-link:link,
  a.card-link:visited,
  a.card-link:hover,
  a.card-link:active {
    text-decoration: none !important;
    color: inherit !important;
    outline: none !important;
    border: none !important;
    display: block;
}

  a.card-link:hover .card {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    cursor: pointer;
  }
</style>

<?php include 'footer.php'; ?>
</body>
</html>

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
                    <div class="progress-value" style="width: 55%"></div>
                  </div>
                  <p>55% Complete</p>
                </div>
              </div>
            </a>

            <a href="statistics.php" class="card-link">
              <div class="card">
                <div class="card-content">
                  <h3>Statistics</h3>
                  <p>Instructor: Emilio Banzon</p>
                  <div class="progress-bar">
                    <div class="progress-value" style="width: 40%"></div>
                  </div>
                  <p>40% Complete</p>
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
              <h3>Assignment: Business Statistics</h3>
              <p>Course: Statistics</p>
              <p>Due: November 10, 2025</p>
            </div>
          </div>
        </a>

          <a href="cybersecurity.php" class="card-link">
          <div class="card">
            <div class="card-content">
              <h3>Quiz: Python Basics</h3>
              <p>Course: Cybersecurity</p>
              <p>Due: November 07, 2025</p>
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
              <h3>Completed Module 5: Network Security</h3>
              <p>Cybersecurity - October 20</p>
            </div>
          </div>
        </a>
          <a href="statistics.php" class="card-link">
          <div class="card">
            <div class="card-content">
              <h3>Submitted Assignment: Data Visualization</h3>
              <p>Statistics - October 22</p>
            </div>
          </div>
        </a>
        </div>
      </div>
    </div>
  </section>
  <style>
/* remove underline and link styling for clickable cards */
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

/* hover effect (no underline, just lift) */
  a.card-link:hover .card {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    cursor: pointer;
  }
</style>

<?php include 'footer.php'; ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psychology - Leverage Money Smartly</title>

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f7fb;
      margin: 0;
      padding: 0;
      color: #222;
    }

    /* header */
    .navbar {
      background-color: #4b4f54;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      gap: 2rem;
    }

    .back-btn {
      text-decoration: none !important;
      color: #fff;
      font-weight: 600;
    }

    .back-btn:hover {
      text-decoration: underline;
    }

    /* main container */
    .course-container {
      max-width: 1100px;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    .course-info {
      margin-bottom: 2rem;
      text-align: center;
    }

    .course-info h1 {
      margin: 0;
      font-size: 42px;
      color: #696969;
      margin-bottom: 0.5rem;
    }

    .course-content {
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

    /* sidebar */
    .sidebar {
      flex: 1 1 250px;
      background-color: #d3d3d3;
      border-radius: 12px;
      padding: 1rem;
      box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    }

    .sidebar h3 {
      margin-top: 0;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar li {
      padding: 0.7rem;
      border-radius: 8px;
      margin-bottom: 0.3rem;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .sidebar li:hover {
      background-color: #f1f1f1;
    }

    .sidebar li.active {
      background-color: #2F4F4F;
      color: white;
      transition: background-color 0.1s;
    }

    .quiz-link {
      padding-left: 1.5rem;
      font-size: 0.9rem;
      color: #333;
    }

    .quiz-link:hover {
      text-decoration: none;
      color: #004d40;
    }

    /* lesson view */
    .lesson-view {
      flex: 3 1 600px;
      background-color: #d3d3d3;
      border-radius: 12px;
      padding: 1.5rem;
      box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    }

    .lesson-video {
      margin: 1.5rem 0;
    }

    .btn {
      border: none;
      padding: 0.6rem 1.2rem;
      border-radius: 25px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none !important;
    }

    .btn.primary {
      background-color: #004d40;
      color: white;
    }

    .btn.primary:hover {
      background-color: #00796b;
    }

    .btn.secondary {
      background-color: #bbb;
      color: #222;
    }

    .btn.secondary:hover {
      background-color: #004d40;
      color: white;
    }

    /* quiz */
    .quiz-section {
      margin-top: 1rem;
    }

    .quiz-question {
      margin-bottom: 1.2rem;
      background: #f8f8f8;
      padding: 1rem;
      border-radius: 8px;
    }

    .quiz-question p {
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .quiz-question label {
      display: block;
      margin-bottom: 0.3rem;
      cursor: pointer;
    }

    /* quiz summary */
    .quiz-summary {
      background: #ffffff;
      border-radius: 10px;
      padding: 1.5rem;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      margin-top: 1.5rem;
    }

    .quiz-summary h3 {
      color: #004d40;
      margin-bottom: 1rem;
    }

    .summary-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 1.5rem;
    }

    .summary-table td, .summary-table th {
      padding: 8px 12px;
      border-bottom: 1px solid #ddd;
    }

    .question-summary {
      background: #f0f8ff;
      border-radius: 8px;
      padding: 1rem;
      margin-bottom: 1rem;
    }

    .correct { color: green; font-weight: bold; }
    .incorrect { color: red; font-weight: bold; }
  </style>
</head>

<body>
  <header class="navbar">
  </header>

  <main class="course-container">
    <section class="course-info">
      <h1>Psychology</h1>
      <p>Explore human behavior, thoughts, and emotions to understand individuals and relationships</p>
    </section>

    <section class="course-content">
      <div class="sidebar" id="sidebar">
        <h3>Modules</h3>
        <ul id="moduleList"></ul>
      </div>

      <div class="lesson-view" id="lessonView"></div>
    </section>
  </main>

  <script>
    const modules = [
      {
        title: "Week 1 - Introduction to Psychology",
        desc: `Provides an overview of psychology, its history, and its role in understanding human behavior and mental processes`,
        video: "Psychology-Module-Week-1-Introduction-to-Psychology.pdf",
        pdf: "Psychology-Module-Week-1-Introduction-to-Psychology.pdf",
        quiz: [
          { q: "What is the main goal of cybersecurity?", a: "b", opt: {a: "To design software", b: "To protect systems and data", c: "To slow down the internet"} }
        ]
      },
      {
        title: "Week 2 - Major Psychological Approaches",
        desc: `Explores key psychological perspectives, including behavioral, cognitive, humanistic, and psychodynamic approaches`,
        video: "Psychology-Module-Week-2-Major-Psychological-Approaches.pdf",
        pdf: "Psychology-Module-Week-2-Major-Psychological-Approaches.pdf",
        quiz: [
          { q: "Which of the following is a cyber attack?", a: "a", opt: {a: "Phishing", b: "Gardening", c: "Jogging"} }
        ]
      },
      {
        title: "Week 3 - Sensation and Perception",
        desc: `Examines how humans interpret sensory information to understand and interact with the world around them`,
        video: "Psychology-Module-Week-3-Sensation-and-Perception.pdf",
        pdf: "Psychology-Module-Week-3-Sensation-and-Perception.pdf",
        quiz: [
          { q: "What device filters network traffic?", a: "a", opt: {a: "Firewall", b: "Mouse", c: "Monitor"} }
        ]
      },
      {
        title: "Week 4 - Learning and Conditioning ",
        desc: `Covers the principles of learning, including classical and operant conditioning, and how behavior is shaped over time`,
        video: "Psychology-Module-Week-4-Learning-and-Conditioning.pdf",
        pdf: "Psychology-Module-Week-4-Learning-and-Conditioning.pdf",
        quiz: [
          { q: "Encryption helps to?", a: "b", opt: {a: "Delete files", b: "Secure data", c: "Share data publicly"} }
        ]
      },
      {
        title: "Week 5 - Motivation and Emotion",
        desc: `Investigates the forces that drive human behavior and the role of emotions in decision-making and daily life`,
        video: "Psychology-Module-Week-5-Motivation-and-Emotion.pdf",
        pdf: "Psychology-Module-Week-5-Motivation-and-Emotion.pdf",
        quiz: [
          { q: "Which law punishes cybercrime in the Philippines?", a: "b", opt: {a: "Data Safety Act", b: "Cybercrime Prevention Act", c: "Digital Law"} }
        ]
      }
    ];

    const moduleList = document.getElementById("moduleList");
    const lessonView = document.getElementById("lessonView");
    let startTime;

     modules.forEach((m, i) => {
 
    const moduleItem = document.createElement("li");
    moduleItem.textContent = m.title;
    moduleItem.onclick = () => setActiveItem(i * 2); 
    moduleList.appendChild(moduleItem);

    const quizLink = document.createElement("li");
    quizLink.textContent = `🧠 Quiz ${i + 1}`;
    quizLink.className = "quiz-link";
    quizLink.onclick = () => confirmQuizStart(i); 
    moduleList.appendChild(quizLink);
});

    function setActiveItem(listIndex) {

      document.querySelectorAll('#moduleList li').forEach(li => li.classList.remove('active'));

      document.querySelectorAll('#moduleList li')[listIndex].classList.add('active');

      if (listIndex % 2 === 0) {
        const moduleIndex = listIndex / 2;
        showLesson(moduleIndex);
      } else {
        const moduleIndex = (listIndex - 1) / 2;
        confirmQuizStart(moduleIndex);
      }
    } 

    function showLesson(index) {
      const m = modules[index];
      lessonView.innerHTML = `
        <h3>${m.title}</h3>
        <p>${m.desc}</p>
        <div class="lesson-video">
          <iframe width="100%" height="350" src="${m.video}" frameborder="0"></iframe>
        </div>
        <p><a href="${m.pdf}" target="_blank" class="btn secondary">Download PDF</a></p>
      `;
    }

    function confirmQuizStart(moduleIndex) {
    if (confirm("Do you want to start an attempt for this quiz?")) {
    startTime = new Date();

    document.querySelectorAll('#moduleList li').forEach(li => li.classList.remove('active'));

    document.querySelectorAll('#moduleList li')[moduleIndex * 2 + 1].classList.add('active');

    showQuiz(moduleIndex);
  }
}
    function showQuiz(index) {
      const m = modules[index];
      let quizHTML = `<div class="quiz-section"><h3>${m.title} - Quiz</h3><form id="quizForm">`;

      m.quiz.forEach((item, i) => {
        quizHTML += `
          <div class="quiz-question">
            <p>${item.q}</p>
            ${Object.entries(item.opt)
              .map(([key, val]) => `<label><input type="radio" name="q${i}" value="${key}"> ${val}</label>`)
              .join("")}
          </div>`;
      });

      quizHTML += `<button type="button" class="btn primary" onclick="checkQuiz(${index})">Submit Quiz</button></form></div>`;
      lessonView.innerHTML = quizHTML;
    }

    function checkQuiz(index) {
      const m = modules[index];
      const endTime = new Date();
      const timeTaken = Math.floor((endTime - startTime) / 1000);
      let score = 0;

      m.quiz.forEach((item, i) => {
        const selected = document.querySelector(`input[name="q${i}"]:checked`);
        if (selected && selected.value === item.a) score++;
      });

      let summaryHTML = `
        <div class="quiz-summary">
          <h3>${m.title} - Quiz Summary</h3>
          <table class="summary-table">
            <tr><th>Started on:</th><td>${startTime.toLocaleString()}</td></tr>
            <tr><th>Completed on:</th><td>${endTime.toLocaleString()}</td></tr>
            <tr><th>Time taken:</th><td>${timeTaken} seconds</td></tr>
            <tr><th>Score:</th><td>${score}/${m.quiz.length}</td></tr>
            <tr><th>Grade:</th><td>${(score / m.quiz.length * 100).toFixed(0)}%</td></tr>
          </table>
      `;

      m.quiz.forEach((item, i) => {
        const selected = document.querySelector(`input[name="q${i}"]:checked`);
        const correct = selected && selected.value === item.a;
        const chosen = selected ? item.opt[selected.value] : "No answer";

        summaryHTML += `
          <div class="question-summary">
            <p><strong>Question ${i + 1}:</strong> ${item.q}</p>
            <p>Your Answer: ${chosen}</p>
            <p class="${correct ? 'correct' : 'incorrect'}">${correct ? '✔ Correct' : '✖ Incorrect'}</p>
          </div>`;
      });

      summaryHTML += `</div>`;
      lessonView.innerHTML = summaryHTML;
    }

    showLesson(0);
  </script>
</body>
</html>

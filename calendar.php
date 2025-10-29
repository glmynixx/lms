<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Calendar</title>
<style>
  body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    padding: 0;
    background: #f0f2f5;
  }
  .calendar {
    background: #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    padding: 0;
    height: 380px;
    max-width: 1000px;
    margin: auto;

  }
  .calendar header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }
  .calendar header h2 {
    margin: 0;
    font-size: 1.2em;
  }
  .calendar button {
    background: #2a4055;
    align
    border: none;
    color: #fff;
    padding: 8px 10px;
    border-radius: 5px;
    cursor: pointer;
    margin: 5px;
  }
  .days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
    gap: 5px;
  }
  .day-name {
    font-weight: bold;
    color: #555;
  }
  .date {
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  .date.today {
    background: #2a4055;
    color: #fff;
  }
  .date:hover {
    background: #e0e0e0;
  }
</style>
</head>
<body>

<div class="calendar">
  <header>
    <button id="prevMonth">‹</button>
    <h2 id="monthYear"></h2>
    <button id="nextMonth">›</button>
  </header>
  <div class="days" id="daysContainer">
    <!-- Days will be injected here -->
  </div>
</div>

<script>
  const monthYear = document.getElementById('monthYear');
  const daysContainer = document.getElementById('daysContainer');
  const prevMonthBtn = document.getElementById('prevMonth');
  const nextMonthBtn = document.getElementById('nextMonth');

  let currentDate = new Date();

  const monthNames = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

  function renderCalendar(date) {
    daysContainer.innerHTML = "";

    const year = date.getFullYear();
    const month = date.getMonth();
    
    monthYear.textContent = `${monthNames[month]} ${year}`;

    // Add day names
    dayNames.forEach(day => {
      const dayEl = document.createElement('div');
      dayEl.classList.add('day-name');
      dayEl.textContent = day;
      daysContainer.appendChild(dayEl);
    });

    const firstDay = new Date(year, month, 1).getDay();
    const lastDate = new Date(year, month + 1, 0).getDate();

    // Blank days for offset
    for (let i = 0; i < firstDay; i++) {
      const blank = document.createElement('div');
      daysContainer.appendChild(blank);
    }

    // Render dates
    for (let day = 1; day <= lastDate; day++) {
      const dateEl = document.createElement('div');
      dateEl.classList.add('date');
      if (
        day === new Date().getDate() &&
        month === new Date().getMonth() &&
        year === new Date().getFullYear()
      ) {
        dateEl.classList.add('today');
      }
      dateEl.textContent = day;
      daysContainer.appendChild(dateEl);
    }
  }

  prevMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
  });

  nextMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
  });

  renderCalendar(currentDate);
</script>

</body>
</html>

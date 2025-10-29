<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Support - Leverage Money Smartly</title>
</head>

<body>
  <header>Help Desk - Contact Support</header>

  <div class="container">
    <h1>Contact Support</h1>
    <p style="text-align:center; color:#666;">Reach out to our support team for assistance.</p>

    <form>
      <label for="email">Email Address</label>
      <input type="email" id="email" placeholder="Enter your email" required>

      <label for="subject">Subject</label>
      <input type="text" id="subject" placeholder="Enter subject" required>

      <label for="message">Message</label>
      <textarea id="message" placeholder="Write your message here..." required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>
  <style>
  body {
    font-family: "Segoe UI", Arial, sans-serif;
    background: #f5f7fa;
    margin: 0;
    padding: 0;
  }
  header {
    background: #555;
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 1.3em;
    font-weight: bold;
  }
  .container {
    max-width: 600px;
    margin: 50px auto;
    background: #fff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }
  h1 {
    text-align: center;
    color: #333;
  }
  form {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }
  label {
    font-weight: 600;
    color: #444;
  }
  input, textarea {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 1em;
  }
  textarea {
    resize: none;
    height: 120px;
  }
  button {
    background: #204e37;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1em;
  }
  button:hover {
    background: #176c3a;
  }
</style>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leaderboard.css">
    <title>leaderboard</title>
</head>
<body>
    <div class="container-header">
        <h1>Leaderboard</h1>
    </div>
    <div class="container-content">
    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            <?php

            // sample data for demonstration
            $leaderboard = [
                ['name' => 'Chen', 'score' => 8700],
                ['name' => 'Kei', 'score' => 8645],
                ['name' => 'Mc', 'score' => 8410],
                ['name' => 'Ashianna', 'score' => 8400],
                ['name' => 'Kelaiah', 'score' => 8150],
                ['name' => 'Dylan', 'score' => 8030],

            ];

            // sort leaderboard by score in descending order
            usort($leaderboard, function($a, $b) {
                return $b['score'] - $a['score'];
            });

            // display leaderboard
            foreach ($leaderboard as $index => $entry) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td>" . htmlspecialchars($entry['name']) . "</td>";
                echo "<td>" . htmlspecialchars($entry['score']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        </div>
    </table>
        
            <div class="back-btn-container">
            <a href="home.php" class="back-btn">← Back to Home</a>
    
    <style> 

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        }

        /* page background */
        body {
        background: linear-gradient(135deg, #0d1117, #1e2631);
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        padding: 40px 20px;
        }

        /* header section */
        .container-header {
        text-align: center;
        margin-bottom: 30px;
        }

        .container-header h1 {
        font-size: 2.5rem;
        font-weight: 600;
        letter-spacing: 1px;
        background: linear-gradient(90deg, #696969);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }

        /* main content container */
        .container-content {
        width: 100%;
        max-width: 700px;
        background-color: #161b22;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        overflow: hidden;
        padding: 20px;
        }

        /* table style */
        table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
        }

        thead {
        background-color: #21262d;
        }

        thead th {
        padding: 15px;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 1px;
        color: #a8b3cf;
        border-bottom: 2px solid #30363d;
        }

        /* table body */
        tbody tr {
        background-color: #1c2128;
        transition: background 0.3s ease;
        }

        tbody tr:nth-child(odd) {
        background-color: #161b22;
        }

        tbody tr:hover {
        background-color: #2d333b;
        }

        td {
        padding: 15px;
        font-size: 1rem;
        color: #e6edf3;
        border-bottom: 1px solid #30363d;
        }

        /* rank column styling */
        td:first-child {
        font-weight: 700;
        color: #00c6ff;
        }

        /* responsive design */
        @media (max-width: 600px) {
        .container-content {
            padding: 10px;
        }

        table {
            font-size: 0.9rem;
        }

        thead th, td {
            padding: 10px;
        }
        }

        /* back to home button */
        .back-btn-container {
        text-align: center;
        margin-top: 25px;
        }

        .back-btn {
        display: inline-block;
        padding: 10px 25px;
        background: linear-gradient(90deg, #696969);
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 114, 255, 0.4);
        }

        .back-btn:hover {
        background: linear-gradient(90deg, #e4026f);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 114, 255, 0.5);
        }

</style>


</body>
</html>
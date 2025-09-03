<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Top 10 Boxers</title>
  <style>
    body {
      background-color: #121212;
      color: #f5f5f5;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #fff;
    }

    .boxer-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 900px;
      margin: auto;
    }

    .boxer-card {
      display: flex;
      align-items: center;
      background-color: #1e1e1e;
      border-radius: 16px;
      padding: 20px;
      gap: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.5);
      transition: transform 0.2s;
    }

    .boxer-card:hover {
      transform: scale(1.02);
    }

    .boxer-card img {
      width: 140px;
      height: 140px;
      object-fit: cover;
      border-radius: 12px;
      flex-shrink: 0;
    }

    .boxer-info {
      flex: 1;
    }

    .boxer-info h2 {
      margin: 0 0 10px;
      font-size: 1.8rem;
      color: #FF902B;
    }

    .boxer-info p {
      margin: 0;
      font-size: 1rem;
      color: #cccccc;
    }

    h1 span {
      color: #FF902B;
    }
  </style>
</head>
<body>
  <h1><span>F&MD Lab</span> Top 10 List</h1>
  <div class="boxer-list">
    <div class="boxer-card">
      <img src="/imgs/ali.png" alt="Muhammad Ali">
      <div class="boxer-info">
        <h2>1. Muhammad Ali</h2>
        <p>"The Greatest" – 3x Heavyweight Champion, cultural icon.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/tyson.jpg" alt="Mike Tyson">
      <div class="boxer-info">
        <h2>2. Mike Tyson</h2>
        <p>Youngest heavyweight champion, known for power and speed.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/mayweather.jpg" alt="Floyd Mayweather Jr.">
      <div class="boxer-info">
        <h2>3. Floyd Mayweather Jr.</h2>
        <p>Undefeated, 50-0 record, defensive genius.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/pacquiao.jpeg" alt="Manny Pacquiao">
      <div class="boxer-info">
        <h2>4. Manny Pacquiao</h2>
        <p>Only boxer with world titles in 8 divisions.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/louis.jpg" alt="Joe Louis">
      <div class="boxer-info">
        <h2>5. Joe Louis</h2>
        <p>"The Brown Bomber" – 25 consecutive title defenses.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/ray.jpg" alt="Sugar Ray Robinson">
      <div class="boxer-info">
        <h2>6. Sugar Ray Robinson</h2>
        <p>Often regarded as the greatest pound-for-pound boxer ever.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/foreman.jpg" alt="George Foreman">
      <div class="boxer-info">
        <h2>7. George Foreman</h2>
        <p>Two-time heavyweight champion, oldest to win at 45.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/marciano.jpeg" alt="Rocky Marciano">
      <div class="boxer-info">
        <h2>8. Rocky Marciano</h2>
        <p>Retired undefeated, 49-0 with 43 knockouts.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/holyfield.jpg" alt="Evander Holyfield">
      <div class="boxer-info">
        <h2>9. Evander Holyfield</h2>
        <p>Undisputed cruiserweight and heavyweight champion.</p>
      </div>
    </div>

    <div class="boxer-card">
      <img src="/imgs/lewis.jpg" alt="Lennox Lewis">
      <div class="boxer-info">
        <h2>10. Lennox Lewis</h2>
        <p>Three-time world heavyweight champion, Olympic gold medalist.</p>
      </div>
    </div>
  </div>
</body>
</html>

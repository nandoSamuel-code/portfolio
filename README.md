<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nahuel Fernandez - Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f7fb;
      color: #333;
      line-height: 1.6;
    }
    header {
      background: linear-gradient(90deg, #00C9A7, #4C67ED);
      color: white;
      padding: 3rem 1rem;
      text-align: center;
    }
    header h1 {
      font-size: 2.5rem;
    }
    header p {
      margin-top: 10px;
      font-size: 1.2rem;
      opacity: 0.9;
    }
    .container {
      max-width: 1200px;
      margin: 3rem auto;
      padding: 0 1rem;
    }
    h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 2rem;
      color: #222;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }
    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
      padding: 2rem;
      text-align: center;
      transition: transform 0.2s ease-in-out;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card h3 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #4C67ED;
    }
    .card p {
      font-size: 1rem;
      margin-bottom: 1.5rem;
      color: #555;
    }
    .card a {
      display: inline-block;
      padding: 10px 20px;
      background: #00C9A7;
      color: white;
      font-weight: 600;
      text-decoration: none;
      border-radius: 6px;
      transition: background 0.3s;
    }
    .card a:hover {
      background: #4C67ED;
    }
    footer {
      text-align: center;
      padding: 2rem;
      background: #222;
      color: white;
      margin-top: 3rem;
    }
  </style>
</head>
<body>

  <header>
    <h1>👋 Hi, I'm Nahuel Fernandez</h1>
    <p>Web Developer | Shopify & WordPress Specialist</p>
  </header>

  <div class="container">
    <h2>📂 Featured Projects</h2>
    <div class="grid">
      <div class="card">
        <h3>🛒 TREADS Store</h3>
        <p>Modern eCommerce store built with clean design and functionality.</p>
        <a href="./index.html" target="_blank">View Project</a>
      </div>
      <div class="card">
        <h3>🌐 Globand Consulting</h3>
        <p>Professional corporate website for an accounting & consulting firm.</p>
        <a href="./GLOBAND/index.html" target="_blank">View Project</a>
      </div>
      <div class="card">
        <h3>💼 Melvox</h3>
        <p>Business website designed with focus on usability and clarity.</p>
        <a href="./MELVOXNPM/index.html" target="_blank">View Project</a>
      </div>
    </div>
  </div>

  <footer>
    <p>⭐️ Designed & Built by Nahuel Fernandez</p>
  </footer>

</body>
</html>


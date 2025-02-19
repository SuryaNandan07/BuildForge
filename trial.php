
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Construction Hero Section</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #111827;
      color: #f9fafb;
    }

    header {
      background-color: #1f2937;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-sizing: border-box;
    }

    body::before {
      content: "";
      display: block;
      height: 100px; /* Adjust to match header height */
    }

    .logo {
      color: #fbbf24;
      font-size: 24px;
      font-weight: bold;
      text-decoration: none;
    }

    nav a {
      color: #e5e7eb;
      text-decoration: none;
      margin: 0 15px;
      font-size: 16px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #fbbf24;
    }

    .cta-button {
      background-color: #fbbf24;
      color: #111827;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .cta-button:hover {
      background-color: #f59e0b;
    }

    .hero1 {
      position: relative;
      text-align: center;
    }

    .hero1 img {
      width: 100%;
      height: auto;
      display: block;
    }

    .text-container {
      position: absolute;
      top: 50%;
      left: 50%;
      
      transform: translate(-50%, -50%);
      color: #e5e7eb;
      text-align: center;
    }

    .text-container h1 {
      color: #f0b727;
      font-size: 48px;
      margin-bottom: 20px;
    }

    .text-container p {
      font-size: 20px;
      margin-bottom: 20px;
      font-style: bold;
      filter: invert(100%);
    filter: invert(100%);
    }
  </style>
</head>
<body>
  <header>
    <a href="index.html" class="logo">BuildForge</a>
    <nav>
      <a href="#home">Home</a>
      <a href="#services">Services</a>
      <a href="#projects">Projects</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
    <a href="#quote" class="cta-button">Sign-in</a>
  </header>

  <section class="hero1">
    <img src="dark-industrial-interiors-10-1024x569.jpg" alt="Construction" />
    <div class="text-container">
      <h1>Building Your Vision with Precision</h1>
      <p style="color: #111827;">Reliable construction services for residential, commercial, and industrial projects.</p>
      <a href="#services" class="cta-button">Explore Our Services</a>
    </div>
  </section>

  <section class="hero2">
    <!-- <img src="Screenshot 2024-06-04 194639.png" alt=""> -->
  </section>

</body>
</html>

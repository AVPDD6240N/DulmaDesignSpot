<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dulma Design Spot | Blog</title>

<style>
:root {
  /* 🌑 Backgrounds */
  --bg-main: #1A1A1D;
  --bg-secondary: #3B1C32;
  --bg-elevated: #6A1E55;

  /* 🌸 Brand Colors */
  --accent: #EC7FA9;
  --secondary: #FFB8E0;
  --highlight: #BE5985;

  /* Cards */
  --card-bg: rgba(74,31,76,0.6);

  /* Text */
  --text-main: #FFFFFF;
  --text-muted: #D3BFD4;

  /* Shadows */
  --shadow-soft: rgba(0,0,0,0.25);
  --shadow-hover: rgba(190,89,133,0.35);
  --shadow-strong: rgba(0,0,0,0.5);
}

/* GLOBAL */
* {
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

body {
  background: var(--bg-main);
  color: var(--text-main);
  line-height:1.6;
  padding-top:80px; /* FIX NAVBAR OVERLAP */
}

/* ===== NAVBAR (MATCHED) ===== */
header.navbar {
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:1rem 2rem;
  background: linear-gradient(135deg, var(--bg-elevated), var(--bg-secondary));
  position:fixed;
  width:100%;
  top:0;
  z-index:1000;
  box-shadow: 0 5px 15px var(--shadow-strong);
  border-bottom: 2px solid var(--highlight);
  backdrop-filter: blur(10px);
}

header.navbar .logo span {
  font-weight:bold;
  font-size:1.5rem;
  color: var(--text-main);
}

header.navbar nav a {
  color: var(--text-main);
  text-decoration:none;
  margin-left:1.2rem;
  font-weight:bold;
  position:relative;
}

header.navbar nav a::after {
  content:"";
  position:absolute;
  width:0%;
  height:2px;
  background: var(--highlight);
  left:0;
  bottom:-4px;
  transition:0.3s;
}

header.navbar nav a:hover::after {
  width:100%;
}

/* ===== HERO ===== */
.blog-hero {
  background: linear-gradient(135deg, var(--bg-main), var(--bg-secondary));
  text-align:center;
  padding:6rem 2rem;
}

.blog-hero h1 {
  font-size:3rem;
  margin-bottom:1rem;
  background: linear-gradient(135deg,var(--accent),var(--secondary));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}

.blog-hero p {
  font-size:1.2rem;
  margin-bottom:2rem;
  color: var(--text-muted);
}

/* ===== BLOG GRID ===== */
.blog-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
  gap:2rem;
  padding:4rem 2rem;
}

/* ===== BLOG CARD ===== */
.blog-card {
  background: var(--card-bg);
  border-radius:20px;
  overflow:hidden;
  backdrop-filter: blur(10px);
  box-shadow:0 10px 25px var(--shadow-soft);
  transition: transform 0.3s, box-shadow 0.3s;
  cursor:pointer;
}

.blog-card img {
  width:100%;
  display:block;
}

.blog-card-content {
  padding:1.5rem;
}

.blog-card-content h3 {
  font-size:1.5rem;
  margin-bottom:0.5rem;
}

.blog-card-content p {
  color: var(--text-muted);
  margin-bottom:1rem;
}

.blog-card-content a {
  text-decoration:none;
  color: var(--accent);
  font-weight:bold;
  transition:0.3s;
}

.blog-card-content a:hover {
  color: var(--secondary);
}

/* HOVER EFFECT */
.blog-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow:0 15px 35px var(--shadow-hover);
}

/* ===== FOOTER ===== */
footer {
  text-align:center;
  padding:2rem;
  background: var(--bg-secondary);
  color: var(--text-main);
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px) {
  .blog-hero h1 { font-size:2.5rem; }
}
</style>
</head>

<body>

<!-- Navbar -->
<header class="navbar">
  <div class="logo"><span>Dulma Design Spot</span></div>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="portfolio.php">Portfolio</a>
    <a href="blog.php">Blog</a>
    <a href="contact.php">Contact</a>
  </nav>
</header>

<!-- Hero Section -->
<section class="blog-hero">
  <h1>My Blog</h1>
  <p>Read my latest thoughts, design tips, and creative insights.</p>
</section>

<!-- Blog Grid -->
<section class="blog-grid">
  <div class="blog-card">
    <img src="images/blog1.jpg" alt="Blog 1">
    <div class="blog-card-content">
      <h3>Designing Modern Logos</h3>
      <p>Learn how to create impactful and memorable logos for brands.</p>
      <a href="#">Read More →</a>
    </div>
  </div>

  <div class="blog-card">
    <img src="images/blog2.jpg" alt="Blog 2">
    <div class="blog-card-content">
      <h3>Social Media Graphics Tips</h3>
      <p>Boost engagement with effective and attractive social media visuals.</p>
      <a href="#">Read More →</a>
    </div>
  </div>

  <div class="blog-card">
    <img src="images/blog3.jpg" alt="Blog 3">
    <div class="blog-card-content">
      <h3>Branding Essentials</h3>
      <p>Understand the key elements that make a brand visually consistent.</p>
      <a href="#">Read More →</a>
    </div>
  </div>

  <div class="blog-card">
    <img src="images/blog4.jpg" alt="Blog 4">
    <div class="blog-card-content">
      <h3>Creating Stunning Flyers</h3>
      <p>Step-by-step tips for designing flyers that get noticed.</p>
      <a href="#">Read More →</a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  &copy; 2026 Dulma Design Spot
</footer>

</body>
</html>
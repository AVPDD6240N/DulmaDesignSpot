<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services | Dulma Design Spot</title>

<style>
:root{
  /* 🌑 Base Backgrounds */
  --bg-main: #1A1A1D;
  --bg-services: rgba(59,28,50,0.85);
  --bg-process: rgba(75,31,76,0.85);
  --bg-cta: #6A1E55;
  --bg-elevated: rgba(106,30,85,0.85);

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
  --shadow-strong: rgba(0,0,0,0.5);
  --shadow-hover: rgba(190,89,133,0.35);
}

/* ===== GLOBAL ===== */
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

/* ==================== NAVBAR ==================== */
.navbar {
  position: fixed;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background: linear-gradient(135deg, var(--bg-elevated), var(--bg-secondary));
  color: var(--text-main);
  box-shadow: 0 5px 15px var(--shadow-strong);
  z-index: 1000;
  backdrop-filter: blur(12px);
  border-bottom: 2px solid var(--highlight);
}

.logo { display: flex; align-items: center; gap:0.5rem; }
.logo video.logo-video { width:50px; height:50px; border-radius:50%; object-fit:cover; animation: logo-pulse 2s infinite alternate; }
.logo span { font-weight:bold; font-size:1.5rem; letter-spacing:1px; color: var(--text-main); }

@keyframes logo-pulse {
  0% { transform: scale(1) rotate(0deg); }
  50% { transform: scale(1.1) rotate(3deg); }
  100% { transform: scale(1) rotate(0deg); }
}

.nav-links { display:flex; gap:1.5rem; }
.nav-links a { color: var(--text-main); text-decoration:none; font-weight:bold; position:relative; transition:0.3s; }
.nav-links a::after { content:""; position:absolute; width:0%; height:2px; background: var(--highlight); left:0; bottom:-4px; transition:0.3s; }
.nav-links a:hover::after { width:100%; }

.hamburger { display:none; flex-direction:column; gap:5px; cursor:pointer; }
.hamburger span { display:block; width:25px; height:3px; background: var(--text-main); border-radius:2px; transition:0.3s; }

body{
  background: var(--bg-main);
  color: var(--text-main);
  overflow-x:hidden;
}

/* ===== HERO ===== */
.services-hero{
  text-align:center;
  padding:140px 10px 90px;
  background: linear-gradient(135deg, rgba(26,26,29,0.9), rgba(59,28,50,0.9));
}

.services-hero h1{
  font-size:56px;
  font-weight:800;
  color: var(--accent);
  margin-bottom:20px;
  letter-spacing:1.2px;
}

.services-hero p{
  max-width:700px;
  margin:auto;
  color: var(--text-muted);
  font-weight:500;
  font-size:18px;
  line-height:1.9;
}

/* ===== SERVICES GRID ===== */
.services-grid{
  padding:100px 8%;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
  gap:45px;
  justify-items:center;
}

/* ===== SERVICE CARD ===== */
.service-card{
  background: var(--card-bg);
  backdrop-filter: blur(12px);
  padding:40px 30px;
  border-radius:25px;
  transition:transform 0.5s ease, box-shadow 0.5s ease;
  position:relative;
  overflow:hidden;
  box-shadow:0 15px 30px var(--shadow-soft);
  cursor:pointer;
  transform-style: preserve-3d;
  text-align:center;
}

.service-card:hover{
  transform: scale(1.07) rotateX(5deg) rotateY(5deg);
  box-shadow:0 30px 60px var(--shadow-hover);
}

.service-icon{
  font-size:50px;
  margin-bottom:18px;
  background: linear-gradient(135deg, var(--accent), var(--secondary));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: transform 0.5s ease;
}

.service-card:hover .service-icon{
  transform: scale(1.2) rotate(8deg);
}

.service-card h3{
  margin-bottom:14px;
  font-size:22px;
  font-weight:700;
  background: linear-gradient(135deg, var(--accent), var(--secondary));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.service-card p{
  font-size:16px;
  color: var(--text-main);
  line-height:1.8;
}

/* ===== DESIGN PROCESS ===== */
.process{
  padding:100px 10%;
  text-align:center;
  background: var(--bg-process);
  border-radius:25px;
  box-shadow:0 15px 35px var(--shadow-soft);
  margin-top:60px;
}

.process h2{
  font-size:40px;
  font-weight:800;
  margin-bottom:50px;
  background: linear-gradient(135deg, var(--accent), var(--secondary));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.process-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:40px;
  justify-items:center;
}

.process-card{
  padding:35px;
  border-radius:20px;
  background: var(--card-bg);
  backdrop-filter: blur(12px);
  transition: transform 0.5s ease, box-shadow 0.5s ease;
  box-shadow:0 15px 30px var(--shadow-soft);
  transform-style: preserve-3d;
  max-width:280px;
  text-align:center;
}

.process-card:hover{
  transform: rotateX(4deg) rotateY(-4deg) scale(1.05);
  box-shadow:0 25px 50px var(--shadow-hover);
}

.process-number{
  font-size:36px;
  color: var(--accent);
  font-weight:800;
  margin-bottom:15px;
}

.process-card h4{
  color: var(--highlight);
  font-size:20px;
  margin-bottom:12px;
  font-weight:700;
}

.process-card p{
  color: var(--text-main);
  font-weight:500;
  font-size:16px;
  line-height:1.8;
}

/* ===== CTA ===== */
.cta{
  padding:100px 10%;
  text-align:center;
  background: var(--bg-cta);
  border-radius:25px;
  box-shadow:0 15px 40px var(--shadow-soft);
  margin-top:70px;
  margin-bottom: 40px;
}

.cta h2{
  font-size:36px;
  font-weight:800;
  margin-bottom:30px;
  color: #FFFFFF;
}

.cta-btn{
  padding:18px 48px;
  border-radius:40px;
  border:none;
  background: linear-gradient(135deg, var(--accent), var(--secondary));
  color:white;
  font-weight:700;
  font-size:18px;
  cursor:pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow:0 12px 35px var(--shadow-soft);
}

.cta-btn:hover{
  transform:scale(1.1);
  box-shadow:0 25px 60px var(--shadow-hover);
}

/* ==================== FOOTER ==================== */
footer { text-align:center; padding:2rem; background: linear-gradient(135deg, var(--accent), var(--highlight)); color: var(--text-primary); font-weight:bold; box-shadow:0 -5px 15px var(--shadow-soft); border-top-left-radius:30px; border-top-right-radius:30px; }


/* ===== RESPONSIVE ===== */
@media(max-width:768px){
  .services-hero h1{ font-size:40px; }
  .services-hero p{ font-size:17px; }
  .process-grid{ grid-template-columns:1fr; }
  .services-grid{ grid-template-columns:1fr; padding:60px 5%; gap:30px; }
}
</style>
</head>

<header class="navbar">
  <div class="logo">
    <video autoplay loop muted playsinline class="logo-video">
      <source src="images/logo-animation.mp4" type="video/mp4">
      <img src="images/logo1.jpg" alt="Dulma Design Spot Logo">
    </video>
    <span>Dulma Design Spot</span>
  </div>

  <nav class="nav-links">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="portfolio.php">Portfolio</a>
    <a href="blog.php">Blog</a>
    <a href="contact.php">Contact</a>
  </nav>

  <div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>

<body>

<section class="services-hero">
<h1>Creative Design Services</h1>
<p>Professional design services crafted to help brands stand out visually and communicate effectively.</p>
</section>

<section class="services-grid">
<div class="service-card">
<div class="service-icon">🎨</div>
<h3>Poster Design</h3>
<p>Modern and creative posters for events, promotions, and campaigns.</p>
</div>

<div class="service-card">
<div class="service-icon">📱</div>
<h3>Social Media Design</h3>
<p>Instagram posts, reels covers, and digital graphics for social media branding.</p>
</div>

<div class="service-card">
<div class="service-icon">📢</div>
<h3>Banner Design</h3>
<p>Professional web banners and advertising visuals.</p>
</div>

<div class="service-card">
<div class="service-icon">📄</div>
<h3>Flyer Design</h3>
<p>Promotional flyers for marketing campaigns and business promotions.</p>
</div>

<div class="service-card">
<div class="service-icon">💼</div>
<h3>Business Card Design</h3>
<p>Elegant and professional card designs to represent your brand.</p>
</div>

<div class="service-card">
<div class="service-icon">📊</div>
<h3>Presentation Design</h3>
<p>Creative PowerPoint and pitch deck designs for impactful presentations.</p>
</div>

<div class="service-card">
<div class="service-icon">🏷</div>
<h3>Brand Identity</h3>
<p>Complete branding packages including logos, colors, and identity systems.</p>
</div>

<div class="service-card">
<div class="service-icon">📈</div>
<h3>Marketing Design</h3>
<p>Visual assets for marketing campaigns, ads, and promotions.</p>
</div>
</section>

<section class="process">
<h2>My Design Process</h2>
<div class="process-grid">
<div class="process-card">
<div class="process-number">01</div>
<h4>Understanding</h4>
<p>Learn about your brand, audience, and goals.</p>
</div>

<div class="process-card">
<div class="process-number">02</div>
<h4>Concept Creation</h4>
<p>Develop creative design ideas and visual directions.</p>
</div>

<div class="process-card">
<div class="process-number">03</div>
<h4>Design Execution</h4>
<p>Create high-quality visuals using professional tools.</p>
</div>

<div class="process-card">
<div class="process-number">04</div>
<h4>Delivery</h4>
<p>Provide optimized files for digital or print use.</p>
</div>
</div>
</section>

<section class="cta">
<h2>Let's Work Together</h2>
<button class="cta-btn" onclick="location.href='contact.php'">Start a Project</button>
</section>

<footer>
  &copy; 2026 Dulma Design Spot
</footer>

</body>
</html>


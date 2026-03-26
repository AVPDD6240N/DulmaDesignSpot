<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About | Dulma Design Spot</title>

<style>
/* ================= ROOT COLORS ================= */
:root{
  --bg-primary:#1A1A1D;       /* main background */
  --bg-secondary:#3B1C32;     /* secondary sections */
  --bg-elevated:#6A1E55;      /* cards & skill sections */

  --primary:#FFEDFA;          /* headings / important text */
  --secondary:#FFB8E0;        /* secondary highlights / buttons */
  --accent:#EC7FA9;           /* accents for hover / bars */
  --highlight:#BE5985;        /* emphasized text / links */

  --info:#0F2854;             /* footer background */
  --text-primary:#FFEDFA;     /* main text */
  --text-secondary:#FFB8E0;   /* secondary text */
  --text-muted:#FFB8E0;       /* muted text for descriptions */

  --shadow-soft:rgba(182,89,133,0.15);
  --shadow-strong:rgba(182,89,133,0.35);
}

/* ================= GLOBAL ================= */
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins',sans-serif;
}

body{
  background: var(--bg-primary);
  color: var(--text-primary);
  overflow-x:hidden;
}

/* ================= FLOATING BLOBS ================= */
body::before,
body::after{
  content:"";
  position:fixed;
  width:400px;
  height:400px;
  border-radius:50%;
  filter:blur(100px);
  z-index:-1;
  opacity:0.15;
}

body::before{
  background: var(--accent);
  top:-120px;
  left:-120px;
}

body::after{
  background: var(--highlight);
  bottom:-120px;
  right:-120px;
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
  color: var(--text-primary);
  box-shadow: 0 5px 15px var(--shadow-strong);
  z-index: 1000;
  backdrop-filter: blur(10px);
  border-bottom: 2px solid var(--highlight);
}

.logo { display: flex; align-items: center; gap:0.5rem; }
.logo video.logo-video { width:50px; height:50px; border-radius:50%; object-fit:cover; animation: logo-pulse 2s infinite alternate; }
.logo span { font-weight:bold; font-size:1.5rem; letter-spacing:1px; color: var(--text-primary); }

@keyframes logo-pulse {
  0% { transform: scale(1) rotate(0deg); }
  50% { transform: scale(1.1) rotate(3deg); }
  100% { transform: scale(1) rotate(0deg); }
}

.nav-links { display:flex; gap:1.5rem; }
.nav-links a { color: var(--text-primary); text-decoration:none; font-weight:bold; position:relative; transition:0.3s; }
.nav-links a::after { content:""; position:absolute; width:0%; height:2px; background: var(--highlight); left:0; bottom:-4px; transition:0.3s; }
.nav-links a:hover::after { width:100%; }

.hamburger { display:none; flex-direction:column; gap:5px; cursor:pointer; }
.hamburger span { display:block; width:25px; height:3px; background: var(--text-primary); border-radius:2px; transition:0.3s; }


/* ================= ABOUT SECTION ================= */
#about{
  padding:110px 10%;
  display:flex;
  gap:70px;
  align-items:center;
  flex-wrap:wrap;
  background: var(--bg-primary);
}

.about-img{
  flex:1;
  display:flex;
  justify-content:center;
  perspective:1000px;
}

.about-img img{
  width:320px;
  border-radius:20px;
  transition:0.5s;
  box-shadow:0 25px 50px var(--shadow-strong);
}

.about-img img:hover{
  transform:rotateY(12deg) scale(1.05);
}

.about-text{
  flex:1;
}

.about-text h1{
  font-size:44px;
  margin-bottom:20px;
  color: var(--primary);
}

.about-text p{
  color: var(--text-secondary);
  margin-bottom:15px;
  line-height:1.8;
  font-weight:500;
}

/* ================= SKILLS ================= */
.skills{
  padding:70px 10%;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:30px;
  background: var(--bg-secondary);
}

.skill-card{
  padding:35px;
  border-radius:20px;
  background: var(--bg-elevated);
  transition:0.4s;
  box-shadow:0 20px 40px var(--shadow-soft);
}

.skill-card:hover{
  transform:translateY(-10px);
  box-shadow:0 30px 60px var(--shadow-strong);
}

.skill-card h3{
  color: var(--primary);
  margin-bottom:10px;
  font-size:18px;
}

.skill-card p{
  color: var(--text-secondary);
  font-size:14px;
}

/* ================= SKILL BARS ================= */
.skill-bars{
  padding:80px 10%;
  background: var(--bg-primary);
}

.bar{
  margin-bottom:25px;
}

.bar span{
  display:block;
  margin-bottom:6px;
  color: var(--primary);
  font-weight:600;
}

.progress{
  height:12px;
  background: var(--bg-secondary);
  border-radius:10px;
  overflow:hidden;
}

.progress div{
  height:100%;
  background: var(--accent);
}

/* ================= VISION CARDS ================= */
.about-extra{
  padding:90px 10%;
  display:flex;
  gap:40px;
  flex-wrap:wrap;
  background: var(--bg-secondary);
}

.extra-card{
  flex:1;
  min-width:260px;
  padding:40px;
  border-radius:20px;
  background: var(--bg-elevated);
  box-shadow:0 25px 50px var(--shadow-soft);
  transition:0.4s;
}

.extra-card:hover{
  transform:translateY(-10px);
  box-shadow:0 40px 70px var(--shadow-strong);
}

.extra-card h2{
  color: var(--primary);
  margin-bottom:10px;
}

.extra-card p{
  color: var(--text-secondary);
  line-height:1.7;
}


/* ==================== FOOTER ==================== */
footer { text-align:center; padding:2rem; background: linear-gradient(135deg, var(--accent), var(--highlight)); color: var(--text-primary); font-weight:bold; box-shadow:0 -5px 15px var(--shadow-soft); border-top-left-radius:30px; border-top-right-radius:30px; }

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
  #about{
    flex-direction:column;
    text-align:center;
  }

  .about-text h1{
    font-size:32px;
  }
}
</style>

</head>
<body>


<!-- Navbar -->
<header class="navbar">
  <div class="logo">
    <!-- Video logo -->
    <video autoplay loop muted playsinline class="logo-video">
      <source src="images/logo-animation.mp4" type="video/mp4">
      <!-- fallback image -->
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

  <!-- Hamburger Menu for Mobile -->
  <div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>


<section id="about">

<div class="about-img">
<img src="images/me.png">
</div>

<div class="about-text">

<h1>About Me</h1>

<p>
Hi, I'm Dilsha Dulmali, a passionate designer creating posters, branding, and modern digital visuals.
</p>

<p>
I combine creativity with modern design trends to produce meaningful visual experiences that help brands stand out.
</p>

<p>
My focus is crafting designs that communicate clearly, attract attention, and elevate brand identity.
</p>

</div>

</section>


<section class="skills">

<div class="skill-card">
<h3>Poster Design</h3>
<p>Creative marketing posters for brands and events.</p>
</div>

<div class="skill-card">
<h3>Logo Design</h3>
<p>Unique and memorable brand identities.</p>
</div>

<div class="skill-card">
<h3>Brand Identity</h3>
<p>Complete visual branding systems.</p>
</div>

<div class="skill-card">
<h3>Social Media Design</h3>
<p>High-impact graphics optimized for social media.</p>
</div>

</section>


<section class="skill-bars">

<div class="bar">
<span>Creativity</span>
<div class="progress"><div style="width:95%"></div></div>
</div>

<div class="bar">
<span>Branding</span>
<div class="progress"><div style="width:90%"></div></div>
</div>

<div class="bar">
<span>Social Media Design</span>
<div class="progress"><div style="width:88%"></div></div>
</div>

</section>


<section class="about-extra">

<div class="extra-card">

<h2>My Vision</h2>

<p>
To build a creative design brand known for originality and impactful visual storytelling.
</p>

</div>

<div class="extra-card">

<h2>My Mission</h2>

<p>
To transform ideas into powerful visual designs that help businesses communicate and grow.
</p>

</div>

</section>


<footer>
  &copy; 2026 Dulma Design Spot
</footer>

</body>
</html>
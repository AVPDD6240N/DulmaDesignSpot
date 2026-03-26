<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dulma Design Spot</title>

  <style>

  :root{
  /* 🌑 Base Backgrounds */
  --bg-main: #1A1A1D;        /* dark base */
  --bg-services: #3B1C32;    /* deep plum for services section */
  --bg-process: #4B1F4C;     /* slightly lighter plum for process section */
  --bg-cta: #6A1E55;         /* dusty rose for CTA */
  --bg-primary: #1A1A1D;      /* dark base */
  --bg-secondary: #3B1C32;    /* deep plum */
  --bg-elevated: #6A1E55;     /* dusty rose card background */

  /* 🌸 Brand Colors */
  --accent: #EC7FA9;          /* muted mauve for headings/icons */
  --secondary: #FFB8E0;       /* soft pink for titles and highlights */
  --highlight: #BE5985;       /* warm rose for hover effects */
  --card-bg: #4A1F4C;         /* slightly muted card background */
  
  /* 🌟 Text Colors */
  --text-main: #FFFFFF;       /* primary text */
  --text-muted: #D3BFD4;      /* soft muted pinkish text */

  /* Shadows */
  --shadow-soft: rgba(0,0,0,0.25);
  --shadow-strong: rgba(0,0,0,0.5);
  --shadow-hover: rgba(190,89,133,0.35);  /* matches highlight */


  /* 🖋 Text */
  --text-primary: #FFEDFA;
  --text-secondary: #FFB8E0;
  --text-muted: #BE5985;

  /* 🌫 Shadows & Glow */
  --shadow-soft: rgba(182,89,133,0.25);
  --shadow-strong: rgba(182,89,133,0.45);
}

/* ==================== RESET & BASE ==================== */
* { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
body { background: var(--bg-primary); color: var(--text-primary); line-height:1.6; }

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

/* ==================== HERO ==================== */
#hero { position: relative; height: 80vh; overflow:hidden; display:flex; justify-content:center; align-items:center; text-align:center; }
.hero-video { position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover; filter:brightness(0.5) contrast(1.1); z-index:-2; }
.hero-overlay { position:absolute; width:100%; height:100%; background: rgba(26,26,29,0.5); z-index:-1; }
.hero-content { max-width:800px; padding:0 20px; }
.hero-content h1 { font-size:4rem; margin-bottom:1rem; background: linear-gradient(90deg, var(--primary), var(--accent), var(--highlight), var(--info)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }
.hero-content p { font-size:1.5rem; margin-bottom:2rem; color: var(--text-secondary); }
.hero-buttons { display:flex; gap:20px; flex-wrap:wrap; justify-content:center; }

/* ==================== BUTTONS ==================== */
.btn-primary, .btn-secondary {
  position: relative; padding:14px 32px; border-radius:50px; font-weight:600; font-size:1rem; text-decoration:none; overflow:hidden; transition:all 0.4s ease;
}
.btn-primary { background: linear-gradient(135deg, var(--primary), var(--accent), var(--info)); color:white; box-shadow:0 10px 30px var(--shadow-strong); }
.btn-primary::before { content:""; position:absolute; inset:-2px; border-radius:50px; background: linear-gradient(90deg, var(--primary), var(--accent), var(--info), var(--highlight)); z-index:-1; filter:blur(12px); opacity:0.6; }
.btn-secondary { background: rgba(255,255,255,0.05); color: var(--primary); border:1px solid rgba(255,255,255,0.15); }
.btn-primary:hover { transform:translateY(-6px) scale(1.05); box-shadow:0 20px 40px var(--shadow-strong); }
.btn-secondary:hover { background: var(--secondary); color:white; transform:translateY(-6px) scale(1.05); }
.btn-primary::after, .btn-secondary::after { content:""; position:absolute; top:0; left:-75%; width:50%; height:100%; background: rgba(255,255,255,0.2); transform: skewX(-20deg); transition:0.6s; }
.btn-primary:hover::after, .btn-secondary:hover::after { left:130%; }

/* ==================== CAROUSEL ==================== */
.carousel-section { height:100vh; display:flex; flex-direction:column; justify-content:center; align-items:center; background: var(--bg-secondary); overflow:hidden; }
.carousel-container { perspective:1200px; padding-top:500px; padding-bottom:350px; }
.carousel { width:320px; height:420px; position:relative; transform-style: preserve-3d; transition: transform 1s; }
.carousel-item { position:absolute; width:320px; height:320px; border-radius:20px; overflow:hidden; box-shadow:0 20px 40px var(--shadow-soft); border:2px solid rgba(255,255,255,0.05); }
.carousel-item img { width:100%; height:320px; object-fit:cover; transition: transform 0.3s ease; }
.carousel-item:hover { transform:scale(1.05) rotateY(5deg); }
.carousel-buttons { margin-top:30px; }
.carousel-buttons button { background: linear-gradient(135deg, var(--accent), var(--highlight)); color: var(--text-primary); border:none; padding:12px 20px; margin:0 10px; font-size:20px; border-radius:50%; cursor:pointer; transition:0.3s ease; box-shadow:0 10px 25px var(--shadow-strong); }
.carousel-buttons button:hover { background: linear-gradient(135deg, var(--primary), var(--info)); transform:scale(1.1); }

/* ==================== NEWEST DESIGNS ==================== */
#newest-designs {
  padding: 5rem 2rem;
  background: linear-gradient(135deg, var(--bg-secondary), var(--primary));
  color: var(--text-primary);
  text-align: center;
}
#newest-designs h2 { font-size: 3rem; margin-bottom: 2rem; color: var(--accent); }
.designs-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; }
.design-card { background: var(--bg-elevated); border-radius: 20px; overflow: hidden; box-shadow: 0 15px 35px var(--shadow-soft); transition: transform 0.3s, box-shadow 0.3s; }
.design-card:hover { transform: translateY(-8px) scale(1.03); box-shadow: 0 25px 50px var(--shadow-strong); }
.design-card img { width: 100%; height: 250px; object-fit: cover; }
.design-info { padding: 1rem; background: linear-gradient(135deg, var(--secondary), var(--accent)); color: var(--text-primary); }
.design-info h3 { margin:0; font-size:1.2rem; }

/* ==================== SERVICES HIGHLIGHTS ==================== */
#services-highlights { padding: 5rem 2rem; background: var(--bg-secondary); text-align: center; }
#services-highlights h2 { font-size:3rem; margin-bottom:3rem; color: var(--accent); }
.services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; }
.service-card { padding:2rem; background: var(--primary); color: var(--text-primary); border-radius:20px; box-shadow:0 15px 35px var(--shadow-soft); font-weight:bold; transition: transform 0.3s, box-shadow 0.3s; }
.service-card:hover { transform: translateY(-6px) scale(1.05); box-shadow:0 25px 50px var(--shadow-strong); }

#testimonials{
text-align:center;
padding:80px 10%;
background:linear-gradient(135deg, var(--bg-secondary), var(--bg-elevated));
}

#testimonials h2 {font-size:3rem; margin-bottom:3rem; color: var(--accent); }

.testimonial-container{
position:relative;
}

.testimonial-slider{
display:flex;
gap:25px;
overflow-x:auto;
scroll-behavior:smooth;
padding:20px;
}

/* hide scrollbar */

.testimonial-slider::-webkit-scrollbar{
display:none;
}

.testimonial-slider{
scrollbar-width:none;
}

.testimonial-card{
min-width:300px;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
text-align:left;
color: #000;
}

.stars{
color:#FFD700;
font-size:18px;
margin-bottom:10px;
}

.client{
display:flex;
align-items:center;
gap:10px;
margin-top:15px;
color: var(--text-muted);
}

.client img{
width:40px;
height:40px;
border-radius:50%;
object-fit:cover;
}

.client h4{
font-size:14px;
}

/* arrows */

.arrow{
position:absolute;
top:50%;
transform:translateY(-50%);
border:none;
background:white;
font-size:22px;
padding:10px 14px;
cursor:pointer;
border-radius:50%;
box-shadow:0 4px 15px rgba(0,0,0,0.15);
opacity:0;
transition:0.3s;
}

.left{
left:-15px;
}

.right{
right:-15px;
}

.testimonial-container:hover .arrow{
opacity:1;
}

/* ==================== CALL TO ACTION ==================== */
#cta-banner { padding:5rem 2rem; background: linear-gradient(135deg, var(--highlight), var(--primary)); color: var(--text-primary); text-align:center; }
#cta-banner h2 { font-size:3rem; margin-bottom:2rem; }
#cta-banner .btn-primary { font-size:1.2rem; padding:16px 40px; }

/* ==================== CONTACT ==================== */
#contact { padding:5rem 2rem; background: var(--bg-secondary); color: var(--text-primary); text-align:center; }
#contact h2 { font-size:3rem; margin-bottom:2rem; color: var(--accent); }
#contact form { display:flex; flex-direction:column; gap:1rem; max-width:500px; margin:0 auto; }
#contact input, #contact textarea { padding:1rem; border-radius:10px; border:none; background: var(--bg-elevated); color: var(--text-primary); box-shadow:0 10px 25px var(--shadow-soft); resize:none; }
#contact button { padding:1rem; border:none; border-radius:50px; background: linear-gradient(135deg, var(--primary), var(--highlight)); color:white; font-weight:bold; cursor:pointer; transition:0.3s; }
#contact button:hover { transform: translateY(-4px) scale(1.05); box-shadow:0 15px 35px var(--shadow-strong); }

/* ==================== FOOTER ==================== */
footer { text-align:center; padding:2rem; background: linear-gradient(135deg, var(--accent), var(--highlight)); color: var(--text-primary); font-weight:bold; box-shadow:0 -5px 15px var(--shadow-soft); border-top-left-radius:30px; border-top-right-radius:30px; }

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

<!-- Carousel Section -->
<section class="carousel-section">
    <div class="carousel-container">
        <div class="carousel" id="carousel">
            <div class="carousel-item"><img src="images/1.jpg" alt=""></div>
            <div class="carousel-item"><img src="images/2.jpg" alt=""></div>
            <div class="carousel-item"><img src="images/3.jpg" alt=""></div>
            <div class="carousel-item"><img src="images/4.jpg" alt=""></div>
            <div class="carousel-item"><img src="images/5.jpg" alt=""></div>
        </div>
    </div>

    <div class="carousel-buttons">
        <button onclick="rotateCarousel(-1)">‹</button>
        <button onclick="rotateCarousel(1)">›</button>
    </div>
</section>

<!-- Hero Section -->
<section id="hero">
  
  <!-- Background Video -->
  <video autoplay muted loop playsinline class="hero-video">
    <source src="videos/hero-bg.mp4" type="video/mp4">
  </video>

  <!-- Dark Overlay -->
  <div class="hero-overlay"></div>

  <!-- Content -->
  <div class="hero-content">
    <h1>Creative Designs That Speak</h1>
    <p>Posters, Logos, Branding & Social Media</p>
    <div class="hero-buttons">
      <a href="contact.php" class="btn-primary">Hire Me</a>
      <a href="portfolio.php" class="btn-secondary">View Portfolio</a>
    </div>
  </div>

</section>

<!-- Landing Page Sections after Hero -->


<!-- Newest Designs Section -->
<section id="newest-designs">
  <h2>Newest Designs</h2>
  <div class="designs-grid">
    <div class="design-card">
      <img src="images/new1.jpg" alt="New Design 1">
      <div class="design-info"><h3>Poster Design - Event</h3></div>
    </div>
    <div class="design-card">
      <img src="images/new2.jpg" alt="New Design 2">
      <div class="design-info"><h3>Logo Design - Brand</h3></div>
    </div>
    <div class="design-card">
      <img src="images/new3.jpg" alt="New Design 3">
      <div class="design-info"><h3>Social Media Banner</h3></div>
    </div>
    <div class="design-card">
      <img src="images/new4.jpg" alt="New Design 4">
      <div class="design-info"><h3>Business Card Design</h3></div>
    </div>
  </div>
</section>

<!-- Services Highlights Section -->
<section id="services-highlights">
  <h2>What I Offer</h2>
  <div class="services-grid">
    <div class="service-card">Poster Designs</div>
    <div class="service-card">Logo & Branding</div>
    <div class="service-card">Social Media Designs</div>
    <div class="service-card">Presentation & Marketing</div>
  </div>
</section>

<section id="testimonials">
  <h2>Client Feedback</h2>

  <div class="testimonial-container">

    <button class="arrow left" onclick="scrollSlider(-1)">❮</button>

    <div class="testimonial-slider" id="testimonialSlider">

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>"Dulma Design Spot created the perfect logo for our startup! Highly recommended."</p>
        <div class="client">
          
          <h4>Saman Nanayakkara</h4>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>"Amazing poster designs for our events. Professional and creative."</p>
        <div class="client">
          
          <h4>Vihas Perera</h4>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>"Fast delivery and beautiful design work. Will definitely work again!"</p>
        <div class="client">
          
          <h4>Shalika Fernando</h4>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>"Professional, creative, and easy to communicate with. Excellent experience."</p>
        <div class="client">
          
          <h4>Vihanga Dananjaya</h4>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>"Great attention to detail. My brand looks much better now!"</p>
        <div class="client">
          
          <h4>Senarath Soysa</h4>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>"The final design looked modern and clean. Loved the quality!"</p>
        <div class="client">
          
          <h4>Mohamed Ali</h4>
        </div>
      </div>

    </div>

    <button class="arrow right" onclick="scrollSlider(1)">❯</button>

  </div>
</section>




<!-- Call to Action Banner -->
<section id="cta-banner">
  <h2>Let’s Bring Your Ideas to Life</h2>
  <a href="contact.php" class="btn-primary">Hire Me Now</a>
</section>

<!-- Contact Section -->
<section id="contact">
  <h2>Contact Me</h2>
  <form action="contact.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="phone" placeholder="Your Contact Number" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</section>

<footer>
  &copy; 2026 Dulma Design Spot
</footer>

<script src="js/main.js"></script>
</body>

<script>

const slider = document.getElementById("testimonialSlider");

function scrollSlider(direction){
slider.scrollBy({
left: direction * 320,
behavior: "smooth"
});
}

/* auto slide */

setInterval(()=>{
slider.scrollBy({
left:320,
behavior:"smooth"
});
},4000);

</script>

</html>
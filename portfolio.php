<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dulma Design Spot | Portfolio</title>

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

  /* Shadow */
  --shadow-soft: rgba(0,0,0,0.25);
  --shadow-hover: rgba(190,89,133,0.35);
  --shadow-strong: rgba(0,0,0,0.5);
}

/* GLOBAL */
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

body{
  background: var(--bg-main);
  color: var(--text-main);
  padding-top:80px; /* FIX NAVBAR OVERLAP */
}

/* NAVBAR */
.navbar {
  position: fixed;
  width: 100%;
  top: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background: linear-gradient(135deg, var(--bg-elevated), var(--bg-secondary));
  color: var(--text-main);
  box-shadow: 0 5px 15px var(--shadow-strong);
  z-index: 1000;
  backdrop-filter: blur(10px);
  border-bottom: 2px solid var(--highlight);
}

.logo { display: flex; align-items: center; gap:0.5rem; }
.logo video.logo-video { width:50px; height:50px; border-radius:50%; object-fit:cover; animation: logo-pulse 2s infinite alternate; }
.logo span { font-weight:bold; font-size:1.5rem; color: var(--text-main); }

@keyframes logo-pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.1); }
  100% { transform: scale(1); }
}

.nav-links { display:flex; gap:1.5rem; }
.nav-links a { color: var(--text-main); text-decoration:none; font-weight:bold; position:relative; }
.nav-links a::after {
  content:"";
  position:absolute;
  width:0%;
  height:2px;
  background: var(--highlight);
  left:0; bottom:-4px;
  transition:0.3s;
}
.nav-links a:hover::after { width:100%; }

/* HERO */
.portfolio-hero {
  background: linear-gradient(135deg, var(--bg-main), var(--bg-secondary));
  text-align:center;
  padding:6rem 2rem;
}
.portfolio-hero h1 {
  font-size:3rem;
  margin-bottom:1rem;
  background: linear-gradient(135deg,var(--accent),var(--secondary));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.portfolio-hero p {
  font-size:1.2rem;
  margin-bottom:2rem;
  color: var(--text-muted);
}

/* FILTER BUTTONS */
.filter-buttons {
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  gap:1rem;
  margin-top:2rem;
}
.filter-buttons button {
  padding:0.6rem 1.5rem;
  border-radius:50px;
  border:2px solid var(--highlight);
  background:transparent;
  color: var(--text-main);
  font-weight:bold;
  cursor:pointer;
  transition:0.3s;
}
.filter-buttons button.active,
.filter-buttons button:hover {
  background: linear-gradient(45deg,var(--accent),var(--secondary));
  color:#fff;
}

/* GRID */
.portfolio-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:2rem;
  padding:4rem 2rem;
}

/* CARD */
.portfolio-card {
  position:relative;
  overflow:hidden;
  border-radius:20px;
  cursor:pointer;
  background: var(--card-bg);
  backdrop-filter: blur(10px);
  box-shadow:0 10px 25px var(--shadow-soft);
  transition:0.3s;
}
.portfolio-card:hover{
  box-shadow:0 20px 40px var(--shadow-hover);
}

.portfolio-card img {
  width:100%;
  display:block;
  border-radius:20px;
}

/* OVERLAY */
.portfolio-overlay {
  position:absolute;
  inset:0;
  display:flex;
  justify-content:center;
  align-items:center;
  color:#fff;
  font-weight:bold;
  background: linear-gradient(180deg, transparent, rgba(0,0,0,0.6));
  opacity:0;
  transition:0.3s;
}
.portfolio-card:hover .portfolio-overlay {
  opacity:1;
}

/* CTA */
.portfolio-cta {
  text-align:center;
  padding:5rem 2rem;
  background: linear-gradient(135deg, var(--bg-secondary), var(--bg-main));
}
.portfolio-cta button {
  padding:1rem 2rem;
  border-radius:50px;
  font-weight:bold;
  background: linear-gradient(135deg,var(--accent),var(--secondary));
  border:none;
  color:#fff;
  cursor:pointer;
  transition:0.3s;
}
.portfolio-cta button:hover {
  transform:scale(1.05);
  box-shadow:0 10px 25px var(--shadow-hover);
}

/* FOOTER */
footer {
  text-align:center;
  padding:2rem;
  background: var(--bg-secondary);
  color: var(--text-main);
}

/* RESPONSIVE */
@media(max-width:768px){
  .portfolio-hero h1{font-size:2.5rem;}
}
</style>
</head>

<body>


<!-- Portfolio Hero -->
<section class="portfolio-hero">
  <h1>My Creative Portfolio</h1>
  <p>Explore my design work: posters, branding, social media, and marketing visuals.</p>

  <div class="filter-buttons">
    <button data-filter="all" class="active">All</button>
    <button data-filter="poster">Posters</button>
    <button data-filter="logo">Logos</button>
    <button data-filter="branding">Branding</button>
    <button data-filter="banner">Banners</button>
    <button data-filter="business">Business Cards</button>
    <button data-filter="product design">Product Designs</button>
  </div>
</section>

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

<!-- Portfolio Grid -->
<section class="portfolio-grid">
  <div class="portfolio-card tilt-card" data-category="poster">
    <img src="images/P1.png" alt="Poster Design">
    <div class="portfolio-overlay"><h3>Poster Design</h3></div>
  </div>

   <div class="portfolio-card tilt-card" data-category="poster">
    <img src="images/P2.png" alt="Poster Design">
    <div class="portfolio-overlay"><h3>Poster Design</h3></div>
  </div>

   <div class="portfolio-card tilt-card" data-category="poster">
    <img src="images/P3.png" alt="Poster Design">
    <div class="portfolio-overlay"><h3>Poster Design</h3></div>
  </div>

   <div class="portfolio-card tilt-card" data-category="poster">
    <img src="images/P4.png" alt="Poster Design">
    <div class="portfolio-overlay"><h3>Poster Design</h3></div>
  </div>

    <div class="portfolio-card tilt-card" data-category="poster">
    <img src="images/P5.png" alt="Poster Design">
    <div class="portfolio-overlay"><h3>Poster Design</h3></div>
  </div>

    <div class="portfolio-card tilt-card" data-category="poster">
    <img src="images/P6.png" alt="Poster Design">
    <div class="portfolio-overlay"><h3>Poster Design</h3></div>
  </div>

    <div class="portfolio-card tilt-card" data-category="poster">
    <img src="images/P7.png" alt="Poster Design">
    <div class="portfolio-overlay"><h3>Poster Design</h3></div>
    
  </div>
  



  <div class="portfolio-card tilt-card" data-category="logo">
    <img src="images/L1.png" alt="Logo Design">
    <div class="portfolio-overlay"><h3>Logo Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="logo">
    <img src="images/L2.png" alt="Logo Design">
    <div class="portfolio-overlay"><h3>Logo Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="logo">
    <img src="images/L3.png" alt="Logo Design">
    <div class="portfolio-overlay"><h3>Logo Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="logo">
    <img src="images/L4.png" alt="Logo Design">
    <div class="portfolio-overlay"><h3>Logo Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="logo">
    <img src="images/L5.png" alt="Logo Design">
    <div class="portfolio-overlay"><h3>Logo Design</h3></div>
  </div>


  <div class="portfolio-card tilt-card" data-category="branding">
    <img src="images/design3.jpg" alt="Branding">
    <div class="portfolio-overlay"><h3>Branding</h3></div>
  </div>



  <div class="portfolio-card tilt-card" data-category="banner">
    <img src="images/B1.png" alt="Banner Design">
    <div class="portfolio-overlay"><h3>Banner</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="banner">
    <img src="images/B2.png" alt="Banner Design">
    <div class="portfolio-overlay"><h3>Banner</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="banner">
    <img src="images/B3.png" alt="Banner Design">
    <div class="portfolio-overlay"><h3>Banner</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="banner">
    <img src="images/B4.png" alt="Banner Design">
    <div class="portfolio-overlay"><h3>Banner</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="banner">
    <img src="images/B5.png" alt="Banner Design">
    <div class="portfolio-overlay"><h3>Banner</h3></div>
  </div>




  <div class="portfolio-card tilt-card" data-category="business">
    <img src="images/BC1.png" alt="Business Card">
    <div class="portfolio-overlay"><h3>Business Card</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="business">
    <img src="images/BC2.png" alt="Business Card">
    <div class="portfolio-overlay"><h3>Business Card</h3></div>
  </div>



  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T1.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T2.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T3.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T4.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T5.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T6.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T7.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T8.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T9.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>

  <div class="portfolio-card tilt-card" data-category="product design">
    <img src="images/T10.png" alt="Product Design">
    <div class="portfolio-overlay"><h3>Product Design</h3></div>
  </div>
</section>

<!-- Call To Action -->
<section class="portfolio-cta">
  <h2>Like What You See?</h2>
  <button onclick="location.href='contact.php'">Start a Project</button>
</section>

<!-- Footer -->
<footer>
  &copy; 2026 Dulma Design Spot
</footer>

<!-- JS for tilt & filter -->
<script>
// 3D Tilt Effect
const cards = document.querySelectorAll('.tilt-card');
cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = ((y - centerY) / centerY) * 10;
        const rotateY = ((x - centerX) / centerX) * 10;
        card.style.transform = `rotateX(${-rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
    });
});

// Filter Functionality
const filterButtons = document.querySelectorAll('.filter-buttons button');
filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');
        cards.forEach(card => {
            if(filter === 'all' || card.getAttribute('data-category') === filter) {
                card.style.display = 'block';
                setTimeout(()=>{ card.style.opacity = '1'; }, 50);
            } else {
                card.style.opacity = '0';
                setTimeout(()=>{ card.style.display = 'none'; }, 300);
            }
        });
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    });
});
</script>
</body>
</html>
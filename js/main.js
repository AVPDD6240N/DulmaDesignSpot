document.querySelectorAll('.service-card, .portfolio-card').forEach(card => {
  card.addEventListener('mousemove', e => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const cx = rect.width/2;
    const cy = rect.height/2;
    const dx = (x - cx) / cx;
    const dy = (y - cy) / cy;
    card.style.transform = `rotateY(${dx*10}deg) rotateX(${-dy*10}deg) translateZ(0)`;
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = 'rotateY(0deg) rotateX(0deg)';
  });
});

// Carousel

const carousel = document.getElementById("carousel");
const items = document.querySelectorAll(".carousel-item");

const totalItems = items.length;
const angle = 360 / totalItems;
let currentRotation = 0;

// Position items in circle
items.forEach((item, index) => {
    item.style.transform = `rotateY(${index * angle}deg) translateZ(500px)`;
});

function rotateCarousel(direction) {
    currentRotation += direction * angle;
    carousel.style.transform = `rotateY(${currentRotation}deg)`;
}

// Auto rotate
setInterval(() => {
    rotateCarousel(1);
}, 4000);





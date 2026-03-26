<?php
$messageSent = false;
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "dilshaavp@gmail.com";
    $subject = "New Contact Message";

    $body = "
    Name: $name
    Email: $email
    Phone: $phone

    Message:
    $message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        $messageSent = true;
    } else {
        $errorMsg = "Failed to send message.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact | Dulma Design Spot</title>

<style>
:root{
  --bg-main:#1A1A1D;
  --bg-secondary:#3B1C32;
  --bg-elevated:#6A1E55;

  --accent:#EC7FA9;
  --secondary:#FFB8E0;
  --highlight:#BE5985;

  --card-bg:rgba(74,31,76,0.6);

  --text-main:#FFFFFF;
  --text-muted:#D3BFD4;

  --shadow-soft:rgba(0,0,0,0.25);
  --shadow-hover:rgba(190,89,133,0.35);
}

/* GLOBAL */
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{
  background:var(--bg-main);
  color:var(--text-main);
  padding-top:80px;
}

/* NAVBAR */
.navbar{
  position:fixed;top:0;width:100%;
  display:flex;justify-content:space-between;align-items:center;
  padding:1rem 2rem;
  background:linear-gradient(135deg,var(--bg-elevated),var(--bg-secondary));
  border-bottom:2px solid var(--highlight);
  z-index:1000;
}

/* HERO */
.contact-hero{
  text-align:center;
  padding:5rem 1rem;
}
.contact-hero h1{
  font-size:3rem;
  background:linear-gradient(135deg,var(--accent),var(--secondary));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.contact-hero p{color:var(--text-muted);margin-top:10px;}

/* CONTAINER */
.contact-wrapper{
  display:flex;
  justify-content:center;
  padding:2rem;
}

/* FORM CARD */
.contact-container{
  width:100%;
  max-width:750px;
  background:var(--card-bg);
  backdrop-filter:blur(12px);
  padding:2.5rem;
  border-radius:20px;
  box-shadow:0 10px 25px var(--shadow-soft);
  display:flex;
  flex-direction:column;
  gap:1.5rem;
}

/* INPUT GROUP */
.input-group{
  display:flex;
  flex-direction:column;
  gap:5px;
}

.input-group input,
.input-group textarea{
  padding:1rem;
  border-radius:12px;
  border:none;
  background:rgba(255,255,255,0.05);
  color:white;
}

.input-group input:focus,
.input-group textarea:focus{
  outline:none;
  box-shadow:0 0 10px var(--shadow-hover);
}

/* BUTTON */
button{
  background:linear-gradient(135deg,var(--accent),var(--secondary));
  padding:1rem;
  border:none;
  border-radius:50px;
  font-weight:bold;
  cursor:pointer;
  transition:0.3s;
}
button:hover{
  transform:scale(1.05);
}

/* SUCCESS ANIMATION */
.success-box{
  padding:1rem;
  background:rgba(0,255,150,0.1);
  border:1px solid #00ff95;
  border-radius:10px;
  animation:fadeIn 0.5s ease;
}

@keyframes fadeIn{
  from{opacity:0; transform:translateY(10px);}
  to{opacity:1; transform:translateY(0);}
}

/* ERROR */
.error-box{
  padding:1rem;
  background:rgba(255,100,100,0.1);
  border:1px solid #ff4d4d;
  border-radius:10px;
}

/* WHATSAPP BUTTON */
.whatsapp-btn{
  position:fixed;
  bottom:25px;
  right:25px;
  background:#25D366;
  color:white;
  font-size:22px;
  padding:15px 18px;
  border-radius:50%;
  text-decoration:none;
  box-shadow:0 5px 15px rgba(0,0,0,0.3);
  transition:0.3s;
}
.whatsapp-btn:hover{
  transform:scale(1.1);
}

/* RESPONSIVE */
@media(max-width:600px){
  .contact-container{padding:2rem;}
}
</style>
</head>

<body>

<!-- HERO -->
<section class="contact-hero">
  <h1>Contact Me</h1>
  <p>Let’s create something amazing together 🚀</p>
</section>

<div class="contact-wrapper">
  <div class="contact-container">

    <?php if($messageSent): ?>
      <div class="success-box">✅ Message sent successfully!</div>
    <?php elseif($errorMsg): ?>
      <div class="error-box"><?= $errorMsg ?></div>
    <?php endif; ?>

    <form method="POST" onsubmit="return validateForm()">

      <div class="input-group">
        <label>Name</label>
        <input type="text" id="name" name="name">
      </div>

      <div class="input-group">
        <label>Email</label>
        <input type="email" id="email" name="email">
      </div>

      <div class="input-group">
        <label>Phone</label>
        <input type="text" id="phone" name="phone">
      </div>

      <div class="input-group">
        <label>Message</label>
        <textarea id="message" name="message" rows="4"></textarea>
      </div>

      <button type="submit">Send Message</button>

    </form>
  </div>
</div>

<!-- WHATSAPP BUTTON -->
<a href="https://wa.me/94781762363" target="_blank" class="whatsapp-btn">
💬
</a>

<script>
function validateForm(){
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let phone = document.getElementById("phone").value.trim();
  let message = document.getElementById("message").value.trim();

  if(name === "" || email === "" || phone === "" || message === ""){
    alert("Please fill all fields!");
    return false;
  }

  if(!email.includes("@")){
    alert("Enter valid email!");
    return false;
  }

  return true;
}
</script>

</body>
</html>
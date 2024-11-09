<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header -->
    <header>


        <nav class="container">
            <div class="logo">LOGO</div>
            <ul class="nav-links">
                <li><a class="current-link" href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Be an Influencer</a></li>
            </ul>
            <a href="#" class="social-icons">
              <img src="./assets/img/social-icons.png"/>
            </a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>COLLAGEN IS THE FOUNTAIN OF YOUTH</h1>
            <p>WHAT'S YOUR INFLUENCE?</p>
            <button class="btn-ben">
            <img src="./assets/img/ben.png" alt="Image of Ben">    
            <span>Connect with Ben</span></button>
        </div>
        
    </section>

    <!-- Content Section -->
    <section class="congrats">
        <h2>CONGRATULATIONS</h2>
        <p>
        You are among the very first to learn of NXM,
a superior luxury & lifestyle brand developed by some of the greatest minds in the industry.
        </p>
<p>
Launching with a perfect trio of proprietary, results-driven beauty products, NXM is primed to cause major disruption in the direct-selling industry with its hybrid, influencer marketing platform and rewards system.        </p>
   
</section>

    <!-- Products Section -->
    <section class="products">
        <div class="product-item">
            <div class="product-content">
            <h3>COLLAGEN PEPTIDE EXFOLIATING GEL</h3>
            <p>Instant results with visible remove of dead cells.
Clinically proven to activate the skin repair process.
Smooths wrinkles, improves tone & elasticity.</p>
            </div>
            <img class="product-img" src="./assets/img/product-1.png" alt="Product 1">
        </div>
        <div class="product-item reverse">
        <div class="product-content">
            <h3>BELLA COLLAGEN ELIXIR</h3>
            <p>Helps the body product more collagen.
Backed by double blind clinical studies.
Healthier skin, hair, nails, joints & more.</p>
        </div>
            <img class="product-img" src="./assets/img/product-2.png" alt="Product 2">
        </div>
        <div class="product-item">
        <div class="product-content">
            <h3>HYDRATING LIP PLUMPING OIL</h3>
            <p>Ultimate softness, hydration, & comfort.
A smooth and naturally-plump look.
Shine of a gloss with the benefits of a balm.</p>
        </div>
            <img class="product-img" src="./assets/img/product-3.png" alt="Product 3">
        </div>
    </section>

    <!-- Influencers Section -->
    <section class="influencers">
        <h2>WHAT'S YOUR INFLUENCE?</h2>
        <p class="inf-info">Is this you? Could this be you?<br>
        Are you ready to be an influencer?</p>
        <div class="influencer-cards">
            <div class="card">
                <img class="card-img-b" src="./assets/img/model-1-b.png" alt="Influencer 1">
                <div class="card-content">
                <img class="card-img-s" src="./assets/img/model-1-s.png"/>

                    <div class="card-name">
                    <p>Grace Perez</p>
                    <p class="card-link">@graceperez</p>
                    </div>
              
                </div>
            </div>
            <div class="card">
                <img class="card-img-b" src="./assets/img/model-2-b.png" alt="Influencer 2">
                <div class="card-content">
                    <img class="card-img-s" src="./assets/img/model-2-s.png"/>
                    <div class="card-name">
                    <p>Bella Marie</p>
                    <p class="card-link">@belamarie</p>
                    </div>
                   
                <div>
               
                </div>

                </div>
            </div>
            <div class="card">
                <img class="card-img-b" src="./assets/img/model-3-b.png" alt="Influencer 3">
                <div class="card-content">
                <img class="card-img-s" src="./assets/img/model-3-s.png"/>

                   <div class="card-name">
                   <p>Gigi Hadid</p>
                   <p class="card-link">@gigihadid</p>
                   </div>
                </div>
            </div>
        </div>
    </section>
<!-- More Info -->
 <section class="more-info">
<h3>Would you like to <br>learn more?</h3>
<button class="btn-ben">
            <img src="./assets/img/ben.png" alt="Image of Ben">    
            <span>Connect with Ben</span></button>
 </section>
 <section class="hero">
        <div class="hero-text">
            <h1>COLLAGEN IS PRETTY COOL INIT</h1>
            <p>GET READY AND LET'S GO</p>
            <button class="btn-ben">
            <img src="./assets/img/ben.png" alt="Image of Ben">    
            <span>Connect with Ben</span></button>
        </div>
        
    </section>
 <div id="popup-form" class="popup-form">
    <div class="popup-content">
        <div class="form-image">
            <img src="./assets/img/register-cover.png" alt="Form Image">
        </div>
        <div class="form-content">
            <span class="close-btn">&times;</span>
            <h2>Register to Learn More</h2>
            <form>
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" required>
                
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" required>
                
                <label for="phone-number">Best Phone Number</label>
                <input type="tel" id="phone-number" name="phone-number" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label class="checkbox-label">
                    <input type="checkbox" name="not-a-robot" required>
                    I'm not a robot
                </label>
                
                <button type="submit" class="register-button">Register Now</button>
            </form>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer>
        <p>Copyright &copy; 2022 LOGO</p>
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
    </footer>
<script>
  const popupForm = document.getElementById('popup-form');
const closeBtn = document.querySelector('.close-btn');

// Show popup
function showPopup() {
    popupForm.style.display = 'flex';
}

// Hide popup
function hidePopup() {
    popupForm.style.display = 'none';
}

// Close popup when clicking the close button
closeBtn.addEventListener('click', hidePopup);

// Close popup when clicking outside the form content
popupForm.addEventListener('click', (e) => {
    if (e.target === popupForm) {
        hidePopup();
    }
});


</script>
</body>
</html>

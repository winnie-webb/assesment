<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script></head>
<body>

    <!-- Header -->
    <header>
        <nav>
            <div class="logo">LOGO</div>
            <ul class="nav-links">
                <li><a class="current-link" href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Be an Influencer</a></li>
            </ul>
            <a href="#" class="social-icons">
              <img src="./assets/img/social-icons.png" alt="Social Icons"/>
            </a>
            <div class="burger open">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <span class="burger-close close">&times;</span>

        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>COLLAGEN IS THE FOUNTAIN OF YOUTH</h1>
            <p>WHAT'S YOUR INFLUENCE?</p>
            <button class="btn-ben">
                <img src="./assets/img/ben.png" alt="Image of Ben">    
                <span>Connect with Ben</span>
            </button>
        </div>
    </section>

    <!-- Content Section -->
    <section class="congrats">
        <h2>CONGRATULATIONS</h2>
        <p>You are among the very first to learn of NXM, a superior luxury & lifestyle brand developed by some of the greatest minds in the industry.</p>
        <p>Launching with a perfect trio of proprietary, results-driven beauty products, NXM is primed to cause major disruption in the direct-selling industry with its hybrid, influencer marketing platform and rewards system.</p>
    </section>

    <!-- Products Section -->
    <section class="products">
        <div class="product-item">
            <div class="product-content">
                <h3>COLLAGEN PEPTIDE EXFOLIATING GEL</h3>
                <p>Instant results with visible removal of dead cells. Clinically proven to activate the skin repair process. Smooths wrinkles, improves tone & elasticity.</p>
            </div>
            <img class="product-img" src="./assets/img/product-1.png" alt="Product 1">
        </div>
        <div class="product-item reverse">
            <div class="product-content">
                <h3>BELLA COLLAGEN ELIXIR</h3>
                <p>Helps the body produce more collagen. Backed by double-blind clinical studies. Healthier skin, hair, nails, joints & more.</p>
            </div>
            <img class="product-img" src="./assets/img/product-2.png" alt="Product 2">
        </div>
        <div class="product-item">
            <div class="product-content">
                <h3>HYDRATING LIP PLUMPING OIL</h3>
                <p>Ultimate softness, hydration, & comfort. A smooth and naturally-plump look. Shine of a gloss with the benefits of a balm.</p>
            </div>
            <img class="product-img" src="./assets/img/product-3.png" alt="Product 3">
        </div>
    </section>

    <!-- Influencers Section -->
    <section class="influencers">
        <h2>WHAT'S YOUR INFLUENCE?</h2>
        <p class="inf-info">Is this you? Could this be you? Are you ready to be an influencer?</p>
        <div class="influencer-cards">
            <div class="card">
                <img class="card-img-b" src="./assets/img/model-1-b.png" alt="Influencer 1">
                <div class="card-content">
                    <img class="card-img-s" src="./assets/img/model-1-s.png" alt="Model Small"/>
                    <div class="card-name">
                        <p>Grace Perez</p>
                        <p class="card-link">@graceperez</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="card-img-b" src="./assets/img/model-2-b.png" alt="Influencer 2">
                <div class="card-content">
                    <img class="card-img-s" src="./assets/img/model-2-s.png" alt="Model Small"/>
                    <div class="card-name">
                        <p>Bella Marie</p>
                        <p class="card-link">@belamarie</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="card-img-b" src="./assets/img/model-3-b.png" alt="Influencer 3">
                <div class="card-content">
                    <img class="card-img-s" src="./assets/img/model-3-s.png" alt="Model Small"/>
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
        <h3>Would you like to learn more?</h3>
        <button class="btn-ben">
            <img src="./assets/img/ben.png" alt="Image of Ben">    
            <span>Connect with Ben</span>
        </button>
    </section>
    <section class="hero btm">
        <div class="hero-text">
            <h1>COLLAGEN IS PRETTY COOL INIT</h1>
            <p>GET READY AND LET'S GO</p>
            <button class="btn-ben">
            <img src="./assets/img/ben.png" alt="Image of Ben">    
            <span>Connect with Ben</span></button>
        </div>
        
    </section>
    <!-- Popup Form -->
    <div id="popup-form" class="popup-form">
    <div class="popup-content">
        <div class="form-image">
            <img src="./assets/img/register-cover.png" alt="Form Image">
        </div>
        <div class="form-content">
            <span class="close-btn">&times;</span>
            <h2>Register to Learn More</h2>
            <form id="registration-form">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="firstName" >
                
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="lastName" >
                
                <label for="phone-number">Best Phone Number</label>
                <input type="tel" id="phone-number" name="phoneNumber" >
                
                <label for="email">Email</label>
                <input type="text" id="email" name="email" >
                
                <div class="rc-anchor rc-anchor-normal rc-anchor-light">
	<div class="rc-anchor-content">
		<div class="rc-inline-block">
			<div class="rc-anchor-center-container">
				<div class="rc-anchor-center-item rc-anchor-checkbox-holder"><span class="recaptcha-checkbox goog-inline-block recaptcha-checkbox-unchecked rc-anchor-checkbox recaptcha-checkbox-clearOutline" role="checkbox" aria-checked="false" id="recaptcha-anchor" tabindex="0" dir="ltr" aria-labelledby="recaptcha-anchor-label"><div class="recaptcha-checkbox-border" role="presentation"></div><div class="recaptcha-checkbox-borderAnimation" role="presentation"></div><div class="recaptcha-checkbox-spinner" role="presentation"></div><div class="recaptcha-checkbox-spinnerAnimation" role="presentation"></div><div class="recaptcha-checkbox-checkmark" role="presentation"></div></span></div>
			</div>
		</div>
		<div class="rc-inline-block">
			<div class="rc-anchor-center-container"><label class="rc-anchor-center-item rc-anchor-checkbox-label" id="recaptcha-anchor-label">I'm not a robot</label></div>
		</div>
	</div>
	<div class="rc-anchor-normal-footer">
		<div class="rc-anchor-logo-portrait" role="presentation">
			<div class="rc-anchor-logo-img rc-anchor-logo-img-portrait"></div>
			<div class="rc-anchor-logo-text">reCAPTCHA</div>
		</div>
		<div class="rc-anchor-pt"><a href="https://www.google.com/intl/en/policies/privacy/" target="_blank">Privacy</a> - <a href="https://www.google.com/intl/en/policies/terms/" target="_blank">Terms</a></div>
	</div>
</div>
                
                <button type="submit" class="register-button">Register Now</button>
            </form>
            <div id="feedback" class="feedback-message"></div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer>
        <p>&copy; 2022 LOGO</p>
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
    </footer>

<script>
    document.querySelectorAll('.btn-ben').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('popup-form').style.display = 'flex';
        });
    });

    document.querySelector('.close-btn').addEventListener('click', function() {
        document.getElementById('popup-form').style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        const popupForm = document.getElementById('popup-form');
        if (event.target === popupForm) {
            popupForm.style.display = 'none';
        }
    });
</script>
<script>
  const burger = document.querySelector('.burger');
  const navLinks = document.querySelector('.nav-links');
const burgerClose = document.querySelector(".burger-close")
  burger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
    burger.classList.toggle('open');
    burgerClose.classList.toggle('close');

  });
  burgerClose.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
    burger.classList.toggle('open');
    burgerClose.classList.toggle('close');
  });
</script>
<script>
    $(document).ready(function() {
    // Initialize jQuery Validation
    $("#registration-form").validate({
        rules: {
            firstName: {
                required: true,
                minlength: 2
            },
            lastName: {
                required: true,
                minlength: 2
            },
            phoneNumber: {
                required: true,
                minlength: 10,
                maxlength: 15
            },
            email: {
                required: true,
                email: true
            },
            notARobot: {
                required: true
            }
        },
        messages: {
            firstName: {
                required: "Please enter your first name",
                minlength: "First name must be at least 2 characters"
            },
            lastName: {
                required: "Please enter your last name",
                minlength: "Last name must be at least 2 characters"
            },
            phoneNumber: {
                required: "Please enter your phone number",
                digits: "Phone number should contain only numbers",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number can't exceed 15 digits"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
           
        },
        submitHandler: function(form) {
            // Form submission with AJAX
            const feedback = $("#feedback");
            feedback.text("");

            const formData = $(form).serialize(); // Serialize form data

            $.ajax({
                url: 'register.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(data) {
                    if (data.responseText === "success") {
                        feedback.text(data.message).css("color", "green");
                        setTimeout(() => {
                            $('#popup-form').fadeOut();
                            $('#registration-form')[0].reset();
                        }, 2000); // Close popup after 2 seconds
                    } else {
                        feedback.text(data.message).css("color", "red");
                    }
                },
                error: function(err) {
                    console.log(err)
                    feedback.text("There was an error with your registration. Please try again.").css("color", "red");
                }
            });
            return false;
        }
    });
});

</script>
</body>
</html>

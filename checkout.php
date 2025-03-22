<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - KeyboardMaster</title>
    <link rel="stylesheet" href="checkout.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" href="Compressed_Images/favicon.png" type="image/png">
  </head>
  <body>
    <div class="terminusTopBanner">
      <div class="menuOption">☰</div>
      <div class="bannerFormat">
        <div class="LBannerLinks">
          <a href="about.html">About</a>
          <a href="keyboards.php">Keyboards</a>
        </div>
        <a href="index.html">
          <img src="Compressed_Images/TerminusLogo.png" alt="Terminus Logo" class="logo">
        </a>
        <div class="RBannerLinks">
          <a href="blog.html">Blog</a>
          <!-- placeholder-->
          <a href="contact.php">Contact</a>
        </div>
      </div>
      <div class="right-logos">
        <div class="theme-toggle">
          <button id="themeToggle">🌙</button>
        </div>
        <div class="userIcon">
          <a href="login.html">
            <img src="Compressed_Images/userIcon.png" alt="User Icon">
          </a>
        </div>
        <div class="userBasket">
          <a href="#">🛒</a>
        </div>
      </div>
      
    </div>
  
    <main class="checkout-container">
        <div class="checkout-form">
            <section class="contact-section">
                <h2>Contact</h2>
                <div class="form-group">
                    <input type="text" placeholder="Email or mobile phone number">
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">Email me with news and offers</label>
                </div>
            </section>

            <section class="delivery-section">
                <h2>Delivery</h2>
                <div class="form-group">
                    <select>
                        <option>United States</option>
                        <option>Canada</option>
                        <option>United Kingdom</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="First name (optional)">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Address">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Apartment, suite, etc. (optional)">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Postal code (optional)">
                    </div>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="save-info">
                    <label for="save-info">Save this information for next time</label>
                </div>
            </section>

            <section class="shipping-section">
                <h2>Shipping method</h2>
                <div class="shipping-option">
                    <div class="shipping-option-text">
                        <span>Standard</span>
                        <span class="free-text">FREE</span>
                    </div>
                </div>
            </section>

            <section class="payment-section">
                <h2>Payment</h2>
                <p class="secure-text">All transactions are secure and encrypted.</p>

                <div class="payment-option">
                    <label for="apple-pay-radio" class="payment-header">
                        <input type="radio" id="apple-pay-radio" name="payment-method" class="payment-radio">
                        <span>Apple Pay</span>
                        <span class="card-icons">
                            <img src="apple.svg" alt="Apple Pay">
                        </span>
                    </label>
                    <div class="payment-form d-none" id="apple-pay-form">
                        <div class="form-group">
                            <input type="text" placeholder="Card number">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" placeholder="Expiration date (MM / YY)">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Security code">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Name on card">
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="billing-address-credit">
                            <label for="billing-address-credit">Use shipping address as billing address</label>
                        </div>
                    </div>
                </div>

                <div class="payment-option">
                    <label for="credit-card-radio" class="payment-header">
                        <input type="radio" id="credit-card-radio" name="payment-method" class="payment-radio">
                        <span>Credit/Debit Card</span>
                        <span class="card-icons">
                            <img src="credit-card.svg" alt="Credit Card">
                        </span>
                    </label>
                    <div class="payment-form d-none" id="credit-card-form">
                        <div class="form-group">
                            <input type="text" placeholder="Card number">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" placeholder="Expiration date (MM / YY)">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Security code">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Name on card">
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="billing-address-credit">
                            <label for="billing-address-credit">Use shipping address as billing address</label>
                        </div>
                    </div>
                </div>
                <a href="success.html">
                <button class="pay-button">Pay now</button>
                </a>
            </section>
        </div>

        <aside class="order-summary">
            <div class="product-list">
               <!--  <div class="product-item">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/70x70" alt="Product Image">
                        <span class="quantity">1</span>
                    </div>
                    <div class="product-info">
                        <h3>Mechanical Gaming Keyboard</h3>
                        <p>RGB / Cherry MX Blue</p>
                    </div>
                    <div class="product-price">£149.99</div>
                </div> -->
            </div>
            <div class="summary-details">
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span id="checkout-subtotal">£0</span>
                </div>
                <div class="summary-row">
                    <span>Shipping</span>
                    <span class="free-text">FREE</span>
                </div>
                <div class="summary-row total">
                    <span>Total</span>
                    <div class="total-amount">
                        <span class="currency">GBP</span>
                        <span id="checkout-total" class="amount">£0</span>
                    </div>
                </div>
            </div>
        </aside>
    </main>
    
    
    <!-- Footer -->
    <footer class="top">
        <div class="links">
            <div class="first-row">
                <div class="links-column">
                    <h2>Get Started</h2>
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                    <a href="login.html">Login</a>
                </div>
                <div class="links-column">
                    <h2>News</h2>
                    <a href="keyboards.php">Keyboards</a>
                    <a href="keyboards.php">Accessories</a>
                    <a href="blog.html">Blog</a>
                    <a href="contactus.php">FAQs</a>
                </div>
                <div class="links-column">
                    <h2>Overview</h2>
                    <a href="./terms-and-conditions.html">Terms Of Use</a>
                    <a href="contactus.php">Contact</a>
                    <a href="./terms-and-conditions.html">Privacy Policy</a>
                    <a href="contactus.php">Support</a>
                </div>
            </div>
        </div>
    </footer>
    <footer class="bottom">
        <p class="copyright">© 2024 All rights reserved</p>
        <div class="legal">
            <a href="./terms-and-conditions.html"> License, privacy, terms & conditions </a>
        </div>
    </footer>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
  
        const subtotalPrice = sessionStorage.getItem('subtotalPrice');
        const totalPrice = sessionStorage.getItem('totalPrice');
        
        if (subtotalPrice) {
          document.getElementById('checkout-subtotal').innerText = `£${subtotalPrice}`;
        }
        if (totalPrice) {
          document.getElementById('checkout-total').innerText = `£${totalPrice}`;
        }
      });
    </script>
    
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;

    // Set default theme to dark mode
    body.classList.add('dark-mode');
    updateThemeToggleButton(true);

    themeToggle.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
        const isDarkMode = body.classList.contains('dark-mode');
        localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
        updateThemeToggleButton(isDarkMode);
    });

    function updateThemeToggleButton(isDarkMode) {
        themeToggle.textContent = isDarkMode ? '☀️' : '🌙';
        themeToggle.setAttribute('aria-label', isDarkMode ? 'Switch to light mode' : 'Switch to dark mode');
    }

    // Payment form toggle functionality
    const paymentHeaders = document.querySelectorAll('.payment-header');
    const paymentForms = document.querySelectorAll('.payment-form');

    paymentHeaders.forEach((header) => {
        header.addEventListener('click', function(event) {
            const radio = this.querySelector('.payment-radio');
            const form = this.nextElementSibling;
            
            // If the clicked form is already open, close it
            if (!form.classList.contains('d-none')) {
                form.classList.add('d-none');
                radio.checked = false;
            } else {
                // Close all forms
                paymentForms.forEach(form => form.classList.add('d-none'));
                
                // Uncheck all radios
                document.querySelectorAll('.payment-radio').forEach(radio => radio.checked = false);
                
                // Open the clicked form and check its radio
                form.classList.remove('d-none');
                radio.checked = true;
            }
            
            event.preventDefault(); // Prevent the default radio button behavior
        });
    });

    // Prevent form submission (for demonstration purposes)
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form submission prevented for this demo.');
        });
    }

    // Add smooth scrolling for mobile devices
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
  </script>
</body>
</html>

<?php
if (isset($_GET['success'])) {
  echo '<script>alert("Email sent successfully!");</script>';
}
if (isset($_GET['error'])) {
  echo '<script>alert("Email sending failed ' . htmlspecialchars($_GET['error']) . '");</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    
  </head>
  <body> <!-- Top Banner PLEASE BE CAUTIOUS WITH THIS AND THE CSS IF EDITING. -->
    <div class="terminusTopBanner">
        <div class="bannerOptions">
            <div class="menuOption" onclick="toggleNav()">☰</div>
            <div id="search-icon" onclick="toggleSearch()">🔍</div>
        </div>
        <div class="bannerFormat">
            <div class="LBannerLinks">
                <a href="about.html">About</a>
                <a href="keyboards.php">Keyboards</a>
            </div>
            <a href="index.html">
                <img src="TerminusLogo.png" alt="Terminus Logo" class="logo">
            </a>

            <div class="RBannerLinks">
                <a href="blog.html">Blog</a>
                <a href="contactus.html">Contact</a>
            </div>
        </div>
        <div class="bannerOptions">
            <div class="userIcon">
                <a href="login.html">
                    <img src="userIcon.png" alt="User Icon">
                </a>
            </div>
            <div class="userBasket">
                <a href="cart.html">🛒</a>
            </div>
        </div>
    </div>
    <!-- Search Bar -->
    <section id="search-bar" class="search-bar" style="display: none;">
        <div class="search-container">
        <input type="text" name="query"class="search-input" placeholder="Search" required>
        <button type="submit">search</button>
        </div>
        <div class="theme-toggle">
            <button id="themeToggle" class="theme-toggle-button" onclick="toggleTheme()">🌙</button>
        </div>
    </section>

    <!-- Sidebar -->
    <div id="terminusSide" class="sidebar">
    <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">×</a>
        <a href="about.html">About</a>
        <a href="keyboards.php">Keyboards</a>
        <a href="blog.html">Our Blog</a>
        <a href="contactus.html">Contact</a>
    </div>

     
    <!-- Support Page -->
    <section class="support">
      <!-- Support Heading with Background Image -->
      <div class="support-heading">
        <div class="heading-overlay">
          <h1>Support</h1>
          <p>We're here to help. Find answers to common questions or contact us directly.</p>
        </div>
      </div>

      <div class="container support-container">
        <!-- FAQ Section -->
        <div class="faq-section">
          <h2>Frequently Asked Questions</h2>
          <div class="faq-list">
            <!-- FAQ Items with Dropdown -->
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>How do I track my order? <span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  Once your order has been shipped, you will receive a tracking number via email. You
                  can use this number to track your order on our website.
                </p>
              </div>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>What is your return policy? <span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  We offer a 30-day return policy for unused products. Please contact our support
                  team to initiate a return.
                </p>
              </div>
            </div>
            <!-- Add more FAQ items here -->
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>How do I contact customer service? <span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  You can reach out to us via the contact form below or email us directly at
                  support@terminus.com.
                </p>
              </div>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>Do you offer international shipping <span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  Yes, we ship worldwide. Shipping costs and delivery times vary depending on your
        location.
                </p>
              </div>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>What payment methods do you accept? <span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  We accept all major credit cards, PayPal, and bank transfers. All transactions are secure.
                </p>
              </div>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>Can I cancel or modify my order?<span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  You can cancel or modify your order within 24 hours of placing it. After that, the order
        will be processed and cannot be changed.
                </p>
              </div>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>Do you offer warranties on your products? <span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  Yes, all our products come with a 1-year limited warranty. Please refer to the warranty
        terms for more details.
                </p>
              </div>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
              <h3>How do I set up my keyboard?<span class="arrow">▼</span></h3>
              <div class="faq-content">
                <p>
                  You can find detailed setup instructions in the user manual included with your purchase or
        on our website under the "Support" section.
                </p>
              </div>
            </div>
            
          </div>
        </div>

        <!-- Policies Section -->
        <div class="policies-section">
          <h2>Policies</h2>
          <div class="policy-item">
            <h3>Contact Policy</h3>
            <p>
              Our support team is available Monday to Friday, 9:00 AM to 6:00 PM. We aim to respond
              to all inquiries within 24 hours.
            </p>
          </div>
          <div class="policy-item">
            <h3>Return Policy</h3>
            <p>
              If you're not satisfied with your purchase, you can return it within 30 days for a full
              refund. Items must be unused and in their original packaging.
            </p>
          </div>
        </div>
    
            <!-- Right Section (Form) -->
            <?php
            $Message = "";
            if(isset($_GET['error']))
            {
            $Message = " Please Fill in the Blanks ";
            echo '<div class="alert alert-danger">'.$Message.'</div>';
            }
            ?>
        <div class="contact-form-section">
          <h2>Still Have Questions?</h2>
          
            <form class="contact-form" action="process-contactform.php" method="post">
                <div class="form-name">
                    <input type="text" name="FirstName" placeholder="FirstName" required>
                    <input type="text" name="LastName" placeholder="LastName" required>
                </div>
                <input type="email" name="EmailAddress" placeholder="EmailAddress" required>
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                <button type="submit" name = "submit" class="btn btn-primary">Send Message</button>
            </form>
            </div>
        </div>
    </section>
    
 
    <section2 style="padding-top: 0px;">
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
              <a href="shop.html">Keyboards</a>
              <a href="#">Accessories</a>
              <a href="configurator">Configurator</a>
              <a href="faq.html">FAQs</a>
            </div>
            
            <div class="links-column">
              <h2>Overview</h2>
              <a href="#">Terms Of Use</a>
              <a href="#">Contact</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Support</a>
            </div>
          </div>

          <div class="second-row">
            <div class="links-column socials-column">
              <h2>Social Media</h2>
              <p>
                Follow us on:
              </p>
              <div class="socials">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-github"></a>
              </div>
            </div>
            <div class="store-logos">
              <img src="https://cdn.afterdawn.fi/v3/news/original/get-it-on-google-play.png" id="play-store">
              <img src="https://digitopoly.files.wordpress.com/2016/06/app-store-logo.png" id="apple-store">
            </div>
          </div>

        </div>
      </footer>
      <footer class="bottom">
        <p class="copyright">© 2024 All rights reserved</p>
        <div class="legal">
          <a> License </a>
          <a> Terms </a>
          <a> Privacy </a>
        </div>
      </footer>
      <script>
        function toggleNav() {
            const sidebar = document.getElementById("terminusSide");
            if (sidebar.style.width === "20vh") {
                sidebar.style.width = "0"; // Close the menu
            } else {
                sidebar.style.width = "20vh"; // Open the menu
            }
        }
        function toggleSearch() {
            const searchBar = document.getElementById('search-bar');
            if (searchBar.style.display === 'none') {
                searchBar.style.display = 'flex';
            } else {
                searchBar.style.display = 'none';
            }
        }
    </script>
    <script src="darkmode.js"></script>
    <script>
      // Toggle FAQ dropdown
      function toggleFAQ(item) {
        item.classList.toggle('active');
      }
    </script>
    </section2></body></html>
 

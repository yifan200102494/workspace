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
                <img src="Compressed_Images/TerminusLogo.png" alt="Terminus Logo" class="logo">
            </a>

            <div class="RBannerLinks">
                <a href="blog.html">Blog</a>
                <a href="contactus.html">Contact</a>
            </div>
        </div>
        <div class="bannerOptions">
            <div class="userIcon">
                <a href="login.html">
                    <img src="Compressed_Images/userIcon.png" alt="User Icon">
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
              can use this number to track your order on our website. If you haven't received your
              tracking number within 3 business days, please check your spam folder or contact us at
              support@terminus.com.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>What is your return policy? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              We offer a 30-day return policy for unused products in their original packaging. To
              initiate a return, please contact our support team with your order number and reason
              for return. Once approved, we will provide you with a return label and instructions.
              Refunds are processed within 5-7 business days after we receive the returned item.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>How do I contact customer service? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              You can reach out to us via the contact form below, email us at support@terminus.com,
              or call our toll-free number at +1-800-555-1234. Our support team is available Monday
              to Friday, 9:00 AM to 6:00 PM (EST). For faster assistance, please include your order
              number and a detailed description of your issue.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>Do you offer international shipping? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              Yes, we ship worldwide! Shipping costs and delivery times vary depending on your
              location. You can calculate shipping costs at checkout. Please note that international
              orders may be subject to customs fees, which are the responsibility of the customer.
              Delivery times typically range from 7-21 business days.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>What payment methods do you accept? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and
              Apple Pay. All transactions are secure and encrypted. If you encounter any issues
              during checkout, please ensure your billing information matches the details on file
              with your payment provider.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>Can I cancel or modify my order? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              You can cancel or modify your order within 24 hours of placing it. After that, the
              order will be processed and cannot be changed. To cancel or modify your order, please
              contact us immediately at support@terminus.com with your order number and requested
              changes. If your order has already shipped, you may need to return it upon delivery.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>Do you offer warranties on your products? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              Yes, all our products come with a 1-year limited warranty that covers manufacturing
              defects. If you experience any issues with your product, please contact us with proof
              of purchase and a description of the problem. Warranty claims are processed within
              7-10 business days. Please note that the warranty does not cover damage caused by
              misuse or normal wear and tear.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>How do I set up my keyboard? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              You can find detailed setup instructions in the user manual included with your purchase
              or on our website under the "Support" section. For advanced customization, download
              our companion app from the App Store or Google Play. If you encounter any issues
              during setup, please refer to our troubleshooting guide or contact our support team.
            </p>
          </div>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)">
          <h3>What should I do if my product is defective? <span class="arrow">▼</span></h3>
          <div class="faq-content">
            <p>
              If you receive a defective product, please contact us immediately at
              support@terminus.com with your order number, photos of the defect, and a description
              of the issue. We will either send a replacement or provide a full refund, depending on
              your preference. Defective items must be returned within 30 days of delivery.
            </p>
          </div>
        </div>
      
      </div>
    </div>

      <!-- Policies Section -->
      <div class="policies-section">
        <h2>Policies</h2>
        <div class="policy-item">
          <h3>Returns & Refunds</h3>
          <p>
            Unused items can be returned within 30 days for a full refund. Contact us for a return authorisation.
          </p>
        </div>
        <div class="policy-item">
          <h3>Shipping</h3>
          <p>
            Free shipping on orders over £99 (UK only). International shipping costs apply. Track your order with the provided tracking number.
          </p>
        </div>
        <div class="policy-item">
          <h3>Privacy</h3>
          <p>
            Your data is safe with us. Read our full <a href="/privacy-policy">Privacy Policy</a> for details.
          </p>
        </div>
        <div class="policy-item">
          <h3>Warranty</h3>
          <p>
            All products come with a 1-year limited warranty. Contact us for warranty claims.
          </p>
        </div>
      </div>

      </div>
      <div class="contact-section">
        <div class="contact-container">
    
            <!-- Right Section (Form) -->
            <?php
            $Message = "";
            if(isset($_GET['error']))
            {
            $Message = " Please Fill in the Blanks ";
            echo '<div class="alert alert-danger">'.$Message.'</div>';
            }
            ?>
        <div class="contact-form">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? Reach out to us!</p>
          
            <form class="contact-form" action="process-contactform.php" method="post">
            <div class="form-row">
            <div class="form-group">
                    <input type="text" name="FirstName" placeholder="FirstName" required>
                </div>
                <div class="form-group">
                <input type="text" name="LastName" placeholder="LastName" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                <input type="email" name="EmailAddress" placeholder="EmailAddress" required>
                </div>
                <div class="form-group">
                <input type="tel" id="phone" name="phone" placeholder="Phone Number">
                </div>
              </div>
              <div class="form-group">
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                </div>
                <button type="submit" name = "submit" class="btn btn-primary">Send Message</button>
            </form>
            </div>
        
    
 
 <!-- Contact Information -->
 <div class="contact-info">
            <h2>Contact Information</h2>
            <p>For any inquiries, reach out to us at:</p>
            <div class="contact-details">
              <div class="detail">
                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET21.jpg" alt="Phone Icon">
                <p><strong>Phone:</strong> +1-800-555-1234</p>
              </div>
              <div class="detail">
                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET22.jpg" alt="Email Icon">
                <p><strong>Email:</strong> support@terminus.com</p>
              </div>
              <div class="detail">
                <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET23.jpg" alt="Hours Icon">
                <p><strong>Hours:</strong> Mon-Fri, 9:00 AM - 6:00 PM (EST)</p>
              </div>
            </div>
            <div class="social-links">
              <a href="#"><img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg" alt="Mail"></a>
              <a href="#"><img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg" alt="Twitter"></a>
              <a href="#"><img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg" alt="Instagram"></a>
              <a href="#"><img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg" alt="Facebook"></a>
            </div>
          </div>
        </div>
      </div>

      </section>

    
 
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
                  <a href="keyboards.html">Keyboards</a>
                  <a href="keyboards.html">Accessories</a>
                  <a href="blog.html">Blog</a>
                  <a href="contactus.html">FAQs</a>
              </div>
              <div class="links-column">
                  <h2>Overview</h2>
                  <a href="./terms-and-conditions.html">Terms Of Use</a>
                  <a href="contactus.html">Contact</a>
                  <a href="./terms-and-conditions.html">Privacy Policy</a>
                  <a href="contactus.html">Support</a>
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
 

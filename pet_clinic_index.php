<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Clinic Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fdfdfd;
      margin: 0;
    }
    
    .topbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background-color: #4e342e;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between; 
      padding: 0 20px;
      z-index: 1000;
    }
    .topbar .logo-section {
      display: flex;
      align-items: center;
    }
    .topbar .logo-section img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
      background: #fff;
      padding: 3px;
    }
    .topbar .logo-section span {
      font-size: 1.5rem;
      font-weight: bold;
    }
    
    .topbar .profile-pic {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 2px solid #fff;
      object-fit: cover;
      cursor: pointer;
    }
    
    .sidebar {
      width: 230px;
      background-color: #6d4c41;
      color: #fff;
      flex-shrink: 0;
      min-height: 100vh;
      position: fixed;
      top: 60px; 
      left: 0;
      padding-top: 20px;
    }
    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: #fff;
      text-decoration: none;
      font-weight: 500;
    }
    .sidebar a:hover {
      background-color: #4e342e;
    }
  
    .content {
      margin-left: 230px;
      margin-top: 60px; 
      width: calc(100% - 230px);
    }
    .section-title {
      color: #915a4e;
      padding: 15px 20px;
      margin-bottom: 20px;
    }
    footer {
      background: #4e342e;
      color: #fff;
      text-align: center;
      padding: 15px 0;
      margin-top: 40px;
    }
    .btn-brown {
      background-color: #6d4c41;
      color: #fff;
      border-radius: 8px;
      padding: 10px;
      font-size: 16px;
      font-weight: 500;
    }
    .btn-brown:hover {
      background-color: #4e342e;
      color: #fff;
    }
  </style>
</head>
<body>

  <div class="topbar">
    <div class="logo-section">
      
      <img src="logo.png" alt="Pet Clinic Logo">
      <span>Pet Clinic</span>
    </div>
    
    <img src="p_logo.png" alt="Profile" class="profile-pic">
  </div>


  <div class="sidebar">
    <a href="#home">Home</a>
    <a href="#services">Services</a>
    <a href="#about">About Us</a>
    <a href="#contact">Contact</a>
  </div>

  <div class="content">

    <section id="home">
      <div id="petCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="s1.jpg" class="d-block w-100" height="700" alt="Pet 1">
          </div>
          <div class="carousel-item">
            <img src="s2.jpg" class="d-block w-100" height="700" alt="Pet 2">
          </div>
          <div class="carousel-item">
            <img src="s3.jpg" class="d-block w-100" height="700" alt="Pet 3">
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="py-5" style="background-color: #fffaf5;">
      <div class="container">
        <h2 class="section-title text-center mb-5">Our Services</h2>
        <div class="row g-4">

          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded">
              <div class="card-body text-center">
                <i class="fas fa-stethoscope fa-3x mb-3" style="color: #8d6e63;"></i>
                <h5 class="card-title">Veterinary Care</h5>
                <p class="card-text">
                  Comprehensive health check-ups, vaccinations, and treatment to keep your pets healthy.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded">
              <div class="card-body text-center">
                <i class="fas fa-cut fa-3x mb-3" style="color: #a1887f;"></i>
                <h5 class="card-title">Grooming</h5>
                <p class="card-text">
                  Professional grooming services including bathing, trimming, and nail care.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded">
              <div class="card-body text-center">
                <i class="fas fa-bone fa-3x mb-3" style="color: #6d4c41;"></i>
                <h5 class="card-title">Nutrition & Care</h5>
                <p class="card-text">
                  Expert advice on pet nutrition, diet plans, and overall care for long-term wellness.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="about" class="py-5" style="background-color: #f9f6f2;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0">
            <img src="logo.png" alt="Pet Clinic" class="img-fluid rounded shadow" style="background: #ffff;">
          </div>
          <div class="col-md-6">
            <h2 class="section-title">About Us</h2>
            <p style="font-size: 1.1rem; line-height: 1.7;">
              At <b>Pet Clinic</b>, we believe pets are more than just animals - they're family. 
              Our mission is to provide the best medical care, grooming, and guidance so that your furry friends live long, healthy, and happy lives.
            </p>
            <blockquote class="blockquote" style="font-style: italic; color: #4e342e;">
              "Because every pet deserves love, care, and compassion."
            </blockquote>
            <p>
              With experienced veterinarians and modern facilities, we ensure that every visit brings comfort and trust - for both you and your pets.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="py-5" style="background-color: #fffaf5;">
      <div class="container">
        <h2 class="section-title text-center mb-5">Contact Us</h2>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form class="p-4 shadow-sm rounded bg-white" action="save_contact.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" name="name" required placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" name="email" required placeholder="Enter your email">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="4" required placeholder="Write your message"></textarea>
              </div>
              <button type="submit" class="btn btn-brown w-100">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>&copy; 2025 Pet Clinic Management System | All Rights Reserved</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const carouselElement = document.querySelector('#petCarousel');
    new bootstrap.Carousel(carouselElement, { interval: 2000, ride: 'carousel' });
  </script>
</body>
</html>

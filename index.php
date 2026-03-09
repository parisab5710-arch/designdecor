<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stellar Drape & Hue | Stellar Interior Design & Decor</title>
  <meta name="description" content="Discover bespoke drapery, custom upholstery, and astronomical-themed decor crafted by Stellar Drape & Hue. Elevate your residential and commercial spaces.">
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.bunny.net/css?family=Roboto:400,600|Libre+Baskerville&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-light: #6EE6F6;
      --primary: #0ED6F0;
      --primary-dark: #0996A8;
      --background-clean: #FFFFFF;
      --surface-light: #F8F9FA;
      --text-dark: #212529;
      --border-radius-base: 20px;
      --section-spacing: 5rem;
    }

    body {
      font-family: 'Roboto', sans-serif;
      color: var(--text-dark);
      background-color: var(--background-clean);
      line-height: 1.6;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Libre Baskerville', serif;
      font-weight: 600;
      color: var(--text-dark);
    }

    .btn-primary {
      background: linear-gradient(45deg, var(--primary-dark) 0%, var(--primary) 50%, var(--primary-light) 100%);
      border: none;
      border-radius: var(--border-radius-base);
      padding: 0.75rem 1.75rem;
      font-weight: 600;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      color: #fff; /* Ensure text is white for contrast */
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 16px rgba(14, 214, 240, 0.3);
      color: #fff;
    }

    .navbar-brand img {
      height: 40px; /* Adjust as needed */
    }

    .nav-link {
      color: var(--text-dark) !important;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: var(--primary) !important;
    }

    .section-spacing {
      padding-top: var(--section-spacing);
      padding-bottom: var(--section-spacing);
    }

    .card {
      border: none;
      border-radius: var(--border-radius-base);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden; /* For image in card */
      background-color: var(--surface-light);
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .card-img-top, .card-img-bottom {
      border-radius: var(--border-radius-base) var(--border-radius-base) 0 0;
      width: 100%;
      height: auto;
    }
    .card-img-full-height {
      object-fit: cover;
      height: 100%;
    }

    .rounded-square-icon {
      border-radius: 12px;
      padding: 10px;
      background-color: var(--primary-light);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 64px;
      height: 64px;
      object-fit: contain;
    }

    .hover-zoom-img {
      transition: transform 0.6s ease;
    }

    .hover-zoom-img:hover {
      transform: scale(1.08);
    }

    .footer {
      background-color: #212529; /* Dark background for contrast */
      color: #ffffff; /* Light text */
    }
    .footer a {
      color: var(--primary-light);
      text-decoration: none;
    }
    .footer a:hover {
      color: var(--primary);
    }
    .text-light {
      color: #ffffff !important;
    }
    .text-muted {
        color: rgba(255, 255, 255, 0.7) !important;
    }
  </style>
</head>
<body>
  <header class="navbar navbar-expand-lg bg-white sticky-top py-3 shadow-sm">
    <div class="container-fluid container-xl">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20ZM7.5 12C7.5 10.62 8.62 9.5 10 9.5C11.38 9.5 12.5 10.62 12.5 12C12.5 13.38 11.38 14.5 10 14.5C8.62 14.5 7.5 13.38 7.5 12ZM14.99 15.5C14.07 14.7 13.5 13.58 13.5 12C13.5 10.42 14.07 9.3 14.99 8.5C16.45 7.2 18.5 7.2 19.96 8.5C20.88 9.3 21.49 10.42 21.49 12C21.49 13.58 20.88 14.7 19.96 15.5C18.5 16.8 16.45 16.8 14.99 15.5Z" fill="var(--primary)"/>
          <path d="M10 13C9.44772 13 9 12.5523 9 12C9 11.4477 9.44772 11 10 11C10.5523 11 11 11.4477 11 12C11 12.5523 10.5523 13 10 13Z" fill="var(--primary-dark)"/>
          <path d="M16 13C15.4477 13 15 12.5523 15 12C15 11.4477 15.4477 11 16 11C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13Z" fill="var(--primary-dark)"/>
        </svg>
        <span class="ms-2 h4 mb-0">Stellar Drape & Hue</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
<main>
    <section id="hero" class="bg-white section-spacing py-5 py-md-0">
      <div class="container-fluid container-xl">
        <div class="row align-items-center justify-content-between g-4">
          <div class="col-12 col-md-6 order-md-1">
            <h1 class="display-3 fw-bold mb-4">Transforming Spaces with Celestial Elegance</h1>
            <p class="lead mb-4">Welcome to Stellar Drape & Hue. We merge modern interior design with breathtaking astronomical-themed decor, bespoke drapery, and custom upholstery.</p>
            <a href="#contact" class="btn btn-primary btn-lg">Book a Color Consultation</a>
          </div>
          <div class="col-12 col-md-6 order-md-2">
            <img src="images/hero-split-left-living-space.jpeg" alt="Modern living room with stargazing window and custom drapery by Stellar Drape & Hue" class="img-fluid rounded hover-zoom-img" width="896" height="896" style="border-radius: var(--border-radius-base);">
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="section-spacing bg-white">
      <div class="container-fluid container-xl">
        <div class="row align-items-center flex-row-reverse gx-5">
          <div class="col-12 col-md-6 mb-4 mb-md-0">
            <img src="images/about-designer-studio.jpeg" alt="Stellar Drape & Hue interior designer reviewing celestial fabric swatches" class="img-fluid rounded hover-zoom-img" width="768" height="512" style="border-radius: var(--border-radius-base);">
          </div>
          <div class="col-12 col-md-6">
            <h2 class="display-5 mb-4">The Vision of Stellar Drape & Hue</h2>
            <p class="fs-5 mb-3">At Stellar Drape & Hue, we believe that every room should tell a story that reaches beyond the horizon. Our approach to space planning integrates functional modern minimalism with a distinct cosmic charm.</p>
            <p class="fs-5 mb-0">Operating out of New York, we specialize in curating textiles, lighting, and layout configurations that evoke the tranquility and vastness of the cosmos, all tailored flawlessly to your lifestyle.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section-spacing bg-white">
      <div class="container-fluid container-xxl">
        <h2 class="text-center display-5 mb-3">Our Stellar Services</h2>
        <p class="text-center lead mb-5">Discover the bespoke offerings provided by Stellar Drape & Hue.</p>

        <div class="row g-4 justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="card h-100 bounce-on-view">
              <div class="row g-0">
                <div class="col-md-7">
                  <img src="images/service-astronomical-decor.jpeg" class="card-img-full-height rounded-start hover-zoom-img" alt="Space planning blueprint with astronomical accents" width="768" height="512" style="object-fit: cover;">
                </div>
                <div class="col-md-5 d-flex align-items-center">
                  <div class="card-body p-4">
                    <h3 class="card-title fw-bold">Astronomical-Themed Decor & Space Planning</h3>
                    <p class="card-text">Our signature service. We redesign entire rooms to reflect the beauty of the cosmos, optimizing space flow while introducing stellar ambient lighting, moon-texture finishes, and star-map accent walls.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="row g-4">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card h-100 d-flex flex-column align-items-start p-4 bounce-on-view">
                  <img src="images/icon-drapery.jpeg" alt="Drapery icon" class="rounded-square-icon mb-3" width="64" height="64">
                  <h3 class="card-title fw-bold">Bespoke Drapery</h3>
                  <p class="card-text">Custom-tailored drapes utilizing high-grade sound-dampening and light-blocking fabrics for perfect room ambiance.</p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card h-100 d-flex flex-column align-items-start p-4 bounce-on-view">
                  <img src="images/icon-upholstery.jpeg" alt="Upholstery icon" class="rounded-square-icon mb-3" width="64" height="64">
                  <h3 class="card-title fw-bold">Custom Upholstery</h3>
                  <p class="card-text">Revitalize your furniture with luxury fabrics curated by Stellar Drape & Hue, bringing new life to cherished pieces with cosmic flair.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="card h-100 p-4 bounce-on-view">
              <div class="row g-0 align-items-center">
                <div class="col-md-6">
                  <img src="images/service-color-consult.jpeg" class="img-fluid rounded-start mb-3 mb-md-0 hover-zoom-img" alt="Color swatches and palettes" width="512" height="512" style="object-fit: cover;">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h3 class="card-title fw-bold">Color Consultation</h3>
                    <p class="card-text">In-depth hue analysis to match your natural lighting and desired psychological ambiance, drawing inspiration from celestial palettes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="card h-100 p-4 bounce-on-view">
              <div class="row g-0 align-items-center">
                <div class="col-md-6">
                  <img src="images/service-home-staging.jpeg" class="img-fluid rounded-start mb-3 mb-md-0 hover-zoom-img" alt="Staged modern home interior" width="512" height="512" style="object-fit: cover;">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h3 class="card-title fw-bold">Home Staging</h3>
                    <p class="card-text">Strategic, beautiful staging that highlights your property's best architectural features, creating an irresistible first impression.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="section-spacing bg-white">
      <div class="container-fluid container-xxl">
        <h2 class="text-center display-5 mb-5">Recent Galactic Interiors</h2>
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 bounce-on-view">
              <img src="images/portfolio-nebula-lounge.jpeg" class="card-img-top hover-zoom-img" alt="Nebula-inspired lounge room by Stellar Drape & Hue" width="640" height="896" style="object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title fw-bold">Nebula Lounge Transformation</h5>
                <p class="card-text">A residential lounge reimagined with swirling celestial patterns, ambient LED lighting, and deep space blues.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 bounce-on-view">
              <img src="images/portfolio-eclipse-dining.jpeg" class="card-img-top hover-zoom-img" alt="Eclipse-themed dining area with custom drapes" width="640" height="448" style="object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title fw-bold">Eclipse Dining Area</h5>
                <p class="card-text">Elegant dining space featuring custom drapery and subtle eclipse motifs, creating a dramatic yet inviting atmosphere.</p>
              </div>
            </div>
            <div class="card h-100 mt-4 bounce-on-view">
              <img src="images/portfolio-lunar-bedroom.jpeg" class="card-img-top hover-zoom-img" alt="Lunar textured bespoke upholstery in a bedroom setting" width="640" height="448" style="object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title fw-bold">Lunar Retreat Bedroom</h5>
                <p class="card-text">A serene bedroom haven with bespoke upholstery in lunar textures and soft, diffused lighting for restful evenings.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 d-none d-lg-block">
            <div class="card h-100 hover-zoom-img" style="min-height: 700px; background: url('images/portfolio-nebula-lounge.jpeg') center center / cover no-repeat; border-radius: var(--border-radius-base);">
              <div class="card-body text-white d-flex align-items-end" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 50%); border-radius: var(--border-radius-base);">
                <div>
                  <h5 class="card-title fw-bold text-light">Starfield Home Office</h5>
                  <p class="card-text text-light">Inspiring home office design with a bespoke ceiling decal of a starfield, stimulating creativity and focus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing bg-light">
      <div class="container-fluid container-xl">
        <h2 class="text-center display-5 mb-5">Client Constellations</h2>
        <div class="row g-4 justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="card p-4 h-100 bounce-on-view">
              <div class="d-flex align-items-center mb-3">
                <img src="images/testimonial-avatar-elena.jpeg" alt="Elena R." class="rounded-circle me-3" width="128" height="128" style="object-fit:cover;">
                <div>
                  <h5 class="mb-0 fw-bold">Elena R.</h5>
                  <small class="text-muted">Penthouse Owner, Manhattan</small>
                </div>
              </div>
              <blockquote class="blockquote mb-0 fs-5">
                <p>"Stellar Drape & Hue completely transformed my penthouse. The astronomical-themed decor they integrated alongside the bespoke drapery makes my living room feel like a luxury observation deck. Flawless execution and highly communicative team!"</p>
              </blockquote>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="row g-4">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card p-4 h-100 d-flex flex-column justify-content-between bounce-on-view">
                  <div>
                    <div class="d-flex align-items-center mb-3">
                      <img src="images/testimonial-avatar-mark.jpeg" alt="Mark T." class="rounded-circle me-3" width="128" height="128" style="object-fit:cover;">
                      <div>
                        <h5 class="mb-0 fw-bold">Mark T.</h5>
                        <small class="text-muted">Collector, Brooklyn</small>
                      </div>
                    </div>
                    <blockquote class="blockquote mb-0">
                      <p>"The custom upholstery work gave our antique chairs a stunning, modern cosmic lease on life, exceeding all expectations."</p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card p-4 h-100 d-flex flex-column justify-content-between bounce-on-view">
                  <div>
                    <div class="d-flex align-items-center mb-3">
                      <img src="images/testimonial-avatar-sarah.jpeg" alt="Sarah J." class="rounded-circle me-3" width="128" height="128" style="object-fit:cover;">
                      <div>
                        <h5 class="mb-0 fw-bold">Sarah J.</h5>
                        <small class="text-muted">Homeowner, Upstate New York</small>
                      </div>
                    </div>
                    <blockquote class="blockquote mb-0">
                      <p>"Incredible space planning. The color consultation opened my eyes to deep nebular blues, transforming my home's atmosphere."</p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-spacing bg-white">
      <div class="container-fluid container-xl">
        <div class="row justify-content-between g-5">
          <div class="col-12 col-lg-6">
            <h2 class="display-5 mb-4">Connect with Stellar Drape & Hue</h2>
            <p class="lead mb-4">Ready to revitalize your space? Reach out for space planning or drapery inquiries. We're eager to bring your stellar vision to life.</p>
            <div class="mb-3">
              <p class="fw-bold mb-1">Address:</p>
              <address>
                400 Pennsylvania Avenue<br>
                New York, NY 11207, USA
              </address>
            </div>
            <div class="mb-3">
              <p class="fw-bold mb-1">Phone:</p>
              <p><a href="tel:+17739046871" class="text-decoration-none text-dark">+1 (773) 904-6871</a></p>
            </div>
            <div class="mb-4">
              <p class="fw-bold mb-1">Email:</p>
              <p><a href="mailto:info@stellardrapehue.com" class="text-decoration-none text-dark">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
            </div>
            <div class="map-responsive" style="height: 300px; border-radius: var(--border-radius-base); overflow: hidden;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1512.4503023223126!2d-73.97825!3d40.71278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250e181d2c65f%3A0x7d6a5fe6b6c0e86b!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <h3 class="mb-4">Send Us a Message</h3>
            <form action="#" method="POST" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required style="border-radius: 10px;">
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required style="border-radius: 10px;">
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number (Optional)</label>
                <input type="tel" class="form-control" id="phone" name="phone" style="border-radius: 10px;">
              </div>
              <div class="mb-3">
                <label for="service" class="form-label">Interested Service</label>
                <select class="form-select" id="service" name="service" required style="border-radius: 10px;">
                  <option selected disabled value="">Choose...</option>
                  <option>Astronomical-Themed Decor & Space Planning</option>
                  <option>Bespoke Drapery</option>
                  <option>Custom Upholstery</option>
                  <option>Color Consultation</option>
                  <option>Home Staging</option>
                  <option>Other / General Inquiry</option>
                </select>
                <div class="invalid-feedback">Please select a service.</div>
              </div>
              <div class="mb-4">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required style="border-radius: 10px;"></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="footer py-5">
    <div class="container-fluid container-xl">
      <div class="row g-4">
        <div class="col-12 col-md-4 text-center text-md-start">
          <h5 class="fw-bold mb-3 text-light">Stellar Drape & Hue</h5>
          <p class="text-muted">Elevating spaces with celestial design and bespoke craftsmanship since 20XX.</p>
        </div>
        <div class="col-12 col-md-4 text-center ">
          <h5 class="fw-bold mb-3 text-light">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#about" class="text-decoration-none">About Us</a></li>
            <li><a href="#services" class="text-decoration-none">Services</a></li>
            <li><a href="#portfolio" class="text-decoration-none">Portfolio</a></li>
            <li><a href="#contact" class="text-decoration-none">Contact</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-4 text-center text-md-end">
          <h5 class="fw-bold mb-3 text-light">Legal</h5>
          <ul class="list-unstyled">
            <li><a href="./privacy.html" class="text-decoration-none">Privacy Policy</a></li>
            <li><a href="./tos.html" class="text-decoration-none">Terms of Service</a></li>
          </ul>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 text-center">
          <p class="text-muted mb-0">&copy; 2024 Stellar Drape & Hue. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <div id="cookieConsentBanner" class="fixed-bottom bg-dark text-white-50 p-3 d-flex align-items-center justify-content-between flex-wrap" style="z-index: 1050; display: none;">
    <p class="mb-0 me-3">We use cookies to ensure you get the best experience on our website. By continuing, you agree to our <a href="./privacy.html" class="text-decoration-none" style="color: var(--primary-light);">Privacy Policy</a>.</p>
    <button id="acceptCookies" class="btn btn-sm btn-primary mt-2 mt-md-0">Accept</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple JS for form validation
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()

    // Cookie Consent
    const consent_cookieName = 'Stellar Drape & Hue_consent_accepted'; // Unique cookie name prefix
    const cookieConsentBanner = document.getElementById('cookieConsentBanner');
    const acceptCookiesButton = document.getElementById('acceptCookies');

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i=0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

    window.onload = function() {
        if (!getCookie(consent_cookieName)) {
            cookieConsentBanner.style.display = 'flex';
        }
    };

    acceptCookiesButton.onclick = function() {
        setCookie(consent_cookieName, 'true', 365); // Consent for 1 year
        cookieConsentBanner.style.display = 'none';
    };

    // Simple scroll-based fade-in effect for cards
    const cards = document.querySelectorAll('.bounce-on-view');
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    cards.forEach(card => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(20px)';
      observer.observe(card);
    });
  </script>
</body>
</html>
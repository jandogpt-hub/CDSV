<?php
$pageTitle = 'Car Detailing Service Visalia | Premium Auto Detailing';
$pageDescription = 'Premium car detailing service in Visalia, CA. Expert paint correction, ceramic coating, interior detailing, and mobile detailing services. Book your appointment today.';
?>
<?php include 'header.php'; ?>

<style>
    /* Hero Section Styles */
    .hero-image-section {
        position: relative;
        width: 100%;
        height: 70vh;
        min-height: 500px;
        overflow: hidden;
    }
    
    .hero-image-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, 
            rgba(5, 5, 5, 0.3) 0%,
            rgba(5, 5, 5, 0.1) 40%,
            rgba(5, 5, 5, 0.7) 80%,
            rgba(5, 5, 5, 1) 100%);
        z-index: 2;
    }
    
    .hero-image-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .hero-content-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 3;
        padding: 40px;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    .hero-tagline {
        font-family: var(--font-mono);
        font-size: 0.8rem;
        color: var(--accent-green);
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 20px;
    }
    
    .hero-title {
        font-size: clamp(2.5rem, 10vw, 6rem);
        font-weight: 900;
        line-height: 0.9;
        letter-spacing: -0.03em;
        text-transform: uppercase;
        margin-bottom: 30px;
    }
    
    .hero-subtitle {
        font-family: var(--font-mono);
        font-size: 0.85rem;
        color: var(--muted);
        max-width: 500px;
        line-height: 1.8;
    }
    
    .green-accent {
        color: var(--accent-green);
    }
    
    /* Service Cards */
    .service-card {
        border: 1px solid var(--border);
        padding: 30px;
        transition: all 0.4s var(--transition);
        position: relative;
        overflow: hidden;
    }
    
    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 0;
        background: var(--accent-green);
        transition: height 0.4s var(--transition);
    }
    
    .service-card:hover {
        border-color: var(--accent-green);
        background: rgba(0, 184, 76, 0.05);
    }
    
    .service-card:hover::before {
        height: 100%;
    }
    
    /* Section Styles */
    .section-label {
        font-size: 0.8rem;
        font-family: var(--font-mono);
        color: var(--accent-green);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }
    
    .section-title {
        font-size: clamp(1.8rem, 5vw, 2.5rem);
        font-weight: 900;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    
    .section-subtitle {
        font-family: var(--font-mono);
        font-size: 0.85rem;
        color: var(--muted);
        line-height: 1.8;
        max-width: 600px;
    }
    
    /* Testimonial Cards */
    .testimonial-card {
        border: 1px solid var(--border);
        padding: 30px;
        position: relative;
    }
    
    .testimonial-card::before {
        content: '"';
        position: absolute;
        top: 15px;
        left: 20px;
        font-size: 4rem;
        color: var(--accent-green);
        opacity: 0.3;
        font-family: Georgia, serif;
        line-height: 1;
    }
    
    .testimonial-text {
        font-family: var(--font-mono);
        font-size: 0.85rem;
        color: var(--muted);
        line-height: 1.8;
        margin-bottom: 20px;
        padding-top: 20px;
    }
    
    .testimonial-author {
        font-family: var(--font-mono);
        font-size: 0.75rem;
        color: var(--accent);
    }
    
    .testimonial-location {
        font-family: var(--font-mono);
        font-size: 0.7rem;
        color: var(--accent-green);
    }
    
    /* Portfolio Grid */
    .portfolio-card {
        position: relative;
        overflow: hidden;
        aspect-ratio: 4/3;
        border: 1px solid var(--border);
    }
    
    .portfolio-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s var(--transition);
    }
    
    .portfolio-card:hover img {
        transform: scale(1.05);
    }
    
    .portfolio-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(to top, rgba(5,5,5,0.9), transparent);
    }
    
    .portfolio-label {
        font-family: var(--font-mono);
        font-size: 0.7rem;
        color: var(--accent-green);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .portfolio-title {
        font-size: 1rem;
        margin-top: 5px;
    }
    
    /* Mobile Service Feature */
    .feature-box {
        border: 1px solid var(--border);
        padding: 25px;
        text-align: center;
        transition: all 0.3s var(--transition);
    }
    
    .feature-box:hover {
        border-color: var(--accent-green);
    }
    
    .feature-icon {
        font-size: 2rem;
        margin-bottom: 15px;
    }
    
    .feature-title {
        font-family: var(--font-mono);
        font-size: 0.85rem;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    
    .feature-text {
        font-family: var(--font-mono);
        font-size: 0.75rem;
        color: var(--muted);
        line-height: 1.6;
    }
    
    /* FAQ Accordion */
    .faq-item {
        border-bottom: 1px solid var(--border);
    }
    
    .faq-question {
        padding: 25px 0;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: var(--font-mono);
        font-size: 0.9rem;
        transition: color 0.3s var(--transition);
    }
    
    .faq-question:hover {
        color: var(--accent-green);
    }
    
    .faq-toggle {
        font-size: 1.5rem;
        color: var(--accent-green);
        transition: transform 0.3s var(--transition);
    }
    
    .faq-item.active .faq-toggle {
        transform: rotate(45deg);
    }
    
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s var(--transition);
    }
    
    .faq-item.active .faq-answer {
        max-height: 300px;
    }
    
    .faq-answer-inner {
        padding-bottom: 25px;
        font-family: var(--font-mono);
        font-size: 0.8rem;
        color: var(--muted);
        line-height: 1.8;
    }
    
    /* Appointment Form Section */
    .appointment-form-container {
        border: 1px solid var(--accent-green);
        padding: 40px;
        background: rgba(0, 184, 76, 0.03);
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-label {
        display: block;
        font-family: var(--font-mono);
        font-size: 0.75rem;
        color: var(--muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }
    
    .form-input, .form-select, .form-textarea {
        width: 100%;
        padding: 15px;
        background: var(--surface);
        border: 1px solid var(--border);
        color: var(--accent);
        font-family: var(--font-mono);
        font-size: 0.85rem;
        transition: border-color 0.3s var(--transition);
    }
    
    .form-input:focus, .form-select:focus, .form-textarea:focus {
        outline: none;
        border-color: var(--accent-green);
    }
    
    .form-textarea {
        min-height: 120px;
        resize: vertical;
    }
    
    @media (min-width: 768px) {
        .hero-content-overlay {
            padding: 60px;
        }
        
        .hero-image-section {
            height: 80vh;
        }
    }
</style>

<?php include 'globalheader.php'; ?>

    <main>
        <!-- Hero Image Section -->
        <section class="hero-image-section">
            <img src="/images/hero-luxury-car.png" alt="Premium ceramic coated luxury sports car with dramatic lighting">
            <div class="hero-content-overlay">
                <p class="hero-tagline">The Royal Touch</p>
                <h1 class="hero-title">PREMIUM<br><span class="green-accent">DETAILING</span></h1>
                <p class="hero-subtitle">
                    Aviation-grade ceramic coatings & paint correction in Visalia. 
                    16+ years experience. Carfax registered. We come to you.
                </p>
            </div>
        </section>

        <!-- Quick Stats -->
        <section style="padding: 60px 40px; border-bottom: 1px solid var(--border);">
            <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; text-align: center;">
                <div>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-green);">16+</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Years Experience</div>
                </div>
                <div>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-green);">$1M</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Fully Insured</div>
                </div>
                <div>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-green);">100%</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Satisfaction Guarantee</div>
                </div>
                <div>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-green);">✓</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Carfax Registered</div>
                </div>
            </div>
        </section>

        <!-- Services Grid -->
        <section style="padding: 80px 40px; max-width: 1200px; margin: 0 auto;">
            <p class="section-label">Our Services</p>
            <h2 class="section-title">What We <span class="green-accent">Offer</span></h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 40px;">
                <a href="/services/surface-protection.php" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-green); margin-bottom: 15px;">01</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Surface Protection</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        Ceramic coating, PPF, and paint sealants. 5, 7, and 10-year warranties with Carfax registration.
                    </p>
                </a>
                
                <a href="/services/specialty-restoration.php#paint-correction" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-green); margin-bottom: 15px;">02</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Paint Correction</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        Multi-stage polishing to eliminate swirls, scratches, and oxidation. Restore showroom finish.
                    </p>
                </a>
                
                <a href="/services/interior-detailing.php" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-green); margin-bottom: 15px;">03</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Interior Detailing</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        Deep cleaning, leather conditioning, and odor removal. Hot water extraction & ozone treatment.
                    </p>
                </a>
                
                <a href="/services/specialty-restoration.php#mobile-services" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-green); margin-bottom: 15px;">04</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Mobile Service</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        We come to your home or office. Fully self-contained with RO purified water system.
                    </p>
                </a>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section" style="padding: 100px 40px; background: linear-gradient(to bottom, var(--bg), rgba(0, 184, 76, 0.05));">
            <div style="max-width: 600px; margin: 0 auto; text-align: center;">
                <p class="section-label">Experience The Royal Touch</p>
                <h2 class="section-title">Ready to transform your vehicle?</h2>
                <a href="#book-appointment" class="tensile-button">Get a Free Quote</a>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section style="padding: 80px 40px; max-width: 1200px; margin: 0 auto;">
            <p class="section-label">Client Reviews</p>
            <h2 class="section-title">What Our <span class="green-accent">Clients Say</span></h2>
            <p class="section-subtitle">Real feedback from real customers across the Central Valley.</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
                <div class="testimonial-card">
                    <p class="testimonial-text">
                        "Absolutely blown away by the ceramic coating. My truck looks better than when I bought it new. The paint correction removed years of swirl marks."
                    </p>
                    <p class="testimonial-author">— Michael R.</p>
                    <p class="testimonial-location">Visalia, CA</p>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">
                        "The convenience of mobile service is unbeatable. They came to my office, and when I left work, my car was spotless. Professional and thorough."
                    </p>
                    <p class="testimonial-author">— Sarah T.</p>
                    <p class="testimonial-location">Tulare, CA</p>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">
                        "Had severe swirl marks from automatic car washes. After their 3-step correction, the paint looks like glass. Worth every penny."
                    </p>
                    <p class="testimonial-author">— David L.</p>
                    <p class="testimonial-location">Hanford, CA</p>
                </div>
            </div>
        </section>

        <!-- Mobile Service Promotion -->
        <section style="padding: 80px 40px; background: var(--surface); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: 1fr; gap: 60px; align-items: center;">
                    <div style="text-align: center;">
                        <p class="section-label">We Come To You</p>
                        <h2 class="section-title">Fully <span class="green-accent">Mobile</span> Service</h2>
                        <p class="section-subtitle" style="margin: 0 auto 40px;">
                            No need to drop off your vehicle. Our self-contained mobile unit brings the detail shop to your driveway or office parking lot.
                        </p>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 40px;">
                    <div class="feature-box">
                        <div class="feature-icon">🚐</div>
                        <div class="feature-title">Self-Contained</div>
                        <p class="feature-text">Full equipment, power, and water on board</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">💧</div>
                        <div class="feature-title">RO Water System</div>
                        <p class="feature-text">Purified water for spot-free finish</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">🏠</div>
                        <div class="feature-title">Home or Office</div>
                        <p class="feature-text">Detail while you work or relax</p>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">📍</div>
                        <div class="feature-title">Central Valley</div>
                        <p class="feature-text">Visalia, Tulare, Hanford, Fresno</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section style="padding: 80px 40px; max-width: 1200px; margin: 0 auto;">
            <p class="section-label">Our Work</p>
            <h2 class="section-title">Results You Can <span class="green-accent">Expect</span></h2>
            <p class="section-subtitle">Before & after transformations from real client vehicles.</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-top: 50px;">
                <div class="portfolio-card">
                    <img src="https://res.cloudinary.com/dya7x7z9g/image/upload/v1768432137/car-detaling-services-logo250x250_blxehz.png" alt="Paint Correction Result" style="background: var(--surface);">
                    <div class="portfolio-overlay">
                        <p class="portfolio-label">Paint Correction</p>
                        <p class="portfolio-title">3-Step Polish</p>
                    </div>
                </div>
                <div class="portfolio-card">
                    <img src="https://res.cloudinary.com/dya7x7z9g/image/upload/v1768432137/car-detaling-services-logo250x250_blxehz.png" alt="Ceramic Coating Result" style="background: var(--surface);">
                    <div class="portfolio-overlay">
                        <p class="portfolio-label">Ceramic Coating</p>
                        <p class="portfolio-title">5-Year Protection</p>
                    </div>
                </div>
                <div class="portfolio-card">
                    <img src="https://res.cloudinary.com/dya7x7z9g/image/upload/v1768432137/car-detaling-services-logo250x250_blxehz.png" alt="Interior Detail Result" style="background: var(--surface);">
                    <div class="portfolio-overlay">
                        <p class="portfolio-label">Interior Restoration</p>
                        <p class="portfolio-title">Full Deep Clean</p>
                    </div>
                </div>
            </div>
            
            <p style="text-align: center; margin-top: 40px; font-family: var(--font-mono); font-size: 0.8rem; color: var(--muted);">
                Want to see more? Follow us on social media for daily transformations.
            </p>
        </section>

        <!-- Appointment Form Section -->
        <section id="book-appointment" style="padding: 80px 40px; background: var(--surface); border-top: 1px solid var(--border);">
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 50px;">
                    <p class="section-label">Book Now</p>
                    <h2 class="section-title">Request a <span class="green-accent">Quote</span></h2>
                    <p class="section-subtitle" style="margin: 0 auto;">
                        Fill out the form below and we'll get back to you within 24 hours with a custom quote.
                    </p>
                </div>
                
                <div class="appointment-form-container">
                    <form id="appointmentForm" action="#" method="POST">
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                            <div class="form-group">
                                <label class="form-label" for="name">Full Name *</label>
                                <input type="text" id="name" name="name" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" class="form-input" required>
                            </div>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-input">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="service">Service Interested In</label>
                                <select id="service" name="service" class="form-select">
                                    <option value="">Select a service...</option>
                                    <option value="ceramic-coating">Ceramic Coating</option>
                                    <option value="paint-correction">Paint Correction</option>
                                    <option value="interior-detail">Interior Detailing</option>
                                    <option value="full-detail">Full Detail</option>
                                    <option value="maintenance">Maintenance Wash</option>
                                    <option value="other">Other / Not Sure</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="vehicle">Vehicle (Year, Make, Model)</label>
                            <input type="text" id="vehicle" name="vehicle" class="form-input" placeholder="e.g., 2022 Toyota Camry">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="message">Additional Details</label>
                            <textarea id="message" name="message" class="form-textarea" placeholder="Tell us about your vehicle's condition, any specific concerns, or preferred scheduling..."></textarea>
                        </div>
                        
                        <button type="submit" class="tensile-button" style="width: 100%; text-align: center;">Submit Quote Request</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section style="padding: 80px 40px; max-width: 900px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 50px;">
                <p class="section-label">Got Questions?</p>
                <h2 class="section-title">Frequently <span class="green-accent">Asked</span></h2>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What is ceramic coating and how long does it last?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Ceramic coating is a liquid polymer that chemically bonds with your vehicle's factory paint, creating a permanent protective layer. Our Flight Shield coatings come with 5, 7, and 10-year warranties. Unlike wax that washes off in weeks, ceramic coatings are semi-permanent and require no reapplication.
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Do you really come to my location?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Yes! We are a fully mobile detailing service. Our self-contained unit has everything we need—power, water (RO purified), and all equipment. We come to your home, office, or wherever is convenient. We service Visalia, Tulare, Hanford, Lemoore, Selma, and Fresno.
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>What is paint correction?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Paint correction is a multi-stage machine polishing process that removes surface defects like swirl marks, scratches, water spots, and oxidation. We offer 1-step (light), 2-step (moderate), and 3-step (severe) correction depending on your paint's condition.
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>Why is your ceramic coating registered on Carfax?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Carfax registration documents that your vehicle has professional-grade ceramic coating protection. This adds value when selling your vehicle because buyers can verify the protection. It's proof that your car has been professionally maintained.
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span>How long does a detail take?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        It depends on the service. A maintenance wash takes 1-2 hours. Full interior or exterior detail takes 3-5 hours. Ceramic coating with paint correction can take 1-3 days depending on the package. We always prioritize quality over speed.
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section style="padding: 60px 40px; background: var(--accent-green); text-align: center;">
            <div style="max-width: 600px; margin: 0 auto;">
                <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--bg); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">Ready to Get Started?</p>
                <h2 style="font-size: 2rem; color: var(--bg); margin-bottom: 20px;">Call Now: (559) 802-4392</h2>
                <a href="tel:5598024392" class="tensile-button" style="background: var(--bg); color: var(--accent); border-color: var(--bg);">Call for Free Quote</a>
            </div>
        </section>
    </main>

    <script>
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            faqItem.classList.toggle('active');
        }
    </script>

<?php include 'footerglobal.php'; ?>

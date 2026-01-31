<?php
$pageTitle = 'Car Detailing Service Visalia | Premium Auto Detailing';
$pageDescription = 'Premium car detailing service in Visalia, CA. Expert paint correction, ceramic coating, interior detailing, and mobile detailing services. Book your appointment today.';
include 'includes/head.php';
include 'includes/header.php';
?>

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
            
            <div class="service-grid-new">
                <!-- Ceramic Coating -->
                <a href="/services/ceramic-coating.php" class="service-card-visual">
                    <span class="service-badge">Recommended</span>
                    <img src="/images/hero-luxury-car.png" alt="Ceramic Coating Visalia" loading="lazy">
                    <div class="service-overlay-visual">
                        <div class="service-title-visual">Ceramic Coating</div>
                    </div>
                </a>

                <!-- Paint Correction -->
                <a href="/services/specialty-restoration.php#paint-correction" class="service-card-visual">
                    <span class="service-badge">Popular</span>
                    <img src="/images/paint-correction.png" alt="Paint Correction Before After" loading="lazy">
                    <div class="service-overlay-visual">
                        <div class="service-title-visual">Paint Correction</div>
                    </div>
                </a>

                <!-- Detailing -->
                <a href="/services/interior-detailing.php" class="service-card-visual">
                    <img src="/images/interior-detailing.png" alt="Interior Auto Detailing" loading="lazy">
                    <div class="service-overlay-visual">
                        <div class="service-title-visual">Detailing</div>
                    </div>
                </a>

                <!-- Mobile Detailing -->
                <a href="/area-served.php" class="service-card-visual">
                    <img src="/images/sprinter-van.png" alt="Mobile Detailing Service" loading="lazy">
                    <div class="service-overlay-visual">
                        <div class="service-title-visual">Mobile Detailing</div>
                    </div>
                </a>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section" style="padding: 100px 40px; background: linear-gradient(to bottom, var(--bg), rgba(0, 184, 76, 0.05));">
            <div style="max-width: 600px; margin: 0 auto; text-align: center;">
                <p class="section-label">Experience The Royal Touch</p>
                <h2 class="section-title">Ready to transform your vehicle?</h2>
                <a href="https://app.urable.com/virtual-shop/bBLskP5ynNpywa8LJCRp" class="tensile-button" target="_blank">Get a Free Quote</a>
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

        <!-- Mobile Service Promotion - 50/50 Split -->
        <section class="mobile-service-section">
            <div class="mobile-service-bg-text">
                <span>MOBILE</span>
                <span>DETAILING</span>
            </div>
            <div class="mobile-service-container">
                <!-- Content Side -->
                <div class="mobile-service-content">
                    <p class="section-label">Mobile Detailing</p>
                    <h2 class="section-title" style="margin-bottom: 20px;">Busy Schedule? Try Our<br><span class="green-accent">Mobile Detailing</span> Service</h2>
                    <p class="section-subtitle" style="margin-bottom: 30px;">
                        Discover detailing right on your doorstep. Our fully self-contained Sprinter van brings professional-grade equipment, RO purified water, and 16+ years of expertise directly to your home or office.
                    </p>
                    <a href="/services/specialty-restoration.php#mobile-services" class="tensile-button">View Service</a>
                </div>
                
                <!-- Image Side -->
                <div class="mobile-service-image">
                    <img src="/images/sprinter-van.png" alt="Excalibur Mobile Detail Mercedes Sprinter Van">
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

        <!-- Booking Section -->
        <section id="book-appointment" style="padding: 100px 40px; background: var(--surface); border-top: 1px solid var(--border);">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <p class="section-label">Book Now</p>
                <h2 class="section-title">Schedule Your <span class="green-accent">Detail</span></h2>
                <div style="margin-top: 40px; margin-bottom: 40px; background: #fff; border-radius: 8px; overflow: hidden;">
                    <iframe src="https://app.urable.com/form/bBLskP5ynNpywa8LJCRp/NV3z0xy8jDploVCrxUw0" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="1200px" width="100%" loading="lazy"></iframe>
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
                <h2 style="font-size: 2rem; color: var(--bg); margin-bottom: 20px;">Call Now: (559) 205-9006</h2>
                <a href="tel:5592059006" class="tensile-button" style="background: var(--bg); color: var(--accent); border-color: var(--bg);">Call for Free Quote</a>
            </div>
        </section>
    </main>

    <script>
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            faqItem.classList.toggle('active');
        }
    </script>

<?php include 'includes/footer.php'; ?>

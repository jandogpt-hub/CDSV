<?php
$pageTitle = 'Car Detailing Service Visalia | Premium Auto Detailing';
$pageDescription = 'Premium car detailing service in Visalia, CA. Expert paint correction, ceramic coating, interior detailing, and mobile detailing services. Book your appointment today.';
?>
<?php include 'header.php'; ?>

<style>
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
        color: var(--accent-gold);
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
    
    .gold-accent {
        color: var(--accent-gold);
    }
    
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
        background: var(--accent-gold);
        transition: height 0.4s var(--transition);
    }
    
    .service-card:hover {
        border-color: var(--accent-gold);
        background: rgba(201, 162, 39, 0.05);
    }
    
    .service-card:hover::before {
        height: 100%;
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
            <img src="/images/hero-luxury-car.png" alt="Premium ceramic coated luxury sports car with gold accent lighting">
            <div class="hero-content-overlay">
                <p class="hero-tagline">The Royal Touch</p>
                <h1 class="hero-title">PREMIUM<br><span class="gold-accent">DETAILING</span></h1>
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
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-gold);">16+</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Years Experience</div>
                </div>
                <div>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-gold);">$1M</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Fully Insured</div>
                </div>
                <div>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-gold);">100%</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Satisfaction Guarantee</div>
                </div>
                <div>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--accent-gold);">✓</div>
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px;">Carfax Registered</div>
                </div>
            </div>
        </section>

        <!-- Services Grid -->
        <section style="padding: 80px 40px; max-width: 1200px; margin: 0 auto;">
            <h2 style="font-size: 1rem; font-family: var(--font-mono); color: var(--accent-gold); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 40px;">Our Services</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                <a href="/services/surface-protection.php" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-gold); margin-bottom: 15px;">01</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Surface Protection</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        Ceramic coating, PPF, and paint sealants. 5, 7, and 10-year warranties with Carfax registration.
                    </p>
                </a>
                
                <a href="/services/specialty-restoration.php#paint-correction" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-gold); margin-bottom: 15px;">02</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Paint Correction</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        Multi-stage polishing to eliminate swirls, scratches, and oxidation. Restore showroom finish.
                    </p>
                </a>
                
                <a href="/services/interior-detailing.php" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-gold); margin-bottom: 15px;">03</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Interior Detailing</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        Deep cleaning, leather conditioning, and odor removal. Hot water extraction & ozone treatment.
                    </p>
                </a>
                
                <a href="/services/specialty-restoration.php#mobile-services" class="service-card" style="text-decoration: none; color: inherit;">
                    <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--accent-gold); margin-bottom: 15px;">04</div>
                    <h3 style="font-size: 1.5rem; font-weight: 400; margin-bottom: 15px;">Mobile Service</h3>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--muted); line-height: 1.7;">
                        We come to your home or office. Fully self-contained with RO purified water system.
                    </p>
                </a>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section" style="padding: 100px 40px; background: linear-gradient(to bottom, var(--bg), rgba(201, 162, 39, 0.05));">
            <div style="max-width: 600px; margin: 0 auto; text-align: center;">
                <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--accent-gold); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">Experience The Royal Touch</p>
                <h2 style="font-size: 2rem; margin-bottom: 30px;">Ready to transform your vehicle?</h2>
                <button class="tensile-button" id="reserveBtn" onclick="triggerAntigravityVoice()">Get a Free Quote</button>
            </div>
        </section>
    </main>

<?php include 'footerglobal.php'; ?>

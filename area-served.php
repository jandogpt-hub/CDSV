<?php
$pageTitle = 'Areas Served | Visalia, Tulare, Fresno, Hanford | CDSV';
$pageDescription = 'Mobile ceramic coating and auto detailing serving Visalia, Tulare, Hanford, Selma, Clovis, and Fresno. We bring showroom-quality results to your location.';
?>
<?php
include 'includes/head.php';
include 'includes/header.php';
?>

    <main>
        <section class="hero">
            <div class="headline-wrapper">
                <h1>AREAS<br>SERVED</h1>
            </div>

            <div class="tensile-line"></div>

            <div class="sub-data">
                <div>
                    [ CENTRAL VALLEY COVERAGE ]<br>
                    WE COME TO YOUR HOME OR OFFICE
                </div>
                <div>
                    100% MOBILE SERVICE<br>
                    FULLY SELF-CONTAINED UNITS
                </div>
            </div>
        </section>

        <!-- Service Areas -->
        <section class="services" id="areas">
            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 20%;"></div>
                <div class="service-num">01</div>
                <div class="service-content">
                    <div class="service-title">Visalia</div>
                    <div class="service-meta">
                        [ HOME BASE ]<br>
                        TULARE COUNTY<br>
                        FULL SERVICE COVERAGE
                    </div>
                </div>
            </div>

            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 40%;"></div>
                <div class="service-num">02</div>
                <div class="service-content">
                    <div class="service-title">Tulare</div>
                    <div class="service-meta">
                        [ TULARE COUNTY ]<br>
                        RESIDENTIAL & COMMERCIAL<br>
                        SAME-DAY AVAILABLE
                    </div>
                </div>
            </div>

            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 10%;"></div>
                <div class="service-num">03</div>
                <div class="service-content">
                    <div class="service-title">Hanford</div>
                    <div class="service-meta">
                        [ KINGS COUNTY ]<br>
                        FULL SERVICE COVERAGE<br>
                        CERAMIC · DETAIL · CORRECTION
                    </div>
                </div>
            </div>

            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 30%;"></div>
                <div class="service-num">04</div>
                <div class="service-content">
                    <div class="service-title">Selma</div>
                    <div class="service-meta">
                        [ FRESNO COUNTY ]<br>
                        RESIDENTIAL & COMMERCIAL<br>
                        MOBILE SERVICE AVAILABLE
                    </div>
                </div>
            </div>

            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 50%;"></div>
                <div class="service-num">05</div>
                <div class="service-content">
                    <div class="service-title">Clovis</div>
                    <div class="service-meta">
                        [ FRESNO COUNTY ]<br>
                        FULL SERVICE COVERAGE<br>
                        CERAMIC · DETAIL · CORRECTION
                    </div>
                </div>
            </div>

            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 25%;"></div>
                <div class="service-num">06</div>
                <div class="service-content">
                    <div class="service-title">Fresno</div>
                    <div class="service-meta">
                        [ FRESNO COUNTY ]<br>
                        CENTRAL VALLEY HUB<br>
                        FULL SERVICE AVAILABLE
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Mobile -->
        <section style="padding: 80px 40px; max-width: 1000px; margin: 0 auto;">
            <h2 style="font-size: 1.5rem; margin-bottom: 40px; text-transform: uppercase; font-family: var(--font-mono);">Why Mobile?</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; font-family: var(--font-mono); font-size: 0.85rem; color: var(--muted); line-height: 1.8;">
                <div style="border: 1px solid var(--border); padding: 30px;">
                    <h4 style="color: var(--accent); margin-bottom: 15px;">Convenience</h4>
                    <p>We come to you—at home, at work, wherever your vehicle is. No need to drop off your car and arrange rides. Work or relax while we transform your vehicle.</p>
                </div>
                
                <div style="border: 1px solid var(--border); padding: 30px;">
                    <h4 style="color: var(--accent); margin-bottom: 15px;">Self-Contained</h4>
                    <p>Our mobile units carry everything needed: Reverse Osmosis water, professional-grade tools, and premium products. We don't need your water or power.</p>
                </div>
                
                <div style="border: 1px solid var(--border); padding: 30px;">
                    <h4 style="color: var(--accent); margin-bottom: 15px;">Same Quality</h4>
                    <p>Mobile doesn't mean compromise. Our results match or exceed any shop. The same Flight Shield coatings, the same Carfax registration, the same warranties.</p>
                </div>
            </div>

            <div style="margin-top: 50px; padding: 30px; border: 1px solid var(--border); background: rgba(255,255,255,0.02);">
                <p style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--muted); line-height: 1.8;">
                    <strong style="color: var(--accent);">Don't see your city?</strong> We may still be able to serve you. Contact us at <a href="tel:5592059006" style="color: var(--accent);">(559) 205-9006</a> to discuss your location.
                </p>
            </div>
        </section>

        <section class="cta-section">
            <button class="tensile-button" id="reserveBtn" onclick="triggerAntigravityVoice()">Get a Free Quote</button>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>

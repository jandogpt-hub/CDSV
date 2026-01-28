<?php
$pageTitle = 'Paint Correction Visalia | Swirl & Scratch Removal | CDSV';
$pageDescription = 'Professional paint correction in Visalia. 1-step, 2-step, and 3-step correction to remove swirls, scratches, and oxidation. Restore your paint to showroom condition.';
?>
<?php include '../header.php'; ?>
<?php include '../globalheader.php'; ?>

    <main>
        <section class="hero">
            <div class="headline-wrapper">
                <h1>PAINT<br>CORRECTION</h1>
            </div>

            <div class="tensile-line"></div>

            <div class="sub-data">
                <div>
                    [ SURFACE RESTORATION ]<br>
                    ELIMINATE SWIRLS · SCRATCHES · OXIDATION
                </div>
                <div>
                    1, 2, & 3 STEP OPTIONS<br>
                    RESTORE · REFINE · PERFECT
                </div>
            </div>
        </section>

        <!-- Service Options -->
        <section class="services" id="options">
            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 20%;"></div>
                <div class="service-num">01</div>
                <div class="service-content">
                    <div class="service-title">1-Step Correction</div>
                    <div class="service-meta">
                        [ LIGHT DEFECTS ]<br>
                        REMOVES LIGHT SWIRLS & HAZING<br>
                        IDEAL FOR NEWER VEHICLES
                    </div>
                </div>
            </div>

            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 40%;"></div>
                <div class="service-num">02</div>
                <div class="service-content">
                    <div class="service-title">2-Step Correction</div>
                    <div class="service-meta">
                        [ MODERATE DEFECTS ]<br>
                        CUT & POLISH PROCESS<br>
                        REMOVES SWIRLS & LIGHT SCRATCHES
                    </div>
                </div>
            </div>

            <div class="service-item">
                <div class="fluid-bg" style="top: -50%; left: 10%;"></div>
                <div class="service-num">03</div>
                <div class="service-content">
                    <div class="service-title">3-Step Correction</div>
                    <div class="service-meta">
                        [ SEVERE DEFECTS ]<br>
                        FULL RESTORATION PROCESS<br>
                        99.9% DEFECT REMOVAL
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Details -->
        <section style="padding: 60px 40px; max-width: 1000px; margin: 0 auto;">
            <h2 style="font-size: 1.5rem; margin-bottom: 30px; text-transform: uppercase; font-family: var(--font-mono);">All Paint Correction Includes</h2>
            
            <ul style="list-style: none; font-family: var(--font-mono); font-size: 0.9rem; color: var(--muted); line-height: 2.5;">
                <li style="border-bottom: 1px solid var(--border); padding: 12px 0;">✓ Touchless Wash with RO Purified Water</li>
                <li style="border-bottom: 1px solid var(--border); padding: 12px 0;">✓ Chemical Decontamination</li>
                <li style="border-bottom: 1px solid var(--border); padding: 12px 0;">✓ Clay Bar Treatment</li>
                <li style="padding: 12px 0; color: var(--accent);">✓ Professional Machine Polishing</li>
            </ul>

            <h3 style="font-size: 1.2rem; margin: 50px 0 30px; text-transform: uppercase; font-family: var(--font-mono);">Frequently Added Upgrades</h3>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; font-family: var(--font-mono); font-size: 0.8rem; color: var(--muted);">
                <div style="border: 1px solid var(--border); padding: 20px;">→ 1-Step Polish Wax with Ceramic</div>
                <div style="border: 1px solid var(--border); padding: 20px;">→ 1-Year Ceramic Coating</div>
                <div style="border: 1px solid var(--border); padding: 20px;">→ 5-Year Ceramic Coating</div>
            </div>

            <div style="margin-top: 50px; padding: 30px; border: 1px solid var(--border); background: rgba(255,255,255,0.02);">
                <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--muted); line-height: 1.8;">
                    <strong style="color: var(--accent);">Pro Tip:</strong> Paint correction removes a thin layer of clear coat to eliminate defects. For maximum protection after correction, we strongly recommend sealing your freshly restored paint with a ceramic coating.
                </p>
            </div>
        </section>

        <section class="cta-section">
            <button class="tensile-button" id="reserveBtn" onclick="triggerAntigravityVoice()">Get a Free Quote</button>
        </section>
    </main>

<?php include '../footerglobal.php'; ?>

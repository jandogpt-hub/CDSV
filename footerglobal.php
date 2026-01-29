    <footer id="footer">
        <div class="footer-content">
            <!-- Column 1: Hours -->
            <div class="footer-col">
                <h4 class="footer-heading">Hours</h4>
                <div class="footer-text">
                    <p>Mon-Sun: 7AM – 5PM</p>
                    <p>Phone lines open 24/7</p>
                </div>
            </div>

            <!-- Column 2: Links -->
            <div class="footer-col">
                <h4 class="footer-heading">Links</h4>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about.php">About Us</a></li>
                    <li><a href="/services/surface-protection.php">Services</a></li>
                    <li><a href="/area-served.php">Area Served</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact -->
            <div class="footer-col">
                <h4 class="footer-heading">Contact</h4>
                <div class="footer-text">
                    <p><strong>Excalibur Mobile Detail</strong></p>
                    <p>(559) 205-9006</p>
                    <p>Visalia, CA & Surrounding Areas</p>
                    <p><a href="mailto:info@excaliburmobile.com" style="color: inherit; text-decoration: none;">Get a Quote</a></p>
                </div>
            </div>

            <!-- Column 4: Map -->
            <div class="footer-col map-col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.9246121521915!2d-119.2780767!3d36.3383769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80952f460eec55d7%3A0x7c81b98f4e0c264!2sCar%20Detailing%20Service%20of%20Visalia!5e0!3m2!1sen!2sus!4v1769634735088!5m2!1sen!2sus" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div>&copy; <?php echo date('Y'); ?> Excalibur Mobile Detail. All rights reserved.</div>
            <div>Designed for Excellence</div>
        </div>
    </footer>

    <style>
        #footer {
            background-color: #050505;
            border-top: 1px solid var(--border);
            padding: 80px 40px 40px;
            font-family: var(--font-mono);
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 60px;
            margin-bottom: 80px;
        }

        .footer-col {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .footer-heading {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--muted);
            margin-bottom: 10px;
        }

        .footer-text {
            color: #d0d0d0;
            font-size: 0.9rem;
            line-height: 1.8;
            font-weight: 500;
        }

        .footer-text p {
            margin-bottom: 10px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .footer-links a {
            color: #d0d0d0;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s var(--transition);
            font-weight: 500;
        }

        .footer-links a:hover {
            color: var(--accent-green);
        }

        .map-col iframe {
            border-radius: 4px;
            filter: grayscale(100%) invert(90%);
            transition: filter 0.3s var(--transition);
        }

        .map-col iframe:hover {
            filter: grayscale(0%) invert(0%);
        }

        .footer-bottom {
            max-width: 1400px;
            margin: 0 auto;
            padding-top: 40px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            color: var(--muted);
            font-size: 0.75rem;
            flex-wrap: wrap;
            gap: 20px;
        }

        @media (min-width: 768px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .footer-content {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>

    <script>
        // Antigravity Voice Trigger Function
        function triggerAntigravityVoice() {
            // Check if the Antigravity voice API is available
            if (window.Antigravity && typeof window.Antigravity.startVoiceInteraction === 'function') {
                window.Antigravity.startVoiceInteraction();
            } else if (window.antigravity && typeof window.antigravity.voice === 'function') {
                window.antigravity.voice();
            } else if (typeof antigravityVoice === 'function') {
                antigravityVoice();
            } else {
                // Fallback: dispatch custom event for Antigravity to listen
                const voiceEvent = new CustomEvent('antigravity:voice', {
                    detail: { action: 'reserve-appointment', context: 'aether-detailing' }
                });
                document.dispatchEvent(voiceEvent);

                // Also try postMessage for iframe/extension scenarios
                window.postMessage({ type: 'ANTIGRAVITY_VOICE_TRIGGER', action: 'reserve-appointment' }, '*');

                console.log('Antigravity voice interaction triggered');
            }
        }

        // Custom Cursor Logic
        const cursor = document.getElementById('cursor');

        // Only enable custom cursor on non-touch devices
        if (window.matchMedia('(hover: hover)').matches) {
            document.addEventListener('mousemove', (e) => {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            });

            const serviceItems = document.querySelectorAll('.service-item');
            serviceItems.forEach(item => {
                item.addEventListener('mousemove', (e) => {
                    const bg = item.querySelector('.fluid-bg');
                    const rect = item.getBoundingClientRect();
                    const x = e.clientX - rect.left - 150;
                    const y = e.clientY - rect.top - 150;
                    bg.style.transform = `translate(${x}px, ${y}px)`;
                });

                item.addEventListener('mouseenter', () => {
                    cursor.style.transform = 'scale(6)';
                });

                item.addEventListener('mouseleave', () => {
                    cursor.style.transform = 'scale(1)';
                });
            });

            const btn = document.getElementById('reserveBtn');
            if (btn) {
                btn.addEventListener('mouseenter', () => {
                    cursor.style.transform = 'scale(0)';
                });
                btn.addEventListener('mouseleave', () => {
                    cursor.style.transform = 'scale(1)';
                });
            }
        }
    </script>
</body>

</html>

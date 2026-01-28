    <footer>
        <div>&copy; <?php echo date('Y'); ?> Car Detailing Service Visalia</div>
        <div>Premium Auto Care</div>
        <div>Visalia, CA</div>
    </footer>

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

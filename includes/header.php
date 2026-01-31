    <nav>
        <a href="/" class="logo">
            <img src="https://res.cloudinary.com/dya7x7z9g/image/upload/v1768432137/car-detaling-services-logo250x250_blxehz.png" alt="Excalibur Mobile Detail Logo">
        </a>
        
        <!-- Desktop Navigation -->
        <div class="nav-links">
            <a href="/" class="nav-link">Home</a>
            <a href="/about" class="nav-link">About Us</a>
            <a href="/contact" class="nav-link">Contact Us</a>
            <a href="/area-served" class="nav-link">Area Served</a>
            
            <!-- Services Dropdown -->
            <div class="nav-item has-dropdown">
                <span class="nav-link">Services</span>
                <div class="dropdown">
                    <a href="/services/interior-detailing" class="dropdown-link">Interior Detailing</a>
                    <a href="/services/surface-protection" class="dropdown-link">Surface Protection & Coating</a>
                    <a href="/services/specialty-restoration" class="dropdown-link">Specialty & Restoration</a>
                    <div class="dropdown-divider"></div>
                    <a href="/services/full-detail" class="dropdown-link">Full Detail Package</a>
                </div>
            </div>
            
            <!-- Book Appointment Button -->
            <a href="https://app.urable.com/virtual-shop/bBLskP5ynNpywa8LJCRp" class="nav-book-btn" target="_blank">Book Appointment</a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="mobile-menu-toggle" id="mobileMenuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="/" class="nav-link">Home</a>
        <a href="/about" class="nav-link">About Us</a>
        <a href="/contact" class="nav-link">Contact Us</a>
        <a href="/area-served" class="nav-link">Area Served</a>
        
        <div class="nav-link" style="cursor: pointer;" onclick="toggleMobileDropdown()">Services ▾</div>
        <div class="dropdown" id="mobileServicesDropdown">
            <a href="/services/interior-detailing" class="dropdown-link">Interior Detailing</a>
            <a href="/services/surface-protection" class="dropdown-link">Surface Protection</a>
            <a href="/services/specialty-restoration" class="dropdown-link">Specialty & Restoration</a>
            <a href="/services/full-detail" class="dropdown-link">Full Detail Package</a>
        </div>
        
        <a href="https://app.urable.com/virtual-shop/bBLskP5ynNpywa8LJCRp" class="nav-book-btn" target="_blank" style="margin-top: 20px; display: inline-block;">Book Appointment</a>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenuToggle.classList.toggle('active');
                mobileMenu.classList.toggle('active');
            });
        }

        function toggleMobileDropdown() {
            const dropdown = document.getElementById('mobileServicesDropdown');
            if (dropdown) {
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            }
        }
    </script>

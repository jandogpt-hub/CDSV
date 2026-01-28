    <nav>
        <a href="/" class="logo">
            <img src="https://res.cloudinary.com/dya7x7z9g/image/upload/v1768432137/car-detaling-services-logo250x250_blxehz.png" alt="Excalibur Mobile Detail Logo">
        </a>
        
        <!-- Desktop Navigation -->
        <div class="nav-links">
            <a href="/" class="nav-link">Home</a>
            <a href="/about.php" class="nav-link">About Us</a>
            <a href="/contact.php" class="nav-link">Contact Us</a>
            <a href="/area-served.php" class="nav-link">Area Served</a>
            
            <!-- Services Dropdown -->
            <div class="nav-item has-dropdown">
                <span class="nav-link">Services</span>
                <div class="dropdown">
                    <div class="dropdown-header">Ceramic Coating</div>
                    <a href="/services/ceramic-coating.php" class="dropdown-link">Ceramic Coating Overview</a>
                    <a href="/services/standard-ceramic-coating.php" class="dropdown-link">Standard — $399</a>
                    <a href="/services/premium-ceramic-coating.php" class="dropdown-link">Premium — $648</a>
                    <a href="/services/elite-ceramic-coating.php" class="dropdown-link">Elite — $1,146</a>
                    
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header">Detailing</div>
                    <a href="/services/exterior-detail.php" class="dropdown-link">Exterior Detail</a>
                    <a href="/services/interior-detail.php" class="dropdown-link">Interior Detail</a>
                    <a href="/services/full-detail.php" class="dropdown-link">Full Detail</a>
                    
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header">Specialty</div>
                    <a href="/services/paint-correction.php" class="dropdown-link">Paint Correction</a>
                    <a href="/services/headlight-restoration.php" class="dropdown-link">Headlight Restoration</a>
                </div>
            </div>
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
        <a href="/about.php" class="nav-link">About Us</a>
        <a href="/contact.php" class="nav-link">Contact Us</a>
        <a href="/area-served.php" class="nav-link">Area Served</a>
        
        <div class="nav-link" style="cursor: pointer;" onclick="toggleMobileDropdown()">Services ▾</div>
        <div class="dropdown" id="mobileServicesDropdown">
            <a href="/services/ceramic-coating.php" class="dropdown-link">Ceramic Coating</a>
            <a href="/services/standard-ceramic-coating.php" class="dropdown-link">Standard Ceramic — $399</a>
            <a href="/services/premium-ceramic-coating.php" class="dropdown-link">Premium Ceramic — $648</a>
            <a href="/services/elite-ceramic-coating.php" class="dropdown-link">Elite Ceramic — $1,146</a>
            <a href="/services/exterior-detail.php" class="dropdown-link">Exterior Detail</a>
            <a href="/services/interior-detail.php" class="dropdown-link">Interior Detail</a>
            <a href="/services/full-detail.php" class="dropdown-link">Full Detail</a>
            <a href="/services/paint-correction.php" class="dropdown-link">Paint Correction</a>
            <a href="/services/headlight-restoration.php" class="dropdown-link">Headlight Restoration</a>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenuToggle.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        function toggleMobileDropdown() {
            const dropdown = document.getElementById('mobileServicesDropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }
    </script>

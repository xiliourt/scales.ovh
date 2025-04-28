<nav class="main-nav">
    <div class="nav-container">
        <ul class="nav-list">

            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>

            <li class="nav-item dropdown">
                <button class="dropdown-toggle">
                    <span>Disability Scales</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="/whodas" class="dropdown-link">WHODAS</a></li>
                    <li><a href="/honos" class="dropdown-link">HONOS</a></li>
                    <li><a href="/lsp" class="dropdown-link">LSP</a></li>
                    <li><a href="/CANS.pdf" class="dropdown-link">CANS</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <button class="dropdown-toggle">
                    <span>Mental Health Scales</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="/asrs" class="dropdown-link">ASRS (ADHD)</a></li>
                    <li><a href="/aq10" class="dropdown-link">AQ-10 (Autism)</a></li>
                    <li><a href="/BPD/MSI" class="dropdown-link">BPD-MSI (BPD)</a></li>
                    <li><a href="/BPD/ZEN" class="dropdown-link">BPD-ZEN-SRV (BPD)</a></li>
                    <li><a href="/itq" class="dropdown-link">ITQ (Trauma)</a></li>
                    <li><a href="/gad7" class="dropdown-link">GAD-7 (Anxiety)</a></li>
                    <li><a href="/y-bocs" class="dropdown-link">Y-BOCS (OCD)</a></li>
    
                </ul>
            </li>
            <li class="nav-item">
                <a href="/privacy" class="nav-link">Privacy</a>
            </li>
        </ul>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default button behavior
                event.stopPropagation(); // Stop click from immediately closing menu via document listener

                const parentLi = this.closest('.dropdown'); // Get the parent li.dropdown
                const menu = parentLi.querySelector('.dropdown-menu'); // Find the menu within this dropdown

                // Close all other open dropdowns first
                document.querySelectorAll('.dropdown-menu.is-open').forEach(openMenu => {
                    if (openMenu !== menu) {
                        openMenu.classList.remove('is-open');
                        // Also remove active class from other toggles
                        const otherToggle = openMenu.closest('.dropdown').querySelector('.dropdown-toggle');
                        if (otherToggle) {
                             otherToggle.classList.remove('is-active');
                        }
                    }
                });

                // Toggle the current dropdown
                menu.classList.toggle('is-open');
                this.classList.toggle('is-active'); // Toggle active class on the button
            });
        });

        // Add listener to close dropdowns if clicking outside
        document.addEventListener('click', function (event) {
            // Check if the click was outside of any dropdown toggle or menu
             const isClickInsideDropdown = event.target.closest('.dropdown');

             if (!isClickInsideDropdown) {
                 // Click was outside, close all dropdowns
                 document.querySelectorAll('.dropdown-menu.is-open').forEach(openMenu => {
                     openMenu.classList.remove('is-open');
                     // Also remove active class from the corresponding toggle
                      const toggle = openMenu.closest('.dropdown').querySelector('.dropdown-toggle');
                      if (toggle) {
                          toggle.classList.remove('is-active');
                      }
                 });
             }
        });
    });
</script>

    <button id="theme-toggle-button" aria-label="Toggle theme">
        Toggle Theme
    </button>

    <script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', () => {
            // Get references to the button and the body element
            const themeToggleButton = document.getElementById('theme-toggle-button');
            const body = document.body;

            // --- Function to apply theme and update button ---
            const applyTheme = (theme) => {
                if (theme === 'dark') {
                    body.classList.add('dark-mode');
                    themeToggleButton.textContent = '☀️ Light'; // Indicate next action/state
                    localStorage.setItem('theme', 'dark'); // Save preference
                } else {
                    body.classList.remove('dark-mode');
                    themeToggleButton.textContent = '🌙 Dark'; // Indicate next action/state
                    localStorage.setItem('theme', 'light'); // Save preference
                }
            };

            // --- Check initial theme preference ---
            // 1. Check localStorage for a saved theme
            const savedTheme = localStorage.getItem('theme');
            // 2. Check system preference if no theme is saved
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

            let initialTheme = 'light'; // Default to light
            if (savedTheme) {
                initialTheme = savedTheme; // Use saved theme
            } else if (prefersDark) {
                initialTheme = 'dark'; // Use system preference
            }

            // Apply the determined initial theme
            applyTheme(initialTheme);

            // --- Add click event listener to the button ---
            themeToggleButton.addEventListener('click', () => {
                // Check the CURRENT theme and toggle to the other one
                const isDarkMode = body.classList.contains('dark-mode');
                applyTheme(isDarkMode ? 'light' : 'dark');
            });
        });
    </script>

<style>
/* Basic Reset & Font (Assuming Inter font is loaded elsewhere) */
ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
a {
    text-decoration: none;
    color: inherit; /* Inherit color from parent */
}
button {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    font: inherit; /* Inherit font styles */
    color: inherit; /* Inherit color */
}

/* Main Navigation Bar */
.main-nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 64px; /* Equivalent to h-16 */
    background-color: #fff; /* Equivalent to bg-white */
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Equivalent to shadow-md */
    z-index: 20;
    transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Add transitions */
}

/* Centering Container inside Nav */
.nav-container {
    max-width: 1280px; /* Example for 'container', adjust if needed */
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem; /* Equivalent to px-4 */
    padding-right: 1rem; /* Equivalent to px-4 */
    height: 100%;
}

/* List container for nav items */
.nav-list {
    display: flex;
    justify-content: center; /* Equivalent to justify-center */
    align-items: center; /* Equivalent to items-center */
    height: 100%;
}

/* Individual Nav Items (li) */
.nav-item {
    /* Approximation for space-x-4/6 - adjust margin as needed */
    margin-left: 1rem;
    margin-right: 1rem;
    height: 100%; /* Needed for vertical alignment */
    display: flex; /* Needed for vertical alignment */
    align-items: center; /* Needed for vertical alignment */
}
/* Remove margin for the first item if needed for centering */
.nav-list .nav-item:first-child {
    margin-left: 0;
}
.nav-list .nav-item:last-child {
    margin-right: 0;
}


/* Standard Links */
.nav-link {
    display: block; /* Equivalent to block */
    padding: 0.5rem 0.75rem; /* Equivalent to py-2 px-3 */
    color: #374151; /* Equivalent to text-gray-700 */
    font-weight: 500; /* Equivalent to font-medium */
    transition: color 0.3s ease; /* Equivalent to transition-colors duration-300 */
}

.nav-link:hover {
     color: #2563eb; /* Equivalent to hover:text-blue-600 */
}

/* Dropdown Specific Styling */
.dropdown {
    position: relative; /* Equivalent to relative */
}

/* Dropdown Toggle Button */
.dropdown-toggle {
    display: flex; /* Equivalent to flex */
    align-items: center; /* Equivalent to items-center */
    padding: 0.5rem 0.75rem; /* Equivalent to py-2 px-3 */
    color: #374151; /* Equivalent to text-gray-700 */
    font-weight: 500; /* Equivalent to font-medium */
    transition: color 0.3s ease; /* Equivalent to transition-colors duration-300 */
    white-space: nowrap; /* Prevent wrapping */
}

/* Hover state for the toggle (direct or via parent li hover) */
.dropdown-toggle:hover,
.dropdown:hover .dropdown-toggle {
     color: #2563eb; /* Equivalent to group-hover:text-blue-600 */
}

/* Dropdown Arrow Icon */
.dropdown-toggle svg {
    width: 1rem; /* Equivalent to w-4 */
    height: 1rem; /* Equivalent to h-4 */
    margin-left: 0.25rem; /* Equivalent to ml-1 */
    color: #6b7280; /* Equivalent to text-gray-500 */
    transition: color 0.3s ease, transform 0.3s ease; /* Add transform transition */
}

/* Hover state for the icon (direct or via parent li hover) */
.dropdown-toggle:hover svg,
.dropdown:hover .dropdown-toggle svg {
    color: #3b82f6; /* Equivalent to group-hover:text-blue-500 */
}

/* The Dropdown Menu itself */
.dropdown-menu {
    position: absolute; /* Equivalent to absolute */
    display: none; /* Hidden by default */
    top: 100%; /* Position below the toggle */
    left: 0; /* Aligned to the left of the parent li (like sm:left-0) */
    transform: none; /* Reset transform (like sm:transform-none) */
    background-color: #fff; /* Equivalent to bg-white */
    min-width: 12rem; /* Equivalent to w-48 */
    border-radius: 0.375rem; /* Equivalent to rounded-md */
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); /* Equivalent to shadow-lg */
    margin-top: 0.25rem; /* Equivalent to mt-1 */
    padding: 0.25rem 0; /* Equivalent to py-1 */
    border: 1px solid rgba(0,0,0,0.05); /* Equivalent to ring-1 ring-black ring-opacity-5 */
    z-index: 30; /* Ensure it's above other nav items */

    /* Transition styles */
    opacity: 0; /* Equivalent to opacity-0 */
    transform: scale(0.95); /* Equivalent to scale-95 */
    transform-origin: top left; /* Ensures scale animation starts from top-left */
    pointer-events: none; /* Equivalent to pointer-events-none */
    transition: opacity 0.15s ease-out, transform 0.15s ease-out, background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease; /* Add transitions */
}

/* Remove or comment out this rule */
/*
.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
    transform: scale(1);
    pointer-events: auto;
}
*/

/* Add this rule to show the menu when it has the 'is-open' class */
.dropdown-menu.is-open {
    display: block; /* Or potentially 'flex' or 'grid' if needed */
    opacity: 1;
    transform: scale(1);
    pointer-events: auto;
}

/* Optional: Add a class to the toggle when its menu is open for styling */
.dropdown-toggle.is-active {
    color: #2563eb; /* Example: Keep hover color */
}
.dropdown-toggle.is-active svg {
    color: #3b82f6; /* Example: Keep hover color */
    /* Optional: Rotate icon */
    /* transform: rotate(180deg); */
}

/* Links inside the dropdown */
.dropdown-link {
    display: block; /* Equivalent to block */
    padding: 0.5rem 1rem; /* Equivalent to px-4 py-2 */
    font-size: 0.875rem; /* Equivalent to text-sm */
    color: #374151; /* Equivalent to text-gray-700 */
    white-space: nowrap; /* Prevent wrapping */
    transition: background-color 0.2s ease, color 0.2s ease;
}

.dropdown-link:hover {
    background-color: #f3f4f6; /* Equivalent to hover:bg-gray-100 */
    color: #111827; /* Equivalent to hover:text-gray-900 */
}

        /* Styling for the floating toggle button */
        #theme-toggle-button {
            position: fixed; /* Keeps the button in place during scroll */
            bottom: 20px;    /* Distance from the bottom edge */
            right: 20px;     /* Distance from the right edge */
            padding: 12px 18px; /* Button padding */
            font-size: 16px;
            font-weight: bold;
            color: white;    /* Text color */
            background-color: #007bff; /* Default background (blue) */
            border: none;
            border-radius: 30px; /* Make it rounded */
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow */
            z-index: 1000; /* Ensure it stays on top of other content */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transitions */
        }

/* --- Dark Mode Styles --- */
body.dark-mode {
    background-color: #1f2937; /* Dark background for the whole page */
    color: #d1d5db; /* Default light text color */
}

body.dark-mode .main-nav {
    background-color: #111827; /* Darker nav background */
    box-shadow: 0 4px 6px -1px rgba(255, 255, 255, 0.05), 0 2px 4px -1px rgba(255, 255, 255, 0.03); /* Lighter shadow for dark bg */
    border-bottom: 1px solid #374151; /* Optional: Subtle border */
}

body.dark-mode .nav-link {
    color: #d1d5db; /* Light text color for links */
}

body.dark-mode .nav-link:hover {
    color: #60a5fa; /* Brighter blue for hover */
}

body.dark-mode .dropdown-toggle {
    color: #d1d5db; /* Light text color for dropdown toggle */
}

body.dark-mode .dropdown-toggle:hover,
body.dark-mode .dropdown:hover .dropdown-toggle,
body.dark-mode .dropdown-toggle.is-active {
    color: #60a5fa; /* Brighter blue for hover/active */
}

body.dark-mode .dropdown-toggle svg {
    color: #9ca3af; /* Slightly lighter gray for icon */
}

body.dark-mode .dropdown-toggle:hover svg,
body.dark-mode .dropdown:hover .dropdown-toggle svg,
body.dark-mode .dropdown-toggle.is-active svg {
    color: #93c5fd; /* Lighter blue for icon hover/active */
}

body.dark-mode .dropdown-menu {
    background-color: #1f2937; /* Dark background for dropdown menu */
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3), 0 4px 6px -2px rgba(0, 0, 0, 0.2); /* Darker shadow */
    border: 1px solid #4b5563; /* Darker border */
}

body.dark-mode .dropdown-link {
    color: #d1d5db; /* Light text for dropdown items */
}

body.dark-mode .dropdown-link:hover {
    background-color: #374151; /* Darker gray for hover background */
    color: #f9fafb; /* Even lighter text on hover */
}

body.dark-mode #theme-toggle-button {
    background-color: #374151; /* Darker background for toggle button */
    color: #e5e7eb; /* Light text color */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); /* Stronger shadow */
}
/* Optional: Hover state for dark mode theme button */
body.dark-mode #theme-toggle-button:hover {
    background-color: #4b5563;
}

</style>
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

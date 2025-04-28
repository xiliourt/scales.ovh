<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health & Disability Scales</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <link rel="stylesheet" href="style.css"> 
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
            background-color: #f3f4f6; /* Equivalent to bg-gray-100 */
            font-family: 'Inter', sans-serif; /* Equivalent to font-inter */
            color: #111827; /* Equivalent to text-gray-900 */
            padding-top: 4rem; /* Equivalent to pt-16 (64px assuming 1rem=16px) */
            line-height: 1.5; /* Default line height */
        }
            /* Basic Reset & Font */
        *, *::before, *::after {
        box-sizing: border-box;
        }

        h1, h2, p, ul, li, a {
        margin: 0;
        padding: 0;
        }

        a {
        text-decoration: none;
        color: inherit;
        }

        body.dark-mode .scale-card {
            background-color: #374151;
        }

        body.dark-mode .scale-card-description {
            color: #fff;
        }

        /* Body Styling */

        /* Container */
        .content-container {
        width: 100%;
        max-width: 56rem; /* Equivalent to max-w-4xl */
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem; /* Equivalent to px-4 */
        padding-right: 1rem; /* Equivalent to px-4 */
        padding-top: 2rem; /* Equivalent to py-8 */
        padding-bottom: 2rem; /* Equivalent to py-8 */
        }

        /* Header */
        .page-header {
        text-align: center; /* Equivalent to text-center */
        margin-bottom: 3rem; /* Equivalent to mb-12 */
        }

        .page-title {
        font-size: 2.25rem; /* Equivalent to text-4xl */
        line-height: 2.5rem; /* Tailwind includes line-height with font-size */
        font-weight: 700; /* Equivalent to font-bold */
        color: #2563eb; /* Equivalent to text-blue-600 */
        margin-bottom: 1rem; /* Equivalent to mb-4 */
        }

        /* Scale Grid */
        .scale-grid {
        display: grid;
        gap: 1.5rem; /* Equivalent to gap-6 */
        }

        /* Media Query for medium screens and up (Tailwind's md breakpoint is 768px) */
        @media (min-width: 768px) {
        .scale-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr)); /* Equivalent to md:grid-cols-2 */
        }
        }

        /* Scale Card */
        .scale-card {
        display: block; /* Equivalent to block */
        background-color: #fff; /* Equivalent to bg-white */
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Equivalent to shadow-md */
        border-radius: 0.5rem; /* Equivalent to rounded-lg */
        padding: 1.5rem; /* Equivalent to p-6 */
        transition-property: box-shadow, transform; /* Equivalent to transition-all, but only animating needed properties */
        transition-duration: 300ms; /* Equivalent to duration-300 */
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); /* Equivalent to ease-in-out */
        }

        .scale-card:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); /* Approximation of shadow-xl - adjust if needed */
        transform: translateY(-0.5rem); /* Equivalent to hover:-translate-y-2 */
        }

        /* Scale Card - Header Section */
        .scale-card-header {
        display: flex; /* Equivalent to flex */
        align-items: center; /* Equivalent to items-center */
        justify-content: space-between; /* Equivalent to justify-between */
        }

        .scale-card-title {
        font-size: 1.5rem; /* Equivalent to text-2xl */
        line-height: 2rem;
        font-weight: 600; /* Equivalent to font-semibold */
        }

        /* Title Colors */
        .title-color-blue { color: #1d4ed8; } /* text-blue-700 */
        .title-color-green { color: #047857; } /* text-green-700 */
        .title-color-purple { color: #6d28d9; } /* text-purple-700 */
        .title-color-red { color: #b91c1c; } /* text-red-700 */
        .title-color-teal { color: #0f766e; } /* text-teal-700 */
        .title-color-orange { color: #c2410c; } /* text-orange-700 */

        /* Scale Card - Icon */
        .scale-card-icon {
        height: 2rem; /* Equivalent to h-8 */
        width: 2rem; /* Equivalent to w-8 */
        }

        /* Icon Colors */
        .icon-color-blue { color: #3b82f6; } /* text-blue-500 */
        .icon-color-green { color: #10b981; } /* text-green-500 */
        .icon-color-purple { color: #8b5cf6; } /* text-purple-500 */
        .icon-color-red { color: #ef4444; } /* text-red-500 */
        .icon-color-teal { color: #14b8a6; } /* text-teal-500 */
        .icon-color-orange { color: #f97316; } /* text-orange-500 */


        /* Scale Card - Description */
        .scale-card-description {
        margin-top: 1rem; /* Equivalent to mt-4 */
        color: #4b5563; /* Equivalent to text-gray-600 */
        font-size: 0.875rem; /* Default text size is usually 1rem, descriptions might be smaller */
        line-height: 1.25rem;
        }

        /* Custom style for dropdown transition (keep if needed by nav.php) */
        .dropdown-menu {
            transition: opacity 0.2s ease-out, transform 0.2s ease-out;
        }

        /* --- Add your nav.php and footer.php specific styles below if needed --- */

        /* Example: If nav.php creates a <nav> element */
        /*
        nav {
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 1rem;
        }
        */

        /* Example: If footer.php creates a <footer> element */
        /*
        footer {
            margin-top: 2rem;
            padding: 1rem;
            text-align: center;
            font-size: 0.875rem;
            color: #6b7280;
        }
        */
</style>
</head>

<body> <?php include 'nav.php';?> <div class="content-container"> <header class="page-header"> 
    <h1 class="page-title">Welcome to Scales.ovh</h1> 
    <p>Our questionnaires produce prepopulated PDFs or auto calculating scoring of common scales</p> </header>

        <div class="scale-grid"> <a href="/honos" class="scale-card"> <div class="scale-card-header"> <h2 class="scale-card-title title-color-blue">HONOS</h2> <svg xmlns="http://www.w3.org/2000/svg" class="scale-card-icon icon-color-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="scale-card-description">Health of the Nation Outcome Scales Assessment</p> </a>

            <a href="/whodas" class="scale-card">
                <div class="scale-card-header">
                    <h2 class="scale-card-title title-color-green">WHODAS</h2> <svg xmlns="http://www.w3.org/2000/svg" class="scale-card-icon icon-color-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <p class="scale-card-description">World Health Organization Disability Assessment Schedule</p>
            </a>

            <a href="/lsp" class="scale-card">
                <div class="scale-card-header">
                    <h2 class="scale-card-title title-color-purple">LSP</h2> <svg xmlns="http://www.w3.org/2000/svg" class="scale-card-icon icon-color-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="scale-card-description">Life Skills Profile Assessment</p>
            </a>

             <a href="/asrs" class="scale-card">
                <div class="scale-card-header">
                    <h2 class="scale-card-title title-color-red">ASRS</h2> <svg xmlns="http://www.w3.org/2000/svg" class="scale-card-icon icon-color-red" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </div>
                <p class="scale-card-description">Adult ADHD Self-Report Scale</p>
            </a>

            <a href="/aq10" class="scale-card">
                <div class="scale-card-header">
                    <h2 class="scale-card-title title-color-teal">AQ-10</h2> <svg xmlns="http://www.w3.org/2000/svg" class="scale-card-icon icon-color-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="scale-card-description">Autism Spectrum Quotient</p>
            </a>

            <a href="/CANS.pdf" class="scale-card">
                <div class="scale-card-header">
                    <h2 class="scale-card-title title-color-orange">CANS</h2> <svg xmlns="http://www.w3.org/2000/svg" class="scale-card-icon icon-color-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="scale-card-description">Care and Needs Scale</p>
            </a>

        </div> </div> <?php include 'footer.php';?> </body>

</html>
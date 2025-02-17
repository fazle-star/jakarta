<html lang="en">
<head>
    <meta charset="UTF-8" class="scroll-smooth">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <style>
        /* Custom CSS for smooth slideshow */
        #slideshow {
            transition: opacity 1s ease-in-out;
        }
        #slideshow img {
            transition: opacity 1s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }
        #slideshow img.active {
            opacity: 1;
        }

        #desk::first-letter {
            font-size: 5rem; /* Ukuran font berdasarkan lebar viewport */
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            line-height: 2px;
            color: red; /* Untuk debugging */
        }

        /* Optional: Batasi ukuran maksimum dan minimum */
        @media (min-width: 1200px) {
            #desk::first-letter {
                font-size: 7rem; 
            }
        }

        #overlay {
            background-color: rgba(0, 0, 0, 0.5); /* Warna overlay dengan transparansi */
            backdrop-filter: blur(5px); /* Efek blur */
        }
    
        .modal-blur {
            backdrop-filter: blur(5px); /* Efek blur */
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow fixed w-full z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-bold text-gray-800">fazleweb</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-800 hover:text-gray-600">Home</a>
                    <a href="#" class="text-gray-800 hover:text-gray-600">About</a>
                    <a href="#" class="text-gray-800 hover:text-gray-600">Projects</a>
                    <a href="#" class="text-gray-800 hover:text-gray-600">Contact</a>
                </div>
                <div class="flex md:hidden items-center">
                    <button id="hamburger" class="text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="block text-gray-800 hover:text-gray-600">Home</a>
                <a href="#" class="block text-gray-800 hover:text-gray-600">About</a>
                <a href="#" class="block text-gray-800 hover:text-gray-600">Projects</a>
                <a href="#" class="block text-gray-800 hover:text-gray-600">Contact</a>
            </div>
        </div>
    </nav>
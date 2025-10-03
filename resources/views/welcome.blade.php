<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="description" content="Modern, fast, and secure web application for users.">
    <meta name="keywords" content="wibook, qr code, HTTPS, busines records, inventory management system, Secure">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>wibook - Secure and Fast</title>

    <!-- OpenGraph for social sharing -->
    <meta property="og:title" content="wibook">
    <meta property="og:description" content="Secure, blazing-fast Laravel app with Tailwind CSS.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/preview.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="wibook">
    <meta name="twitter:description" content="Secure, blazing-fast Laravel app with Tailwind CSS.">
    <meta name="twitter:image" content="{{ asset('images/preview.png') }}">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Wibook Tech",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('/image/sitelogo.png') }}",
        "sameAs": [
            "https://qr-code.wibook.co.tz/",
            "https://app.wibook.co.tz/"
        ]
    }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wibook Tech - Software Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-green': '#125529',
                        'brand-light': '#f8fafb',
                        'gray-warm': '#6b7280'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo Section -->
                <div class="flex items-center">
                    <img src="{{ asset('/image/sitelogo.png') }}" alt="Wibook" class="h-8 w-auto sm:h-10" />
                    <span class="text-xl sm:text-2xl font-bold text-brand-green ml-2">Tech</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-brand-green px-3 py-2 text-sm font-medium transition-colors">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-brand-green px-3 py-2 text-sm font-medium transition-colors">About</a>
                    <a href="#products" class="text-gray-600 hover:text-brand-green px-3 py-2 text-sm font-medium transition-colors">Products</a>
                    <a href="#team" class="text-gray-600 hover:text-brand-green px-3 py-2 text-sm font-medium transition-colors">Team</a>
                    <a href="#contact" class="text-gray-600 hover:text-brand-green px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    <button class="bg-brand-green text-white px-6 py-2 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
                        Get Started
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-brand-green focus:outline-none focus:text-brand-green">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="md:hidden hidden">
                <div class="pt-2 pb-3 space-y-1 border-t border-gray-100">
                    <a href="#home" class="block text-gray-600 hover:text-brand-green hover:bg-gray-50 px-3 py-2 text-base font-medium transition-colors">Home</a>
                    <a href="#about" class="block text-gray-600 hover:text-brand-green hover:bg-gray-50 px-3 py-2 text-base font-medium transition-colors">About</a>
                    <a href="#products" class="block text-gray-600 hover:text-brand-green hover:bg-gray-50 px-3 py-2 text-base font-medium transition-colors">Products</a>
                    <a href="#team" class="block text-gray-600 hover:text-brand-green hover:bg-gray-50 px-3 py-2 text-base font-medium transition-colors">Team</a>
                    <a href="#contact" class="block text-gray-600 hover:text-brand-green hover:bg-gray-50 px-3 py-2 text-base font-medium transition-colors">Contact</a>
                    <div class="px-3 py-2">
                        <button class="w-full bg-brand-green text-white px-6 py-2 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const icon = mobileMenuButton.querySelector('i');
            
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                
                // Toggle icon between hamburger and X
                if (mobileMenu.classList.contains('hidden')) {
                    icon.className = 'fas fa-bars text-xl';
                } else {
                    icon.className = 'fas fa-times text-xl';
                }
            });
            
            // Close mobile menu when clicking on navigation links
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    icon.className = 'fas fa-bars text-xl';
                });
            });
        });
    </script>


    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-b from-brand-light to-white pt-16 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap lg:flex-nowrap items-center">
                <div class="w-full lg:w-1/2 lg:pr-12">
                    <div class="mb-6">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-brand-green bg-opacity-10 text-brand-green font-medium">
                            <i class="fas fa-rocket mr-2"></i>
                            Software Solutions
                        </span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Innovative Software for
                        <span class="text-brand-green">Modern Business</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Empowering businesses with cutting-edge software solutions that streamline operations, 
                        boost productivity, and drive growth through innovative technology.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-brand-green text-white px-8 py-4 rounded-lg font-semibold hover:bg-opacity-90 transition-colors">
                            Start Free 
                        </button>
                        <!-- <button class="border border-gray-300 text-gray-700 px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                            Watch Demo
                        </button> -->
                    </div>
                </div>
                <div class="w-full lg:w-1/2 mt-12 lg:mt-0">
                    <div class="relative">

                    <img src="{{ asset('/image/Business Plan-bro.png') }}" />

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-green font-medium tracking-wide uppercase text-sm">About Wibook Tech</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4 mb-6">
                    Transforming Business Through Technology
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We specialize in developing premium software solutions that help businesses streamline their operations, 
                    increase productivity, and achieve their goals through innovative technology.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <div class="text-center group hover:bg-gray-50 p-8 rounded-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-brand-green bg-opacity-10 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-green group-hover:bg-opacity-20 transition-colors">
                        <i class="fas fa-lightbulb text-2xl text-brand-green"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Innovation First</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Cutting-edge solutions that push the boundaries of what's possible in business technology.
                    </p>
                </div>
                
                <div class="text-center group hover:bg-gray-50 p-8 rounded-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-brand-green bg-opacity-10 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-green group-hover:bg-opacity-20 transition-colors">
                        <i class="fas fa-shield-alt text-2xl text-brand-green"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Enterprise Security</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Bank-level security measures to protect your data and ensure business continuity.
                    </p>
                </div>
                
                <div class="text-center group hover:bg-gray-50 p-8 rounded-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-brand-green bg-opacity-10 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-green group-hover:bg-opacity-20 transition-colors">
                        <i class="fas fa-users text-2xl text-brand-green"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Expert Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        24/7 dedicated support from our team of experts to ensure your success.
                    </p>
                </div>
            </div>
        </div>
    </section>

  <!-- Products Section -->
  <section id="products" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-green font-medium tracking-wide uppercase text-sm">Our Products</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4 mb-6">
                    Free Software Solutions
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover our growing collection of free software solutions designed to simplify your daily tasks. More products coming soon!
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Product 1: QR Code Generator -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 overflow-hidden group">
                    <!-- Product Image -->
                    <div class="h-32 bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center">
                        <img src="{{ asset('/image/QR Code-bro.png') }}" alt="QR Code Generator" class="rounded-lg shadow-sm max-h-24 max-w-full object-contain" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2 text-gray-900 text-center">QR Code Generator</h3>
                        <p class="text-sm text-gray-600 mb-4 text-center leading-relaxed">
                            Generate QR codes for phone, email, text, WiFi, and URLs
                        </p>
                        <div class="text-center">
                            <div class="mb-3">
                                <span class="text-lg font-medium text-brand-green">Free</span>
                            </div>
                            <a href="https://qr-code.wibook.co.tz/" target="_blank" rel="noopener" class="bg-brand-green text-white px-4 py-2 rounded-md text-sm hover:bg-brand-green hover:bg-opacity-90 transition-colors">
                                Try Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2: Record Keeper -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 overflow-hidden group">
                    <!-- Product Image -->
                    <div class="h-32 bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center">
                        <img src="{{ asset('/image/Data extraction-bro.png') }}" alt="Record Keeper Dashboard" class="rounded-lg shadow-sm max-h-24 max-w-full object-contain" />
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2 text-gray-900 text-center">Record Keeper</h3>
                        <p class="text-sm text-gray-600 mb-4 text-center leading-relaxed">
                            Track expenses & income with collaboration features
                        </p>
                        <div class="text-center">
                            <div class="mb-3">
                                <span class="text-lg font-medium text-brand-green">Free</span>
                            </div>
                            <a href="https://app.wibook.co.tz/" target="_blank" rel="noopener" class="bg-brand-green text-white px-4 py-2 rounded-md text-sm hover:bg-brand-green hover:bg-opacity-90 transition-colors">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Coming Soon Section -->
            <div class="text-center mt-12">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 text-brand-green">
                    <i class="fas fa-plus mr-2 text-sm"></i>
                    <span class="text-sm">More products coming soon</span>
                </div>
            </div>
        </div>
    </section>




    <!-- Team Section -->
    <section id="team" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-green font-medium tracking-wide uppercase text-sm">Our Team</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4 mb-6">
                    Meet the People Behind the Innovation
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Our dedicated team of professionals is passionate about creating solutions that make a difference.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 overflow-hidden group text-center">
                    <!-- Member Photo -->
                    <div class="h-48 bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center">
                        <img src="{{ asset('/image/image.png') }}" alt="Grace Mwenda" class="w-32 h-32 rounded-full object-cover shadow-lg" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Grace Mwenda</h3>
                        <p class="text-brand-green text-sm font-medium mb-3">CEO & Founder</p>
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                            Passionate about building innovative software solutions that solve real-world problems.
                        </p>
                        <!-- Social Links -->
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fab fa-linkedin text-lg"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fab fa-twitter text-lg"></i>
                            </a>
                            <a href="mailto:info.wibook@gmail.com" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fas fa-envelope text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 overflow-hidden group text-center">
                    <!-- Member Photo -->
                    <div class="h-48 bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center">
                        <img src="{{ asset('/image/image copy.png') }}" alt="Pecy Egno" class="w-32 h-32 rounded-full object-cover shadow-lg" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Pecy Egno</h3>
                        <p class="text-brand-green text-sm font-medium mb-3">CTO</p>
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                            Expert in software architecture and development, leading our technical innovation.
                        </p>
                        <!-- Social Links -->
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fab fa-linkedin text-lg"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fab fa-github text-lg"></i>
                            </a>
                            <a href="mailto:info.wibook@gmail.com" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fas fa-envelope text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 overflow-hidden group text-center">
                    <!-- Member Photo -->
                    <div class="h-48 bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center">
                        <img src="{{ asset('/image/kalolo.jpeg') }}" alt="Wilbert Isdory" class="w-32 h-32 rounded-full object-cover shadow-lg" />
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Wilbert Isdory</h3>
                        <p class="text-brand-green text-sm font-medium mb-3">Project Manager &amp; Team Leader</p>
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                            Driving projects to success through leadership, planning, and collaboration.
                        </p>
                        <!-- Social Links -->
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fab fa-linkedin text-lg"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fab fa-github text-lg"></i>
                            </a>
                            <a href="mailto:info.wibook@gmail.com" class="text-gray-400 hover:text-brand-green transition-colors">
                                <i class="fas fa-envelope text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Join Team Section -->
            <!-- <div class="text-center mt-16">
                <div class="bg-gray-50 rounded-lg p-8 max-w-2xl mx-auto">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Want to Join Our Team?</h3>
                    <p class="text-gray-600 mb-6">
                        We're always looking for talented individuals who share our passion for innovation and excellence.
                    </p>
                    <button class="bg-brand-green text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition-colors">
                        View Open Positions
                    </button>
                </div>
            </div> -->


        </div>
    </section>




    <!-- Pricing Section -->
    <!-- <section id="pricing" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-green font-medium tracking-wide uppercase text-sm">Pricing Plans</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4 mb-6">
                    Choose Your Plan
                </h2>
                <p class="text-lg text-gray-600">
                    Flexible pricing options designed to scale with your business needs.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto"> -->
                <!-- Starter Plan -->
                <!-- <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:border-brand-green hover:shadow-lg transition-all duration-300">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Starter</h3>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-gray-900">$29</span>
                            <span class="text-gray-600 ml-2">per month</span>
                        </div>
                        <ul class="text-left space-y-3 mb-8 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Up to 5 team members
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Essential features
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Email support
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                5GB storage
                            </li> -->
                        <!-- </ul>
                        <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors">
                            Get Started
                        </button>
                    </div>
                </div> -->
                
                <!-- Professional Plan -->
                <!-- <div class="bg-white border-2 border-brand-green rounded-2xl p-8 relative transform scale-105 shadow-lg">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-brand-green text-white px-6 py-2 rounded-full text-sm font-semibold">
                            Most Popular
                        </span>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Professional</h3>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-gray-900">$79</span>
                            <span class="text-gray-600 ml-2">per month</span>
                        </div>
                        <ul class="text-left space-y-3 mb-8 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Up to 25 team members
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Advanced features
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Priority support
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                50GB storage
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Analytics dashboard
                            </li>
                        </ul>
                        <button class="w-full bg-brand-green text-white py-3 rounded-xl font-semibold hover:bg-opacity-90 transition-colors">
                            Get Started
                        </button>
                    </div>
                </div> -->
                
                <!-- Enterprise Plan -->
                <!-- <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:border-brand-green hover:shadow-lg transition-all duration-300">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Enterprise</h3>
                        <div class="mb-6">
                            <span class="text-4xl font-bold text-gray-900">$149</span>
                            <span class="text-gray-600 ml-2">per month</span>
                        </div>
                        <ul class="text-left space-y-3 mb-8 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Unlimited team members
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                All features included
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                24/7 dedicated support
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Unlimited storage
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-brand-green mr-3 text-sm"></i>
                                Custom integrations
                            </li>
                        </ul>
                        <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors">
                            Contact Sales
                        </button>
                    </div>
                </div> -->
            <!-- </div>
        </div>
    </section> -->




    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-brand-green font-medium tracking-wide uppercase text-sm">Get In Touch</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4 mb-6">
                        Ready to Transform Your Business?
                    </h2>
                    <p class="text-lg text-gray-600">
                        Let's discuss how our software solutions can help your business thrive.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-brand-green bg-opacity-10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-brand-green"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email Us</h3>
                                <p class="text-gray-600">info.wibook@gmail.com </p>
                                <!-- <p class="text-gray-600">info.wibook@gmail.com</p> -->
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-brand-green bg-opacity-10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-brand-green"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Call Us</h3>
                                <p class="text-gray-600">+255 767 582 837</p>
                                <p class="text-gray-600">Mon-Fri 9AM-6PM EST</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-brand-green bg-opacity-10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-brand-green"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Visit Us</h3>
                                <p class="text-gray-600">123 Innovation Drive</p>
                                <p class="text-gray-600">Tech Valley, CA 94000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" id="contact-form">
    @csrf
    
    <!-- Display success message -->
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-400"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    <!-- Display error message -->
    @if(session('error'))
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-circle text-red-400"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-red-800">
                        {{ session('error') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                First Name <span class="text-red-500">*</span>
            </label>
            <input 
                type="text" 
                id="first_name"
                name="first_name"
                value="{{ old('first_name') }}"
                required
                maxlength="50"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-green focus:border-transparent outline-none transition-colors @error('first_name') border-red-300 focus:ring-red-500 @enderror"
                placeholder="Enter your first name"
            >
            @error('first_name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                Last Name <span class="text-red-500">*</span>
            </label>
            <input 
                type="text" 
                id="last_name"
                name="last_name"
                value="{{ old('last_name') }}"
                required
                maxlength="50"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-green focus:border-transparent outline-none transition-colors @error('last_name') border-red-300 focus:ring-red-500 @enderror"
                placeholder="Enter your last name"
            >
            @error('last_name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
    
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
            Email <span class="text-red-500">*</span>
        </label>
        <input 
            type="email" 
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
            maxlength="100"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-green focus:border-transparent outline-none transition-colors @error('email') border-red-300 focus:ring-red-500 @enderror"
            placeholder="Enter your email address"
        >
        @error('email')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company</label>
        <input 
            type="text" 
            id="company"
            name="company"
            value="{{ old('company') }}"
            maxlength="100"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-green focus:border-transparent outline-none transition-colors @error('company') border-red-300 focus:ring-red-500 @enderror"
            placeholder="Enter your company name (optional)"
        >
        @error('company')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
            Message <span class="text-red-500">*</span>
        </label>
        <textarea 
            id="message"
            name="message"
            rows="4"
            required
            minlength="10"
            maxlength="1000"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-green focus:border-transparent outline-none transition-colors resize-none @error('message') border-red-300 focus:ring-red-500 @enderror"
            placeholder="Tell us about your project or inquiry..."
        >{{ old('message') }}</textarea>
        <div class="flex justify-between mt-1">
            @error('message')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @else
                <span></span>
            @enderror
            <span class="text-xs text-gray-500" id="char-count">0/1000</span>
        </div>
    </div>
    
    <button 
        type="submit" 
        class="w-full bg-brand-green text-white py-3 rounded-xl font-semibold hover:bg-opacity-90 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-green focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed"
        id="submit-btn"
    >
        <span id="submit-text">Send Message</span>
        <span id="submit-loading" class="hidden">
            <i class="fas fa-spinner fa-spin mr-2"></i>
            Sending...
        </span>
    </button>
</form>

<!-- JavaScript for enhanced UX -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const messageField = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    const submitBtn = document.getElementById('submit-btn');
    const submitText = document.getElementById('submit-text');
    const submitLoading = document.getElementById('submit-loading');
    
    // Character counter
    messageField.addEventListener('input', function() {
        const length = this.value.length;
        charCount.textContent = `${length}/1000`;
        
        if (length > 1000) {
            charCount.classList.add('text-red-500');
            charCount.classList.remove('text-gray-500');
        } else {
            charCount.classList.remove('text-red-500');
            charCount.classList.add('text-gray-500');
        }
    });
    
    // Form submission handling
    form.addEventListener('submit', function() {
        submitBtn.disabled = true;
        submitText.classList.add('hidden');
        submitLoading.classList.remove('hidden');
    });
    
    // Auto-hide success/error messages after 5 seconds
    const alerts = document.querySelectorAll('.bg-green-50, .bg-red-50');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.transition = 'opacity 0.5s';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }, 5000);
    });
});
</script>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="md:col-span-2">
                    <div class="flex items-center mb-6">
                        <span class="text-2xl font-bold">Wibook Tech</span>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Empowering businesses with innovative software solutions that drive growth, 
                        efficiency, and success in the digital age.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-brand-green transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-brand-green transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-brand-green transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-6">Products</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Business Analytics</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cloud Management</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Security Shield</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Enterprise Suite</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-6">Company</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © 2025 Wibook Tech. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Support</a>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts

    
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle (basic implementation)
        const mobileMenuButton = document.querySelector('.md\\:hidden button');
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', function() {
                // You can implement mobile menu toggle logic here
                console.log('Mobile menu clicked');
            });
        }
    </script>
</body>
</html>
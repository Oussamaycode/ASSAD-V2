<?php

require_once '../config.php';
session_start();

$username=$_SESSION['username'];



?>

<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Zoo Guide Portal - AFCON 2025</title>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "primary-hover": "#1068c2",
                        "secondary-action": "#ea580c", // Orange for main actions
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2632",
                        "text-main": "#111418",
                        "text-secondary": "#617589",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for better aesthetic */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent; 
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #475569; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-text-main dark:text-white transition-colors duration-200 overflow-hidden h-screen flex">
<!-- Sidebar Navigation -->
<aside class="w-72 bg-surface-light dark:bg-surface-dark border-r border-[#f0f2f4] dark:border-gray-800 flex-col justify-between hidden lg:flex h-full z-20">
<div class="flex flex-col p-4 h-full">
<!-- Brand -->
<div class="flex gap-3 items-center px-2 mb-8 mt-2">
<div class="bg-primary aspect-square rounded-full size-10 flex items-center justify-center text-white font-bold text-xl">
<span class="material-symbols-outlined">pets</span>
</div>
<div class="flex flex-col">
<h1 class="text-text-main dark:text-white text-base font-bold leading-normal">Zoo Guide Portal</h1>
<p class="text-text-secondary dark:text-gray-400 text-xs font-normal leading-normal">Morocco 2025</p>
</div>
</div>
<!-- Navigation Links -->
<nav class="flex flex-col gap-2 flex-1">
<a class="flex items-center gap-3 px-3 py-3 rounded-xl bg-primary/10 text-primary dark:text-primary-400 group transition-all" href="#">
<span class="material-symbols-outlined filled">dashboard</span>
<p class="text-sm font-semibold leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-background-light dark:hover:bg-gray-800 text-text-main dark:text-gray-300 transition-all" href="#">
<span class="material-symbols-outlined">calendar_month</span>
<p class="text-sm font-medium leading-normal">My Schedule</p>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-background-light dark:hover:bg-gray-800 text-text-main dark:text-gray-300 transition-all" href="#">
<span class="material-symbols-outlined">menu_book</span>
<p class="text-sm font-medium leading-normal">Animal Database</p>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-background-light dark:hover:bg-gray-800 text-text-main dark:text-gray-300 transition-all" href="#">
<span class="material-symbols-outlined">groups</span>
<p class="text-sm font-medium leading-normal">Visitors</p>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-background-light dark:hover:bg-gray-800 text-text-main dark:text-gray-300 transition-all" href="#">
<span class="material-symbols-outlined">person</span>
<p class="text-sm font-medium leading-normal">Profile</p>
</a>
</nav>
<!-- Bottom Actions -->
<div class="mt-auto pt-4 border-t border-[#f0f2f4] dark:border-gray-800">
<a class="flex w-full items-center justify-center gap-2 rounded-xl h-10 px-4 bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-red-100 dark:hover:bg-red-900/30 transition-colors" href="../login_and_register/codelogin.php">
<span class="material-symbols-outlined text-[20px]">logout</span>
<span class="truncate">Logout</span>
</a>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col min-w-0 bg-background-light dark:bg-background-dark overflow-hidden relative">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between whitespace-nowrap bg-surface-light dark:bg-surface-dark border-b border-[#f0f2f4] dark:border-gray-800 px-6 py-3 shrink-0 z-10">
<div class="flex items-center gap-4 lg:hidden">
<button class="text-text-main dark:text-white p-2">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
<div class="flex items-center gap-8 flex-1 lg:flex-none">
<div class="hidden lg:flex items-center gap-4 text-text-main dark:text-white">
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Dashboard</h2>
</div>
<!-- Search Bar -->
<label class="flex flex-col min-w-40 h-10 max-w-64 hidden md:flex">
<div class="flex w-full flex-1 items-stretch rounded-xl h-full bg-[#f0f2f4] dark:bg-gray-800 overflow-hidden focus-within:ring-2 focus-within:ring-primary/50 transition-all">
<div class="text-text-secondary dark:text-gray-400 flex items-center justify-center pl-4 pr-2">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="flex w-full min-w-0 flex-1 bg-transparent border-none text-text-main dark:text-white focus:outline-0 focus:ring-0 placeholder:text-text-secondary dark:placeholder:text-gray-500 text-sm font-normal leading-normal" placeholder="Search booking ID..."/>
</div>
</label>
</div>
<div class="flex items-center gap-4 justify-end">
<button class="flex items-center justify-center rounded-xl size-10 bg-[#f0f2f4] dark:bg-gray-800 text-text-main dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors relative">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border border-white dark:border-gray-800"></span>
</button>
<button class="flex items-center justify-center rounded-xl size-10 bg-[#f0f2f4] dark:bg-gray-800 text-text-main dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
<span class="material-symbols-outlined text-[20px]">settings</span>
</button>
<div class="h-10 w-10 rounded-full bg-cover bg-center border-2 border-white dark:border-gray-700 shadow-sm cursor-pointer" data-alt="Portrait of Ahmed, the guide" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhfiqcNb8tri5sxOWcoeQbwtq0xgS0_L2fD5MylI3WVJyrXi2gRRy49IauwRuD4ye48f1XbZJfvNlL4YKg7e0KcSmI9k84diXvOLp7TAFejZ8XkF87iJFw3MoyD20hQd0hWXXudOAnebDWkwHSsDtVFHsYxV7_6dRXrPbju5VGZ8-nzhZnByieSQap_4Fkpq4kGNRUkWiWjkQIT2NZ65xlElfLT0cVYZH_HMjBJokn0PgzHnRl28Bne2v2K1MKEFGpLkwzsxTNTBAB');"></div>
</div>
</header>
<!-- Scrollable Dashboard Content -->
<div class="flex-1 overflow-y-auto p-4 md:p-6 lg:p-8 scroll-smooth">
<div class="max-w-[1200px] mx-auto flex flex-col gap-6">
<!-- Welcome Header -->
<div class="flex flex-wrap justify-between items-end gap-4 pb-2">
<div class="flex flex-col gap-2">
<p class="text-text-main dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Welcome back, <?php echo($username) ?></p>
<p class="text-text-secondary dark:text-gray-400 text-base font-normal leading-normal">You have <span class="text-primary font-bold">4 tours</span> scheduled for today.</p>
</div>
<div class="text-right hidden sm:block">
<p class="text-sm font-medium text-text-secondary dark:text-gray-400">Marrakech, Morocco</p>
<p class="text-2xl font-bold text-text-main dark:text-white">24°C</p>
</div>
</div>
<!-- Stats Row -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="flex flex-col gap-2 rounded-xl p-6 bg-surface-light dark:bg-surface-dark shadow-sm border border-gray-100 dark:border-gray-800">
<div class="flex justify-between items-start">
<p class="text-text-secondary dark:text-gray-400 text-sm font-medium">Today's Tours</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg text-[20px]">tour</span>
</div>
<p class="text-text-main dark:text-white tracking-tight text-3xl font-bold leading-tight">4</p>
<p class="text-xs text-green-600 font-medium flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">trending_up</span> +1 from yesterday
                        </p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-surface-light dark:bg-surface-dark shadow-sm border border-gray-100 dark:border-gray-800">
<div class="flex justify-between items-start">
<p class="text-text-secondary dark:text-gray-400 text-sm font-medium">Active Visitors</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg text-[20px]">groups</span>
</div>
<p class="text-text-main dark:text-white tracking-tight text-3xl font-bold leading-tight">120</p>
<p class="text-xs text-text-secondary dark:text-gray-500 font-medium mt-1">Currently online</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-surface-light dark:bg-surface-dark shadow-sm border border-gray-100 dark:border-gray-800">
<div class="flex justify-between items-start">
<p class="text-text-secondary dark:text-gray-400 text-sm font-medium">Avg Rating</p>
<span class="material-symbols-outlined text-yellow-500 bg-yellow-50 dark:bg-yellow-900/20 p-1.5 rounded-lg text-[20px]">star</span>
</div>
<p class="text-text-main dark:text-white tracking-tight text-3xl font-bold leading-tight">4.9<span class="text-lg text-gray-400 font-normal">/5</span></p>
<p class="text-xs text-text-secondary dark:text-gray-500 font-medium mt-1">Based on 85 reviews</p>
</div>
</div>
<!-- Main Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Left Column: Upcoming Tours -->
<div class="lg:col-span-2 flex flex-col gap-6">
<div class="flex items-center justify-between">
<h2 class="text-text-main dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">Upcoming Tours</h2>
<a class="text-primary hover:text-primary-hover text-sm font-bold" href="#">View All</a>
</div>
<!-- Tour Card 1 -->
<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row gap-5 items-start sm:items-center group">
<div class="relative w-full sm:w-32 h-32 sm:h-24 shrink-0 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Majestic male lion resting in savanna grass" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDW4zOnB8QLJWeqU0kx-QJZBH-H4CsCIimOSrbaRLi5aJrIgQ15Y2JLovGzZeePh9E6_LtWgkyMNPvUPL_sDkcGtZKcXvNqa1pOo1JtmYTwpch7PoB__v2S2x0WOSaJW-KtE90afhek7FrIwQ6mBWQzNC3dnGVyBhY1srv_d94OXUk8JtbEySd2KHqWt4DpEZbcudF24VinJQdaM4JsbPoP5Mlezxy8abMknLgP0q1VrB4tMSydx1uEEu2rAqFhdaHrcXeHt_xHAjh3"/>
<div class="absolute top-2 left-2 bg-black/60 backdrop-blur-sm text-white text-[10px] px-2 py-0.5 rounded font-bold uppercase tracking-wider">Live</div>
</div>
<div class="flex flex-col flex-1 gap-1">
<div class="flex items-center gap-2 text-primary font-bold text-xs uppercase tracking-wider">
<span class="material-symbols-outlined text-[14px]">schedule</span>
                                    10:00 AM - 11:30 AM
                                </div>
<h3 class="text-text-main dark:text-white text-lg font-bold">Atlas Lion Virtual Experience</h3>
<p class="text-text-secondary dark:text-gray-400 text-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">group</span> 15 Visitors booked
                                </p>
</div>
<button class="w-full sm:w-auto mt-2 sm:mt-0 bg-secondary-action hover:bg-orange-700 text-white font-bold py-2.5 px-6 rounded-lg shadow-md shadow-orange-500/20 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined">play_circle</span>
                                Start Tour
                            </button>
</div>
<!-- Tour Card 2 -->
<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row gap-5 items-start sm:items-center group">
<div class="relative w-full sm:w-32 h-32 sm:h-24 shrink-0 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Camels walking in the sahara desert dunes" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVNftuwFlybOy4JSiJP4jBmjG5pHPgDEI_PssVu6KokZXZSa3zSfeu8Uh1yCMfKcd39AicmSTgUIA53P35FjYxq8sicQaRi75t7fKt4GcwyulHI2VxgB47u898Trm91NMfw0QLIVO8hlx9dxBzbN7aE7fmXKRc_3FNpslLtstmQ5FS9DlHRValJ-3MO65vxIh0VyKHH8cZIazTTgBBFiVrI4q_OBBqpwJo6XH9o9Kjh3Hr6Ia_6bhqd2HGKjJOsseLOdESb6s4-8Mw"/>
</div>
<div class="flex flex-col flex-1 gap-1">
<div class="flex items-center gap-2 text-text-secondary dark:text-gray-500 font-bold text-xs uppercase tracking-wider">
<span class="material-symbols-outlined text-[14px]">schedule</span>
                                    01:00 PM - 02:00 PM
                                </div>
<h3 class="text-text-main dark:text-white text-lg font-bold">Sahara Desert Wildlife</h3>
<p class="text-text-secondary dark:text-gray-400 text-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">group</span> 8 Visitors booked
                                </p>
</div>
<button class="w-full sm:w-auto mt-2 sm:mt-0 bg-primary/10 hover:bg-primary/20 text-primary dark:text-blue-400 font-bold py-2.5 px-6 rounded-lg transition-all flex items-center justify-center gap-2">
                                View Details
                            </button>
</div>
<!-- Tour Card 3 -->
<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row gap-5 items-start sm:items-center group">
<div class="relative w-full sm:w-32 h-32 sm:h-24 shrink-0 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Colorful exotic parrot on a branch" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsYkoIAaS2jDNRWJRA6BnaoEXJaEjcdQoOXmcPLN6KnpJSuZoaIIHmrQhuHht0rVOMYJXNc8b8TJ7Hs2XCKAkxxeKHqGhtObklQXkBqwfl3cAgDgnQtzLarXKGXEa4k6_W-p4lGL6i7I5bRw3a6Ew7T-uEHUxCZ0OyJqbB60XXPtoc-Gu36-hI5Yefafp3P-kLtz3oZMOaiRYI7eYDAST-UfhXf0t4vnDfjlnyYbZz3qk3iwH-LMZ9oSRJ6o5WxAC6MiuYVq07yVgK"/>
</div>
<div class="flex flex-col flex-1 gap-1">
<div class="flex items-center gap-2 text-text-secondary dark:text-gray-500 font-bold text-xs uppercase tracking-wider">
<span class="material-symbols-outlined text-[14px]">schedule</span>
                                    03:30 PM - 04:30 PM
                                </div>
<h3 class="text-text-main dark:text-white text-lg font-bold">Moroccan Coast Birds</h3>
<p class="text-text-secondary dark:text-gray-400 text-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">group</span> 22 Visitors booked
                                </p>
</div>
<button class="w-full sm:w-auto mt-2 sm:mt-0 bg-primary/10 hover:bg-primary/20 text-primary dark:text-blue-400 font-bold py-2.5 px-6 rounded-lg transition-all flex items-center justify-center gap-2">
                                View Details
                            </button>
</div>
</div>
<!-- Right Column: Recent Bookings & Extras -->
<div class="flex flex-col gap-6">
<!-- Recent Bookings Widget -->
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col overflow-hidden">
<div class="p-4 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
<h3 class="font-bold text-text-main dark:text-white">Recent Bookings</h3>
<button class="p-1 hover:bg-gray-100 dark:hover:bg-gray-800 rounded text-text-secondary dark:text-gray-400">
<span class="material-symbols-outlined text-[20px]">more_horiz</span>
</button>
</div>
<div class="flex flex-col">
<!-- Booking Item 1 -->
<div class="p-4 border-b border-gray-50 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
<div class="flex justify-between items-start mb-1">
<p class="font-semibold text-sm text-text-main dark:text-white">Sarah Jenkins</p>
<span class="bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Confirmed</span>
</div>
<p class="text-xs text-text-secondary dark:text-gray-400">Atlas Lion Experience</p>
<div class="flex gap-2 mt-3">
<button class="text-xs font-semibold text-primary hover:underline">Message</button>
</div>
</div>
<!-- Booking Item 2 -->
<div class="p-4 border-b border-gray-50 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
<div class="flex justify-between items-start mb-1">
<p class="font-semibold text-sm text-text-main dark:text-white">Mike Taylor</p>
<span class="bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Pending</span>
</div>
<p class="text-xs text-text-secondary dark:text-gray-400">Sahara Desert Wildlife</p>
<div class="flex gap-2 mt-3">
<button class="text-xs font-semibold text-green-600 hover:text-green-700">Confirm</button>
<button class="text-xs font-semibold text-red-500 hover:text-red-600">Decline</button>
</div>
</div>
<!-- Booking Item 3 -->
<div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
<div class="flex justify-between items-start mb-1">
<p class="font-semibold text-sm text-text-main dark:text-white">Amira El-Fassi</p>
<span class="bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Confirmed</span>
</div>
<p class="text-xs text-text-secondary dark:text-gray-400">Moroccan Coast Birds</p>
</div>
</div>
</div>
<!-- Spotlight Animal -->
<div class="bg-gradient-to-br from-primary to-blue-700 rounded-xl shadow-lg shadow-blue-500/30 text-white overflow-hidden relative group">
<!-- Background Pattern Decor -->
<div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl -mr-10 -mt-10"></div>
<div class="p-5 relative z-10">
<div class="flex items-center gap-2 mb-3 opacity-90">
<span class="material-symbols-outlined text-[18px]">lightbulb</span>
<span class="text-xs font-bold uppercase tracking-widest">Animal Spotlight</span>
</div>
<h3 class="text-xl font-bold mb-1">Fennec Fox</h3>
<p class="text-sm text-blue-100 mb-4 line-clamp-2">The smallest fox in the world, known for its distinctively large ears.</p>
<button class="bg-white text-primary text-sm font-bold py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors w-full">
                                    View Fact Sheet
                                </button>
</div>
<img class="w-full h-32 object-cover opacity-80 mix-blend-overlay group-hover:scale-105 transition-transform duration-700" data-alt="Close up of a Fennec fox face" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfyRfL6l_gygAbeDuQcLx_rbXz4dGpnAcrRNLpaikTedLVYCPEhmVigIyaYEyjOWL3m9uN0sZUTpONsgFRKmtZQ48XDfDg7cZGnFTc7tfLI15GmAlANrp4yruSYDDLztst2EHyxNKiibggN-DyfewOX6iU-JPSFZ7fE_OeCHvwPpLOXj9ChtwexejRG3hTv7Pi33sy9gkcGZKaFqcHWJbBAc2vJwqIApeJlH5spRBYqxZQO1jWdgQ23b5t_8CE9wT9PgTi9Sm0fhIP"/>
</div>
</div>
</div>
</div>
<!-- Footer Simple -->
<div class="mt-12 mb-6 text-center">
<p class="text-xs text-text-secondary dark:text-gray-500">© 2025 AFCON Virtual Zoo. All rights reserved.</p>
</div>
</div>
</main>
</body></html>
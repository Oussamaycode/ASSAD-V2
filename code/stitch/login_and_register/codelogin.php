<?php
require_once '../utilisateur.php';

if (isset($_POST['submit_form'])) {

    $nom = $_POST['nom'];
    $password = $_POST['password'];

    
    $user = new Utilisateur('', '', '', '');

    $user->Login($nom, $password);

    
}
?>



<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AFCON 2025 Virtual Zoo - Login</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#141414",
                        "background-light": "#f0f4f8", // Light blue-grey tint per request
                        "background-dark": "#0f172a", // Dark blue-black
                        "brand-blue": "#2563EB",
                        "brand-orange": "#EA580C", // Deep orange/red for AFCON/Morocco feel
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for clean look */
        ::-webkit-scrollbar {
            width: 8px;
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
        
        .glass-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .dark .glass-panel {
            background: rgba(30, 41, 59, 0.95);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col overflow-x-hidden transition-colors duration-300">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 w-full bg-white/90 dark:bg-[#141414]/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<!-- Logo Section -->
<div class="flex items-center gap-3 text-primary dark:text-white">
<div class="size-8 text-brand-orange">
<span class="material-symbols-outlined text-3xl">pets</span>
</div>
<h2 class="text-primary dark:text-white text-lg font-bold leading-tight tracking-tight">AFCON 2025 Virtual Zoo</h2>
</div>
<!-- Desktop Nav Links -->
<div class="hidden md:flex flex-1 justify-end gap-8 items-center">
<nav class="flex gap-6">
<a class="text-sm font-medium text-gray-600 hover:text-brand-blue dark:text-gray-300 dark:hover:text-brand-blue transition-colors" href="#">Home</a>
<a class="text-sm font-medium text-gray-600 hover:text-brand-blue dark:text-gray-300 dark:hover:text-brand-blue transition-colors" href="#">About Morocco</a>
<a class="text-sm font-medium text-gray-600 hover:text-brand-blue dark:text-gray-300 dark:hover:text-brand-blue transition-colors" href="#">Support</a>
</nav>
<div class="flex gap-3">
<a class="flex items-center justify-center rounded-lg h-9 px-4 bg-transparent border border-gray-300 dark:border-gray-700 text-primary dark:text-white text-sm font-bold hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" href="../login_and_register/codelogin.php">
                            Login
</a>
<a class="flex items-center justify-center rounded-lg h-9 px-4 bg-primary dark:bg-brand-blue text-white text-sm font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity" href="../login_and_register/coderegister.php">
                            Register
</a>
</div>
</div>
<!-- Mobile Menu Button -->
<div class="md:hidden flex items-center">
<button class="text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-white focus:outline-none">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-grow flex items-center justify-center p-4 md:p-8 lg:p-12 relative">
<!-- Background Pattern -->
<div class="absolute inset-0 bg-cover bg-center opacity-10 pointer-events-none" data-alt="Subtle geometric moroccan pattern background" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%232563EB\' fill-opacity=\'0.2\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
<div class="relative w-full max-w-6xl bg-white dark:bg-gray-900 rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row min-h-[600px]">
<!-- Left Side: Image / Branding -->
<div class="relative hidden md:flex md:w-1/2 bg-blue-900 flex-col justify-end p-12 text-white overflow-hidden group">
<div class="absolute inset-0 z-0">
<img alt="Majestic Lion in Moroccan landscape representing Atlas Lions" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Majestic Lion in Moroccan landscape representing Atlas Lions" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYWDt4T-iozUmMLvp_tmc7Ik6X-uBV0ChqnYTcU9_ARh3YcMi-V9JeiBioOnoaLoU4StyUtV38ffOLhE8NygmBNESNJyDDGSXcgrhySkMQXQsvR4zb9e8xwa-dQBqmB9PFcXSJBEtk04xL8zUSo7vl2N8aa2HXbF1XdqLbjv9K6ZSweBkhfnB_eH5jwQJ5yA5Pq99-0Mhq0-4hBSfxFMkcf1nZNp2zVcy4rapE0Agvf4mkYMnO_IKWWAa-QwNUVjIycquEvr0aMOSl"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
<div class="absolute inset-0 bg-brand-blue/20 mix-blend-overlay"></div>
</div>
<div class="relative z-10 space-y-4">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-orange/90 backdrop-blur text-xs font-bold uppercase tracking-wider text-white mb-2 shadow-lg">
<span class="material-symbols-outlined text-sm">stadium</span>
                        Morocco 2025
                    </div>
<h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight">
                        Discover the <br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-amber-200">Pride of Africa</span>
</h1>
<p class="text-gray-200 text-lg max-w-md leading-relaxed">
                        Join the official virtual experience. Explore the wildlife, interact with exhibits, and guide visitors through the wonders of the Atlas.
                    </p>
</div>
</div>
<!-- Right Side: Form Container -->
<div class="w-full md:w-1/2 p-8 lg:p-12 flex flex-col justify-center bg-white dark:bg-gray-800 relative">
<!-- Role Selection Segmented Control -->

<!-- Form Header -->
<div class="mb-8">
<h2 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight mb-2">Welcome Back</h2>
<p class="text-gray-500 dark:text-gray-400">Sign in to access your virtual zoo dashboard.</p>
</div>
<!-- Login Form -->
<form action='' method='POST' class="space-y-5">
<!-- Email Input -->
<div class="space-y-1.5">
<label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="username">Username</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-[20px]">badge</span>
</div>
<input class="block w-full pl-10 pr-3 py-3 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-brand-blue focus:border-brand-blue dark:bg-gray-700/50 dark:text-white dark:placeholder-gray-400 sm:text-sm transition-shadow" id="username" placeholder="Username" type="text" name="nom"/>
</div>
</div>
<!-- Password Input -->
<div class="space-y-1.5">
<div class="flex justify-between items-center">
<label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="password">Password</label>
<a class="text-xs font-semibold text-brand-blue hover:text-blue-600" href="#">Forgot password?</a>
</div>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400">lock</span>
</div>
<input class="block w-full pl-10 pr-10 py-3 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-brand-blue focus:border-brand-blue dark:bg-gray-700/50 dark:text-white dark:placeholder-gray-400 sm:text-sm transition-shadow" id="password" placeholder="••••••••" type="password" name="password"/>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
<span class="material-symbols-outlined text-gray-400 hover:text-gray-600">visibility</span>
</div>
</div>
</div>
<!-- Actions -->
<div class="pt-2">
<button class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-orange transition-all transform hover:scale-[1.01]" type="submit" name="submit_form">
                            Sign In
                        </button>
</div>
</form>
<!-- Divider -->
<div class="relative my-8">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
</div>

</div>
<!-- Social Login -->

<!-- Toggle to Register -->

</div>
</div>
<!-- Background Elements for Visual Flair -->
<div class="absolute -top-10 -right-10 w-64 h-64 bg-brand-orange/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute -bottom-10 -left-10 w-96 h-96 bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>
</main>
<!-- Simple Footer -->
<footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-6">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-gray-500 dark:text-gray-400">© 2025 AFCON Virtual Zoo. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-sm text-gray-500 hover:text-primary dark:hover:text-white" href="#">Privacy Policy</a>
<a class="text-sm text-gray-500 hover:text-primary dark:hover:text-white" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>
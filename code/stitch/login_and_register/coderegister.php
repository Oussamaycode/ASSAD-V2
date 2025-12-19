<?php

require '../utilisateur.php';

if (isset($_POST['submit_form'])) {

    $nom     = $_POST['nom'];
    $email   = $_POST['email'];
    $role    = $_POST['role'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];

    if ($password !== $confirm) {
        echo "<p style='color:red;text-align:center'>Passwords do not match</p>";
        return;
    }

    $statut = ($role === 'visitor') ? 'approved' : 'pending';

    $user = new Utilisateur($nom, $email, $role, $statut);
    $user->setPassword($password);
    $user->inscription();
}    

?>

<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AFCON 2025 Virtual Zoo - Registration</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "primary-dark": "#0f4bc4",
                        "accent": "#f5503e", 
                        "accent-hover": "#d94434",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-[#111318] dark:text-white min-h-screen flex flex-col">
<!-- Top Navigation (Minimal version for Login/Register pages) -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] dark:border-gray-800 px-10 py-4 bg-white dark:bg-[#1a2333]">
<div class="flex items-center gap-4 text-[#111318] dark:text-white">
<div class="size-8 text-primary">
<svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z" fill="currentColor" fill-rule="evenodd"></path>
<path clip-rule="evenodd" d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-tight">AFCON 2025 Virtual Zoo</h2>
</div>
<div class="hidden md:flex items-center gap-6">
<span class="text-sm text-[#616f89] dark:text-gray-400">Already have an account?</span>
<a class="text-sm font-bold text-primary hover:underline" href="../login_and_register/codelogin.php">Log In</a>
</div>
</header>
<!-- Main Content -->
<main class="flex-grow flex items-center justify-center p-4 md:p-8">
<div class="w-full max-w-[1200px] bg-white dark:bg-[#1a2333] rounded-2xl shadow-xl overflow-hidden flex flex-col lg:flex-row min-h-[700px]">
<!-- Left Side: Hero / Visual -->
<div class="hidden lg:flex lg:w-5/12 relative bg-primary flex-col justify-between p-12 text-white overflow-hidden">
<!-- Decorative Background Image with Overlay -->
<div class="absolute inset-0 z-0 opacity-20 bg-cover bg-center" data-alt="Abstract Moroccan geometric zellige tile pattern" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKlydzRANOnWxlySwSD-tmE_2ySk68ANYc2AM5eAAXP8ZnaSG1YeHCkGwiNY2NC2WDxkdZg_-UcdNHFxAgh2a5QcjI_GKwhAkhLi9TbSsgBigiNjBaKjOqskhMnxBEYGGgLar6KOApy7lJ4buVYiarW_H6-arJ8M5_tg55PZVVi3hPWaKR2zttqq5Q5Edy4B1LmPT35q_PfeoAyaZ94ouuetg0OZRa1jENR3H1eDcx6iK9ET5rTEmfns8faZMQMkFyFNYd5qznoLRj");'>
</div>
<!-- Content -->
<div class="relative z-10">
<div class="inline-flex items-center justify-center p-2 bg-white/10 backdrop-blur-sm rounded-lg border border-white/20 mb-8">
<span class="material-symbols-outlined text-xl mr-2">stadium</span>
<span class="text-xs font-bold uppercase tracking-wider">Morocco 2025</span>
</div>
<h1 class="text-4xl md:text-5xl font-extrabold leading-[1.1] tracking-tight mb-6">
                        Experience the Wild Side of Morocco.
                    </h1>
<p class="text-lg text-blue-100 font-medium leading-relaxed max-w-sm">
                        Join thousands of fans exploring the virtual exhibits, meeting the mascots, and celebrating African wildlife.
                    </p>
</div>
<div class="relative z-10 mt-12">
<!-- Testimonial Card style element -->
<div class="bg-white/10 backdrop-blur-md border border-white/10 p-6 rounded-xl">
<div class="flex items-center gap-1 text-yellow-400 mb-3">
<span class="material-symbols-outlined text-lg filled">star</span>
<span class="material-symbols-outlined text-lg filled">star</span>
<span class="material-symbols-outlined text-lg filled">star</span>
<span class="material-symbols-outlined text-lg filled">star</span>
<span class="material-symbols-outlined text-lg filled">star</span>
</div>
<p class="text-sm italic opacity-90 mb-4">"An incredible way to experience the culture and nature of Morocco before the games even start!"</p>
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-cover bg-center border-2 border-white/30" data-alt="Portrait of a smiling female user" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC3uhNugiBf6AV74lh2kR_KLkCx4QAUo6YIWXy9-jyH3esszzK3BZLcUclfQX0DzqGlcQNbzQcxiJdbVHQ8-2AzYoxhgn3dkyORmkfAivs7W-ckKG-2YouoTCeAEDnXYnRZ-kIZn0f4va7FeRLj85M5CQlI1-pxM8DIlcvnWO0Pwz_UyDXZJtQ4F-V2-orlCjG4tk2rupBnrfwouu-ATs2VFG12G273UaU7tnctjmuR9venOLIkUwdyCrP8dLfiwM3KqQE5JsEMF3hR");'>
</div>
<div>
<p class="text-xs font-bold">Sarah Jenkins</p>
<p class="text-[10px] opacity-70">Virtual Guide</p>
</div>
</div>
</div>
</div>
</div>
<!-- Right Side: Registration Form -->
<div class="w-full lg:w-7/12 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
<div class="max-w-[480px] mx-auto w-full">
<div class="mb-8">
<h2 class="text-3xl font-bold text-[#111318] dark:text-white mb-2">Create your account</h2>
<p class="text-[#616f89] dark:text-gray-400">Sign up to explore the virtual exhibits and join the community.</p>
</div>
<!-- Role Selector -->

<!-- Form -->
<form action='' method='POST' class="space-y-5">
<div class="mb-8">
<p class="text-sm font-medium text-[#111318] dark:text-gray-200 mb-2">I am joining as a:</p>
<div class="flex w-full bg-[#f0f2f4] dark:bg-gray-800 p-1 rounded-lg">
<label class="flex-1 cursor-pointer">
<input checked="" class="peer sr-only" name="role" type="radio" value="visitor"/>
<div class="flex items-center justify-center py-2.5 px-4 rounded-md text-sm font-medium text-[#616f89] dark:text-gray-400 transition-all peer-checked:bg-white dark:peer-checked:bg-gray-700 peer-checked:text-primary peer-checked:shadow-sm">
<span class="material-symbols-outlined text-lg mr-2">person</span>
                                    Visitor
                                </div>
</label>
<label class="flex-1 cursor-pointer">
<input class="peer sr-only" name="role" type="radio" value="guide"/>
<div class="flex items-center justify-center py-2.5 px-4 rounded-md text-sm font-medium text-[#616f89] dark:text-gray-400 transition-all peer-checked:bg-white dark:peer-checked:bg-gray-700 peer-checked:text-primary peer-checked:shadow-sm">
<span class="material-symbols-outlined text-lg mr-2">tour</span>
                                    Guide
                                </div>
</label>
</div>
</div>

<div class="space-y-5">
<label class="block">
<span class="text-[#111318] dark:text-white text-sm font-medium leading-normal mb-1 block">Username</span>
<div class="relative">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none">
<span class="material-symbols-outlined text-[20px]">badge</span>
</span>
<input class="w-full pl-10 pr-4 py-3 rounded-lg border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111318] dark:text-white placeholder-[#616f89] focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-colors text-base" placeholder="Enter your username" type="text" name="nom"/>
</div>
</label>
<label class="block">
<span class="text-[#111318] dark:text-white text-sm font-medium leading-normal mb-1 block">Email Address</span>
<div class="relative">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none">
<span class="material-symbols-outlined text-[20px]">mail</span>
</span>
<input class="w-full pl-10 pr-4 py-3 rounded-lg border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111318] dark:text-white placeholder-[#616f89] focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-colors text-base" placeholder="name@example.com" type="email" name="email"/>
</div>
</label>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<label class="block">
<span class="text-[#111318] dark:text-white text-sm font-medium leading-normal mb-1 block">Password</span>
<div class="relative group">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">lock</span>
</span>
<input class="w-full pl-10 pr-10 py-3 rounded-lg border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111318] dark:text-white placeholder-[#616f89] focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-colors text-base" placeholder="Create password" type="password" name="password"/>
<button class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200" type="button">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</div>
</label>
<label class="block">
<span class="text-[#111318] dark:text-white text-sm font-medium leading-normal mb-1 block">Confirm Password</span>
<div class="relative group">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">lock_reset</span>
</span>
<input class="w-full pl-10 pr-10 py-3 rounded-lg border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111318] dark:text-white placeholder-[#616f89] focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-colors text-base" placeholder="Confirm password" type="password" name="confirm_password"/>
</div>
</label>
</div>
</div>
<!-- Terms -->
<div class="flex items-start gap-3 mt-2">
<div class="flex items-center h-5">
<input class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary/30 text-primary" id="terms" type="checkbox"/>
</div>
<label class="text-sm text-[#616f89] dark:text-gray-400" for="terms">
                                I agree to the <a class="font-medium text-primary hover:underline" href="#">Terms of Service</a> and <a class="font-medium text-primary hover:underline" href="#">Privacy Policy</a>
</label>
</div>
<!-- CTA Button -->
<button class="w-full flex items-center justify-center gap-2 bg-accent hover:bg-accent-hover text-white text-base font-bold py-3.5 px-6 rounded-lg transition-all shadow-md hover:shadow-lg mt-4 group" type="submit" name="submit_form">
                            Register Now
                            <span class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-1">arrow_forward</span>
</button>
</form>
<!-- Social Login -->

<div class="mt-8 text-center md:hidden">
<p class="text-sm text-[#616f89] dark:text-gray-400">
                            Already have an account? <a class="font-bold text-primary hover:underline" href="../login_and_register/codelogin.php">Log In</a>
</p>
</div>
</div>
</div>
</div>
</main>
<!-- Footer simplified -->
<footer class="py-6 px-10 border-t border-[#f0f2f4] dark:border-gray-800 mt-auto bg-white dark:bg-[#1a2333]">
<div class="max-w-[1200px] mx-auto flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#616f89] dark:text-gray-400">
<p>© 2025 AFCON Virtual Zoo. All rights reserved.</p>
<div class="flex gap-6">
<a class="hover:text-primary transition-colors" href="#">Help Center</a>
<a class="hover:text-primary transition-colors" href="#">Privacy</a>
<a class="hover:text-primary transition-colors" href="#">Terms</a>
</div>
</div>
</footer>
</body></html>
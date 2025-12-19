<?php
require '../admin.php';

session_start();

$username=$_SESSION['username'];

$users=new Utilisateur(null, null, null, null);


$allUsers= $users->afficher();

?>


<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Dashboard - Virtual Zoo AFCON 2025</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&amp;family=Noto+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#141414", // Keeping base primary as dark for structure
                        "brand-blue": "#0ea5e9", // Adding blue for the requested dominant scheme
                        "brand-blue-light": "#e0f2fe",
                        "brand-blue-dark": "#0284c7",
                        "status-green": "#22c55e",
                        "status-green-light": "#dcfce7",
                        "status-orange": "#f97316",
                        "status-orange-light": "#ffedd5",
                        "status-red": "#ef4444",
                        "background-light": "#f7f7f7",
                        "background-dark": "#191919",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.filled {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-white antialiased transition-colors duration-200">
<div class="flex h-screen w-full overflow-hidden">
<aside class="hidden w-64 flex-col bg-white dark:bg-[#202020] border-r border-slate-200 dark:border-slate-800 md:flex flex-shrink-0 relative z-20">
<div class="flex h-16 items-center gap-3 px-6 border-b border-slate-100 dark:border-slate-800">
<div class="bg-brand-blue rounded-lg p-1 text-white">
<span class="material-symbols-outlined">pets</span>
</div>
<div>
<h1 class="text-base font-bold text-slate-900 dark:text-white leading-tight">Zoo Admin</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">AFCON 2025 Morocco</p>
</div>
</div>
<div class="flex flex-1 flex-col overflow-y-auto px-4 py-6 gap-6">
<div class="flex flex-col gap-1">
<p class="px-3 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-2">Main</p>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-brand-blue/10 text-brand-blue-dark dark:text-brand-blue font-medium transition-colors" href="#">
<span class="material-symbols-outlined filled">dashboard</span>
<span class="text-sm">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-slate-600 dark:group-hover:text-slate-200">group</span>
<span class="text-sm font-medium">Visitors &amp; Guides</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-slate-600 dark:group-hover:text-slate-200">savings</span>
<span class="text-sm font-medium">Tour Bookings</span>
</a>
</div>
<div class="flex flex-col gap-1">
<p class="px-3 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-2">Database</p>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-slate-600 dark:group-hover:text-slate-200">cruelty_free</span>
<span class="text-sm font-medium">Animals</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-slate-600 dark:group-hover:text-slate-200">map</span>
<span class="text-sm font-medium">Map &amp; Enclosures</span>
</a>
</div>
<div class="flex flex-col gap-1">
<p class="px-3 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-2">System</p>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-slate-600 dark:group-hover:text-slate-200">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</div>
</div>
<div class="p-4 border-t border-slate-100 dark:border-slate-800">
<button class="flex w-full items-center justify-center gap-2 rounded-lg bg-status-red/10 px-4 py-2 text-sm font-semibold text-status-red hover:bg-status-red/20 transition-colors">
<span class="material-symbols-outlined text-lg">logout</span>
<span>Log Out</span>
</button>
</div>
</aside>
<main class="flex-1 flex flex-col h-full overflow-hidden bg-slate-50/50 dark:bg-[#121212]">
<header class="flex h-16 items-center justify-between gap-4 border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-[#202020] px-6 lg:px-8">
<div class="flex items-center gap-4">
<button class="md:hidden p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
<span class="material-symbols-outlined">menu</span>
</button>
<div class="relative hidden sm:block">
<span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined text-[20px]">search</span>
<input class="h-9 w-64 rounded-lg border-slate-200 bg-slate-50 pl-10 text-sm outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue dark:border-slate-700 dark:bg-slate-800 dark:text-white transition-all" placeholder="Search visitors, animals..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="relative p-2 text-slate-500 hover:text-brand-blue transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-status-red ring-2 ring-white dark:ring-[#202020]"></span>
</button>
<div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-700 mx-1"></div>
<div class="flex items-center gap-3 pl-1">
<div class="text-right hidden sm:block">
<p class="text-sm font-semibold text-slate-900 dark:text-white"><?php echo $username?></p>
<p class="text-xs text-slate-500 dark:text-slate-400">Super Admin</p>
</div>
<div class="h-9 w-9 overflow-hidden rounded-full border border-slate-200 dark:border-slate-700 bg-slate-100" data-alt="Profile picture of administrator" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAPhnARk1ZsVLbS6ER2xGLtWa9FShMznaeE-hcIG1IZBsJEsi6G3sAln0jPhP1oD-S9MGjifES7AlaRAPml3CHLz2giC7EFScn5SBHWDIupYhYmpHlTjRQ1zTf7WlleNuZ10yjgKv4bwp1IvVmFo7Gn3-H63VFP0nNhG2COkszI4OWTaDatn2ZTgvoDScbe4VR-yfkX9di2aH6oAz53tG1L5GS0zww-UHMad8o1YQtkxWai0LCm0-LhCFTuuDzgUk4DdsRHDvFU9yYX'); background-size: cover;"></div>
</div>
</div>
</header>
<div class="flex-1 overflow-y-auto p-6 lg:p-8">
<div class="mx-auto max-w-7xl flex flex-col gap-8">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<h2 class="text-2xl font-bold text-slate-900 dark:text-white">Dashboard Overview</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">Real-time stats for AFCON 2025 Zoo Experience</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors shadow-sm">
<span class="material-symbols-outlined text-[18px]">download</span>
                        Export Report
                    </button>
<button class="flex items-center gap-2 rounded-lg bg-brand-blue px-4 py-2 text-sm font-semibold text-white hover:bg-brand-blue-dark transition-colors shadow-sm shadow-brand-blue/20">
<span class="material-symbols-outlined text-[18px]">add</span>
                        Add Event
                    </button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-white dark:bg-[#202020] rounded-xl p-5 border border-slate-100 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-brand-blue">groups</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Visitors</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white">124,592</h3>
<div class="flex items-center gap-1 text-status-green text-sm font-medium mt-2">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>+12.5%</span>
<span class="text-slate-400 dark:text-slate-500 font-normal ml-1">vs last week</span>
</div>
</div>
</div>
<div class="bg-white dark:bg-[#202020] rounded-xl p-5 border border-slate-100 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-brand-blue">airplane_ticket</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Tours Booked</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white">8,204</h3>
<div class="flex items-center gap-1 text-status-green text-sm font-medium mt-2">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>+5.2%</span>
<span class="text-slate-400 dark:text-slate-500 font-normal ml-1">vs last week</span>
</div>
</div>
</div>
<div class="bg-white dark:bg-[#202020] rounded-xl p-5 border border-slate-100 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-brand-blue">payments</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Revenue</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white">$45,200</h3>
<div class="flex items-center gap-1 text-status-green text-sm font-medium mt-2">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>+8.1%</span>
<span class="text-slate-400 dark:text-slate-500 font-normal ml-1">vs last week</span>
</div>
</div>
</div>
<div class="bg-white dark:bg-[#202020] rounded-xl p-5 border border-slate-100 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-brand-blue">dns</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Server Load</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white">42%</h3>
<div class="flex items-center gap-1 text-status-green text-sm font-medium mt-2">
<span class="material-symbols-outlined text-sm">check_circle</span>
<span>Optimal</span>
<span class="text-slate-400 dark:text-slate-500 font-normal ml-1">status</span>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<div class="lg:col-span-2 bg-white dark:bg-[#202020] rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm p-6">
<div class="flex items-center justify-between mb-6">
<div>
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Visitor Traffic</h3>
<p class="text-sm text-slate-500 dark:text-slate-400">Daily users during AFCON period</p>
</div>
<select class="text-sm border-slate-200 dark:border-slate-700 rounded-lg bg-slate-50 dark:bg-slate-800 dark:text-white focus:ring-brand-blue focus:border-brand-blue">
<option>Last 30 Days</option>
<option>Last 7 Days</option>
<option>Today</option>
</select>
</div>
<div class="h-[280px] w-full flex items-end gap-2 sm:gap-4 relative pt-10">
<div class="absolute left-0 top-0 bottom-8 flex flex-col justify-between text-xs text-slate-400 w-8">
<span>15k</span>
<span>10k</span>
<span>5k</span>
<span>0</span>
</div>
<div class="flex flex-1 items-end justify-between h-full pl-10 pb-6 border-l border-b border-slate-100 dark:border-slate-800">
<div class="w-full flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-8 sm:w-12 bg-brand-blue/20 rounded-t-sm h-[40%] group-hover:bg-brand-blue transition-colors relative">
<div class="hidden group-hover:block absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded">5.2k</div>
</div>
<span class="text-xs text-slate-400">Mon</span>
</div>
<div class="w-full flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-8 sm:w-12 bg-brand-blue/20 rounded-t-sm h-[65%] group-hover:bg-brand-blue transition-colors relative">
<div class="hidden group-hover:block absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded">8.1k</div>
</div>
<span class="text-xs text-slate-400">Tue</span>
</div>
<div class="w-full flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-8 sm:w-12 bg-brand-blue/20 rounded-t-sm h-[55%] group-hover:bg-brand-blue transition-colors relative">
<div class="hidden group-hover:block absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded">6.8k</div>
</div>
<span class="text-xs text-slate-400">Wed</span>
</div>
<div class="w-full flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-8 sm:w-12 bg-brand-blue/20 rounded-t-sm h-[85%] group-hover:bg-brand-blue transition-colors relative">
<div class="hidden group-hover:block absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded">10.5k</div>
</div>
<span class="text-xs text-slate-400">Thu</span>
</div>
<div class="w-full flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-8 sm:w-12 bg-brand-blue rounded-t-sm h-[95%] shadow-[0_0_15px_rgba(14,165,233,0.3)] relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded">12.2k</div>
</div>
<span class="text-xs font-bold text-brand-blue">Fri</span>
</div>
<div class="w-full flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-8 sm:w-12 bg-brand-blue/20 rounded-t-sm h-[75%] group-hover:bg-brand-blue transition-colors relative">
<div class="hidden group-hover:block absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded">9.5k</div>
</div>
<span class="text-xs text-slate-400">Sat</span>
</div>
</div>
</div>
</div>
<div class="lg:col-span-1 bg-white dark:bg-[#202020] rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm p-6 flex flex-col">
<h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Popular Exhibits</h3>
<div class="flex-1 flex flex-col gap-5 justify-center">
<div class="flex items-center gap-4">
<div class="h-12 w-12 rounded-lg bg-cover bg-center shrink-0" data-alt="Atlas Lion close up portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDWV5saiX_O7cjce3cyIWGFUVllW0zhA6mmc9U9CLcHiPX7sSbzwY96FBaRr91xB0h5B4SxXSM_3pfbErZaWCLI74-DrSOlL4CMQ3gqhGE1hAXVdbYvliVHjmMR_piQy75JRFR8d_84W4kRXCO2bLUVqonSGsdEht5RIvQmOPT0lHB45uRUtlYaUTfxBF9YPERDGOnVyEd-7HHpicCPOs9lbItQESauk4m8EU7dRcXg51PgW-8OqGJhtQNq83uUxRflPZq-PWT4GrWi');"></div>
<div class="flex-1">
<div class="flex justify-between mb-1">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">Atlas Lion</span>
<span class="text-sm font-semibold text-brand-blue">85%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-brand-blue w-[85%] rounded-full"></div>
</div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="h-12 w-12 rounded-lg bg-cover bg-center shrink-0" data-alt="Fennec Fox in desert" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCpC4eZnYDG9cEnLMmAQplOXJqrdFaM4GJdyo8eUwHvlgNVlpUnPBOa6o69wR1qszErBSj-mESqvDCpAsEZzPgX02wwsi5oDl6dG85RzBinrvn0KSR3M_-0PU4miDwWpIJ9WfbhuGcR_MDDLs2rV1JQzwemyr-jLL-HCLQoGlZEYQUQtu42_M-mbEHplkKCxlJvxIevQUc5i4Dy9w8smtbX5n6Z1uCSLngbWZlYmRCwtmDH6fahyD97re6h56Vh4Gb4y2e9csnQD2XG');"></div>
<div class="flex-1">
<div class="flex justify-between mb-1">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">Fennec Fox</span>
<span class="text-sm font-semibold text-brand-blue">62%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-brand-blue w-[62%] rounded-full opacity-75"></div>
</div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="h-12 w-12 rounded-lg bg-cover bg-center shrink-0" data-alt="African Elephant walking" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCmhpWPcq9mXn0pEEa_SA-387kJIMhqSXiGeCg9aZ1AExVbWL7U_f5R-zk6B9xlIxVE63p-NJ2BuqUQM8W4u8nrD6bPoJMQOqtf3KgMO6ntKUCgyfAyt8Th-f5L9AscX-rAj1ypnu6cbJaxLKAKz72i0NJPhlM6IpjvTgwq9hBYpQax3JU7wYtJQkTTA0ZtkbCg67f2F1DPKwB_xGDG46xtC7-tCvDnGBJSG5FNXV00GKFRcn-l7ie0TFAcUfdcEa5GHaCkeIzd7yro');"></div>
<div class="flex-1">
<div class="flex justify-between mb-1">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">Elephant</span>
<span class="text-sm font-semibold text-brand-blue">45%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-brand-blue w-[45%] rounded-full opacity-50"></div>
</div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="h-12 w-12 rounded-lg bg-cover bg-center shrink-0" data-alt="Gazelle jumping" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCiYYgQZvQttnDiV8Kp_7soVlo7DS12dv5HZ2OyLshnaaAIjEuE9ZLwot8U2BzJWqFGClhgLtZTv5Sb9uMp6aLDcNidtgFGorPF2If4VMY_lqOTJm3-seSXaTg1TeeA2H4q3zFOA1kTEcI1CXRkevjZUm_yovMcLhRIdH3WzqsNrXMiXjTWOb99TKQXvi4xyCprNXDcKYt5c3Lopy7zSJHbFQRigMGVfjM1SLwIC_JoXBrZP-Xw9KvtRJb6IGv5o0Wsn2hJ6n_d88v5');"></div>
<div class="flex-1">
<div class="flex justify-between mb-1">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">Gazelle</span>
<span class="text-sm font-semibold text-brand-blue">30%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-brand-blue w-[30%] rounded-full opacity-30"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-8">
<div class="bg-white dark:bg-[#202020] rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<div>
<div class="flex items-center gap-2">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Registered Visitors</h3>
<span class="px-2 py-0.5 rounded-full bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-500">Total: 124,592</span>
</div>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Manage visitor accounts and access permissions</p>
</div>
<div class="flex gap-2">
<button class="flex items-center gap-2 rounded-lg bg-brand-blue px-4 py-2 text-sm font-semibold text-white hover:bg-brand-blue-dark transition-colors shadow-sm shadow-brand-blue/20">
<span class="material-symbols-outlined text-[18px]">person_add</span>
                                Add Visitor
                            </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left text-sm text-slate-600 dark:text-slate-300">
<thead class="bg-slate-50 dark:bg-slate-800/50 text-xs uppercase text-slate-500 font-semibold">
<tr>
<th class="px-6 py-4">User Profile</th>
<th class="px-6 py-4">Contact Info</th>
<th class="px-6 py-4">Rôle</th>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">

<?php foreach ($allUsers as $user): ?>


<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">

    <!-- USER PROFILE -->
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="h-9 w-9 rounded-full bg-slate-200 flex items-center justify-center font-bold text-slate-600">
                <?= $user['nom'] ?>
            </div>
            <div>
                <p class="font-medium text-slate-900 dark:text-white">
                    <?= htmlspecialchars($user['nom']) ?>
                </p>
                <p class="text-xs text-slate-400">
                    ID: #<?= $user['id'] ?>
                </p>
            </div>
        </div>
    </td>

    <!-- EMAIL -->
    <td class="px-6 py-4">
        <?= htmlspecialchars($user['email']) ?>
</td>

    <!-- ROLE -->
    <td class="px-6 py-4">
        <?=$user['rôle'] ?>
    </td>

    <!-- STATUS -->
    <td class="px-6 py-4">
        <?php if ($user['statut'] === 'approved'): ?>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-status-green-light px-2.5 py-0.5 text-xs font-medium text-status-green">
                <span class="h-1.5 w-1.5 rounded-full bg-status-green"></span>
                Active
            </span>
        <?php else: ?>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-2.5 py-0.5 text-xs font-medium text-slate-500">
                <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>

                <?= $user['statut']?>
            </span>
        <?php endif; ?>
    </td>

    <!-- ACTIONS -->
    <td class="px-6 py-4 text-right">
        <div class="flex justify-end gap-2">
        <form action="ban_user.php" method="POST" class="inline">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <button type="submit"
        class="h-8 w-8 flex items-center justify-center rounded bg-status-red/10 text-status-red hover:bg-status-red hover:text-white transition-colors"
        onclick="return confirm('Are you sure you want to ban this user?')">
        <span class="material-symbols-outlined text-[18px]">block</span>
        </button>
          </form>

        </div>
    </td>

</tr>


<?php endforeach; ?>

</tbody>

</table>
</div>
</div>
<div class="bg-white dark:bg-[#202020] rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">

<div class="overflow-x-auto">

</div>
</div>
</div>
<div class="bg-white dark:bg-[#202020] rounded-xl border border-slate-100 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<div>
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Recent Bookings</h3>
<p class="text-sm text-slate-500 dark:text-slate-400">Latest tour reservations &amp; guide requests</p>
</div>
<div class="flex gap-2">
<button class="px-3 py-1.5 text-xs font-semibold rounded-md bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">All</button>
<button class="px-3 py-1.5 text-xs font-semibold rounded-md text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800">Pending</button>
<button class="px-3 py-1.5 text-xs font-semibold rounded-md text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800">Confirmed</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left text-sm text-slate-600 dark:text-slate-300">
<thead class="bg-slate-50 dark:bg-slate-800/50 text-xs uppercase text-slate-500 font-semibold">
<tr>
<th class="px-6 py-4">User</th>
<th class="px-6 py-4">Tour Type</th>
<th class="px-6 py-4">Date</th>
<th class="px-6 py-4">Amount</th>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4 text-right">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<?php foreach ($bookings as $booking): ?>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="h-8 w-8 rounded-full bg-slate-200 bg-cover"
                 style="background-image: url('<?= htmlspecialchars($booking['avatar_url']) ?>');"></div>
            <span class="font-medium text-slate-900 dark:text-white">
                <?= htmlspecialchars($booking['customer_name']) ?>
            </span>
        </div>
    </td>
    <td class="px-6 py-4"><?= htmlspecialchars($booking['tour_name']) ?></td>
    <td class="px-6 py-4"><?= date("M d, Y", strtotime($booking['date'])) ?></td>
    <td class="px-6 py-4 font-medium">$<?= number_format($booking['price'], 2) ?></td>
    <td class="px-6 py-4">
        <?php
        $statusColor = $booking['status'] === 'Confirmed' ? 'green' : 'orange';
        ?>
        <span class="inline-flex items-center gap-1.5 rounded-full bg-status-<?= $statusColor ?>-light px-2.5 py-0.5 text-xs font-medium text-status-<?= $statusColor ?> dark:bg-<?= $statusColor ?>-900/30">
            <span class="h-1.5 w-1.5 rounded-full bg-status-<?= $statusColor ?>"></span>
            <?= htmlspecialchars($booking['status']) ?>
        </span>
    </td>
    <td class="px-6 py-4 text-right flex justify-end gap-2">
        <form action="update_status.php" method="POST" class="inline">
            <input type="hidden" name="id" value="<?= $booking['id'] ?>">
            <input type="hidden" name="status" value="Confirmed">
            <button type="submit" class="p-1 rounded bg-status-green/10 text-status-green hover:bg-status-green hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[18px]">check</span>
            </button>
        </form>
        <form action="update_status.php" method="POST" class="inline">
            <input type="hidden" name="id" value="<?= $booking['id'] ?>">
            <input type="hidden" name="status" value="Cancelled">
            <button type="submit" class="p-1 rounded bg-status-red/10 text-status-red hover:bg-status-red hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </form>
    </td>
</tr>
<?php endforeach; ?>
</tbody>

</table>
</div>
<div class="p-4 border-t border-slate-100 dark:border-slate-800 flex justify-center">
<button class="text-sm font-semibold text-brand-blue hover:text-brand-blue-dark transition-colors">View All Transactions</button>
</div>
</div>
<footer class="mt-8 text-center text-xs text-slate-400 pb-4">
<p>© 2025 Virtual Zoo Morocco. All rights reserved.</p>
</footer>
</div>
</div>
</main>
</div>

</body></html>
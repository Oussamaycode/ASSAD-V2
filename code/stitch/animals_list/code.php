<?php

session_start()

?>

<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Animals List - AFCON 2025 Zoo</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#141414",
                        "background-light": "#f8fafd", /* Light blue-ish white */
                        "background-dark": "#0f172a",
                        "brand-blue": "#1e3a8a", /* Dark Blue for dominant theme */
                        "brand-green": "#10b981", /* Green for tags */
                        "brand-orange": "#ea580c", /* Orange/Red for actions */
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-primary dark:text-white font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Navigation -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 bg-white/90 backdrop-blur-md px-6 lg:px-10 py-3 shadow-sm dark:bg-slate-900/90 dark:border-slate-800">
<div class="flex items-center gap-4 lg:gap-8">
<div class="flex items-center gap-3 text-brand-blue dark:text-blue-400">
<div class="size-8 text-brand-orange">
<span class="material-symbols-outlined !text-[32px]">pets</span>
</div>
<h2 class="text-brand-blue dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">AFCON 2025 Zoo</h2>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-slate-600 hover:text-brand-blue dark:text-slate-300 dark:hover:text-white text-sm font-semibold leading-normal transition-colors" href="#">Home</a>
<a class="text-brand-blue dark:text-white text-sm font-bold leading-normal" href="#">Animals</a>
<a class="text-slate-600 hover:text-brand-blue dark:text-slate-300 dark:hover:text-white text-sm font-semibold leading-normal transition-colors" href="#">Map</a>
<a class="text-slate-600 hover:text-brand-blue dark:text-slate-300 dark:hover:text-white text-sm font-semibold leading-normal transition-colors" href="../guided_tours_list_1/code.html">Events</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="hidden sm:flex w-64 items-stretch rounded-full h-10 bg-slate-100 dark:bg-slate-800 border border-transparent focus-within:border-brand-blue focus-within:ring-2 ring-brand-blue/20 transition-all">
<div class="text-slate-400 flex items-center justify-center pl-3">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="w-full bg-transparent border-none text-sm px-3 text-slate-900 dark:text-white focus:ring-0 placeholder:text-slate-400" placeholder="Search..."/>
</div>
</div>
</header>
<!-- Main Layout -->
<main class="flex-1 flex flex-col">
<!-- Hero Section -->
<section class="relative bg-brand-blue overflow-hidden">
<div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div> <!-- Pattern overlay -->
<div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-600/80"></div>
<div class="relative px-6 lg:px-40 py-12 lg:py-20 flex flex-col items-center text-center">
<div class="max-w-3xl flex flex-col gap-4">
<div class="inline-flex mx-auto items-center gap-2 px-3 py-1 rounded-full bg-blue-800/50 border border-blue-400/30 backdrop-blur-sm text-blue-100 text-xs font-medium uppercase tracking-wider">
<span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                            Live from Morocco
                        </div>
<h1 class="text-white text-4xl lg:text-6xl font-black leading-tight tracking-tight">
                            Meet the Icons of Africa
                        </h1>
<p class="text-blue-100 text-lg lg:text-xl font-normal max-w-2xl mx-auto">
                            Explore the diverse wildlife hosted for the Africa Cup of Nations 2025. From the Atlas Mountains to the Sahara.
                        </p>
</div>
</div>
<!-- Curved bottom shape -->
<div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none text-background-light dark:text-background-dark">
<svg class="relative block w-full h-[40px] lg:h-[60px]" data-name="Layer 1" preserveaspectratio="none" viewbox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg">
<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="currentColor"></path>
</svg>
</div>
</section>
<!-- Filters & Content -->
<div class="px-4 lg:px-40 pb-20 -mt-2">
<div class="layout-content-container flex flex-col max-w-[1280px] mx-auto w-full">
<!-- Search & Filter Bar -->
<div class="bg-white dark:bg-slate-800 rounded-2xl p-4 shadow-lg border border-slate-100 dark:border-slate-700 mb-8 flex flex-col lg:flex-row gap-4 items-center justify-between sticky top-[75px] z-40 transition-all">
<!-- Chips -->
<div class="flex gap-2 overflow-x-auto pb-2 lg:pb-0 w-full lg:w-auto no-scrollbar mask-gradient">
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-brand-blue text-white px-4 shadow-sm transition-transform active:scale-95">
<span class="text-sm font-bold">All Animals</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 px-4 transition-colors">
<span class="text-slate-700 dark:text-slate-200 text-sm font-medium">Mammals</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 px-4 transition-colors">
<span class="text-slate-700 dark:text-slate-200 text-sm font-medium">Birds</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 px-4 transition-colors">
<span class="text-slate-700 dark:text-slate-200 text-sm font-medium">Reptiles</span>
</button>
<div class="w-px h-6 bg-slate-300 dark:bg-slate-600 mx-2 self-center"></div>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full border border-slate-200 dark:border-slate-600 hover:border-brand-blue text-slate-600 dark:text-slate-300 px-4 transition-colors group">
<span class="material-symbols-outlined text-[18px] text-slate-400 group-hover:text-brand-blue">filter_list</span>
<span class="text-sm font-medium group-hover:text-brand-blue">More Filters</span>
</button>
</div>
<!-- Mobile Search (Visible only on very small screens if needed, otherwise uses top nav) -->
<div class="lg:hidden w-full relative">
<div class="flex w-full items-center rounded-lg h-10 bg-slate-100 dark:bg-slate-900 px-3">
<span class="material-symbols-outlined text-slate-400 text-[20px]">search</span>
<input class="w-full bg-transparent border-none text-sm px-2 focus:ring-0" placeholder="Search animal..."/>
</div>
</div>
</div>
<!-- Grid Layout -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<!-- Card 1: Atlas Lion -->
<div class="group flex flex-col rounded-2xl bg-white dark:bg-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700 overflow-hidden">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="px-2 py-1 rounded-md bg-white/90 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                                        Morocco
                                    </span>
</div>
<div class="w-full h-full bg-center bg-cover transition-transform duration-700 group-hover:scale-110" data-alt="Majestic Atlas Lion roaring" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAelZ5b-P2xA2ke6II0_g4YekmJp-cky2wdo-XACFvE3HYV569ILQP4Vc8il2VCRzRS3vqgQ7gjYF0Bu4EtpGUpYvfaK4DttJ9aZjFbw4EZdCl9ClYerEmzEoLnKqZd_SrhIquT1OOmpilfWQbMyeFtUfvorkb4SEhTqAe9p1xdsUYI_Vcpe6vh2IGcBQNjmJRFDWhMFY09t9R2Sjc1oiIfzjHWW3Na5lr0a3ZndmnJ9Kv8CQPVyyGnwtRc-zBMFK3yuWr0-GYrCRjI");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-5 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Atlas Lion</h3>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium italic">Panthera leo leo</p>
</div>
<div class="rounded-full p-1.5 bg-slate-50 dark:bg-slate-700 text-slate-400 hover:text-brand-orange cursor-pointer transition-colors">
<span class="material-symbols-outlined text-[20px] block">favorite</span>
</div>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded-md bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold uppercase tracking-wide">Carnivore</span>
<span class="px-2 py-1 rounded-md bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-400 text-xs font-bold uppercase tracking-wide">Endangered</span>
</div>
<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed line-clamp-2">
                                    The legendary symbol of the Moroccan national team. Known for its thick dark mane and powerful build.
                                </p>
<div class="mt-auto pt-4">
<button class="w-full h-10 rounded-lg bg-brand-orange hover:bg-orange-700 text-white text-sm font-bold shadow-md shadow-orange-200 dark:shadow-none transition-all flex items-center justify-center gap-2 group/btn">
                                        View Details
                                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Card 2: Fennec Fox -->
<div class="group flex flex-col rounded-2xl bg-white dark:bg-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700 overflow-hidden">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="px-2 py-1 rounded-md bg-white/90 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                                        Sahara
                                    </span>
</div>
<div class="w-full h-full bg-center bg-cover transition-transform duration-700 group-hover:scale-110" data-alt="Small Fennec Fox with large ears" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAQkqOgNdrHkerZM10yhbmaGmbsQ5ksCkOExkwcLpqSDa7cEVl2xOzdcpFiIkxoKaMSyIYdmM2OdHnFnb8KlDq4Za8ym44dosx_B869dW5lNX3wiu3R0sUWnRsvrfeNrnKKas-yvSYAt-3PqpNHCUJ55u9Tu1cYZbf3GrFnb3qH_hLJJaz-G8tDUC9A02BgnlT1ktQ_ytFuIVtZBlxhX44uZHq6s9Cwf3Gi0UnPEJBMcVegKu8sjWqGSlTqH5qe6BIlECQlmwS_fX_9");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-5 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Fennec Fox</h3>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium italic">Vulpes zerda</p>
</div>
<div class="rounded-full p-1.5 bg-slate-50 dark:bg-slate-700 text-slate-400 hover:text-brand-orange cursor-pointer transition-colors">
<span class="material-symbols-outlined text-[20px] block">favorite</span>
</div>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded-md bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold uppercase tracking-wide">Omnivore</span>
<span class="px-2 py-1 rounded-md bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-xs font-bold uppercase tracking-wide">Nocturnal</span>
</div>
<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed line-clamp-2">
                                    The smallest of all the world's foxes, but with the largest ears. Adapted perfectly to desert life.
                                </p>
<div class="mt-auto pt-4">
<button class="w-full h-10 rounded-lg bg-brand-orange hover:bg-orange-700 text-white text-sm font-bold shadow-md shadow-orange-200 dark:shadow-none transition-all flex items-center justify-center gap-2 group/btn">
                                        View Details
                                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Card 3: African Elephant -->
<div class="group flex flex-col rounded-2xl bg-white dark:bg-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700 overflow-hidden">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="px-2 py-1 rounded-md bg-white/90 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                                        Savanna
                                    </span>
</div>
<div class="w-full h-full bg-center bg-cover transition-transform duration-700 group-hover:scale-110" data-alt="African Elephant walking in Savanna" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2vXkynCX6OozJaHH-0WZUrRtIc7r8n7xfnMhkJKztFMU3OqzNe4pcDwlPwRDQybo15GTkgWjQvr_Fr9tCcNAosYrOo5O4vNEPzJywGF-3p99mKkeeSZpgsdsi6nkqsmrnrhwgr3zyI_kO9D_KEbMd3ZSZnaLFaeVhPvawVuzplkMT-hbF8KvQG9uf_qhW4JMqFrbTyV6UrDTdjy30geQrqhJmgE4cwkUT6BUrk2JKHBw8q9ZQ_5qfq1x6dXNS1e7gYzGYK_cSslxb");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-5 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">African Elephant</h3>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium italic">Loxodonta africana</p>
</div>
<div class="rounded-full p-1.5 bg-slate-50 dark:bg-slate-700 text-slate-400 hover:text-brand-orange cursor-pointer transition-colors">
<span class="material-symbols-outlined text-[20px] block">favorite</span>
</div>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded-md bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold uppercase tracking-wide">Herbivore</span>
<span class="px-2 py-1 rounded-md bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-400 text-xs font-bold uppercase tracking-wide">Giant</span>
</div>
<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed line-clamp-2">
                                    The largest land animal on Earth. Highly intelligent and known for strong family bonds.
                                </p>
<div class="mt-auto pt-4">
<button class="w-full h-10 rounded-lg bg-brand-orange hover:bg-orange-700 text-white text-sm font-bold shadow-md shadow-orange-200 dark:shadow-none transition-all flex items-center justify-center gap-2 group/btn">
                                        View Details
                                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Card 4: Barbary Macaque -->
<div class="group flex flex-col rounded-2xl bg-white dark:bg-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700 overflow-hidden">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="px-2 py-1 rounded-md bg-white/90 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                                        Atlas Mtns
                                    </span>
</div>
<div class="w-full h-full bg-center bg-cover transition-transform duration-700 group-hover:scale-110" data-alt="Barbary Macaque sitting on a rock" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMz8l5AUZGpmoSvy8l86GA7MvxRikdE3clb_7WjgtKR_TuyOEZP1HpmkqtFNKgQ7VwdvXLadfJkX1VQh8vXullCXXwJy4zbVWDMysr8qHLSaFaCab_3AssRr2CuwWMykkfAm8Zo6fCTeraKMBsk_dx6FEwXdkVoLmMY9MJpv2lBAP2OCCuWhIP6bnsJlTA2n7nyxgRzsSW7P_bFc1TtpCA-T94g3saf26H5eByajvImhf28UOqUy6bFvT3YXuAEKhczyljfRlPY_5I");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-5 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Barbary Macaque</h3>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium italic">Macaca sylvanus</p>
</div>
<div class="rounded-full p-1.5 bg-slate-50 dark:bg-slate-700 text-slate-400 hover:text-brand-orange cursor-pointer transition-colors">
<span class="material-symbols-outlined text-[20px] block">favorite</span>
</div>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded-md bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold uppercase tracking-wide">Herbivore</span>
<span class="px-2 py-1 rounded-md bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-400 text-xs font-bold uppercase tracking-wide">Endangered</span>
</div>
<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed line-clamp-2">
                                    Unique to the Atlas Mountains. The only primate species found north of the Sahara.
                                </p>
<div class="mt-auto pt-4">
<button class="w-full h-10 rounded-lg bg-brand-orange hover:bg-orange-700 text-white text-sm font-bold shadow-md shadow-orange-200 dark:shadow-none transition-all flex items-center justify-center gap-2 group/btn">
                                        View Details
                                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Card 5: Dorcas Gazelle -->
<div class="group flex flex-col rounded-2xl bg-white dark:bg-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700 overflow-hidden">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="px-2 py-1 rounded-md bg-white/90 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                                        Desert
                                    </span>
</div>
<div class="w-full h-full bg-center bg-cover transition-transform duration-700 group-hover:scale-110" data-alt="Small Dorcas Gazelle in arid landscape" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB_v7hqaox-24nJqxmY2ZofRQPuaKMRHeimbHqA56BGDYcFVOBihVC-vrOJCXfhVepSC6g63iwMOCJkEKLsgqtkp7hKAT0QS0Ep6KciGgfYkFDbhyiX38rX8yULuda2_MYZ7mVN1EzpjhnPrDlSERKFNyqVHbXgLIRWGzV2etTbIx8TKmeJX-OVs6z7xXXUeGtEqYq1KpmMbxfx5n_SDNsc4yuBlQcP4qY7lXjHRA6_2Qwvj6US3nHpeF8txexBFGC88BvHSVcrj6jQ");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-5 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Dorcas Gazelle</h3>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium italic">Gazella dorcas</p>
</div>
<div class="rounded-full p-1.5 bg-slate-50 dark:bg-slate-700 text-slate-400 hover:text-brand-orange cursor-pointer transition-colors">
<span class="material-symbols-outlined text-[20px] block">favorite</span>
</div>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded-md bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold uppercase tracking-wide">Herbivore</span>
<span class="px-2 py-1 rounded-md bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-400 text-xs font-bold uppercase tracking-wide">Vulnerable</span>
</div>
<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed line-clamp-2">
                                    A small, common gazelle. It can go its entire life without drinking water, getting moisture from plants.
                                </p>
<div class="mt-auto pt-4">
<button class="w-full h-10 rounded-lg bg-brand-orange hover:bg-orange-700 text-white text-sm font-bold shadow-md shadow-orange-200 dark:shadow-none transition-all flex items-center justify-center gap-2 group/btn">
                                        View Details
                                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Card 6: Horned Viper -->
<div class="group flex flex-col rounded-2xl bg-white dark:bg-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700 overflow-hidden">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="px-2 py-1 rounded-md bg-white/90 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                                        Sahara
                                    </span>
</div>
<div class="w-full h-full bg-center bg-cover transition-transform duration-700 group-hover:scale-110" data-alt="Horned Viper coiled in sand" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_JfYJsulSeEialX07l_Cm50hvMqMRjHJlId8uH_BJp1KjehEoKFLZ-t0NdFHhTYGLv0F_sso6kUkR2NVWifVrx63wRslCUNDxT_4ZCy0fPzo72-VdA4sFWU9zD6Xae3qqEmY9wuWF9qyw9BsaGdwFAyrhFfq3ZwGiP3d93F-Vf6z8mWwMjv4O9nR1hmu-AnUwreeJskqB0mHHJHVCbzKct0ovCvAPukvaj3w76-h6cdVo3ramqdvwZ9KJ-S_IPKQBiYSKcSUZFlCC");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-5 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Horned Viper</h3>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium italic">Cerastes cerastes</p>
</div>
<div class="rounded-full p-1.5 bg-slate-50 dark:bg-slate-700 text-slate-400 hover:text-brand-orange cursor-pointer transition-colors">
<span class="material-symbols-outlined text-[20px] block">favorite</span>
</div>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded-md bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold uppercase tracking-wide">Carnivore</span>
<span class="px-2 py-1 rounded-md bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 text-xs font-bold uppercase tracking-wide">Venomous</span>
</div>
<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed line-clamp-2">
                                    Easily recognized by the pair of supraorbital "horns". A master of desert camouflage.
                                </p>
<div class="mt-auto pt-4">
<button class="w-full h-10 rounded-lg bg-brand-orange hover:bg-orange-700 text-white text-sm font-bold shadow-md shadow-orange-200 dark:shadow-none transition-all flex items-center justify-center gap-2 group/btn">
                                        View Details
                                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
<!-- Load More -->
<div class="flex justify-center mt-12">
<button class="flex items-center gap-2 px-6 py-3 rounded-lg border-2 border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 font-bold hover:border-brand-blue hover:text-brand-blue dark:hover:border-blue-500 dark:hover:text-blue-400 transition-colors">
                            Load More Animals
                            <span class="material-symbols-outlined">expand_more</span>
</button>
</div>
</div>
</div>
</main>
<!-- Simple Footer -->
<footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-8 px-6 lg:px-40">
<div class="flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-slate-500 dark:text-slate-400 text-sm">© 2025 AFCON Virtual Zoo. All rights reserved.</p>
<div class="flex gap-4">
<a class="text-slate-500 dark:text-slate-400 hover:text-brand-blue text-sm" href="#">Privacy Policy</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-brand-blue text-sm" href="#">Terms of Service</a>
</div>
</div>
</footer>
</div>
</body></html>
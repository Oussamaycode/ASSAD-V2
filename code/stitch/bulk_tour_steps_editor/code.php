<?php

require_once '../config.php';

session_start();

if (isset($_POST['submit_form'])){
    $stepsinbulk=$_POST['steps'];
    $stepsseperated=[];
    $a=0;
    $b=-1;

    for($i=0; $i<strlen($stepsinbulk);$i++){
        if ($stepsinbulk[$i]==";"){
            $stepsseperated[$a]='';
            for ($j=$b+1;$j<$i;$j++){
                $stepsseperated[$a].=$stepsinbulk[$j];
            }
            $a++;
            $b=$i;
        }
    }

    $_SESSION['steps']=$stepsseperated;
    header('location: ../guide_dashboard_3/code.php');
    exit;

}
   


?>


<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Virtual Zoo Admin - Bulk Tour Steps Editor</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
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
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2632",
                        "action-save": "#f97316", // Orange for Save
                        "action-danger": "#ef4444", // Red for Delete
                        "tag-green": "#22c55e",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-gray-100 transition-colors duration-200">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Top Navigation -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] dark:border-gray-800 bg-surface-light dark:bg-surface-dark px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-4 text-[#111418] dark:text-white">
<div class="size-8 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-3xl">pets</span>
</div>
<h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">AFCON Zoo Guide</h2>
</div>
<!-- Search Bar -->
<label class="hidden md:flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-xl h-full">
<div class="text-[#617589] dark:text-gray-400 flex border-none bg-[#f0f2f4] dark:bg-gray-800 items-center justify-center pl-4 rounded-l-xl border-r-0">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] dark:text-white focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] dark:bg-gray-800 focus:border-none h-full placeholder:text-[#617589] dark:placeholder:text-gray-500 px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search tours..." value=""/>
</div>
</label>
</div>
<div class="flex flex-1 justify-end gap-8">
<div class="hidden md:flex items-center gap-9">
<a class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-primary text-sm font-bold leading-normal" href="#">Tours</a>
<a class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Animals</a>
<a class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Map</a>
</div>
<div class="flex items-center gap-3">
<button class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-gray-100 dark:bg-gray-800 text-[#111418] dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 text-sm font-bold leading-normal tracking-[0.015em] transition-colors">
<span class="truncate">Log Out</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary" data-alt="Profile picture of a tour guide smiling" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1Sem9pKdBikjOa-CEI2yXOKM2nQ4mYdzDYbOh6Mz67pf-fIxwqNrFbC3Py4gaixRMLEYsxzgsZxuRGkzLL8Ka1usmqGbhHNuHw_bRabe75ahYuEXrkHNfugnMAwc21SwKlv4OIKnNPl_4kTTPY9-tOJ7p9aIHfBhqjsNymB7OQE8AuOjGHCTBEsjGbq_zAvQfzyMT8LN6RJHUBQviYgrgPbNqAxspIVxtOdSZvb57D69GLQYSV3fdXwoqjzbDlQjftRjhH0EGViKv");'></div>
</div>
</div>
</header>
<!-- Main Content Layout -->
<main class="layout-container flex h-full grow flex-col py-5 px-4 md:px-10 lg:px-40">
<div class="layout-content-container flex flex-col w-full max-w-[1200px] mx-auto flex-1">
<!-- Breadcrumbs -->
<div class="flex flex-wrap gap-2 px-4 py-2 mb-2">
<a class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary" href="#">Tours</a>
<span class="text-[#617589] dark:text-gray-600 text-sm font-medium leading-normal">/</span>
<a class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary" href="#">Atlas Lion Safari</a>
<span class="text-[#617589] dark:text-gray-600 text-sm font-medium leading-normal">/</span>
<span class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal">Bulk Edit</span>
</div>
<!-- Page Heading -->
<div class="flex flex-wrap justify-between items-end gap-3 px-4 pb-6">
<div class="flex min-w-72 flex-col gap-2">
<h1 class="text-[#111418] dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Bulk Itinerary Editor</h1>
<p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal max-w-2xl">
                            Paste your list of stops to quickly generate the tour timeline. You can drag to reorder and assign zones before saving.
                        </p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 cursor-pointer justify-center rounded-xl h-10 px-4 bg-white dark:bg-gray-800 border border-[#dbe0e6] dark:border-gray-700 text-[#111418] dark:text-white text-sm font-bold shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
<span class="material-symbols-outlined text-[20px]">history</span>
<span class="truncate">History</span>
</button>
</div>
</div>
<!-- Split View Content -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 px-4">
<!-- LEFT COLUMN: Input & Settings (Span 5) -->
<div class="lg:col-span-5 flex flex-col gap-6">
<!-- Input Card -->
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-[#e5e7eb] dark:border-gray-700 p-5 flex flex-col gap-4">
<div class="flex items-center gap-3 mb-1">
<span class="material-symbols-outlined text-primary">playlist_add</span>
<h3 class="font-bold text-lg dark:text-white">Input Stops</h3>
</div>
<!-- Text Area -->
<div class="relative w-full">

<form method='POST'>
<textarea  class="form-textarea w-full min-h-[240px] rounded-xl border-none bg-[#f0f2f4] dark:bg-gray-800 p-4 text-[#111418] dark:text-white placeholder:text-[#617589] dark:placeholder:text-gray-500 focus:ring-2 focus:ring-primary/50 text-base leading-relaxed resize-none font-mono" placeholder="Paste your stops here...
Example:
North Gate Entrance
Atlas Cedar Forest
Lion's Den
Gift Shop" name="steps"></textarea>


<div class="absolute bottom-3 right-3 text-xs text-[#617589] dark:text-gray-500 font-medium bg-white/80 dark:bg-black/40 px-2 py-1 rounded">
                                    0 lines
                                </div>
</div>
<!-- Settings: Delimiter -->
<div class="flex flex-col gap-3">
<label class="text-sm font-semibold text-[#111418] dark:text-gray-200">Separator Settings</label>
<div class="flex flex-col gap-2">
<label class="flex items-center gap-3 rounded-lg border border-[#dbe0e6] dark:border-gray-700 p-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
<input checked="" class="h-4 w-4 border-gray-300 text-primary focus:ring-primary bg-transparent" name="delimiter" type="radio"/>
<div class="flex flex-col">
<span class="text-[#111418] dark:text-white text-sm font-medium">Comma Separated</span>
<span class="text-[#617589] dark:text-gray-400 text-xs">Stops separated by commas</span>
</div>
</label>
</div>
</div>
<!-- Action -->
<button class="w-full flex items-center justify-center gap-2 rounded-xl h-12 bg-primary hover:bg-blue-600 text-white font-bold text-sm tracking-wide transition-colors shadow-md shadow-blue-500/20 mt-2" type="submit" name="submit_form"  >
<a href="../guide_dashboard_3/code.php?steps=$stepsseperated"></a>    
<span class="material-symbols-outlined">arrow_forward</span>
<span>ADD STEPS</span>
    </button>
</form>    
</div>
</div>
<!-- RIGHT COLUMN: Preview & Organize (Span 7) -->
<div class="lg:col-span-7 flex flex-col h-full">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-3">
<div class="bg-primary/10 text-primary p-2 rounded-lg">
<span class="material-symbols-outlined text-[24px]">view_timeline</span>
</div>
<div>
<h3 class="font-bold text-lg dark:text-white">Itinerary Preview</h3>
<p class="text-xs text-[#617589] dark:text-gray-400">4 stops added • Est. 1h 30m</p>
</div>
</div>
<button class="text-xs font-bold text-action-danger hover:text-red-600 uppercase tracking-wider px-3 py-1 rounded hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                Clear All
                            </button>
</div>
<!-- Draggable List Container -->
<div class="flex flex-col gap-3 pb-24"> <!-- Padding bottom for floating footer -->
<!-- Step Card 1 -->
<div class="group relative flex items-center gap-4 p-4 bg-surface-light dark:bg-surface-dark rounded-xl border border-l-4 border-[#e5e7eb] dark:border-gray-700 border-l-primary shadow-sm hover:shadow-md transition-all">
<!-- Drag Handle -->
<div class="cursor-grab text-[#617589] dark:text-gray-500 hover:text-primary p-1">
<span class="material-symbols-outlined">drag_indicator</span>
</div>
<!-- Number Badge -->
<div class="flex items-center justify-center size-8 rounded-full bg-primary text-white text-sm font-bold shadow-sm shrink-0">
                                    1
                                </div>
<!-- Content -->
<div class="flex-1 min-w-0 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div class="flex flex-col">
<p class="text-[#111418] dark:text-white font-semibold truncate text-base">North Gate Entrance</p>
<div class="flex items-center gap-2 mt-1">
<span class="inline-flex items-center gap-1 rounded-md bg-green-50 dark:bg-green-900/30 px-2 py-0.5 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">
<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                                Public Zone
                                            </span>
<span class="text-xs text-[#617589] dark:text-gray-500 flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">schedule</span> 10m
                                            </span>
</div>
</div>
<!-- Card Actions -->
<div class="flex items-center gap-1 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity">
<button class="p-2 text-[#617589] dark:text-gray-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition-colors" title="Edit Step">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-[#617589] dark:text-gray-400 hover:text-action-danger hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition-colors" title="Delete Step">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
</div>
<!-- Step Card 2 -->
<div class="group relative flex items-center gap-4 p-4 bg-surface-light dark:bg-surface-dark rounded-xl border border-l-4 border-[#e5e7eb] dark:border-gray-700 border-l-primary shadow-sm hover:shadow-md transition-all">
<div class="cursor-grab text-[#617589] dark:text-gray-500 hover:text-primary p-1">
<span class="material-symbols-outlined">drag_indicator</span>
</div>
<div class="flex items-center justify-center size-8 rounded-full bg-primary text-white text-sm font-bold shadow-sm shrink-0">
                                    2
                                </div>
<div class="flex-1 min-w-0 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div class="flex flex-col">
<p class="text-[#111418] dark:text-white font-semibold truncate text-base">Atlas Cedar Forest</p>
<div class="flex items-center gap-2 mt-1">
<span class="inline-flex items-center gap-1 rounded-md bg-green-50 dark:bg-green-900/30 px-2 py-0.5 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">
<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                                Flora Zone
                                            </span>
<span class="text-xs text-[#617589] dark:text-gray-500 flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">schedule</span> 25m
                                            </span>
</div>
</div>
<div class="flex items-center gap-1 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity">
<button class="p-2 text-[#617589] dark:text-gray-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-[#617589] dark:text-gray-400 hover:text-action-danger hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
</div>
<!-- Step Card 3 -->
<div class="group relative flex items-center gap-4 p-4 bg-surface-light dark:bg-surface-dark rounded-xl border border-l-4 border-[#e5e7eb] dark:border-gray-700 border-l-primary shadow-sm hover:shadow-md transition-all">
<div class="cursor-grab text-[#617589] dark:text-gray-500 hover:text-primary p-1">
<span class="material-symbols-outlined">drag_indicator</span>
</div>
<div class="flex items-center justify-center size-8 rounded-full bg-primary text-white text-sm font-bold shadow-sm shrink-0">
                                    3
                                </div>
<div class="flex-1 min-w-0 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div class="flex flex-col">
<p class="text-[#111418] dark:text-white font-semibold truncate text-base">Barbary Macaque Enclosure</p>
<div class="flex items-center gap-2 mt-1">
<span class="inline-flex items-center gap-1 rounded-md bg-green-50 dark:bg-green-900/30 px-2 py-0.5 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">
<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                                Primate Zone
                                            </span>
<span class="text-xs text-[#617589] dark:text-gray-500 flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">schedule</span> 15m
                                            </span>
</div>
</div>
<div class="flex items-center gap-1 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity">
<button class="p-2 text-[#617589] dark:text-gray-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-[#617589] dark:text-gray-400 hover:text-action-danger hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
</div>
<!-- Step Card 4 (Warning State) -->
<div class="group relative flex items-center gap-4 p-4 bg-red-50 dark:bg-red-900/10 rounded-xl border border-l-4 border-red-300 dark:border-red-700 border-l-action-danger shadow-sm transition-all">
<div class="cursor-grab text-[#617589] dark:text-gray-500 hover:text-primary p-1">
<span class="material-symbols-outlined">drag_indicator</span>
</div>
<div class="flex items-center justify-center size-8 rounded-full bg-action-danger text-white text-sm font-bold shadow-sm shrink-0">
                                    4
                                </div>
<div class="flex-1 min-w-0 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div class="flex flex-col">
<p class="text-[#111418] dark:text-white font-semibold truncate text-base">Lion's Den Observation</p>
<div class="flex items-center gap-2 mt-1">
<span class="inline-flex items-center gap-1 rounded-md bg-red-100 dark:bg-red-900/40 px-2 py-0.5 text-xs font-medium text-red-700 dark:text-red-300 ring-1 ring-inset ring-red-600/20">
<span class="material-symbols-outlined text-[14px]">warning</span>
                                                Zone Missing
                                            </span>
</div>
</div>
<div class="flex items-center gap-1 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity">
<button class="p-2 text-action-save hover:bg-orange-50 dark:hover:bg-orange-900/30 rounded-lg transition-colors" title="Fix Issues">
<span class="material-symbols-outlined text-[20px]">build</span>
</button>
<button class="p-2 text-[#617589] dark:text-gray-400 hover:text-action-danger hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
</div>
<!-- Add New Placeholder -->
<button class="flex items-center justify-center gap-2 p-4 border-2 border-dashed border-[#dbe0e6] dark:border-gray-700 rounded-xl text-[#617589] dark:text-gray-500 hover:border-primary hover:text-primary hover:bg-blue-50/50 dark:hover:bg-blue-900/10 transition-all group">
<span class="material-symbols-outlined group-hover:scale-110 transition-transform">add_circle</span>
<span class="font-medium">Add Individual Step</span>
</button>
</div>
</div>
</div>
</div>
<!-- Sticky Footer Action Bar -->
<div class="fixed bottom-0 left-0 right-0 p-4 bg-white/90 dark:bg-surface-dark/90 backdrop-blur-md border-t border-[#f0f2f4] dark:border-gray-800 z-40">
<div class="max-w-[1200px] mx-auto flex items-center justify-between">
<div class="hidden sm:flex flex-col">
<span class="text-sm font-medium text-[#111418] dark:text-white">Unsaved Changes</span>
<span class="text-xs text-[#617589] dark:text-gray-400">Last saved: 10 mins ago</span>
</div>
<div class="flex items-center gap-4 w-full sm:w-auto justify-end">
<button class="px-6 h-12 rounded-xl text-sm font-bold text-[#617589] dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                            Cancel
                        </button>
<button class="flex-1 sm:flex-none px-8 h-12 rounded-xl bg-action-save hover:bg-orange-600 text-white text-sm font-bold shadow-lg shadow-orange-500/30 transition-all transform active:scale-95 flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[20px]">save</span>
                            Save Itinerary
                        </button>
</div>
</div>
</div>
</main>
</div>
</body></html>
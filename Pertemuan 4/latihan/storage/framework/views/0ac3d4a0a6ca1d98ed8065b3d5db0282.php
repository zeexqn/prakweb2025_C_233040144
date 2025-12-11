<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Azharmtq App', 'description' => '', 'showNavbar' => true]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title' => 'Azharmtq App', 'description' => '', 'showNavbar' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title); ?></title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    
    <?php if($showNavbar): ?>
    <nav class="bg-indigo-700 shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Kiri: Logo & Menu Utama -->
                <div class="flex items-center">
                    <div class="shrink-0 text-white font-bold text-xl tracking-wider mr-6">
                        <?php echo e($title); ?>

                    </div>
                    <div class="hidden md:flex space-x-4">
                        <a href="/" class="text-gray-200 hover:bg-indigo-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Home</a>
                        <a href="/about" class="text-gray-200 hover:bg-indigo-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">About</a>
                        <a href="/contact" class="text-gray-200 hover:bg-indigo-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Contact</a>
                        <a href="/blog" class="text-gray-200 hover:bg-indigo-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Blog</a>
                        
                        
                        <?php if(auth()->guard()->check()): ?>
                        <a href="/posts" class="text-gray-200 hover:bg-indigo-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Posts</a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Kanan: Auth Menu -->
                <div class="flex items-center space-x-4">
                    <?php if(auth()->guard()->check()): ?>
                        
                        <span class="text-white text-sm font-medium">Hi, <?php echo e(Auth::user()->name); ?></span>
                        
                        <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-md text-sm font-medium transition shadow-sm">
                                Logout
                            </button>
                        </form>
                    <?php else: ?>
                        
                        <a href="<?php echo e(route('login')); ?>" class="text-gray-200 hover:text-white text-sm font-medium">Masuk</a>
                        <a href="<?php echo e(route('register')); ?>" class="bg-white text-indigo-700 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium transition shadow-sm">Daftar</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <?php endif; ?>

    
    <?php if($description): ?>
        <h1 class="text-4xl text-center p-6 text-gray-800 font-light"><?php echo e($description); ?></h1>
    <?php endif; ?>

    
    <main class="flex-grow">
        <?php echo e($slot); ?>

    </main>

    <footer class="bg-gray-900 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-gray-400 text-sm font-light">
                &copy; <?php echo e(date('Y')); ?> Copyright By <span class="text-indigo-400 font-medium">zezee</span>. All rights reserved.
            </h3>
        </div>
    </footer>
</body>
</html><?php /**PATH D:\KULIAH\prakweb2025_C_233040144\prakweb2025_C_233040144-main (2)\prakweb2025_C_233040144-main\pertemuan3\tugas\resources\views/components/layout.blade.php ENDPATH**/ ?>
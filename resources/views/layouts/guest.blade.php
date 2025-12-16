<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin Login - RZR Premium Lubricants</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=outfit:400,500,600,700,800|inter:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Outfit', sans-serif;
            }
            .login-gradient {
                background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f0f23 100%);
            }
            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
            }
            .input-focus:focus {
                border-color: #f97316;
                box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1);
            }
            .btn-gradient {
                background: linear-gradient(135deg, #f97316 0%, #dc2626 100%);
            }
            .btn-gradient:hover {
                background: linear-gradient(135deg, #ea580c 0%, #b91c1c 100%);
            }
            .floating-shapes {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 0;
            }
            .floating-shapes::before,
            .floating-shapes::after {
                content: '';
                position: absolute;
                border-radius: 50%;
                background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(220, 38, 38, 0.1));
            }
            .floating-shapes::before {
                width: 400px;
                height: 400px;
                top: -100px;
                right: -100px;
                animation: float 6s ease-in-out infinite;
            }
            .floating-shapes::after {
                width: 300px;
                height: 300px;
                bottom: -50px;
                left: -50px;
                animation: float 8s ease-in-out infinite reverse;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(10deg); }
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex login-gradient relative overflow-hidden">
            <!-- Floating Shapes -->
            <div class="floating-shapes"></div>
            
            <!-- Left Side - Branding (Hidden on mobile) -->
            <div class="hidden lg:flex lg:w-1/2 flex-col justify-center items-center p-12 relative z-10">
                <div class="max-w-md text-center">
                    <!-- Logo -->
                    <img src="{{ asset('images/rzr-logo.jpg') }}" alt="RZR Premium Lubricants" class="h-20 w-auto mx-auto rounded-xl shadow-2xl mb-8">
                    
                    <h1 class="text-4xl font-bold text-white mb-4">
                        Welcome to <span class="text-orange-400">RZR</span> Admin
                    </h1>
                    <p class="text-gray-400 text-lg mb-8">
                        Manage your products, orders, and customer inquiries from one powerful dashboard.
                    </p>
                    
                    <!-- Features -->
                    <div class="space-y-4 text-left">
                        <div class="flex items-center gap-3 text-gray-300">
                            <div class="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span>Real-time Analytics Dashboard</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-300">
                            <div class="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                            <span>Product & Category Management</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-300">
                            <div class="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <span>Distributor Applications</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="w-full lg:w-1/2 flex items-center justify-center p-6 relative z-10">
                <div class="glass-card w-full max-w-md rounded-2xl shadow-2xl p-8 lg:p-10">
                    <!-- Mobile Logo -->
                    <div class="lg:hidden text-center mb-8">
                        <img src="{{ asset('images/rzr-logo.jpg') }}" alt="RZR" class="h-16 w-auto mx-auto rounded-xl shadow-lg mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Admin Login</h2>
                    </div>
                    
                    <!-- Desktop Title -->
                    <div class="hidden lg:block mb-8">
                        <h2 class="text-2xl font-bold text-gray-800">Sign In</h2>
                        <p class="text-gray-500 mt-1">Enter your credentials to access the admin panel</p>
                    </div>

                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>

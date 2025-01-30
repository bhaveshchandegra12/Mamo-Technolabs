<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <div class="flex justify-center mb-6">
            <svg class="w-32 h-32 text-blue-500 floating" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 21H4.5a1.5 1.5 0 01-1.5-1.5v-15A1.5 1.5 0 014.5 3h15a1.5 1.5 0 011.5 1.5v6.75M16.5 9l-9 9m0 0v-6.75m0 6.75H10.5" />
            </svg>
        </div>
        <h1 class="text-5xl font-bold text-gray-800 mb-4">404</h1>
        <p class="text-xl text-gray-600 mb-8">Oops! The page you're looking for doesn't exist.</p>
        <p class="text-xl text-gray-600 mb-8">Mamo Technolabs</p>
		<a href="/" class="px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg shadow-lg hover:bg-blue-600 transition">
            Go Back Home
        </a>
    </div>
</body>
</html>

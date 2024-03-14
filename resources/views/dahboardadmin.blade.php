<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 flex flex-col">
            <div class="p-4 border-b border-gray-700">
                <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
            </div>
            <div class="p-4">
                <ul>
                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Dashboard</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Users</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Settings</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Logout</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Content -->
        <div class="flex-1">
            <header class="bg-white shadow">
                <div class="container mx-auto px-6 py-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-lg font-semibold text-gray-800">Welcome to Admin Dashboard</span>
                        </div>
                        <div class="flex items-center">
                            <a href="#" class="text-gray-500 font-semibold hover:text-gray-600">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="h-full overflow-y-auto">
                <div class="container mx-auto px-6 py-8">
                    <!-- Your content here -->
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard Content</h1>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus tempor nisi, id eleifend ligula facilisis id.</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
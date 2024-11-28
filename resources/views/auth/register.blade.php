<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Blogs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        'background': "url('{{ asset('wrap.jpg') }}')",
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'custom-text': '#66655f',
                        'custom-hover': '#4a4943',
                        'custom-bg': '#4a4943', /* Warna tombol */
                        'custom-bg-hover': '#2f2e2a', /* Warna hover tombol */
                    }
                }
            }
        };
    </script>
</head>
<body
    class="font-poppins bg-background bg-cover bg-center bg-no-repeat text-gray-800 font-sans min-h-screen flex flex-col items-center justify-center">
    <h1 class="text-4xl font-bold text-custom-text mb-4">Register</h1>
    <p class="text-lg mb-6 text-custom-text">Let's get started!</p>
    <form method="POST" action="{{ route('register') }}" class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        @csrf
        <div class="mb-4">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg">
        </div>
        <div class="mb-4">
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name"
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg">
        </div>
        <button type="submit"
            class="w-full bg-custom-bg text-white py-2 px-4 rounded-lg hover:bg-custom-bg-hover focus:outline-none focus:ring-2 focus:ring-custom-bg focus:ring-offset-2">
            Register
        </button>
    </form>
    <p class="mt-4 text-sm">
        Already have an account? <a href="{{ route('login') }}" class="text-custom-bg hover:underline">Sign in</a>
    </p>
</body>
</html>
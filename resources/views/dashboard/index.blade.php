<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Blogs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
                        'custom-bg': '#4a4943',
                        'custom-bg-hover': '#2f2e2a',
                    }
                }
            }
        };
    </script>
</head>

<body class="font-poppins bg-background bg-cover bg-center bg-no-repeat min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-custom-bg p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-white text-xl font-semibold">Dashboard</a>
            <div class="flex space-x-4">
                <a href="{{ route('list.blogs') }}" class="text-white hover:underline">List Blogs</a>
                <a href="{{ route('create.blogs') }}" class="text-white hover:underline">Create Blog</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col items-center justify-center text-center">
        <h1 class="text-4xl font-bold text-custom-text mt-10">Welcome to My Blogs</h1>
        <!-- Gambar di bawah tulisan -->
        <img src="{{ asset('book.png') }}" alt="Image not found" class="mt-6 w-1/3 max-w-sm h-auto rounded-full">
    </div>
</body>

</html>

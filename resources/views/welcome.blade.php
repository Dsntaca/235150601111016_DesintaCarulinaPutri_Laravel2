<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome-Blogs</title>
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
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-background font-poppins bg-cover bg-center bg-no-repeat flex flex-col h-screen m-0">
    <!-- Navbar -->
    <nav class="w-full flex justify-end p-4">
        <a href="/login" class="text-custom-text text-lg mx-2 hover:text-custom-hover transition">
            Login
        </a>
        <a href="/register" class="text-custom-text text-lg mx-2 hover:text-custom-hover transition">
            Register
        </a>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-custom-text mb-4">Welcome to <strong>Blogs</strong></h1>
            <p class="text-xl text-custom-text">A place where you can read and share blogs anytime.</p>
        </div>
    </div>
</body>

</html>

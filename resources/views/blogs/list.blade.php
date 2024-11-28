<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Blogs</title>
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
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'custom-bg': '#4a4943',
                        'custom-bg-hover': '#2f2e2a',
                        'custom-text': '#66655f',
                    },
                    backgroundImage: {
                        'background': "url('{{ asset('wrap.jpg') }}')",
                    }
                }
            }
        };
    </script>
</head>

<body class="font-poppins bg-background bg-cover bg-center bg-no-repeat text-gray-800 min-h-screen flex flex-col">
    <nav class="bg-custom-bg p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-white text-xl font-semibold">Dashboard</a>
            <div class="flex space-x-4">
                <a href="{{ route('create.blogs') }}" class="text-white hover:underline">Create Blog</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <h1 class="text-3xl font-bold text-custom-text mt-6 text-center">List of Blogs</h1>
    
    <div class="container mx-auto mt-6">
        <table class="table-auto w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-custom-bg text-white">
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Content</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td class="border px-4 py-2">{{ $blog->judul }}</td>
                    <td class="border px-4 py-2">{{ $blog->pembuat }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($blog->isi, 50) }}</td>
                    <td class="border px-4 py-2">
                        <img src="{{ asset('storage/' . $blog->foto) }}" alt="Blog Image" class="h-16 w-16">
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('edit.blogs', $blog->id) }}" 
                           class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('delete.blogs', $blog->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

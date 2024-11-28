<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blogs</title>
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

<body class="font-poppins bg-background bg-cover bg-center bg-no-repeat text-gray-800 min-h-screen flex flex-col items-center">
    <h1 class="text-3xl font-bold text-custom-text mt-6">Create New Blog</h1>
    <form action="{{ route('store.blogs') }}" method="POST" enctype="multipart/form-data" 
          class="bg-white p-8 rounded-xl shadow-lg mt-6 w-full max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="title" class="block font-medium text-custom-text">Title</label>
            <input type="text" id="judul" name="judul" required 
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg">
        </div>
        <div class="mb-4">
            <label for="author" class="block font-medium text-custom-text">Author</label>
            <input type="text" id="pembuat" name="pembuat" required 
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg">
        </div>
        <div class="mb-4">
            <label for="content" class="block font-medium text-custom-text">Content</label>
            <textarea id="isi" name="isi" required 
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg"></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block font-medium text-custom-text">Image</label>
            <input type="file" id="foto" name="foto" required 
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-custom-bg focus:border-custom-bg">
        </div>
        <button type="submit" 
                class="w-full bg-custom-bg text-white py-2 px-4 rounded-lg hover:bg-custom-bg-hover focus:outline-none focus:ring-2 focus:ring-custom-bg focus:ring-offset-2">
            Submit
        </button>
    </form>
</body>

</html>

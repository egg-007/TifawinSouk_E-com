<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-xl mx-auto py-10 px-4">

        <div class="bg-white p-6 rounded-lg shadow">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">
                Edit Category
            </h1>

            <form action="{{ route('categories.update', $categorie) }}" method="POST">
                @csrf
                @method('PUT')


                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Name
                    </label>
                    <input type="text" name="name" value="{{ old('name', $categorie->name) }}"
                        class="w-full mt-1 p-2 border rounded focus:ring focus:ring-blue-200" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Slug
                    </label>
                    <input type="text" name="slug" value="{{ old('slug', $categorie->slug) }}"
                        class="w-full mt-1 p-2 border rounded focus:ring focus:ring-blue-200" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Description
                    </label>
                    <textarea name="description" rows="4"
                        class="w-full mt-1 p-2 border rounded focus:ring focus:ring-blue-200">{{ old('description', $categorie->description) }}</textarea>
                </div>

                {{-- ACTIONS --}}
                <div class="flex justify-between items-center">
                    <a href="{{ route('categories.index') }}" class="text-gray-600 hover:underline">
                        ← Back
                    </a>

                    <button type="submit"
                        class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                        Update
                    </button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
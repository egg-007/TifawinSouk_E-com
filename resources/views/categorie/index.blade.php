<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="max-w-4xl mx-auto py-10 px-4">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Categories</h1>

            <a href="{{ route('categories.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                + Add Category
            </a>
        </div>

        @if ($categories->count())
            <div class="space-y-4">
                @foreach ($categories as $category)
                    <div class="bg-white p-6 rounded-lg shadow">

                        <div class="mb-2">
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $category->name }}
                            </p>
                            <p class="text-sm text-gray-500">
                                Slug: {{ $category->slug }}
                            </p>
                        </div>

                        <p class="text-gray-600 mb-4">
                            {{ $category->description }}
                        </p>

                        <div class="flex gap-3">
                            <a href="{{ route('categories.edit', $category->id) }}"
                               class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                                Edit
                            </a>

                            <form action="{{ route('categories.destroy', $category->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white p-6 rounded-lg shadow text-center text-gray-500">
                No categories found.
            </div>
        @endif

    </div>

</body>
</html>

<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold mb-2.5">Our Categories</h3>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach ($categories as $category)
                    <div class="max-w-xs mx-4 mb-2 rounded-2xl shadow-lg">
                        <img class="w-full  h-64 object-cover object-center" src="{{ Storage::url($category->image) }}"
                            alt="categoryImage" />
                        <div class="px-6 py-4">
                            <a href="{{ route('categories.show', $category->id) }}">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                    {{ $category->name }}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>

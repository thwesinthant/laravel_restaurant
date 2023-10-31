<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold mb-2.5">Our Menus</h3>
        </div>
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($menus as $menu)
                <div class="max-w-xs mx-4 mb-2 mt-8 rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full  h-64 object-cover object-center " src="{{ Storage::url($menu->image) }}"
                        alt="Image" />
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                            {{ $menu->name }} </h4>
                        <p class="leading-normal text-gray-700">{{ $menu->description }}</p>
                    </div>
                    <p class="text-xl text-green-600 text-center mb-3">{{ $menu->price }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>

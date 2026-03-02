<x-guest-layout>
    <section class="h-auto px-15 w-full flex flex-col">

        <div class="grid grid-cols-3 gap-14 mb-8">
            @foreach ($infos as $info)
                <div class="flex flex-col">
                    <div class="flex relative rounded-t-lg overflow-hidden">
                        <img src="{{ asset('assets/image 1.png') }}" alt="" class="w-full">
                        <span
                            class="flex items-center absolute right-0 top-0 px-4 py-1.5 bg-primary text-white text-base font-medium border border-primary">{{ $info->type }}</span>
                    </div>
                    <div class="p-4 h-60 max-h-60 w-full flex flex-col justify-between gap-y-2.5 overflow-visible shadow-xl">
                        <h2 class="text-2xl font-bold">{{ $info->title }}</h2>
                        <div class="flex items-center gap-x-2">
                            <img src="{{ asset('assets/image 3.png') }}" alt="">
                            <div class="flex flex-col">
                                <h4 class="text-sm">{{ $info->name }}</h4>
                                <span class="text-xs">{{ \Carbon\Carbon::parse($info->post_date)->format('n') }} month
                                    ago</span>
                            </div>
                        </div>
                        <p class="overflow-hidden">{{ $info->description }}</p>
                        <a class="flex gap-x-1 items-center text-primary" href="">Read More
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M1.99974 13.0001L1.9996 11.0002L18.1715 11.0002L14.2218 7.05044L15.636 5.63623L22 12.0002L15.636 18.3642L14.2218 16.9499L18.1716 13.0002L1.99974 13.0001Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $infos->onEachSide(1)->links() }}
        
        <div class="mt-8">
            <x-cta />
        </div>
    </section>

</x-guest-layout>

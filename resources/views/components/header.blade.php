{{-- The Master doesn't talk, he acts. --}}
<header x-data="{open: false}"
        id="header"
        class="w-full">


    <div class="flex items-center justify-between w-full gap-4 p-4 py-6 mx-auto max-w-7xl">
        <x-logo class="h-10 md:h-12 shrink fill-inherit"/>

        {{-- Desktop Menu --}}
        <ul class="items-center justify-between hidden text-xl uppercase md:flex gap-x-12">
            <x-nav-link route="home">Home</x-nav-link>
            <x-nav-link route="services">Leistungen</x-nav-link>
            {{--<x-nav-link route="about">Über Uns</x-nav-link>--}}
            <x-nav-link route="portfolio">Portfolio</x-nav-link>
        </ul>

        {{-- Mobile Menu --}}
        <div class="md:hidden">
            {{-- Trigger --}}
            <button x-bind:title="open ? 'Menü schließen' : 'Menü öffnen'"
                    class="z-50 flex flex-col items-end justify-between"
                    x-on:click="open = !open">
                <x-icons.icon-menu class="transition-all stroke-gray-900"
                                   x-show="!open"></x-icons.icon-menu>
                <x-icons.icon-x class="transition-all stroke-gray-900"
                                x-show="open"
                                x-cloak></x-icons.icon-x>
            </button>
        </div>
    </div>
    <ul
        x-bind:class="{'max-h-0': !open, 'py-0': !open, 'opacity-40': !open, 'max-h-full': open, 'py-8': open, 'opacity-100': open}"
        class="z-50 px-4 space-y-10 text-xl uppercase overflow-hidden list-none transition-all bg-white bg-red-500 rounded md:hidden border-primary inset-4"
        x-cloak>
        <x-nav-link-mobile route="home">Home</x-nav-link-mobile>
        <x-nav-link-mobile route="services">Leistungen</x-nav-link-mobile>
        <x-nav-link-mobile route="portfolio">Portfolio</x-nav-link-mobile>
        {{--<x-nav-link-mobile route="about">Über Uns</x-nav-link-mobile>--}}
        {{--<x-nav-link-mobile route="blog">Blog</x-nav-link-mobile>--}}
    </ul>
</header>

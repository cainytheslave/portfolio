<div>
    {{-- In work, do what you enjoy. --}}

    <x-hero
        subtitle="Unsere Software ist von Menschen, für Menschen - saubere und intuitive Seiten für mehr Conversions"
        cta_text="Zum Angebot"
        href="#kontakt"
        img="illustrations.web_devices">
        Unsere Projekte aufbereitet als
        <x-underline>Portfolio</x-underline>
    </x-hero>

    <x-portfolio-entry title="Hemio - Kleinzeigen für Baumaterialien"
                       subtitle="Klimakrise und Materialknappheit. Immer wieder bleiben auf Baustellen Baumaterialen übrig und können nicht weitervermittelt werden. Diese Seite haben wir für einen schwedischen Kunden gebaut, der dieses Problem lösen wollte."
                       year="2021"
                       :alternate="true">
        <img class="object-cover w-full h-full lg:col-span-3 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_fullscreen.webp') }}"
             alt="Hemio Screenshot Fullscreen"
             width="380" height="214">
        <img class="object-cover w-full h-full lg:col-span-2 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_login.webp') }}"
             alt="Hemio Screenshot Login"
             width="380" height="360">
        <img class="object-cover w-full h-full lg:col-span-2 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_newadd.webp') }}"
             alt="Hemio Screenshot Neues Angebot erstellen"
             width="380" height="360">
        <img class="object-cover w-full h-full lg:col-span-3 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/hemio_messenger.webp') }}"
             alt="Hemio Screenshot Nachrichten"
             width="380" height="214">
    </x-portfolio-entry>

    <x-portfolio-entry title="KIS - Internes Informationssystem"
                       subtitle="Um die internen Prozesse in der Kräutermanufaktur Kräuter & Wege zu dokumentieren und zu optimieren, haben wir hier ein vollumfassendes Informationssystem entwickelt. Die Software umfasst das Management von Anlieferungen, Warenhaltung, Herstellungsprozesse und Analysen und ermöglicht ein nahtloses Zusammenarbeiten von Logistik und Produktion."
                       year="2022"
                       :alternate="false">
        <img class="object-cover w-full h-full border-primary border-2 lg:col-span-3 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/kis_calc.webp') }}"
             alt="KIS Berechnungstool"
             width="380" height="180">
        <img class="object-cover w-full h-full border-primary border-2 lg:col-span-2 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/kis_list.webp') }}"
             alt="KIS Listenansicht"
             width="380" height="180">
        <img class="object-cover w-full h-full border-primary border-2 lg:col-span-2 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/kis_recipe.webp') }}"
             alt="KIS Rezepte"
             width="380" height="180">
        <img class="object-cover w-full h-full border-primary border-2 lg:col-span-3 rounded-lg"
             src="{{ Vite::asset('resources/images/portfolio/kis_stats.webp') }}"
             alt="KIS Statistiken"
             width="380" height="180">
    </x-portfolio-entry>

    <x-contact>
        <h2 class="text-4xl font-semibold text-center">
            <x-underline w="1">Projektideen?</x-underline> Schreiben Sie uns!
        </h2>
        <p class="mt-3 text-lg">Wir freuen uns über Ihre Nachricht und richten gerne eine Erstberatung ein.</p>
    </x-contact>

    <x-section></x-section>

    <x-footer/>
</div>

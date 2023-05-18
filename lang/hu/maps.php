<?php

return [
    'actions'       => [
        'back'      => 'Vissza ide: :name',
        'edit'      => 'Térkép szerkesztése',
        'explore'   => 'Felfedezés',
    ],
    'create'        => [
        'title' => 'Új térkép',
    ],
    'destroy'       => [],
    'edit'          => [],
    'errors'        => [
        'dashboard' => [
            'missing'   => 'Szükség van egy képre a térképnek, hogy a főoldalon megjeleníthessük.',
        ],
        'explore'   => [
            'missing'   => 'Kérlek adj egy képet a térképnek, mielőtt nekikezedél a felfedezésének.',
        ],
    ],
    'fields'        => [
        'center_marker' => 'Jelölő',
        'center_x'      => 'Alapértelmezett hosszúsági pozíció',
        'center_y'      => 'Alapértelmezett szélességi pozíció',
        'centering'     => 'Középre állítás',
        'grid'          => 'Rács',
        'initial_zoom'  => 'Kezdeti zoom',
        'max_zoom'      => 'Maximális zoom',
        'min_zoom'      => 'Minimális zoom',
        'tabs'          => [
            'coordinates'   => 'Koordináták',
            'marker'        => 'Jelölő',
        ],
    ],
    'helpers'       => [
        'center'            => 'A következő értékek megváltoztatása befolyásolja, hogy milyen területre fókuszálsz a térképen. Ha üresen hagyod, a térkép közepére fogsz fókuszálni.',
        'centering'         => 'Ha egy jelölőt állítasz középre, az lesz az alapértelmezett koordináta.',
        'descendants'       => 'Ez a lista a helyszín összes leszármazott térképét tartalmazza, nemcsak a közvetlen altérképeket.',
        'distance_measure'  => 'Távolságmérő hozzáadásával Felfedezés módban lehetségessé válik a távolságmérés a térképen.',
        'grid'              => 'Határozd meg a rács méretét, amely majd megjelenik Felfedezés módban.',
        'initial_zoom'      => 'A térkép a kezdeti zoom szinttel töltődik be. Az alapértelmezett érték: :default, a maximális érték: :max, míg a minimális zoom szint: :min.',
        'max_zoom'          => 'A legmagasabb szint, amennyire be lehet zoomolni a térképen. Az alapértelmezett értéke: :default, míg a maximális zoom értéke: :max.',
        'min_zoom'          => 'A legalacsonyabb szint, amennyire ki lehet zoomolni a térképen. Az alapértelmezett értéke: :default, míg a legalacsonyabb zoom szint értéke: :min.',
        'missing_image'     => 'Tölts fel egy képet a térképhez mielőtt nekikezdenél újabb rétegeket, és térképjelzőket elhelyezni rajta!',
        'nested_without'    => 'Minden olyan térkép mutatása, aminek nincs szülője. Klikkelj egy sorra, hogy lásd a gyermektérképeit.',
    ],
    'index'         => [],
    'maps'          => [],
    'panels'        => [
        'groups'    => 'Csoportok',
        'layers'    => 'Rétegek',
        'markers'   => 'Térképjelzők',
        'settings'  => 'Beállítások',
    ],
    'placeholders'  => [
        'center_marker' => 'Hagyd üresen, hogy a térkép közepét töltsük be.',
        'center_x'      => 'Hagyd üresen, hogy a térkép közepét töltsük be.',
        'center_y'      => 'Hagyd üresen, hogy a térkép közepét töltsük be.',
        'grid'          => 'Rácsvonalak közötti távolság, pixelben. Ha üresen hagyod nem jelenik meg a rács a térképen.',
        'name'          => 'A térkép neve',
        'type'          => 'Tömlöc, Város, Galaxis',
    ],
    'show'          => [
        'tabs'  => [
            'maps'  => 'Térképek',
        ],
    ],
];

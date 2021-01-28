<?php

return [
    'actions'                   => [
        'actions'           => 'Akcije',
        'apply'             => 'Primijeni',
        'back'              => 'Natrag',
        'copy'              => 'Kopiraj',
        'copy_mention'      => 'Kopiraj [ ] spominjanje',
        'copy_to_campaign'  => 'Kopiraj u kampanju',
        'explore_view'      => 'Ugniježđeni pregled',
        'export'            => 'Izvoz',
        'find_out_more'     => 'Saznaj više',
        'go_to'             => 'Idi na :name',
        'json-export'       => 'Izvoz (json)',
        'manage_links'      => 'Upravljanje poveznicama',
        'move'              => 'Pomakni',
        'new'               => 'Novo',
        'next'              => 'Sljedeće',
        'reset'             => 'Resetiraj',
    ],
    'add'                       => 'Dodaj',
    'alerts'                    => [
        'copy_mention'  => 'Napredno spominjanje entiteta kopirano je u međuspremnik.',
    ],
    'attributes'                => [
        'actions'       => [
            'apply_template'    => 'Primjeni predložak atributa',
            'manage'            => 'Upravljanje',
            'more'              => 'Više opcija',
            'remove_all'        => 'Izbriši sve',
        ],
        'fields'        => [
            'attribute'             => 'Atribut',
            'community_templates'   => 'Predlošci zajednice',
            'is_private'            => 'Privatni atributi',
            'is_star'               => 'Prikvačeno',
            'template'              => 'Predložak',
            'value'                 => 'Vrijednost',
        ],
        'helpers'       => [
            'delete_all'    => 'Jesi li siguran/a da želiš izbrisati sve atribute ovog entiteta?',
        ],
        'hints'         => [
            'is_private'    => 'Možeš sakriti sve atribute entiteta od svih članova koji nisu administratori tako što ćeš ga učiniti privatnim.',
        ],
        'index'         => [
            'success'   => 'Ažurirani atributi za :entity.',
            'title'     => 'Atributi za :name',
        ],
        'placeholders'  => [
            'attribute' => 'Broj osvajanja, Razina izazova, Inicijativa, Stanovništvo',
            'block'     => 'Naziv bloka',
            'checkbox'  => 'Naziv potvrdnog okvira',
            'section'   => 'Naziv odjeljka',
            'template'  => 'Odaberi predložak',
            'value'     => 'Vrijednost atributa',
        ],
        'template'      => [
            'success'   => 'Predložak atributa :name primijenjen na :entity',
            'title'     => 'Primijeni predložak atributa za :name',
        ],
        'types'         => [
            'attribute' => 'Atribut',
            'block'     => 'Blok',
            'checkbox'  => 'Potvrdni okvir',
            'section'   => 'Odjeljak',
            'text'      => 'Tekst u više redova',
        ],
        'visibility'    => [
            'entry'     => 'Atribut je prikazan u izborniku entiteta.',
            'private'   => 'Atribut vidljiv samo članovima uloge "Administrator".',
            'public'    => 'Atribut vidljiv svim članovima.',
            'tab'       => 'Atribut se prikazuje samo na kartici Atributi.',
        ],
    ],
    'boosted'                   => 'Pojačano',
    'boosted_campaigns'         => 'Pojačane kampanje',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Skupno uređivanje i označavanje',
        ],
        'age'           => [
            'helper'    => 'Možeš koristiti + i - prije broja za ažuriranje dobi za taj iznos.',
        ],
        'delete'        => [
            'title'     => 'Brisanje više entiteta',
            'warning'   => 'Jesi li siguran/a da želiš izbrisati odabrane entitete?',
        ],
        'edit'          => [
            'tagging'   => 'Akcija za oznake',
            'tags'      => [
                'add'       => 'Dodaj',
                'remove'    => 'Ukloni',
            ],
            'title'     => 'Uređivanje više entiteta',
        ],
        'errors'        => [
            'admin'     => 'Samo administratori kampanje mogu promijeniti privatni status entiteta.',
            'general'   => 'Došlo je do pogreške prilikom obrade tvoje akcije. Pokušaj ponovo i kontaktiraj nas ako se problem nastavi. Poruka o pogrešci: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Pregazi postojeće',
            ],
            'helpers'   => [
                'override'  => 'Ako je uključeno, dopuštenja odabranih entiteta će biti pregažena s ovima. Ako nije uključeno, odabrana dopuštenja će biti dodana postojećim.',
            ],
            'title'     => 'Promijeni dozvole za nekoliko entiteta',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count entitet kopiran u :campaign.|{2,4} :count entiteta kopirana u :campaign.|{5,*} :count entiteta kopirano u :campaign.',
            'editing'           => '{1} :count entitet je ažuriran.|[2,4] :count entiteta su ažurirana.|[5, *] :count entiteta je ažurirano.',
            'permissions'       => '{1} Ovlasti promijenjene za :count entitet.|[2,*] Ovlasti promijenjene za :count entiteta.',
            'private'           => '{1} :count entitet je sad privatan.|[2,4] :count entiteta su sad privatna.|[5, *] :count entiteta su sad privatno.',
            'public'            => '{1} :count entitet je sad vidljiv.|[2,4] :count entiteta su sad vidljiva.|[5, *] :count entiteta je sad vidljivo.',
        ],
    ],
    'cancel'                    => 'Otkaži',
    'click_modal'               => [
        'close'     => 'Zatvori',
        'confirm'   => 'Potvrdi',
        'title'     => 'Potvrdi svoju akciju',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Kopiraj entitete u drugu kampanju',
        'panel'         => 'Kopiraj',
        'title'         => 'Kopiraj ":name" u drugu kampanju',
    ],
    'create'                    => 'Kreiraj',
    'datagrid'                  => [
        'empty' => 'Nema ništa za prikazati.',
    ],
    'delete_modal'              => [
        'close'         => 'Zatvori',
        'delete'        => 'Obriši',
        'description'   => 'Jesi li siguran/a da želiš ukloniti :tag?',
        'mirrored'      => 'Ukloni zrcalni odnos.',
        'title'         => 'Izbriši potvrdu',
    ],
    'destroy_many'              => [
        'success'   => 'Obrisano :count entitet|Obrisano :count entiteta.',
    ],
    'edit'                      => 'Uredi',
    'errors'                    => [
        'boosted'                       => 'Ova je funkcionalnost dostupna samo za pojačane kampanje.',
        'node_must_not_be_a_descendant' => 'Nevažeći čvor (oznaka, roditeljska lokacija): bio bi potomak sam sebi.',
    ],
    'events'                    => [
        'hint'  => 'Dolje je prikazan popis svih kalendara kojima je ovaj entitet dodan pomoću sučelja "Dodavanje događaja u kalendar".',
    ],
    'export'                    => 'Izvoz',
    'fields'                    => [
        'ability'               => 'Sposobnost',
        'attribute_template'    => 'Predložak atributa',
        'calendar'              => 'Kalendar',
        'calendar_date'         => 'Datum kalendara',
        'character'             => 'Lik',
        'colour'                => 'Boja',
        'copy_attributes'       => 'Kopiraj atribute',
        'copy_notes'            => 'Kopiraj entitetske bilješke',
        'creator'               => 'Tvorac',
        'dice_roll'             => 'Bacanje kockica',
        'entity'                => 'Entitet',
        'entity_type'           => 'Tip entiteta',
        'entry'                 => 'Unos',
        'event'                 => 'Događaj',
        'excerpt'               => 'Isječak',
        'family'                => 'Obitelj',
        'files'                 => 'Datoteke',
        'has_entity_files'      => 'Ima datoteke entiteta',
        'has_entity_notes'      => 'Ima bilješke entiteta',
        'has_image'             => 'Ima sliku',
        'header_image'          => 'Slika zaglavlja',
        'image'                 => 'Slika',
        'is_private'            => 'Privatno',
        'is_star'               => 'Prikvačeno',
        'item'                  => 'Predmet',
        'location'              => 'Lokacija',
        'map'                   => 'Karta',
        'name'                  => 'Naziv',
        'organisation'          => 'Organizacija',
        'position'              => 'Položaj',
        'race'                  => 'Rasa',
        'tag'                   => 'Oznaka',
        'tags'                  => 'Oznake',
        'timeline'              => 'Kronologija',
        'tooltip'               => 'Kratki opis',
        'type'                  => 'Tip',
        'visibility'            => 'Vidljivost',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Klikni za dodavanje ili dovuci datoteku',
            'manage'    => 'Upravljanje datotekama entiteta',
        ],
        'errors'    => [
            'max'       => 'Dosegnut maksimalni broj (:max) datoteka za ovaj entitet.',
            'no_files'  => 'Nema datoteka.',
        ],
        'files'     => 'Prenesene datoteke',
        'hints'     => [
            'limit'         => 'Svaki entitet može imati maksimalno  :max datoteka prenesenih na njega.',
            'limitations'   => 'Podržani formati: jpg, png, gif i pdf. Maksimalna veličina datoteke: :size',
        ],
        'title'     => 'Entitetske datoteke za :name',
    ],
    'filter'                    => 'Filtar',
    'filters'                   => [
        'all'       => 'Filtriraj na sve potomke',
        'clear'     => 'Očistite filtre',
        'direct'    => 'Filtriraj na direktne potomke',
        'filtered'  => 'Prikazuje se :count od :total :entity.',
        'hide'      => 'Sakrij filtre',
        'options'   => [
            'exclude'   => 'Izuzmi',
            'include'   => 'Uključi',
            'none'      => 'Ništa',
        ],
        'show'      => 'Prikaži filtre',
        'sorting'   => [
            'asc'       => ':field uzlazno',
            'desc'      => ':field silazno',
            'helper'    => 'Kontroliraj u kojem se prikazuju rezultati.',
        ],
        'title'     => 'Filteri',
    ],
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Dodajte datum kalendara',
        ],
        'copy_options'  => 'Opcije kopiranja',
    ],
    'hidden'                    => 'Skriveno',
    'hints'                     => [
        'attribute_template'    => 'Primijeni predložak atributa izravno prilikom stvaranja ovog entiteta.',
        'calendar_date'         => 'Datum kalendara omogućava jednostavno filtriranje u popisima, također održavajući događaj kalendara u odabranom kalendaru.',
        'header_image'          => 'Ova se slika postavlja iznad entiteta. Za najbolje rezultate koristite široku sliku.',
        'image_limitations'     => 'Podržani formati: jpg, png i gif. Maksimalna veličina datoteke: :size.',
        'image_patreon'         => 'Povećaj ograničenje veličine datoteke?',
        'is_private'            => 'Ako se postavi na privatno, ovaj će entitet biti vidljiv samo članovima koji su u ulozi kampanje "Administrator".',
        'is_star'               => 'Prikvačeni elementi pojavit će se na izborniku entiteta',
        'map_limitations'       => 'Podržani formati: jpg, png, gif i svg. Maksimalna veličina datoteke: :size.',
        'tooltip'               => 'Zamijeni automatski generirani kratki opis sljedećim sadržajem.',
        'visibility'            => 'Postavljanje vidljivosti na "Administratori" znači da će samo članovi kampanje u ulozi Administrator vidjeti ovo. Postavljanje vidljivosti na "Samo ja" znači da samo ti vidiš ovo.',
    ],
    'history'                   => [
        'created'       => 'Kreirao/la <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'created_date'  => 'Kreirano <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'       => 'Nepoznato',
        'updated'       => 'Zadnji/a promijenio/la <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'updated_date'  => 'Zadnji puta ažurirano <span data-toggle="tooltip" title=":realdate">:date</span>',
        'view'          => 'Pogledaj zapisnik entiteta',
    ],
    'image'                     => [
        'error' => 'Nismo uspjeli dobiti sliku koju ste tražili. Može biti da nam web mjesto ne dopušta preuzimanje slike (uobičajeno za Squarespace i DeviantArt) ili da veza više nije valjana. Provjerite također da slika nije veća od :size.',
    ],
    'is_not_private'            => 'Ovaj entitet trenutno nije postavljen kao privatni.',
    'is_private'                => 'Ovaj je entitet privatan i vidljiv samo članovima administratorske uloge.',
    'linking_help'              => 'Kako mogu povezati s ostalim unosima?',
    'manage'                    => 'Upravljanje',
    'move'                      => [
        'errors'        => [
            'permission'        => 'Nije ti dopušteno stvarati entitete tog tipa u ciljanoj kampanji.',
            'same_campaign'     => 'Trebaš odabrati drugu kampanju u koju će se entitet premjestiti.',
            'unknown_campaign'  => 'Nepoznata kampanja.',
        ],
        'fields'        => [
            'campaign'  => 'Nova kampanja',
            'copy'      => 'Napravi kopiju',
            'target'    => 'Novi tip',
        ],
        'hints'         => [
            'campaign'  => 'Možeš pokušati premjestiti ovaj entitet u drugu kampanju.',
            'copy'      => 'Odaberi ovu opciju ako želiš stvoriti kopiju u novoj kampanji.',
            'target'    => 'Imaj na umu da se neki podaci mogu izgubiti prilikom premještanja elementa iz jedne vrste u drugu.',
        ],
        'panels'        => [
            'change'    => 'Promijeni tip entiteta',
            'move'      => 'Premjesti u drugu kampanju',
        ],
        'success'       => 'Premješten entitet ":name".',
        'success_copy'  => 'Kopiran entitet ":name".',
        'title'         => 'Premjesti :name',
    ],
    'new_entity'                => [
        'error' => 'Pregledaj svoje vrijednosti.',
        'fields'=> [
            'name'  => 'Naziv',
        ],
        'title' => 'Novi entitet',
    ],
    'or_cancel'                 => 'ili <a href=":url">otkaži</a>',
    'panels'                    => [
        'appearance'            => 'Izgled',
        'attribute_template'    => 'Predložak atributa',
        'calendar_date'         => 'Datum kalendara',
        'entry'                 => 'Unos',
        'general_information'   => 'Opće informacije',
        'move'                  => 'Premjesti',
        'system'                => 'Sustav',
    ],
    'permissions'               => [
        'action'            => 'Akcija',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Dodaj',
                'deny'      => 'Zabrani',
                'ignore'    => 'Ignoriraj',
                'remove'    => 'Ukloni',
            ],
            'bulk_entity'   => [
                'allow'     => 'Dozvoli',
                'deny'      => 'Zabrani',
                'inherit'   => 'Naslijedi',
            ],
            'delete'        => 'Brisanje',
            'edit'          => 'Uređivanje',
            'entity_note'   => 'Bilješke entiteta',
            'read'          => 'Čitanje',
            'toggle'        => 'Uključi ili isključi',
        ],
        'allowed'           => 'Dozvoljeno',
        'fields'            => [
            'member'    => 'Član',
            'role'      => 'Uloga',
        ],
        'helper'            => 'Koristi ovo sučelje za preciziranje korisnika i uloga koji mogu vidjeti ili koristiti ovaj entitet.',
        'helpers'           => [
            'setup' => 'Koristi ovo sučelje za detaljno namještanje ovlasti uloga i korisnika za ovaj entitet. :allow će dozvoliti korisniku ili ulozi da odradi tu akciju. :deny će zabraniti akciju. :inherit će koristiti ovlasti korisnikove ili glavne uloge. Korisnik kojemu je postavljano :allow, može odrađivati akciju čak i ako uloga čiji je član ima :deny.',
        ],
        'inherited'         => 'Ova uloga već ima postavljeno dopuštenje za ovu vrstu entiteta.',
        'inherited_by'      => 'Ovaj je korisnik dio uloge ":role" koja daje ova dopuštenja ovom entitetu.',
        'success'           => 'Ovlasti spremljene.',
        'title'             => 'Ovlasti',
        'too_many_members'  => 'Ova kampanja ima previše članova (> 10) za prikaz u ovom sučelju. Upotrijebite gumb Ovlasti na prikazu entiteta za detaljnu kontrolu ovlasti.',
    ],
    'placeholders'              => [
        'ability'       => 'Izaberi sposobnost',
        'calendar'      => 'Izaberi kalendar',
        'character'     => 'Izaberi lika',
        'entity'        => 'Entitet',
        'event'         => 'Izaberi događaj',
        'family'        => 'Izaberi obitelj',
        'image_url'     => 'Umjesto toga možete prenijeti sliku sa URL-a',
        'item'          => 'Izaberi predmet',
        'journal'       => 'Odaberi dnevnik',
        'location'      => 'Izaberi lokaciju',
        'map'           => 'Izaberi kartu',
        'organisation'  => 'Izaberi organizaciju',
        'race'          => 'Izaberi rasu',
        'tag'           => 'Izaberi oznaku',
    ],
    'relations'                 => [
        'actions'   => [
            'add'   => 'Dodaj odnos',
        ],
        'fields'    => [
            'location'  => 'Lokacija',
            'name'      => 'Naziv',
            'relation'  => 'Odnos',
        ],
        'hint'      => 'Odnosi između entiteta mogu se postaviti tako da predstavljaju njihove veze.',
    ],
    'remove'                    => 'Ukloni',
    'rename'                    => 'Preimenuj',
    'save'                      => 'Spremi',
    'save_and_close'            => 'Spremi i zatvori',
    'save_and_copy'             => 'Spremi i kopiraj',
    'save_and_new'              => 'Spremi i kreni na novo',
    'save_and_update'           => 'Spremi i ažuriraj',
    'save_and_view'             => 'Spremi i pogledaj',
    'search'                    => 'Pretraži',
    'select'                    => 'Odaberi',
    'superboosted_campaigns'    => 'Super pojačane kampanje',
    'tabs'                      => [
        'abilities'     => 'Sposobnosti',
        'attributes'    => 'Atributi',
        'boost'         => 'Pojačavanje',
        'calendars'     => 'Kalendari',
        'default'       => 'Zadano',
        'events'        => 'Događaji',
        'inventory'     => 'Inventar',
        'links'         => 'Poveznice',
        'map-points'    => 'Točke na karti',
        'mentions'      => 'Spominjanja',
        'menu'          => 'Izbornik',
        'notes'         => 'Bilješke o entitetu',
        'permissions'   => 'Ovlasti',
        'relations'     => 'Odnosi',
        'reminders'     => 'Podsjetnici',
        'timelines'     => 'Kronologije',
        'tooltip'       => 'Kratki opis',
    ],
    'update'                    => 'Ažuriraj',
    'users'                     => [
        'unknown'   => 'Nepoznato',
    ],
    'view'                      => 'Vidljivost',
    'visibilities'              => [
        'admin'         => 'Administratori',
        'admin-self'    => 'Ja i administratori',
        'all'           => 'Svi',
        'members'       => 'Članovi',
        'self'          => 'Samo ja',
    ],
];

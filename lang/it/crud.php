<?php

return [
    'actions'                   => [
        'actions'           => 'Azioni',
        'apply'             => 'Applica',
        'back'              => 'Indietro',
        'change'            => 'Cambia',
        'copy'              => 'Copia',
        'copy_mention'      => 'Copia [ ] menzione',
        'copy_to_campaign'  => 'Copia nella campagna',
        'disable'           => 'Disattiva',
        'enable'            => 'Attiva',
        'explore_view'      => 'Visualizzazione Annidata',
        'export'            => 'Esporta (PDF)',
        'find_out_more'     => 'Per saperne di più',
        'go_to'             => 'Vai a :name',
        'help'              => 'Aiuto',
        'json-export'       => 'Esporta (JSON)',
        'manage_links'      => 'Organizza i link',
        'move'              => 'Muovi',
        'new'               => 'Nuovo',
        'new_child'         => 'Nuovo figlio',
        'new_post'          => 'Nuovo post',
        'next'              => 'Prossimo',
        'print'             => 'Stampa',
        'reorder'           => 'Riordina',
        'reset'             => 'Ripristina',
        'transform'         => 'Trasforma',
    ],
    'add'                       => 'Aggiungi',
    'alerts'                    => [
        'copy_attribute'    => 'La menzione dell\'attributo è stata copiata nei tuoi appunti.',
        'copy_invite'       => 'Il link di invito della campagna è stato copiato negli appunti.',
        'copy_mention'      => 'La menzione avanzata dell\'entità è stata copiata negli appunti.',
    ],
    'bulk'                      => [
        'actions'       => [
            'edit'          => 'Modifica e etichetta',
            'permissions'   => 'Cambia permessi',
            'templates'     => 'Applica modello di attributo',
        ],
        'age'           => [
            'helper'    => 'Puoi utilizzare i simboli + e - prima del numero per aggiornare l\'età di quel valore.',
        ],
        'buttons'       => [
            'label' => 'Per i selezionati',
        ],
        'delete'        => [
            'warning'   => 'Stai eliminando entità multiple.',
        ],
        'edit'          => [
            'tagging'   => 'Azione per le etichette',
            'tags'      => [
                'add'       => 'Aggiungi',
                'remove'    => 'Rimuovi',
            ],
            'title'     => 'Modifica molteplici entità',
        ],
        'errors'        => [
            'admin'     => 'Solo gli admin della campagna possono cambiare lo stato privato delle entità.',
            'general'   => 'Si è verificato un errore nell\'elaborazione dell\'azione. Riprova e contattaci se il problema persiste. Messaggio di errore: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Sovrascrivi',
            ],
            'helpers'   => [
                'override'  => 'Se selezionato, le autorizzazioni delle entità selezionate verranno sovrascritte con queste. Se non è selezionato, le autorizzazioni selezionate verranno aggiunte a quelle esistenti.',
            ],
            'title'     => 'Cambia autorizzazioni per diverse entità',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count entità è stata copiata in :campaign.|[2,*] :count entità sono state copiate in :campaign.',
            'editing'           => '{1} :count entità è stata modificata.|[2,*] :count entità sono state modificate.',
            'editing_partial'   => '{1} :count/:total entità è stata modificata.|[2,*] :count/:total entità sono state modificate.',
            'permissions'       => '{1} Autorizzazioni cambiate per :count entità.|[2,*] Autorizzazioni cambiate per :count entità.',
            'private'           => '{1} :count entità è ora privata.|[2,*] :count entità sono ora private.',
            'public'            => '{1} :count entità è ora visibile.|[2,*] :count entità sono ora visibili.',
            'templates'         => '{1} a :count entità è stato applicato un modello.|[2,*] a :count entità sono state applicate un modello.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Applica un modello a entità multiple',
    ],
    'cancel'                    => 'Cancella',
    'click_modal'               => [
        'close'     => 'Chiudi',
        'confirm'   => 'Conferma',
        'title'     => 'Conferma la tua azione',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Copia le entità a un\'altra campagna',
        'panel'         => 'Copia',
        'title'         => 'Copia \':name\' in un\'altra campagna',
    ],
    'create'                    => 'Crea',
    'datagrid'                  => [
        'empty' => 'Non c\'è ancora nulla da mostrare.',
    ],
    'delete_modal'              => [
        'callout'           => 'Hey!',
        'close'             => 'Chiudi',
        'confirm'           => 'Conferma la cancellazione',
        'delete'            => 'Rimuovi',
        'description_v2'    => 'Stai rimuovendo ":tag".',
        'permanent'         => 'Questa azione è permanente.',
        'recoverable'       => 'Le entità possono essere recuperate per un massimo di :days con una :boosted-campaign.',
        'title'             => 'Conferma della rimozione',
    ],
    'destroy_many'              => [
        'success'   => 'Rimossa :count entità.|Rimosse :count entità.',
    ],
    'edit'                      => 'Modifica',
    'errors'                    => [
        'boosted'                       => 'Questa funzione è disponibile solo a campagne potenziate.',
        'boosted_campaigns'             => 'Questa funzione è disponibile solo per :boosted.',
        'invalid_node'                  => 'Il genitore selezionato non è valido. Di solito è possibile risolvere il problema assegnando al genitore selezionato un genitore proprio e poi rimuovendolo.',
        'node_must_not_be_a_descendant' => 'Il genitore selezionato non è valido. Sarebbe un discendente di se stesso.',
        'unavailable_feature'           => 'Funzione non disponibile',
    ],
    'events'                    => [],
    'fields'                    => [
        'calendar_date'     => 'Data del Calendario',
        'child'             => 'Figlio',
        'closed'            => 'Chiuso',
        'colour'            => 'Colore',
        'copy_abilities'    => 'Copia Abilità',
        'copy_attributes'   => 'Copia Attributi',
        'copy_inventory'    => 'Copia Inventario',
        'copy_links'        => 'Copia Link',
        'copy_permissions'  => 'Copia Autorizzazioni (questo sovrascriverà i valori impostati nella scheda Autorizzazioni)',
        'copy_posts'        => 'Copia Post (questo include anche le autorizzazioni dei post)',
        'creator'           => 'Creatore',
        'date_range'        => 'Intervallo di date',
        'entity'            => 'Entità',
        'entity_type'       => 'Tipo di Entità',
        'entry'             => 'Voce',
        'excerpt'           => 'Estratto',
        'files'             => 'File',
        'gallery_header'    => 'Intestazione della Galleria',
        'gallery_image'     => 'Immagine della Galleria',
        'has_attributes'    => 'Ha attributi',
        'has_entity_files'  => 'Ha file di entità',
        'has_image'         => 'Ha un\'immagine',
        'has_posts'         => 'Ha post',
        'header_image'      => 'Intestazione dell\'Immagine',
        'image'             => 'Immagine',
        'is_closed'         => 'La conversazione verrà chiusa e non accetterà più nuovi messaggi.',
        'is_private'        => 'Privato',
        'is_private_v3'     => 'Mostra solo ai membri del ruolo :admin-role. Questo sovrascrive qualsiasi altra autorizzazione.',
        'is_star'           => 'Appuntato',
        'locations'         => ':first in :second',
        'name'              => 'Nome',
        'parent'            => 'Genitore',
        'position'          => 'Posizione',
        'privacy'           => 'Privacy',
        'replace_mentions'  => 'Sostituire le menzioni degli attributi nella voce con quelle della nuova entità.',
        'template'          => 'Modello',
        'tooltip'           => 'Tooltip',
        'type'              => 'Tipo',
        'visibility'        => 'Visibilità',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Clicca per aggiungere o Rilascia qui un file',
            'manage'    => 'Gestisci i file dell\'entità',
        ],
        'errors'    => [
            'max'       => 'Hai raggiunto il numero massimo (:max) di file per questa entità.',
            'no_files'  => 'No File.',
        ],
        'files'     => 'File Caricati',
        'hints'     => [
            'limit'         => 'Ciascuna entità può avere un massimo di :max file caricati.',
            'limitations'   => 'Formati supportati: :formats. Dimensioni massime di file: :size.',
        ],
        'title'     => 'File dell\'entità :name',
    ],
    'filter'                    => 'Filtro',
    'filters'                   => [
        'all'                       => 'Filtra a tutti i discendenti',
        'clear'                     => 'Azzera i Filtri',
        'copy_helper'               => 'Utilizza i filtri copiati negli appunti come valori per i filtri dei widget della Pagina Principale e dei collegamenti rapidi.',
        'copy_helper_no_filters'    => 'Definisci prima alcuni filtri per poterli copiare negli appunti.',
        'copy_to_clipboard'         => 'Copia i filtri negli appunti',
        'direct'                    => 'Filtra ai discendenti diretti',
        'filtered'                  => 'Mostra :count di :total :entity.',
        'hide'                      => 'Nascondi Filtri',
        'lists'                     => [
            'desktop'   => [
                'all'       => 'Mostra tutti i discendenti (:count)',
                'filtered'  => 'Mostra discendenti diretti (:count)',
            ],
            'mobile'    => [
                'all'       => 'Mostra tutto (:count)',
                'filtered'  => 'Mostra diretti (:count)',
            ],
        ],
        'mobile'                    => [
            'clear' => 'Azzera',
            'copy'  => 'Appunti',
        ],
        'options'                   => [
            'children'  => 'Corrisponde a questo o ai suoi discendenti',
            'exclude'   => 'Non corrisponde',
            'hide'      => 'Nascondi',
            'include'   => 'Corrisponde',
            'none'      => 'Vuoto',
            'show'      => 'Mostra',
        ],
        'show'                      => 'Mostra Filtri',
        'sorting'                   => [
            'asc'       => ':field Crescente',
            'desc'      => ':field Decrescente',
            'helper'    => 'Controlla in che ordine appaiono i risultati.',
        ],
        'title'                     => 'Filtri Avanzati',
    ],
    'fix-this-issue'            => 'Risolvi questo problema',
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Aggiungi una data del calendario',
        ],
        'copy_options'  => 'Copia Opzioni',
    ],
    'helpers'                   => [
        'copy_options'  => 'Copia i seguenti elementi correlati alla fonte nella nuova entità.',
        'learn_more'    => 'Scopri di più riguardo alla funzione nella nostra :documentation.',
        'linking'       => 'Collega ad altre entità',
        'nested_parent' => 'Visualizzazione dei figli di :parent.',
        'pagination'    => [
            'settings'  => 'impostazioni dell\'aspetto',
            'text'      => 'Puoi mostrare più risultati per pagina cambiando le tue :settings',
        ],
    ],
    'hidden'                    => 'Nascosto',
    'hints'                     => [
        'attribute_template'    => 'Il modello di attributo selezionato verrà applicato quando salvi l\'entità.',
        'calendar_date'         => 'La data del calendario consente di filtrare facilmente gli elenchi e di mantenere un promemoria nel calendario selezionato.',
        'gallery_header'        => 'Se l\'entità non ha un\'intestazione, mostra invece un\'immagine dalla galleria della campagna.',
        'gallery_image'         => 'Se l\'entità non ha un\'immagine, mostra invece un\'immagine dalla galleria della campagna.',
        'header_image'          => 'L\'immagine viene posizionata sopra l\'entità. Per ottenere risultati migliori, utilizza un\'immagine ampia.',
        'image_limitations'     => 'Formati supportati: :formats. Dimensioni Massime del file: :size',
        'image_recommendation'  => 'Dimensioni raccomandate :width per :height px.',
        'is_star'               => 'Elementi appuntati appariranno nella panoramica della pagina dell\'entità.',
        'tooltip'               => 'Sostituisci il tooltip generato automaticamente con il seguente contenuto. Il codice HTML verrà eliminato, ma si potranno comunque citare altre entità utilizzando le menzioni avanzate.',
        'visibility'            => 'Impostare la visibilità agli amministratori significa che solamente i membri del ruolo "Amministratore" della campagna potranno visualizzarlo. Impostarlo a "Te stesso" significa che solo tu potrai vederlo.',
    ],
    'history'                   => [
        'created_clean'         => 'Creata da :name :date',
        'created_date_clean'    => 'Creata :date',
        'unknown'               => 'Sconosciuto',
        'updated_clean'         => 'Ultima modifica da parte di :name :date',
        'updated_date_clean'    => 'Ultima modifica :date',
        'view'                  => 'Visualizza il registro dell\'entità',
    ],
    'image'                     => [
        'error' => 'Non siamo riusciti a ottenere l\'immagine richiesta. Potrebbe essere che il sito web non ci permetta di scaricare l\'immagine (in genere per Squarespace e DeviantArt), oppure che il link non sia più valido. Assicurarsi inoltre che l\'immagine non sia più grande di :size.',
    ],
    'is_private'                => 'Questa entità è privata e visibile solamente ai membri del ruolo "Amministratore".',
    'keyboard-shortcut'         => 'Scorciatoia di tastiera :code',
    'legacy'                    => 'Eredità',
    'navigation'                => [
        'cancel'            => 'cancella',
        'or_cancel'         => 'o :cancel',
        'skip_to_content'   => 'Salta navigazione',
    ],
    'new_entity'                => [],
    'panels'                    => [],
    'permissions'               => [
        'action'            => 'Azione',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Consenti',
                'deny'      => 'Rifiuta',
                'ignore'    => 'Salta',
                'remove'    => 'Rimuovi',
            ],
            'bulk_entity'   => [
                'allow'     => 'Consenti',
                'deny'      => 'Rifiuta',
                'inherit'   => 'Eredita',
            ],
            'delete'        => 'Cancella',
            'edit'          => 'Modifica',
            'read'          => 'Leggi',
            'toggle'        => 'Attiva',
        ],
        'allowed'           => 'Consentito',
        'fields'            => [
            'member'    => 'Membro',
            'role'      => 'Ruolo',
        ],
        'helper'            => 'Utilizza questa interfaccia per rifinire e specificare quali utenti e ruoli possono interagire con questa entità. :allow',
        'helpers'           => [
            'setup' => 'Utilizza questa interfaccia per regolare con precisione il modo in cui i ruoli e gli utenti possono interagire con questa entità. :allow consente all\'utente o al ruolo di eseguire questa azione. :deny nega l\'azione. :inherit utilizza il ruolo dell\'utente o il permesso del ruolo principale. Un utente impostato su :allow è in grado di eseguire l\'azione, anche se il suo ruolo è impostato su :deny.',
        ],
        'inherited'         => 'Questo ruolo ha già impostato questa autorizzazione per questo tipo di entità.',
        'inherited_by'      => 'Questo utente fa parte del ruolo \':role\' che concede queste autorizzazioni su questo tipo di entità.',
        'success'           => 'Autorizzazioni salvate.',
        'title'             => 'Autorizzazioni',
        'too_many_members'  => 'Questa campagna ha troppi membri (>:number) per poterli mostrare tutti in questa interfaccia. Ti preghiamo di usare il tasto Permessi sulla pagine dell\'entità per poter verificare i permessi nel dettaglio.',
    ],
    'placeholders'              => [
        'ability'       => 'Seleziona un\'abilità',
        'calendar'      => 'Seleziona un calendario',
        'character'     => 'Seleziona un personaggio',
        'creature'      => 'Seleziona una creatura',
        'entity'        => 'Seleziona un\'entità',
        'entry'         => 'Usa @ seguito da tre lettere per menzionare altre entità di altre campagne.',
        'event'         => 'Seleziona un evento',
        'fallback'      => 'Seleziona un :module',
        'family'        => 'Seleziona una famiglia',
        'gallery_image' => 'Seleziona un\'immagine dalla galleria della campagna',
        'image_url'     => 'Carica invece un\'immagine da un URL',
        'item'          => 'Seleziona un oggetto',
        'journal'       => 'Seleziona un diario',
        'location'      => 'Seleziona un luogo',
        'map'           => 'Seleziona una mappa',
        'name'          => 'Nome dell\'entità',
        'note'          => 'Seleziona una nota',
        'organisation'  => 'Seleziona un\'organizzazione',
        'parent'        => 'Seleziona un genitore',
        'quest'         => 'Seleziona una missione',
        'race'          => 'Seleziona una stirpe',
        'tag'           => 'Seleziona un\'etichetta',
        'timeline'      => 'Seleziona una Linea Temporale',
        'user'          => 'Seleziona un utente',
    ],
    'relations'                 => [],
    'remove'                    => 'Rimuovi',
    'rename'                    => 'Rinomina',
    'save'                      => 'Salva',
    'save_and_close'            => 'Salva e Chiudi',
    'save_and_copy'             => 'Salva e Copia',
    'save_and_new'              => 'Salva e Crea Nuovo',
    'save_and_update'           => 'Salva e Modifica',
    'save_and_view'             => 'Salva e Visualizza',
    'search'                    => 'Cerca',
    'select'                    => 'Seleziona',
    'superboosted_campaigns'    => 'Campagne Superpotenziate',
    'tabs'                      => [
        'abilities'     => 'Abilità',
        'assets'        => 'Asset',
        'attributes'    => 'Attributi',
        'boost'         => 'Potenziamenti',
        'connections'   => 'Legami',
        'inventory'     => 'Inventario',
        'links'         => 'Link',
        'mentions'      => 'Menzioni',
        'overview'      => 'Panoramica',
        'permissions'   => 'Autorizzazioni',
        'premium'       => 'Premium',
        'profile'       => 'Profilo',
        'relations'     => 'Relazioni',
        'reminders'     => 'Promemoria',
        'story'         => 'Panoramica',
    ],
    'titles'                    => [
        'editing'   => 'Modifica :name',
        'new'       => 'Nuovo :module',
    ],
    'tooltips'                  => [
        'new_post'  => 'Aggiungi un nuovo post a questa entità',
    ],
    'update'                    => 'Modifica',
    'users'                     => [
        'unknown'   => 'Sconosciuto',
    ],
    'view'                      => 'Visualizza',
    'visibilities'              => [
        'admin'         => 'Amministratori',
        'admin-self'    => 'Te Stesso e Amministratori',
        'all'           => 'Tutto',
        'members'       => 'Membri della campagna',
        'self'          => 'Te Stesso',
    ],
];

<?php

return [
    'actions'                   => [
        'actions'           => 'Acciones',
        'apply'             => 'Aplicar',
        'back'              => 'Atrás',
        'change'            => 'Cambiar',
        'copy'              => 'Copiar',
        'copy_mention'      => 'Copiar mención [ ]',
        'copy_to_campaign'  => 'Copiar a campaña',
        'disable'           => 'Desactivar',
        'enable'            => 'Activar',
        'explore_view'      => 'Vista anidada',
        'export'            => 'Exportar',
        'find_out_more'     => 'Saber más',
        'go_to'             => 'Ir a :name',
        'help'              => 'Ayuda',
        'json-export'       => 'Exportar (JSON)',
        'manage_links'      => 'Configurar enlaces',
        'move'              => 'Mover',
        'new'               => 'Nuevo',
        'new_child'         => 'Nuevo hijo',
        'new_post'          => 'Nuevo artículo',
        'next'              => 'Siguiente',
        'open'              => 'Abrir',
        'print'             => 'Imprimir',
        'reorder'           => 'Reordenar',
        'reset'             => 'Restablecer',
        'transform'         => 'Transformar',
    ],
    'add'                       => 'Añadir',
    'alerts'                    => [
        'copy_attribute'    => 'Se ha copiado la mención del atributo al portapapeles.',
        'copy_invite'       => 'El enlace de invitación a la campaña se ha copiado en el portapapeles.',
        'copy_mention'      => 'La mención avanzada de la entidad se ha copiado al portapapeles.',
    ],
    'bulk'                      => [
        'actions'       => [
            'edit'          => 'Editar y etiquetar en lote',
            'permissions'   => 'Cambiar permisos',
            'templates'     => 'Aplicar plantilla de atributos',
        ],
        'age'           => [
            'helper'    => 'Puedes usar + y - antes del número para modificar la edad.',
        ],
        'buttons'       => [
            'label' => 'Para la selección',
        ],
        'delete'        => [
            'warning'   => '¿Seguro que quieres eliminar las entidades seleccionadas?',
        ],
        'edit'          => [
            'tagging'   => 'Acción para las etiquetas',
            'tags'      => [
                'add'       => 'Añadir',
                'remove'    => 'Eliminar',
            ],
            'title'     => 'Edición múltiple',
        ],
        'errors'        => [
            'admin'     => 'Solamente los administradores de la campaña pueden cambiar el estatus privado de las entidades.',
            'general'   => 'Ha habido un error al procesar la acción. Vuelve a intentarlo o contáctanos si el problema persiste. Mensaje de error: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Ignorar',
            ],
            'helpers'   => [
                'override'  => 'Si está seleccionado, los permisos de las entidades seleccionadas serán ignorados y usarán estos ajustes en su lugar. Si no está seleccionado, estos permisos se añadirán a los existentes.',
            ],
            'title'     => 'Cambiar permisos a varias entidades',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count entidad copiada a :campaign.|[2,*] :count entidades copiadas a :campaign.',
            'editing'           => '{1} Se ha actualizado :count entidad .|[2,*] Se han actualizado :count entidades.',
            'editing_partial'   => 'Se ha actualizado {1} :count/:total entidad.|Se han actualizado [2,*] :count/:total entidades.',
            'permissions'       => '{1} Permisos cambiados en :count entidad.|[2,*] Permisos cambiados en :count entidades.',
            'private'           => '{1} Ahora :count entidad es privada.|[2,*] Ahora :count entidades son privadas.',
            'public'            => '{1} Ahora :count entidad es visible|[2,*] Ahora :count son visibles.',
            'templates'         => '{1} Se ha aplicado la plantilla a :count entidad.|[2,*] Se ha aplicado la plantilla a :count entidades.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Aplicar una plantilla a varias entidades',
    ],
    'cancel'                    => 'Cancelar',
    'click_modal'               => [
        'close'     => 'Cerrar',
        'confirm'   => 'Confirmar',
        'title'     => 'Confirmar acción',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Copiar entidades a otra campaña',
        'panel'         => 'Copiar',
        'title'         => 'Copiar ":name" a otra campaña',
    ],
    'create'                    => 'Crear',
    'datagrid'                  => [
        'empty' => 'Aún no hay nada que mostrar.',
    ],
    'delete_modal'              => [
        'callout'           => '¡Pssst!',
        'close'             => 'Cerrar',
        'confirm'           => 'Confirmar eliminación',
        'delete'            => 'Eliminar',
        'description_v2'    => 'Estás eliminando ":tag".',
        'permanent'         => 'Esta acción es permanente.',
        'recoverable'       => 'Las entidades pueden recuperarse durante un máximo de :día días con una campaña :boosted.',
        'title'             => 'Eliminar',
    ],
    'destroy_many'              => [
        'success'   => '{1} Se ha eliminado :count entidad .|[2,*] Se han eliminado :count entidades.',
    ],
    'edit'                      => 'Editar',
    'errors'                    => [
        'boosted'                       => 'Esta función solo está disponible para las campañas mejoradas.',
        'boosted_campaigns'             => 'Esta funcionalidad solo está disponible para las :boosted.',
        'invalid_node'                  => 'El padre seleccionado no es válido. Esto puede solucionarse dando al padre seleccionado un padre propio y eliminándolo.',
        'node_must_not_be_a_descendant' => 'Nodo inválido (etiqueta, localización superior): sería un descendiente de sí mismo.',
        'unavailable_feature'           => 'Funcionalidad no disponible',
    ],
    'events'                    => [],
    'fields'                    => [
        'calendar_date'     => 'Fecha del calendario',
        'child'             => 'Hijo',
        'closed'            => 'Cerrado',
        'colour'            => 'Color',
        'copy_abilities'    => 'Copiar habilidades',
        'copy_attributes'   => 'Copiar atributos',
        'copy_inventory'    => 'Copiar inventario',
        'copy_links'        => 'Copiar notas de entidad',
        'copy_permissions'  => 'Copiar permisos (esto anulará los valores que hayas configurado en la pestaña de permisos)',
        'copy_posts'        => 'Copiar publicaciones (esto incluye los permisos de cada publicación)',
        'creator'           => 'Creador',
        'date_range'        => 'Rango de fechas',
        'entity'            => 'Entidad',
        'entity_type'       => 'Tipo de entidad',
        'entry'             => 'Entrada',
        'excerpt'           => 'Extracto',
        'files'             => 'Archivos',
        'gallery_header'    => 'Cabecera de la galería',
        'gallery_image'     => 'Imagen de la galería',
        'has_attributes'    => 'Tiene atributos',
        'has_entity_files'  => 'Tiene archivos',
        'has_image'         => 'Tiene imagen',
        'has_posts'         => 'Tiene artículos',
        'header_image'      => 'Imagen de cabecera',
        'image'             => 'Imagen',
        'is_closed'         => 'La conversación se cerrará y no aceptará más mensajes nuevos.',
        'is_private'        => 'Privado',
        'is_private_v3'     => 'Muestra esto solo a miembros del rol :admin-role. Esto anula cualquier otro permiso.',
        'is_star'           => 'Fijada',
        'locations'         => ':first en :second',
        'name'              => 'Nombre',
        'parent'            => 'Padre',
        'position'          => 'Posición',
        'privacy'           => 'Privacidad',
        'replace_mentions'  => 'Sustituir las menciones de atributos de la entrada por las de la nueva entidad.',
        'template'          => 'Plantilla',
        'tooltip'           => 'Descripción emergente',
        'type'              => 'Tipo',
        'visibility'        => 'Visibilidad',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Haz clic para añadir o arrastra un archivo',
            'manage'    => 'Administrar archivos de la entidad',
        ],
        'errors'    => [
            'max'       => 'Has alcanzado el número máximo (:max) de archivos para esta entidad.',
            'no_files'  => 'No hay archivos.',
        ],
        'files'     => 'Archivos subidos',
        'hints'     => [
            'limit'         => 'Cada entidad puede tener un máximo de :max archivos.',
            'limitations'   => 'Formatos soportados: jpg, png, gif y pdf. Tamaño máximo de archivo: :size',
        ],
        'title'     => 'Archivos de :name',
    ],
    'filter'                    => 'Filtrar',
    'filters'                   => [
        'all'                       => 'Mostrar todos los descendientes',
        'clear'                     => 'Quitar filtros',
        'copy_helper'               => 'Usa los filtros copiados en el portapapeles para filtrar los widgets del tablero y los accesos directos.',
        'copy_helper_no_filters'    => 'Define algún filtro primero para poder copiarlos al portapapeles.',
        'copy_to_clipboard'         => 'Copiar filtros',
        'direct'                    => 'Filtrar solo los descendientes directos',
        'filtered'                  => 'Mostrando :count de :total :entity.',
        'hide'                      => 'Ocultar filtros',
        'lists'                     => [
            'desktop'   => [
                'all'       => 'Mostrar todos los descendientes (:count)',
                'filtered'  => 'Mostrar los descendientes directos (:count)',
            ],
            'mobile'    => [
                'all'       => 'Mostrar todos (:count)',
                'filtered'  => 'Mostrar directos (:count)',
            ],
        ],
        'mobile'                    => [
            'clear' => 'Quitar',
            'copy'  => 'Portapapeles',
        ],
        'options'                   => [
            'children'  => 'Coincide con éste o sus descendientes',
            'exclude'   => 'Excluir',
            'hide'      => 'Ocultar',
            'include'   => 'Incluir',
            'none'      => 'Nada',
            'show'      => 'Mostrar',
        ],
        'show'                      => 'Mostrar filtros',
        'sorting'                   => [
            'asc'       => 'Ascendiente por :field',
            'desc'      => 'Descendiente por :field',
            'helper'    => 'Controla en qué orden aparecen los resultados.',
        ],
        'title'                     => 'Filtros',
    ],
    'fix-this-issue'            => 'Arreglar este problema',
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Añadir fecha de calendario',
        ],
        'copy_options'  => 'Opciones de copia',
    ],
    'helpers'                   => [
        'copy_options'  => 'Copia los siguientes elementos relacionados del origen a la nueva entidad.',
        'learn_more'    => 'Obtenga más información sobre esta función en nuestra :documentation.',
        'linking'       => 'Vinculando con otras entidades',
        'nested_parent' => 'Mostrando los hijos de :parent.',
        'pagination'    => [
            'settings'  => 'ajustes de apariencia',
            'text'      => 'Se pueden mostrar más resultados por página cambiando la :settings.',
        ],
    ],
    'hidden'                    => 'Oculto',
    'hints'                     => [
        'attribute_template'    => 'Aplica una plantilla de atributos directamente al crear esta entidad.',
        'calendar_date'         => 'Las fechas de calendario hacen que sea más fácil filtrar las listas, y también fijan los eventos al calendario seleccionado.',
        'gallery_header'        => 'Si la entidad no tiene cabecera, muestra una imagen de la galería en su lugar.',
        'gallery_image'         => 'Si la entidad no tiene imagen, muestra una imagen de la galería en su lugar.',
        'header_image'          => 'Esta imagen está situada sobre la entidad. Para obtener mejores resultados, usa una imagen apaisada.',
        'image_limitations'     => 'Formatos soportados: :formats. Tamaño máximo del archivo: :size.',
        'image_recommendation'  => 'Dimensiones recomendadas: :width por :height px.',
        'is_star'               => 'Los elementos fijados aparecerán en el menú principal de la entidad.',
        'tooltip'               => 'Reemplaza la descripción emergente automática con el siguiente contenido.',
        'visibility'            => 'Al seleccionar "Administrador", solo los miembros con el rol de administrador podrán ver esto. "Solo yo" significa que solo tú puedes ver esto.',
    ],
    'history'                   => [
        'created_clean'         => 'Creado por :name el :date',
        'created_date_clean'    => 'Creado el :date',
        'unknown'               => 'Desconocido',
        'updated_clean'         => 'Última modificación por :name el :date',
        'updated_date_clean'    => 'Última modificación el :date',
        'view'                  => 'Historial de cambios de la entidad',
    ],
    'image'                     => [
        'error' => 'No hemos podido obtener la imagen. Puede que la página web no nos permita descargarla (típico de Squarespace o DeviantArt), o que el enlace ya no sea válido. Asegúrate también de que la imagen no supera los :size.',
    ],
    'is_private'                => 'Esta entidad es privada y solo pueden verla los administradores.',
    'keyboard-shortcut'         => 'Atajo de teclado :code',
    'legacy'                    => 'Obsoleto',
    'move'                      => [],
    'navigation'                => [
        'cancel'            => 'cancelar',
        'or_cancel'         => 'o :cancel',
        'skip_to_content'   => 'Saltar navegación',
    ],
    'new_entity'                => [],
    'panels'                    => [],
    'permissions'               => [
        'action'            => 'Acción',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Permitir',
                'deny'      => 'Denegar',
                'ignore'    => 'Ignorar',
                'remove'    => 'Quitar',
            ],
            'bulk_entity'   => [
                'allow'     => 'Permitir',
                'deny'      => 'Denegar',
                'inherit'   => 'Heredar',
            ],
            'delete'        => 'Eliminar',
            'edit'          => 'Editar',
            'read'          => 'Leer',
            'toggle'        => 'Cambiar',
        ],
        'allowed'           => 'Permitido',
        'fields'            => [
            'member'    => 'Miembro',
            'role'      => 'Rol',
        ],
        'helper'            => 'Desde aquí puedes afinar qué usuarios y roles pueden interactuar con esta entidad.',
        'helpers'           => [
            'setup' => 'Desde aquí puedes afinar cómo los diferentes roles y usuarios pueden interactuar con esta entidad. :allow les permitirá hacer dicha acción; :deny se la denegará, y :inherit usará el permiso que ya tenga el rol o usuario. Un usuario con una acción puesta en :allow podrá hacerla, aunque su rol esté en :deny.',
        ],
        'inherited'         => 'Este rol ya tiene este permiso en esta entidad.',
        'inherited_by'      => 'Este usuario forma parte del rol ":role", que le otorga este permiso en esta entidad.',
        'success'           => 'Permisos guardados.',
        'title'             => 'Permisos',
        'too_many_members'  => 'Esta campaña tiene demasiados miembros (>10) para poder mostrarlos todos aquí. Usa el botón de permisos en la vista de entidad para controlar los permisos detalladamente.',
    ],
    'placeholders'              => [
        'ability'       => 'Escoge una habilidad',
        'calendar'      => 'Escoge un calendario',
        'character'     => 'Escoge un personaje',
        'creature'      => 'Elige una criatura',
        'entity'        => 'Entidad',
        'entry'         => 'Utiliza @ seguido de tres letras para mencionar otras entidades de la campaña.',
        'event'         => 'Elige un evento',
        'fallback'      => 'Elija :módulo',
        'family'        => 'Elige una familia',
        'gallery_image' => 'Elige una imagen de la galería de la campaña',
        'image_url'     => 'Puedes subir una imagen desde una URL',
        'item'          => 'Elige un objeto',
        'journal'       => 'Elige un diario',
        'location'      => 'Elige una localización',
        'map'           => 'Elige un mapa',
        'multiple'      => 'Elije uno o varios',
        'name'          => 'Nombre de la entidad',
        'note'          => 'Elige una nota',
        'organisation'  => 'Elige una organización',
        'parent'        => 'Elija un padre',
        'quest'         => 'Elige una misión',
        'race'          => 'Elige una raza',
        'tag'           => 'Elige una etiqueta',
        'timeline'      => 'Elige una línea de tiempo',
        'user'          => 'Elija un usuario',
    ],
    'relations'                 => [],
    'remove'                    => 'Eliminar',
    'rename'                    => 'Renombrar',
    'save'                      => 'Guardar',
    'save_and_close'            => 'Guardar y cerrar',
    'save_and_copy'             => 'Guardar y copiar',
    'save_and_new'              => 'Guardar y crear nuevo',
    'save_and_update'           => 'Guardar y seguir editando',
    'save_and_view'             => 'Guardar y ver',
    'search'                    => 'Buscar',
    'select'                    => 'Seleccionar',
    'superboosted_campaigns'    => 'Campañas supermejoradas',
    'tabs'                      => [
        'abilities'     => 'Habilidades',
        'assets'        => 'Archivos',
        'attributes'    => 'Atributos',
        'boost'         => 'Mejorar',
        'connections'   => 'Relaciones',
        'inventory'     => 'Inventario',
        'links'         => 'Enlaces',
        'mentions'      => 'Menciones',
        'overview'      => 'Resumen',
        'permissions'   => 'Permisos',
        'premium'       => 'Premium',
        'profile'       => 'Perfil',
        'relations'     => 'Relaciones',
        'reminders'     => 'Recordatorios',
        'story'         => 'Historia',
    ],
    'titles'                    => [
        'editing'   => 'Editando :name',
        'new'       => 'Nuevo :module',
    ],
    'tooltips'                  => [
        'new_post'  => 'Añadir un post a esta entidad.',
    ],
    'update'                    => 'Actualizar',
    'users'                     => [
        'unknown'   => 'Desconocido',
    ],
    'view'                      => 'Ver',
    'visibilities'              => [
        'admin'         => 'Admin',
        'admin-self'    => 'Yo + Admin',
        'all'           => 'Todos',
        'members'       => 'Miembros',
        'self'          => 'Solo yo',
    ],
];

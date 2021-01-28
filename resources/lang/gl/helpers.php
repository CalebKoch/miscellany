<?php

return [
    'age'           => [
        'description'   => 'Podes ligar unha personaxe a un calendario da campaña dende a lapela Lembretes na páxina da personaxe. Dende aí, engade un novo lembrete e establece o tipo como Nacemento ou Morte para que a idade da personaxe sexa calculada automaticamente. Se tanto o nacemento como a morte están presentes, ámbalas dúas serán mostradas, así como a idade no momento da morte. Se só está establecido o nacemento, mostraranse a data e a idade actual. Se só está establecida a morte, mostraranse a data e os anos que pasaron dende a súa morte.',
        'title'         => 'Idade e Morte da personaxe',
    ],
    'attributes'    => [
        'con'           => 'Con',
        'description'   => 'Usa atributos para representar valores non textuais asociados a unha entidade. Podes referenciar entidades dentro de atributos usando a sintaxe de mencións avanzadas :mention. Tamén podes referenciar outros atributos usando a sintaxe :attribute.',
        'level'         => 'Nivel',
        'link'          => 'Opcións de atributos',
        'math'          => 'Tamén podes usar matemáticas básicas. Por exemplo, :example multiplicaría os atributos :level e :con desta entidade. Se queres arredondar cara arriba ou cara abaixo, podes usar :ceil ou :floor respectivamente.',
        'title'         => 'Atributos',
    ],
    'dice'          => [
        'description'               => 'As tiradas de dados xenéricas pódense realizar escrebendo "d20", "4d4+4", "d%" para percentiles e "df" para dados "fudge".',
        'description_attributes'    => 'Tamén é posíbel obter un atributo dunha personaxe usando a sintaxe {character.nome_do_atributo}. Por exemplo, {character.nivel}d6+{character.sabiduria}.',
        'more'                      => 'Podes ver todas as opcións dispoñíbeis na páxina da extensión de tiradas de dados.',
        'title'                     => 'Tiradas de dados',
    ],
    'filters'       => [
        'description'   => 'Podes usar filtros para limitar o número de resultados que se mostran nas listas. Os campos de texto ofrecen opcións variadas para controlar en detalle o que é excluído polo filtro.',
        'empty'         => 'Escrebendo :tag nun campo buscará todas as entidades nas que ese campo está baleiro.',
        'ending_with'   => 'Colocando :tag ao final do texto, podes buscar todas as entidades que conteñen exactamente ese texto nese campo.',
        'multiple'      => 'Podes combinar opcións de búsqueda nos campos de texto escrebendo :syntax. Por exemplo, :example.',
        'session'       => 'Os filtros e as columnas ordenadas que definas nunha lista de entidades son guardadas na túa sesión, polo que namentres non te desconectes, non necesitas volver configuralos en cada páxina.',
        'starting_with' => 'Colocando :tag antes do texto, podes buscar calquera entidade que non conteña ese texto nese campo.',
        'title'         => 'Como usar os filtros',
    ],
    'link'          => [
        'attributes'        => 'Podes referenciar os atributos dunha entidade escrebendo :code. Isto só funciona para os atributos existentes da entidade.',
        'auto_update'       => 'As ligazóns a outras entidades serán actualizadas automaticamente cando o nome ou a descrición da entidade obxetivo cambie.',
        'description'       => 'Podes crea ligazóns a outras entidades facilmente usando os seguintes atallos.',
        'formatting'        => [
            'text'  => 'A lista de etiquetas e atributos HTML permitidas pode atoparse no noso :github.',
            'title' => 'Formatación',
        ],
        'friendly_mentions' => 'Crea ligazóns a outras entidades escrebendo :code e os primeiros caracteres dunha entidade para buscala. Isto insertará :example no editor de texto, e mostrarase como unha ligazón á entidade.',
        'limitations'       => 'Ten en conta que, debido a limitacións técnicas, estes atallos non funcionan en dispositivos móbiles Android, a menos que se esté usando o novo editor Summernote. Podes cambiar o teu editor en nas opcións de Deseño.',
        'mentions'          => 'Crea ligazóns a outras entidades escrebendo :code e os primeiros caracteres dunha entidade para buscala. Isto insertará :example no editor de texto. Para personalizar o nome co que se mostra a ligazón á entidade, podes escreber :example_name. Para establecer a subpáxina da entidade á que estás ligando, usa :example_page. Para establecer a lapela, usa :esample_tab.',
        'months'            => 'Escrebe :code para obter unha lista dos meses dos teus calendarios.',
        'title'             => 'Crear ligazóns a outras entidades e atallos.',
    ],
    'map'           => [
        'description'   => 'Subir un mapa a un Lugar habilitará o menú "Mapa" na páxina do Lugar, e unha ligazón directa ao mapa dende a páxina Lugares da campaña. Dende a vista de mapa, quen teña permisos de edición no Lugar poden activar o "Modo de edición", o cal lles permite colocar Puntos no mapa. Estes Puntos poden ligar a outras entidades ou ser simplemente etiquetas, e ter diferentes formas e tamaños.',
        'private'       => 'Un mapa pode ser marcado como privado pola administración da campaña. Isto permitirá ao resto de integrantes da campaña ver un Lugar, pero manter o mapa segredo.',
        'title'         => 'Mapas de Lugares',
    ],
    'public'        => 'Aprende máis sobre campañas públicas vendo o vídeo tutorial en Youtube.',
    'title'         => 'Consellos',
];

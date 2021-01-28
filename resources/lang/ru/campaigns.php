<?php

return [
    'create'                            => [
        'description'           => 'Создание новой кампании',
        'helper'                => [
            'title'     => 'Добро пожаловать в :name!',
            'welcome'   => <<<'TEXT'
Прежде чем продолжить, нужно дать название вашей кампании. Это будет названием вашего мира. Если у вас пока нет подходящего имени, не волнуйтесь, у вас всегда будет возможность его изменить, или создать еще несколько кампаний.

Спасибо, что присоединились к Kanka и добро пожаловать в наше быстро растущее сообщество!
TEXT
,
        ],
        'success'               => 'Кампания создана',
        'success_first_time'    => 'Ваша кампания создана! Так как это ваша первая кампания, мы сделали пару вещей, чтобы помочь вам начать. Мы надеемся немного вдохновить вас, показав, что вы можете сделать с помощью Kanka.',
        'title'                 => 'Новая кампания',
    ],
    'destroy'                           => [
        'success'   => 'Кампания удалена',
    ],
    'edit'                              => [
        'description'   => 'Редактирование вашей кампании',
        'success'       => 'Кампания обновлена',
        'title'         => 'Редактирование кампании :campaign',
    ],
    'entity_note_visibility'            => [
        'pinned'    => 'Закреплять новые заметки объектов',
    ],
    'entity_personality_visibilities'   => [
        'private'   => 'Скрывать личные качества новых персонажей по умолчанию',
    ],
    'entity_visibilities'               => [
        'private'   => 'Скрывать новые объекты по умолчанию',
    ],
    'errors'                            => [
        'access'        => 'У вас нет доступа к этой кампании.',
        'superboosted'  => 'Эта функция доступна только для супер-усиленных кампаний.',
        'unknown_id'    => 'Неизвестная кампания.',
    ],
    'export'                            => [
        'description'   => 'Экспорт кампании',
        'errors'        => [
            'limit' => 'Вы не можете делать больше одного экспорта в день. Пожалуйста, повторите попытку завтра.',
        ],
        'helper'        => 'Экспортируйте вашу кампанию. Вы получите уведомление с ссылкой на скачивание.',
        'success'       => 'Идет подготовка к экспорту вашей кампании. Вы получите уведомление Kanka со скачиваемым ZIP файлом, как только все будет готово.',
        'title'         => 'Экспорт кампании :name',
    ],
    'fields'                            => [
        'boosted'                       => 'Усилена участником',
        'css'                           => 'CSS',
        'description'                   => 'Описание',
        'entity_count'                  => 'Количество объектов',
        'entity_note_visibility'        => 'Закрепление новых заметок объектов',
        'entity_personality_visibility' => 'Скрытие личных качеств персонажей',
        'entity_visibility'             => 'Скрытие новых объектов',
        'excerpt'                       => 'Краткое описание',
        'followers'                     => 'Последователи',
        'header_image'                  => 'Изображение заголовка',
        'hide_history'                  => 'Скрыть историю объектов',
        'hide_members'                  => 'Скрыть участников кампании',
        'image'                         => 'Изображение',
        'locale'                        => 'Язык',
        'name'                          => 'Название',
        'public_campaign_filters'       => 'Фильтры для открытых кампаний',
        'related_visibility'            => 'Доступ связанных элементов',
        'rpg_system'                    => 'Ролевые системы',
        'system'                        => 'Система',
        'theme'                         => 'Тема',
        'tooltip_family'                => 'Не показывать в подсказках названия семей',
        'tooltip_image'                 => 'Показывать в подсказках изображения объектов',
        'visibility'                    => 'Доступ',
    ],
    'following'                         => 'Следующий',
    'helpers'                           => [
        'boost_required'                => 'Эта функция требует усиления кампании. Больше информации здесь: :settings.',
        'boosted'                       => 'Так как эта кампания усилена, ей открылись некоторые функции. Подробннее здесь: :settings.',
        'css'                           => 'Напишите здесь свой код на CSS. Он будет использоваться на страницах вашей кампании. Пожалуйста, обратите внимание, что любое злоупотребление этой функцией может привести к удалению вашего CSS. Повторяющиеся или серьезные нарушения могут привести к удалению вашей кампании.',
        'entity_note_visibility'        => 'При создании новой заметки объекта опция "Закрепить" будет автоматически включена.',
        'entity_personality_visibility' => 'При создании нового персонажа, опция "Показывать личные качества" будет автоматически отключена.',
        'entity_visibility'             => 'При создании нового объекта опция "Скрыть объект" будет автоматически включена.',
        'excerpt'                       => 'Краткое описание будет показано в обзоре кампании. Напишите пару предложений, знакомящих с вашим миром. Чем короче, тем лучше.',
        'hide_history'                  => 'Включите это, чтобы скрыть историю объектов для всех участников кампании кроме админов.',
        'hide_members'                  => 'Включите это, чтобы скрыть список участников кампании для всех участников кроме админов.',
        'locale'                        => 'Язык, на котором написана ваша кампания. Это нужно для генерации контента и группирования открытых кампаний.',
        'name'                          => 'В названии кампании или мира должно быть не меньше 4 букв или цифр.',
        'public_campaign_filters'       => 'Помогите другим найти эту кампанию среди других открытых кампаний. Для этого заполните следующую информацию.',
        'related_visibility'            => 'Настройка доступа по умолчанию для новых элементов с полем "Доступ" (заметки объектов, связи, способности и т.д.)',
        'system'                        => 'Если ваша кампания открытая, то система будет показана здесь: :link.',
        'systems'                       => 'Чтобы вы не запутались в разделах кампании, некоторые функции Kanka (статблок монстра D&D 5 ред.) доступны только определенным ролевым системам. Добавьте сюда поддерживаемые системы, чтобы открыть эти функции.',
        'theme'                         => 'Установите тему кампании, не зависящую от предпочтений пользователя.',
        'view_public'                   => 'Чтобы увидеть вашу кампанию, как ее видит посетитель, откройте следующую ссылку в режиме инкогнито: :link.',
        'visibility'                    => 'Открытую кампанию может просматривать любой, у кого есть ссылка на нее.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Новая кампания',
            ],
        ],
        'title'     => 'Кампания',
    ],
    'invites'                           => [
        'actions'               => [
            'add'   => 'Пригласить',
            'copy'  => 'Скопировать ссылку в буфер обмена',
            'link'  => 'Новая ссылка',
        ],
        'create'                => [
            'button'        => 'Пригласить',
            'description'   => 'Приглашение друга в вашу кампанию',
            'link'          => 'Ссылка создана: <a href=":url" target="_blank">:url</a>',
            'success'       => 'Приглашение отправлено',
            'title'         => 'Приглашение в вашу кампанию',
        ],
        'destroy'               => [
            'success'   => 'Приглашение удалено',
        ],
        'email'                 => [
            'link'      => '<a href=":link">Присоединиться к кампании :name</a>',
            'subject'   => ':name приглашает вас в свою кампанию :campaign на kanka.io! Чтобы принять приглашение, перейдите по следующей ссылке.',
            'title'     => 'Приглашение от пользователя :name',
        ],
        'error'                 => [
            'already_member'    => 'Вы уже являетесь участником этой кампании.',
            'inactive_token'    => 'Этот токен уже используется или эта кампания больше не существует.',
            'invalid_token'     => 'Этот токен больше не действителен.',
            'login'             => 'Пожалуйста, войдите или зарегистрируйтесь, чтобы присоединиться к этой кампании.',
        ],
        'fields'                => [
            'created'   => 'Отправлено',
            'email'     => 'Почта',
            'role'      => 'Роль',
            'type'      => 'Тип',
            'validity'  => 'Переходы',
        ],
        'helpers'               => [
            'email'     => 'Наши письма часто помечаются как спам. Может пройти несколько часов, прежде чем они появятся во входящих сообщениях.',
            'validity'  => 'Число пользователей, которые могут перейти по вашей ссылке, прежде чем она будет отключена. Оставьте пустым для неограниченного числа переходов.',
        ],
        'placeholders'          => [
            'email' => 'Адрес электронной почты того, кого вы хотите пригласить',
        ],
        'types'                 => [
            'email' => 'Электронная почта',
            'link'  => 'Ссылка',
        ],
        'unlimited_validity'    => 'Не ограничены',
    ],
    'leave'                             => [
        'confirm'   => 'Вы уверены, что хотите покинуть кампанию :name? Вы не сможете получить к ней доступ, если вас снова не пригласит ее админ.',
        'error'     => 'Невозможно покинуть кампанию.',
        'success'   => 'Вы покинули кампанию',
    ],
    'members'                           => [
        'actions'               => [
            'switch'        => 'Тестировать',
            'switch-back'   => 'Конец тестирования',
        ],
        'create'                => [
            'title' => 'Добавление участника кампанию',
        ],
        'description'           => 'Управление участниками кампании',
        'edit'                  => [
            'description'   => 'Редактирование участника кампании',
            'title'         => 'Редактирование участника :name',
        ],
        'fields'                => [
            'joined'        => 'Присоединился',
            'last_login'    => 'Заходил',
            'name'          => 'Пользователь',
            'role'          => 'Роль',
            'roles'         => 'Роли',
        ],
        'help'                  => 'Участников в кампании может быть сколько угодно.',
        'helpers'               => [
            'admin' => 'Вы, как участник роли "Админ", можете приглашать новых пользователей, удалять неактивных и изменять их разрешения. Используйте кнопку "Тестировать", чтобы проверить разрешения пользователя. Можете прочесть об этом больше здесь: :link.',
            'switch'=> 'Тестировать этого пользователя',
        ],
        'impersonating'         => [
            'message'   => 'Вы просматриваете кампанию как другой пользователь. Некоторые функции отключены, но остальные выглядят именно так, как их видит этот пользователь. Чтобы выйти из тестирования, нажмите кнопку "Конец тестирования" на том месте, где обычно находится кнопка выхода.',
            'title'     => 'Тестирование :name',
        ],
        'invite'                => [
            'description'   => 'Вы можете приглашать друзей в вашу кампанию, отправив им пригласительную ссылку. После принятия приглашения, они будут добавлены в кампанию как участники предложенной им роли. Вы также можете отправить приглашение по электронной почте.',
            'more'          => 'Вы можете добавить больше ролей здесь: :link.',
            'roles_page'    => 'Страница ролей',
            'title'         => 'Приглашения',
        ],
        'roles'                 => [
            'member'    => 'Участник',
            'owner'     => 'Админ',
            'player'    => 'Игрок',
            'public'    => 'Посетитель',
            'viewer'    => 'Наблюдатель',
        ],
        'switch_back_success'   => 'Теперь вы снова просматриваете кампанию от своего лица',
        'title'                 => 'Участники кампании :name',
        'your_role'             => 'Ваша роль: <i>:role</i>',
    ],
    'panels'                            => [
        'boosted'   => 'Усиление',
        'dashboard' => 'Обзор',
        'permission'=> 'Разрешения',
        'sharing'   => 'Доступность',
        'systems'   => 'Системы',
        'ui'        => 'Интерфейс',
    ],
    'placeholders'                      => [
        'description'   => 'Небольшой рассказ о вашей кампании',
        'locale'        => 'Код языка',
        'name'          => 'Название вашей кампании',
        'system'        => 'D&D, Pathfinder, Fate, DSA',
    ],
    'roles'                             => [
        'actions'       => [
            'add'   => 'Добавить роль',
        ],
        'create'        => [
            'success'   => 'Роль создана',
            'title'     => 'Создание новой роли для :name',
        ],
        'description'   => 'Управление ролями кампании',
        'destroy'       => [
            'success'   => 'Роль удалена',
        ],
        'edit'          => [
            'success'   => 'Роль обновлена',
            'title'     => 'Редактирование роли :name',
        ],
        'fields'        => [
            'name'          => 'Название',
            'permissions'   => 'Разрешения',
            'type'          => 'Тип',
            'users'         => 'Пользователи',
        ],
        'helper'        => [
            '1' => 'Ролей в кампании может быть сколько угодно. Роль "Админ" автоматически дает доступ ко всему, что есть в кампании. Остальным ролям можно задать отдельные разрешения для каждого типа объектов, например для персонажей, локаций и т. п.',
            '2' => 'Объектам можно задать больше разрешений, открыв вкладку "Разрешения" при редактировании объекта. Эта вкладка отображается, если в кампании есть несколько ролей или участников.',
            '3' => 'Можно либо последовать "принципу исключений", открыв ролям доступ ко всем объектам, и использовать функцию "Скрыть объект", чтобы спрятать некоторые объекты, либо не давать ролям много разрешений, но сделать каждый объект видимым.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'У роли "Посетитель" есть разрешения, хотя это закрытая кампания. Это можно изменить во вкладке "Доступность" при редактировании кампании.',
            'public'                => 'Роль "Посетитель" используется, когда кто-то просматривает вашу открытую кампанию. :more',
            'role_permissions'      => 'Выберите действия, к которым будет иметь доступ роль ":name", для каждого типа объектов.',
        ],
        'members'       => 'Участники',
        'permissions'   => [
            'actions'   => [
                'add'           => 'Создать',
                'dashboard'     => 'Обзор',
                'delete'        => 'Удалить',
                'edit'          => 'Изменить',
                'entity-note'   => 'Заметки',
                'manage'        => 'Управление',
                'members'       => 'Участники',
                'permission'    => 'Разрешения',
                'read'          => 'Смотреть',
                'toggle'        => 'Изменить для всех',
            ],
            'helpers'   => [
                'entity_note'   => 'Позволяет пользователям без разрешения на редактирование объекта добавлять к нему заметки.',
            ],
            'hint'      => 'Эта роль автоматически дает доступ ко всему.',
        ],
        'placeholders'  => [
            'name'  => 'Название роли',
        ],
        'show'          => [
            'description'   => 'Участники и разрешения одной из ролей кампании',
            'title'         => 'Роль ":role"',
        ],
        'title'         => 'Роли кампании :name',
        'types'         => [
            'owner'     => 'Админ',
            'public'    => 'Посетитель',
            'standard'  => 'Обычный',
        ],
        'users'         => [
            'actions'   => [
                'add'   => 'Добавить участника',
            ],
            'create'    => [
                'success'   => 'Пользователь добавлен в роль',
                'title'     => 'Добавление участника в роль ":name"',
            ],
            'destroy'   => [
                'success'   => 'Пользователь удален из роли',
            ],
            'fields'    => [
                'name'  => 'Имя',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Подключить',
        ],
        'boosted'       => 'Эта функция находится в раннем доступе и пока доступна только для :boosted.',
        'description'   => 'Подключение и отключение модулей кампании',
        'edit'          => [
            'success'   => 'Настройки кампании обновлены',
        ],
        'helper'        => 'Любые модули кампании могут быть подключены или отключены по вашему желанию. Отключение модуля просто скроет связанные с ним элементы интерфейса, а существующие объекты модуля будут и дальше существовать, на случай если вы передумаете. Эти изменения влияют на всех пользователей кампании, включая админов.',
        'helpers'       => [
            'abilities'     => 'Создавайте и добавляйте объектам способности, будь то навыки, заклинания или силы.',
            'calendars'     => 'Здесь можно создавать календари для вашего мира.',
            'characters'    => 'Населяющие ваш мир персонажи.',
            'conversations' => 'Выдуманные разговоры между персонажами или пользователями кампании. Этот модуль устарел.',
            'dice_rolls'    => 'Для тех, кто использует Kanka для RPG кампаний, это инструмент для бросков игровых костей или дайсроллов. Этот модуль устарел.',
            'events'        => 'Праздники, фестивали, катастрофы, дни рожденья, войны.',
            'families'      => 'Кланы и семьи, их члены и связи.',
            'items'         => 'Оружие, транспортные средства, реликвии, зелья.',
            'journals'      => 'Наблюдения, записанные персонажами, или подготовка ГМа к сессии.',
            'locations'     => 'Планеты, планы, континенты, реки, государства, поселения, храмы, таверны.',
            'maps'          => 'Загружайте карты со слоями и значками, отмечающими другие объекты кампании.',
            'menu_links'    => 'Добавляйте собственные быстрые ссылки на боковую панель.',
            'notes'         => 'Знания, религия, история, магия, расы.',
            'organisations' => 'Культы, отряды, фракции, гильдии.',
            'quests'        => 'Создавайте разнообразные квесты с персонажами и локациями.',
            'races'         => 'Это поможет не запутаться, если в вашей кампании несколько рас.',
            'tags'          => 'У каждого объекта могут быть тэги. У тэгов могут быть свои тэги, а статьи можно фильтровать по тэгам.',
            'timelines'     => 'Покажите историю вашего мира с помощью хронологий.',
        ],
        'title'         => 'Модули кампании :name',
    ],
    'show'                              => [
        'actions'       => [
            'boost' => 'Усилить кампанию',
            'edit'  => 'Редактировать',
            'leave' => 'Покинуть кампанию',
        ],
        'description'   => 'Детальный вид кампании',
        'tabs'          => [
            'achievements'      => 'Достижения',
            'default-images'    => 'Иконки по умолчанию',
            'export'            => 'Экспорт',
            'information'       => 'Информация',
            'members'           => 'Участники',
            'menu'              => 'Меню',
            'plugins'           => 'Плагины',
            'recovery'          => 'Восстановление',
            'roles'             => 'Роли',
            'settings'          => 'Модули',
        ],
        'title'         => 'Кампания :name',
    ],
    'superboosted'                      => [
        'gallery'   => [
            'error' => [
                'text'  => 'Загрузка картинок в текстовом редакторе доступна только для :superboosted.',
                'title' => 'Загрузка картинок из галереи кампании',
            ],
        ],
    ],
    'ui'                                => [
        'helper'    => 'Здесь вы можете изменить то, как отображаются некоторые элементы кампании.',
    ],
    'visibilities'                      => [
        'private'   => 'Закрытая',
        'public'    => 'Открытая',
        'review'    => 'На проверке',
    ],
];

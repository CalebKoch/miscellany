<?php

return [
    'actions'       => [
        'accept'        => 'Aceptar',
        'applications'  => 'Aplicaciones: :status',
        'change'        => 'Cambiar',
        'reject'        => 'Rechazar',
    ],
    'apply'         => [
        'apply'         => 'Solicitar',
        'help'          => 'Esta campaña está abierta a nuevos miembros. Puedes solicitar unirte a ella mediante este formulario. Te notificaremos cuando los administradores de la campaña revisen tu solicitud.',
        'remove_text'   => 'tu solicitud',
        'success'       => [
            'apply' => 'Tu solicitud se ha guardado. Puedes cambiarla o cancelarla en cualquier momento. Te notificaremos cuando los administradores de la campaña la revisen.',
            'remove'=> 'Se ha eliminado tu solicitud.',
            'update'=> 'Se ha actualizado tu solicitud. Puedes cambiarla o cancelarla en cualquier momento. Te notificaremos cuando los administradores de la campaña la revisen.',
        ],
        'title'         => 'Unirse a :name',
    ],
    'errors'        => [
        'not_open'  => 'Esta campaña no está abierta a nuevos miembros. Configura la campaña si quieres permitir que otros usuarios soliciten unirse a ella.',
    ],
    'fields'        => [
        'application'   => 'Solicitud',
        'approval'      => 'Motivo de la aprobación',
        'rejection'     => 'Motivo del rechazo',
    ],
    'helpers'       => [
        'filter-helper'     => '¡Esta campaña está abierta a solicitudes!',
        'modal'             => 'Una campaña que está abierta a solicitudes y al público permite que los usuarios soliciten unirse a la campaña.',
        'no_applications'   => 'Actualmente no hay solicitudes pendientes para unirse a la campaña. Los usuarios pueden solicitar unirse a la campaña visitando su panel de control y haciendo clic en el botón :button.',
        'not_open'          => 'La campaña no acepta actualmente solicitudes.',
        'open_not_public'   => 'La campaña está abierta a solicitudes, pero no es pública, lo que significa que nadie puede solicitar unirse a ella. Esto puede cambiarse editando los ajustes de la campaña.',
    ],
    'placeholders'  => [
        'note'  => 'Escribe tu solicitud para unirte a la campaña',
    ],
    'statuses'      => [
        'closed'    => 'Cerrado',
        'open'      => 'Abierto',
    ],
    'toggle'        => [
        'closed'    => 'Cerrada a solicitudes',
        'label'     => 'Estado',
        'open'      => 'Abierta a solicitudes',
        'success'   => 'Actualización del estado de la solicitud para la campaña.',
        'title'     => 'Estado de la solicitud',
    ],
    'update'        => [
        'approve'   => 'Selecciona el rol que se asignará al usuario en tu campaña.',
        'approved'  => 'Solicitud aprobada.',
        'reject'    => 'Escribe un mensaje opcional al usuario explicando el motivo del rechazo.',
        'rejected'  => 'Solicitud rechazada',
    ],
];

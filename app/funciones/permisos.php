<?php

function permisos(): array
{
    return $permisos = [
        [
            'permiso' => 'usuarios.index',
            'text' => 'Usuarios',
            'opciones' => [
                [
                    'permiso' => 'usuarios.create',
                    'text' => 'Crear Usuarios'
                ],
                [
                    'permiso' => 'usuarios.edit',
                    'text' => 'Editar Usuarios'
                ],
                [
                    'permiso' => 'usuarios.estatus',
                    'text' => 'Cambiar Estatus'
                ],
                [
                    'permiso' => 'usuarios.reset',
                    'text' => 'Reset Password'
                ],
                [
                    'permiso' => 'usuarios.destroy',
                    'text' => 'Borrar Usuarios'
                ]
            ]
        ]

        /*
         * Ejemplo de permiso
         *
         *
        [ 'permiso' => 'usuarios.index',
            'text' => 'Usuarios',
            'opciones' => [
                [
                    'permiso' => 'usuarios.create',
                    'text' => 'Crear Usuarios'
                ],
                [
                    'permiso' => 'usuarios.edit',
                    'text' => 'Editar Usuarios'
                ]
            ]
        ]

        */
    ];
}
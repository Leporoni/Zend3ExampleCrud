<?php

namespace Pessoa;

return [
    'router' => [
        'routes' => [
            'pessoa' => [
                'type' => \Zend\Router\Http\Segment::class,
                'options' => [
                    'route' => '/pessoa[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ],
                    'defaults' => [
                        'controller' => Controller\PessoaController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ]
    ]
];
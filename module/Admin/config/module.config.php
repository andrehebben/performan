<?php
namespace Admin;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\AdminController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'admin' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/admin',
                    'defaults' => [
                        'controller'    => Controller\AdminController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Admin' => __DIR__ . '/../view',
        ],
    ],
];

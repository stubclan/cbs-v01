<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Test\Controller\University' => 'Test\Controller\UniversityController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'university' => array(
                'type'    => 'segment',
                'options' => array(
                            'route'    => '/university[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Test\Controller\University',
                        'action'     => 'index',
                    ),
                ),
            ),

        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
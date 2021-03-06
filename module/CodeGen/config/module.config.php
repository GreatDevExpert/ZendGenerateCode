<?php
namespace CodeGen;

return array(
     'controllers' => array(
         'invokables' => array(
             __NAMESPACE__ . '\Controller\\Index' => __NAMESPACE__ . '\Controller\IndexController',
         ),
     ),
    // The following section is new and should be added to your file
     'router' => array(
         'routes' => array(
             'codegen' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/codegen[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'CodeGen\Controller\CodeGen',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'codegen' => __DIR__ . '/../view',
         ),
     ),
     // Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' =>  __NAMESPACE__ . '_driver'
                ),
            ),
        ),
    ),
 );
?>

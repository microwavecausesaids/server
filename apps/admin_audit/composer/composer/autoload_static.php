<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitAdminAudit
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\AdminAudit\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\AdminAudit\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\AdminAudit\\Actions\\Action' => __DIR__ . '/..' . '/../lib/Actions/Action.php',
        'OCA\\AdminAudit\\Actions\\AppManagement' => __DIR__ . '/..' . '/../lib/Actions/AppManagement.php',
        'OCA\\AdminAudit\\Actions\\Auth' => __DIR__ . '/..' . '/../lib/Actions/Auth.php',
        'OCA\\AdminAudit\\Actions\\Console' => __DIR__ . '/..' . '/../lib/Actions/Console.php',
        'OCA\\AdminAudit\\Actions\\Files' => __DIR__ . '/..' . '/../lib/Actions/Files.php',
        'OCA\\AdminAudit\\Actions\\GroupManagement' => __DIR__ . '/..' . '/../lib/Actions/GroupManagement.php',
        'OCA\\AdminAudit\\Actions\\Sharing' => __DIR__ . '/..' . '/../lib/Actions/Sharing.php',
        'OCA\\AdminAudit\\Actions\\Trashbin' => __DIR__ . '/..' . '/../lib/Actions/Trashbin.php',
        'OCA\\AdminAudit\\Actions\\UserManagement' => __DIR__ . '/..' . '/../lib/Actions/UserManagement.php',
        'OCA\\AdminAudit\\Actions\\Versions' => __DIR__ . '/..' . '/../lib/Actions/Versions.php',
        'OCA\\AdminAudit\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitAdminAudit::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitAdminAudit::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitAdminAudit::$classMap;

        }, null, ClassLoader::class);
    }
}

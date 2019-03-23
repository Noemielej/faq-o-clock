<?php

namespace App\DataFixtures\Faker;

class QuestionAndTagProvider extends \Faker\Provider\Base
{

    protected static $tags = [
        'Intégration',
        'Symfony',
        'Php',
        'JavaScript',
        'React',
        'Boostrap',
        'Laravel',
        'Wordpress',
        'CSS',
        'Node JS',
        'HTML',
    ];

    
    public static function questionTag(){
        return static::randomElement(self::$tags);
    }
}

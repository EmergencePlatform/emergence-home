<?php

namespace Emergence\Skeletons;


class Skeleton extends \ActiveRecord
{
    public static $tableName = 'skeletons';
    public static $singularNoun = 'skeleton';
    public static $pluralNoun = 'skeletons';


    public static $fields = [
        'Hostname' => [
            'type' => 'string',
            'unique' => true
        ],
        'PublicKey' => [
            'type' => 'string',
            'default' => null
        ]
    ];
}
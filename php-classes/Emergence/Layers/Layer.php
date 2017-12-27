<?php

namespace Emergence\Layers;


class Layer extends \ActiveRecord
{
    public static $tableName = 'layers';
    public static $singularNoun = 'layer';
    public static $pluralNoun = 'layers';


    public static $fields = [
        'Handle' => [
            'type' => 'string',
            'unique' => true
        ],
        'RepositoryUrl' => [
            'type' => 'string',
            'default' => null
        ]
    ];
}
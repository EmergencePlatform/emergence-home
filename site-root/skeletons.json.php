<?php

use Emergence\Skeletons\Skeleton;


JSON::respond(array_map(function (Skeleton $Skeleton) {
    return [
        'hostname' => $Skeleton->Hostname,
        'key' => $Skeleton->PublicKey
    ];
}, Skeleton::getAllByWhere('PublicKey IS NOT NULL')));
<?php

namespace Emergence\Skeletons;


class RequestHandler extends \RecordsRequestHandler
{
    public static $recordClass = Skeleton::class;


    public static function handleRecordsRequest($action = null)
    {
        switch ($action ?: $action = static::shiftPath()) {
            case '*import':
                return static::handleImportRequest();
            default:
                return parent::handleRecordsRequest($action);
        }
    }

    public static function handleImportRequest()
    {
        $GLOBALS['Session']->requireAccountLevel('Developer');

        $skeletons = json_decode(file_get_contents('http://emr.ge/skeletons.json'), true);

        foreach ($skeletons as $skeleton) {
            if (!$Skeleton = Skeleton::getByHostname($skeleton['hostname'])) {
                $Skeleton = Skeleton::create([
                    'Hostname' => $skeleton['hostname']
                ]);
            }

            $Skeleton->PublicKey = $skeleton['key'];
            $Skeleton->save();
        }

        return static::respond('message', [
            'message' => sprintf('Imported/updated %u skeletons', count($skeletons))
        ]);
    }
}
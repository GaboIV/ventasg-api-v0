<?php


namespace App\Constants;


abstract class SystemMasterParameters
{
    public const TYPES_OF_USERS = 'TYPES_OF_USERS';
    public const TYPES_OF_DOCUMENTS = 'TYPES_OF_DOCUMENTS';
    public const TYPES_OF_CLIENTS = 'TYPES_OF_CLIENTS';
    public const TYPES_OF_FREQUENCY = 'TYPES_OF_FREQUENCY';
    public const LEVEL_OF_QUESTIONS = 'LEVEL_OF_QUESTIONS';

    public const RESPONSE_TYPE = "RESPONSE_TYPE";
    
    public const PEOPLE_DOCUMENTS = 'PEOPLE_DOCUMENTS';
    public const BUSINESS_DOCUMENTS = 'BUSINESS_DOCUMENTS';

    public const EXHIBITORS = 'EXHIBITORS';

    public const TYPES_OF_STUDY = 'TYPES_OF_STUDY';

    public const TYPES_OF_CHANNELS = 'TYPES_OF_CHANNELS';

    public const SKU_UPDATE = 'SKU_UPDATE';

    public static function getGroups()
    {
        return [
            self::TYPES_OF_DOCUMENTS,
            self::TYPES_OF_CLIENTS,
            self::TYPES_OF_USERS,
            self::EXHIBITORS,
            self::TYPES_OF_STUDY,
            self::TYPES_OF_CHANNELS,
            self::TYPES_OF_FREQUENCY,
            self::LEVEL_OF_QUESTIONS,
            self::RESPONSE_TYPE,
            self::SKU_UPDATE
        ];
    }

    public static function getSubgroups()
    {
        return [
            self::PEOPLE_DOCUMENTS,
            self::BUSINESS_DOCUMENTS
        ];
    }
}

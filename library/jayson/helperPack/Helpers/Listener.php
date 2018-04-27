<?php
class jayson_helperPack_Helpers_listener
{
        public static function helpers(XenForo_Dependencies_Abstract $dependencies, array $data) {
                XenForo_Template_Helper_Core::$helperCallbacks += array(
                        'getidbynameoremail' => array('jayson_helperPack_Helpers_NameEmail', 'helperGetId'),
                        'getnamebyid' => array('jayson_helperPack_Helpers_Id', 'helperGetName'),
                        'getuserbynameoremail' => array('jayson_helperPack_Helpers_NameEmail', 'helperGetUser'),
                        'getuserbyid' => array('jayson_helperPack_Helpers_Id', 'helperGetUser')
                );
        }
}

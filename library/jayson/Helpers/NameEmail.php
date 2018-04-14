<?php
class jayson_helperPack_Helpers_NameEmail
{
        public static function helperGetId($name)
        {
                $userModel = XenForo_Model::create('XenForo_Model_User');
                $user = $userModel->getUserByNameOrEmail($name);
                return $user["user_id"];
        }
}

<?php
class jayson_helperPack_Helpers_Id
{
        public static function helperGetName($id)
        {
                $userModel = XenForo_Model::create('XenForo_Model_User');
                $user = $userModel->getUserById($id);
                return $user["username"];
        }
}

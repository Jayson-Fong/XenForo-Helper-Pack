<?php
class jayson_helperPack_Helpers_Id
{
        public static function helperGetName($id)
        {
                $username = "";
                if ($id > 0)
                {
                        $userModel = XenForo_Model::create('XenForo_Model_User');
                        $user = $userModel->getUserById($id);
                        $username = $user["username"];
                }
                return $username;
        }
        public static function helperGetUser($id)
        {
                $user = [];
                if ($id > 0)
                {
                        $user = XenForo_Model::create('XenForo_Model_User')->getUserById($id);
                }
                return $user;
        }
}

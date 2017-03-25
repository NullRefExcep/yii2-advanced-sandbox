<?php
namespace common\models;

use dektrium\user\models\User as BaseUser;
use nullref\dialog\interfaces\UserModel as DialogUserModel;

/**
 * Override user model from dektrium/user module
 * with implementing of Dialog user interface for (nullref/yii2-dialog)
 *
 */
class User extends BaseUser implements DialogUserModel
{
    /**
     * @return string
     */
    public function getDialogUsername()
    {
        return $this->username;
    }
}

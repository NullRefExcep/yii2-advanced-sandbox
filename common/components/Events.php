<?php
/**
 * @author    Dmytro Karpovych
 * @copyright 2017 NRE
 */


namespace common\components;


use common\models\dialog\GeneralDialog;
use common\models\User;
use nullref\dialog\interfaces\UserModel;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\Event;

class Events implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        /**
         * Attach all new users to general chat
         */
        Event::on(User::className(), User::EVENT_AFTER_INSERT, function (Event $event) {
            /** @var UserModel $user */
            $user = $event->sender;
            GeneralDialog::getDialog()->attachUser($user);
        });
    }
}
<?php

use yii\db\Migration;

use dektrium\user\models\User;
use yii\helpers\Console;

class m170321_220927_add_admin_user extends Migration
{
    public function up()
    {
        /** @var \dektrium\user\models\User $user */
        $user = Yii::createObject([
            'class' => User::className(),
            'scenario' => 'create',
            'email' => 'admin@test.com',
            'username' => 'admin',
            'password' => 'password',
        ]);

        if ($user->create()) {
            Console::output(Yii::t('admin', 'User has been created'));

            Console::output("Username: 'admin'");
            Console::output("Password: 'password'");
        }
    }

    public function down()
    {
        $admin = User::find()->andWhere(['username' => 'admin'])->one();
        if ($admin !== null) {
            $admin->delete();
            Console::output('Admin user was deleted');
        }
        return true;
    }
}

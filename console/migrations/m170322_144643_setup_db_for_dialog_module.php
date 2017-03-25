<?php

use common\models\dialog\GeneralDialog;
use common\models\User;
use yii\db\Migration;

class m170322_144643_setup_db_for_dialog_module extends Migration
{
    public function up()
    {
        $dialog = GeneralDialog::getDialog();

        $users = User::find()->each();

        foreach ($users as $user) {
            $dialog->attachUser($user);
        }
    }

    public function down()
    {
        $dialog = GeneralDialog::find()->andWhere(['type' => GeneralDialog::DIALOG_TYPE])->one();
        if ($dialog != null) {
            $dialog->delete();
        }
        return true;
    }
}

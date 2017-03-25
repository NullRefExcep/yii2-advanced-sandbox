<?php
/**
 * @author    Dmytro Karpovych
 * @copyright 2017 NRE
 */


namespace common\models\dialog;


use nullref\dialog\models\Dialog;

class GeneralDialog extends Dialog
{
    const DIALOG_TYPE = 'general';

    public static function getDialog()
    {
        $dialog = self::find()->andWhere(['type' => self::DIALOG_TYPE])->one();

        /** Create if not exist */
        if ($dialog == null) {
            $dialog = new self();
            $dialog->type = self::DIALOG_TYPE;
            $dialog->save();
        }

        return $dialog;
    }
}
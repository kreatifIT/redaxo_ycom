<?php

class rex_yform_value_ycom_auth_form_password extends rex_yform_value_abstract
{
    public function enterObject()
    {
        $this->params['form_output'][$this->getId()] = $this->parse(['value.ycom_auth_form_password.tpl.php', 'value.password.tpl.php', 'value.text.tpl.php'], ['type' => 'password', 'value' => '']);
    }

    public function getDescription()
    {
        return 'ycom_auth_form_password -> Beispiel: ycom_auth_form_password|label|Passwort:|Placeholder';
    }
}

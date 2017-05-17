<?php
namespace Weboloper\Frontend\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Submit;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class ForgotPasswordForm extends Form
{

    public function initialize()
    {
        $email = new Text('email', [
            'placeholder' => 'E-postanız',
            'class' => 'form-control'
        ]);

        $email->addValidators([
            new PresenceOf([
                'message' => 'E-posta gerekli'
            ]),
            new Email([
                'message' => 'E-posta geçersiz'
            ])
        ]);

        $this->add($email);

    }
}

<?php

namespace Authentication\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    public function __construct($name='user')
    {
        parent::__construct($name);
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));

        $this->add(array(
            'name' => 'username',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => _('Username'),
            ),
        ));
        $this->add(array(
            'name' => 'password',
            'type' => 'Zend\Form\Element\Password',
            'options' => array(
                'label' => _('Password'),
            ),
        ));
        $this->add(array(
            'name' => 'email',
            'type' => 'Zend\Form\Element\Email',
            'options' => array(
                'label' => _('Email'),
            ),
        ));
        $this->add(array(
            'name' => 'is_super_user',
            'type' => 'Zend\Form\Element\Checkbox',
            'options' => array(
                'label' => _('Is super user'),
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => _('Save'),
                'id' => 'submitbutton',
            ),
        ));
    }
}

<?php

/**
 * interface/modules/zend_modules/module/Immunization/src/Immunization/Model/Configuration.php
 *
 * @package   OpenEMR
 * @link      https://www.open-emr.org
 * @author    Bindia Nandakumar <bindia@zhservices.com>
 * @copyright Copyright (c) 2014 Z&H Consultancy Services Private Limited <sam@zhservices.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

namespace Immunization\Model;

use Laminas\InputFilter\Factory as InputFactory;
use Laminas\InputFilter\InputFilter;
use Laminas\InputFilter\InputFilterAwareInterface;
use Laminas\InputFilter\InputFilterInterface;
use Laminas\Form\Form;

class Configuration extends Form implements InputFilterAwareInterface
{
    protected InputFilterInterface $inputFilter;

    public function __construct()
    {
        parent::__construct('configuration');
        $this->setAttribute('method', 'post');
    }

    public function exchangeArray($data)
    {
    }

    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter(): InputFilterInterface
    {
        if (!isset($this->inputFilter)) {
            $inputFilter = new InputFilter();
            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }

    public function getHookConfig()
    {
        $hooks    =  array();
        return $hooks;
    }
    public function getAclConfig()
    {
        $acl = array();
        return $acl;
    }

    public function configSettings()
    {
        $settings = array();
        return $settings;
    }

    public function getDependedModulesConfig()
    {
        return [];
    }
}

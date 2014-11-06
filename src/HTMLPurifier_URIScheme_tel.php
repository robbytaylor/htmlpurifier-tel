<?php

class HTMLPurifier_URIScheme_tel extends \HTMLPurifier_URIScheme
{
    public $default_port = null;

    public $browsable = true;

    public $may_omit_host = true;

    public function doValidate(&$uri, $config, $context)
    {
        return true;
    }
}
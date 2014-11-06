<?php

class HTMLPurifier_URIScheme_tel extends \HTMLPurifier_URIScheme
{
    public $browsable = true;

    public $may_omit_host = true;

    public function doValidate(&$uri, $config, $context)
    {
        return preg_match('|\+?\d+(x[\d]+)?|', $uri->path) === 1;
    }
}
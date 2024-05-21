<?php
namespace Zero1\LayoutXmlPlus\Model\Processor;

class Sanitizer
{
    public const TEMPLATE_AT = '___at___';
    public const TEMPLATE_AMPERSAND = '___amp___';

    public function sanitize($value)
    {
        $value = str_replace('@', self::TEMPLATE_AT, $value);
        $value = str_replace('&', self::TEMPLATE_AMPERSAND, $value);
        return $value;
    }

    public function unsanitize($value)
    {
        $value = str_replace(self::TEMPLATE_AT, '@', $value);
        $value = str_replace(self::TEMPLATE_AMPERSAND, '&', $value);
        return $value;
    }
}
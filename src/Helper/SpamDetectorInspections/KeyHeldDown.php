<?php namespace Visiosoft\SpamDetectionExtension\Helper\SpamDetectorInspections;

class KeyHeldDown
{
    public function check($content)
    {
        if (preg_match('/(.)\\1{4,}/', $content)) {
            return true;
        }
        return false;
    }
}
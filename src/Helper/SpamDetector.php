<?php namespace Visiosoft\SpamDetectionExtension\Helper;

use Visiosoft\SpamDetectionExtension\Helper\SpamDetectorInspections\InvalidKeywords;
use Visiosoft\SpamDetectionExtension\Helper\SpamDetectorInspections\KeyHeldDown;

class SpamDetector
{
    protected $rules = [
        InvalidKeywords::class,
        KeyHeldDown::class
    ];

    public function detector($content) {
        foreach ($this->rules as $rule) {
            if(app($rule)->check($content)) {
                return true;
            }
        }
        return false;
    }
}
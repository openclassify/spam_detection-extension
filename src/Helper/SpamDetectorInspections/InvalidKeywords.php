<?php namespace Visiosoft\SpamDetectionExtension\Helper\SpamDetectorInspections;

class InvalidKeywords
{

    protected $keywords = [
        'example', 'free', 'bedava', 'cash', 'para', 'örnek',
        'bank', 'police', 'polis',  'zinci', 'banka', 'devlet', 'isis',
        'terrorist', 'terror', 'pkk', 'fuck', 'sex', 'sexy',
        'penis', 'pussy', 'sik', 'siktir', 'test', 'porn', 'dick',
        'cock', 'meme', 'dildo', 'ass', 'göt', 'bok', 'fak', 'piç',
        'bitch', 'escort', 'eskort', 'eskord', 'nefret', 'pissing',
        'gay', 'lesbian', 'fahişe', 'oruspi', 'xxx', 'pornstar',
        'transgender', 'teravesti', 'olüm', 'die', 'died'
    ];

    public function check($content) {
        foreach ($this->keywords as $keyword) {
            if (stripos($content, $keyword) !== false) {
                return true;
            }
        }
        return false;
    }
}
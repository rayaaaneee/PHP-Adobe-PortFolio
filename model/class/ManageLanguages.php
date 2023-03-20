<?php

require_once(PATH_CLASSES . 'FetchJSON.php');

class ManageLanguages
{
    private array $languages = [];

    public function __construct()
    {
        $this->languages = new FetchJSON(PATH_DATAS . 'home/languages.json');
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function getLanguage(string $language): array
    {
        return $this->languages[$language];
    }
}

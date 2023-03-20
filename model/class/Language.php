<?php

class Language
{
    private string $language;
    private string $name;

    public function __construct(string $language, string $name)
    {
        $this->language = $language;
        $this->name = $name;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function displayLanguage(): string
    {
        return $this->language . ' - ' . $this->name;
    }
}

<?php

class Semester
{
    private string $title;
    private string $description;
    private string $icon;
    private string $iconPath;
    private DateTime $startingDate;
    private DateTime $endingDate;

    public function __construct(array $semester)
    {
        $this->title = $semester['title'];
        $this->description = $semester['description'];
        $this->startingDate = new DateTime($semester['starting_date']);
        $this->endingDate = new DateTime($semester['ending_date']);
        $this->icon = $semester['icon'];
        $this->iconPath = PATH_IMAGES . 'course/' . $this->icon;
    }

    public static function processRow(array $semesters): array
    {
        $semesters = array_map(function ($semester) {
            return new Semester($semester);
        }, $semesters);

        $tmp_result = [];
        foreach ($semesters as $semester) {
            $tmp_result[] = $semester;
        }
        return $tmp_result;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStartingDate(): DateTime
    {
        return $this->startingDate;
    }

    public function getEndingDate(): DateTime
    {
        return $this->endingDate;
    }

    public function formatStartingDate(): string
    {
        return $this->startingDate->format('d/m/Y');
    }

    public function formatEndingDate(): string
    {
        return $this->endingDate->format('d/m/Y');
    }

    public function getIconPath(): string
    {
        return $this->iconPath;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
}

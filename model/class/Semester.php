<?php

class Semester
{
    private string $title;
    private string $description;
    private DateTime $startingDate;
    private DateTime $endingDate;

    public function __construct(string $title, string $description, string $startingDate = null, string $endingDate = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->startingDate = new DateTime($startingDate);
        $this->endingDate = new DateTime($endingDate);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public static function processRow(array $semesters): array
    {
        $semesters = array_map(function ($semester) {
            return new Semester($semester['title'], $semester['description'], $semester['starting_date'], $semester['ending_date']);
        }, $semesters);

        $tmp_result = [];
        foreach ($semesters as $semester) {
            $tmp_result[] = $semester;
        }
        return $tmp_result;
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
}

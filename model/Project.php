<?php

class Project
{
    private ?int $id;

    private ?string $title;
    private ?string $useDescription;
    private ?string $projectDescription;
    private ?string $image;
    private ?string $icon;

    private ?bool $isDownload;
    private ?bool $isLink;

    private ?string $projectLink;
    private ?string $projectFile;

    public function __construct($project)
    {
        $this->id = $project['id'];
        $this->title = $project['title'];
        $this->useDescription = $project['use_desc'];
        $this->projectDescription = $project['project_desc'];
        $this->image = $project['image'];
        $this->icon = $project['icon'];
        $this->isDownload = $project['is_download'];
        $this->isLink = $project['is_link'];
        $this->projectLink = $project['link'];
        $this->projectFile = $project['file'];
    }

    public function getTypeImageName()
    {
        $result = null;
        if ($this->isLink) {
            $result = "link";
        } else {
            $result = "download";
        }
        return $result;
    }

    public function getImagePath()
    {
        return PATH_IMAGES . "home/icon/" . $this->getTypeImageName();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getUseDescription()
    {
        return $this->useDescription;
    }

    public function getDescription()
    {
        return $this->projectDescription;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function isDownload()
    {
        return $this->isDownload;
    }

    public function isLink()
    {
        return $this->isLink;
    }

    public function getLink()
    {
        if ($this->isLink) {
            return PATH_PROJECTS . $this->projectLink;
        } else {
            return null;
        }
    }

    public function getFile()
    {
        if ($this->isDownload) {
            return PATH_PROJECTS . $this->projectFile;
        } else {
            return null;
        }
    }

    public function getFileSize()
    {
        if ($this->isDownload) {
            $path = PATH_PROJECTS . $this->projectFile;
            $size = filesize($path);
            $size = $size / 1000000;
            return round($size, 2);
        } else {
            return null;
        }
    }

    public function getImage()
    {
        return $this->image;
    }
}

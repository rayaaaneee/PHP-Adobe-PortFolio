<?php

class DarkMode
{

    private $isLightTheme;

    public function __construct()
    {
        $this->toggleTheme();
    }

    public function toggleTheme()
    {
        $tmp = null;
        if (isset($_POST['dark-mode'])) {
            $_SESSION['dark-mode'] = !($_SESSION['dark-mode']);
        } else {
            if (!isset($_SESSION['dark-mode'])) {
                $_SESSION['dark-mode'] = true;
            }
        }
        $this->isLightTheme = !$_SESSION['dark-mode'];
    }

    public function setTheme($theme)
    {
        $_SESSION['dark-mode'] = $theme;
        $this->isLightTheme = !$_SESSION['dark-mode'];
    }

    public function getButtonClass()
    {
        $result = null;
        if ($this->isLightTheme) {
            $result = 'light-mode';
        } else {
            $result =  'dark-mode';
        }
        return $result . '-button';
    }

    public function getClass($classname)
    {
        $result = "";
        if ($this->isLightTheme) {
            $result =  $classname . '-dark';
        }
        return $result;
    }

    public function isLightTheme()
    {
        return $this->isLightTheme;
    }

    public function isDarkTheme()
    {
        return !$this->isLightTheme;
    }

    public function getTheme()
    {
        $theme = null;
        switch (!$this->isLightTheme) {
            case true:
                $theme = "light";
                break;
            case false:
                $theme = "dark";
                break;
        }
        return $theme;
    }

    public function getTextColor()
    {
        $color = null;
        switch ($this->isLightTheme) {
            case 'true':
                $color = "black";
                break;
            case 'false':
                $color = "white";
                break;
        }
        return $color;
    }

    public function getColor()
    {
        $color = null;
        switch ($this->isLightTheme) {
            case 'true':
                $color = "white";
                break;
            case 'false':
                $color = "black";
                break;
        }
        return $color;
    }

    public function getLogoFilename()
    {
        $filename = "portfolio_logo";
        if ($this->isLightTheme == "false") {
            $filename = "dark-theme/dark_" . $filename;
        }
        return $filename . ".png";
    }

    public function getFavicon()
    {
        $filename = "favicon";
        if ($this->isLightTheme == "false") {
            $filename = "white-" . $filename;
        }
        return PATH_IMAGES . "favicon/" . $filename;
    }

    public function getImagePath($name)
    {
        $path = $name;
        if ($this->isLightTheme == "false") {
            $path .= "-white";
        }
        return $path . ".png";
    }
}

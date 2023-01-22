<?php 

class DarkMode {

        private $isLightTheme;
    
        public function __construct() {
            $this->setMode();
        }
    
        public function setMode() {
            $tmp = null;
            if (isset($_POST['dark-mode'])) {
                $_SESSION['dark-mode'] = !($_SESSION['dark-mode']);
            } else {
                if (!isset($_SESSION['dark-mode'])) {
                    $_SESSION['dark-mode'] = false;
                }
            }
            $this->isLightTheme = (bool) $_SESSION['dark-mode'];
        }
        
        public function getButtonClass() {
            $result = null;
            if ($this->isLightTheme) {
                $result = 'light-mode';
            } else {
                $result =  'dark-mode';
            }
            return $result . '-button';
        }
        
        public function getClass($classname) {
            $result = null;
            if ($this->isLightTheme) {
                $result =  $classname . '-dark';
            }
            return $result;
        }

        public function isLightTheme() {
            return $this->isLightTheme;
        }   

        public function getTextColor(){
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

        public function getColor(){
            $color = null;
            switch ($this->isLightTheme) {
                case 'true':
                    $color = "white"; 
                    break;
                case 'false':
                    $color = "black"; 
                    break;
            }
        }

        public function getLogoFilename(){
            $filename = "portfolio_logo";
            if ($this->isLightTheme == "false") {
                $filename = "dark_" . $filename;
            }
            return $filename;
        }

        public function getFavicon(){
            $filename = "favicon1";
            if ($this->isLightTheme == "false") {
                $filename = "white-" . $filename;
            }
            return $filename;
        }

        public function getImagePath($name){
            $path = $name;
            if ($this->isLightTheme == "false") {
                $path .= "-white";
            }
            return $path;
        }
}

$changedMode = false;
if(isset($_POST['dark-mode'])) {
    $changedMode = true;
}
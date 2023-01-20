<?php 

class DarkMode {

        private $isDarkTheme;
    
        public function __construct() {
            session_start();
            $this->darkmode();
        }
    
        public function darkmode() {
            $tmp = null;
            if (isset($_POST['dark-mode'])) {
                if ($_SESSION['dark-mode'] == 'on') {
                    $_SESSION['dark-mode'] = 'off';
                    $tmp = true;
                } else {
                    $_SESSION['dark-mode'] = 'on';
                    $tmp = false;
                }
            } else {
                $_SESSION['dark-mode'] = 'off';
                $tmp = false;
            }
            $this->isDarkTheme = $tmp;
        }
        
        public function getButtonClass() {
            $result = null;
            if ($this->isDarkTheme) {
                $result =  'dark-mode';
            } else {
                $result = 'light-mode';
            }
            return $result . '-button';
        }
        
        public function getBodyClass($classname) {
            $result = null;
            if ($this->isDarkTheme) {
                $result =  '-dark';
            }
            return $classname . $result;
        }

        public function isDarkTheme() {
            return $this->isDarkTheme;
        }   
}
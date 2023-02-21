<?php

class Game
{
    private string $pseudo1;
    private string $pseudo2;
    private array $word = [];
    private string $stringWord;
    private string $wordChooser;
    private string $wordSearcher;
    private ?string $winnerName = null;
    private array $falseLetters = [];
    private array $trueLetters = [];
    private array $allLetters = [];
    private int $Errors = 0;

    public function __construct($pseudo1, $pseudo2, $wordChooser, $word = null, $falseLetters = null, $Errors = null)
    {
        $this->pseudo1 = $pseudo1;
        $this->pseudo2 = $pseudo2;
        $this->wordChooser = $wordChooser;

        if ($wordChooser == $pseudo1) {
            $this->wordSearcher = $pseudo2;
        } else {
            $this->wordSearcher = $pseudo1;
        }

        if ($word != null) {
            $this->setWord($word);
        }

        if ($falseLetters != null) {
            $this->falseLetters = $falseLetters;
        }
        if ($Errors != null) {
            $this->Errors = $Errors;
        }


        $this->setAllLetters();
    }

    public function getNbLetters()
    {
        return count($this->word);
    }

    public function getLoserName()
    {
        if ($this->getWinnerName() == $this->pseudo1) {
            return $this->pseudo2;
        } else {
            return $this->pseudo1;
        }
    }

    public function setWord($word)
    {
        $this->splitWord($word);
        $this->stringWord = $word;
    }

    private function splitWord($word)
    {
        // Les accents contiennent 2 caractères, on les remplace par un seul caractère
        $word = str_replace('é', 'e', $word);
        $word = str_replace('è', 'e', $word);
        $word = str_replace('ê', 'e', $word);

        $word = str_replace('à', 'a', $word);
        $word = str_replace('â', 'a', $word);


        $word = str_replace('ù', 'u', $word);
        $word = str_replace('û', 'u', $word);

        $word = str_replace('î', 'i', $word);
        $word = str_replace('ï', 'i', $word);

        $word = str_replace('ô', 'o', $word);
        $word = str_replace('ö', 'o', $word);

        $word = str_replace('ç', 'c', $word);

        for ($i = 0; $i < strlen($word); $i++) {
            array_push($this->word, strtolower($word[$i]));
        }
    }

    public function getWord()
    {
        return $this->word;
    }

    public function getPseudo1()
    {
        return $this->pseudo1;
    }

    public function getPseudo2()
    {
        return $this->pseudo2;
    }

    public function getWinnerName()
    {
        return $this->winnerName;
    }

    public function setWinnerName()
    {
        if ($this->getErrors() >= 10) {
            $this->winnerName = $this->wordChooser;
        } else {
            $this->winnerName = $this->wordSearcher;
        }
    }

    public function getWordSearcher()
    {
        return $this->wordSearcher;
    }

    public function getWordChooser()
    {
        return $this->wordChooser;
    }

    public function getNbChars()
    {
        return count($this->word);
    }

    public function tryLetter($letter)
    {
        if ($this->isFinished()) {
            return;
        } else {
            $letter = strtolower($letter);
            if ($this->verifyLetterLength($letter)) {
                return 'longer';
            } else if ($this->verifyLetter($letter)) {
                return 'invalid';
            } else if (in_array($letter, $this->allLetters)) {
                return 'tried';
            } else {
                if (in_array($letter, $this->word) !== false) {
                    $this->addTrueLetter($letter);
                    $this->setAllLetters();
                    return true;
                } else {
                    $this->Errors++;
                    $this->setAllLetters();
                    $this->addFalseLetter($letter);
                    return false;
                }
            }
        }
    }

    private function addTrueLetter($letter)
    {
        array_push($this->trueLetters, $letter);
    }

    private function addFalseLetter($letter)
    {
        array_push($this->falseLetters, $letter);
    }

    public function getFalseLetters()
    {
        return $this->falseLetters;
    }

    public function setErrors($Errors)
    {
        $this->Errors = $Errors;
    }

    public function getErrors()
    {
        return $this->Errors;
    }

    public function printWord()
    {
        $result = "";

        for ($i = 0; $i < $this->getNbChars(); $i++) {
            if (in_array($this->word[$i], $this->trueLetters)) {
                $result .= '<p class="hide-word">' . strtoupper($this->word[$i]) . '</p>';
            } else if ($this->word[$i] == ' ') {
                $result .= '<p class="hide-word-space"> </p>';
            } else if ($this->word[$i] == '\'') {
                $result .= '<p class="hide-word-space">\'</p>';
            } else if ($this->word[$i] == '-') {
                $result .= '<p class="hide-word-space">-</p>';
            } else {
                $result .= '<p class="hide-word">_</p>';
            }
        }

        return $result;
    }

    public function getStringWord()
    {
        $tmp = $this->stringWord;
        $tmp = strtolower($tmp);
        if ($tmp[0] != '-' && $tmp[0] != '_' && $tmp[0] != "'") {
            if ($this->isAccent($tmp[0] . $tmp[1]) && !$this->isChar($tmp[0])) {
                $firstAccent = $tmp[0] . $tmp[1];
                $upperChar = $this->associateUpperAccent($firstAccent);
                $tmp = substr($tmp, 2);
                $tmp = $upperChar . $tmp;
            } else {
                $tmp[0] = strtoupper($tmp[0]);
            }
        }
        return $tmp;
    }

    public function isChar($char)
    {
        if (preg_match('/[a-zA-Z]/', $char)) {
            return true;
        } else {
            return false;
        }
    }

    private function associateUpperAccent($string)
    {
        switch ($string) {
            case 'é':
                $string = 'É';
                break;
            case 'è':
                $string = 'È';
                break;
            case 'ê':
                $string = 'Ê';
                break;
            case 'à':
                $string = 'À';
                break;
            case 'â':
                $string = 'Â';
                break;
            case 'ù':
                $string = 'Ù';
                break;
            case 'û':
                $string = 'Û';
                break;
            case 'î':
                $string = 'Î';
                break;
            case 'ï':
                $string = 'Ï';
                break;
            case 'ô':
                $string = 'Ô';
                break;
            case 'ö':
                $string = 'Ö';
                break;
            case 'ç':
                $string = 'Ç';
                break;
        }
        return $string;
    }

    public function printFalseLetters()
    {
        if (empty($this->falseLetters)) {
            return "";
        } else {
            $result = "";

            $result .= '<div class="false-letters">';
            $result .= '<p>Wrong letters :</p>';

            $i = 0;

            foreach ($this->falseLetters as $letter) {
                $letter = $this->falseLetters[$i];
                if ($i != 0) {
                    $result .= '<p class="false-letter">- ' . strtoupper($letter) . '</p>';
                } else {
                    $result .= '<p class="false-letter">' . strtoupper($letter) . '</p>';
                }
                $i++;
            }

            $result .= '</div>';
        }

        return $result;
    }

    public function getTrueLetters()
    {
        return $this->trueLetters;
    }

    public function saveInSession()
    {
        $_SESSION['game'] = serialize($this);
    }

    public function getAllLetters()
    {
        return $this->allLetters;
    }

    public function setAllLetters()
    {
        $this->allLetters = array_merge($this->falseLetters, $this->trueLetters);
    }

    public function printErrors()
    {
        $result = '';

        if ($this->Errors == 0) {
            return "";
        } else {
            $result = '';
            $result .= '<p>Errors :</p>';
            $result .= '<p class="nb-tries">' . $this->Errors . '</p>';
            $result .= '<p>/ 11</p>';
        }

        return $result;
    }

    public function isFinished()
    {
        $result = true;

        if ($this->Errors < 11) {
            for ($i = 0; $i < $this->getNbChars(); $i++) {
                if (!in_array($this->word[$i], $this->trueLetters) && $this->word[$i] != ' ') {
                    $result = false;
                    break;
                }
            }
        }

        return $result;
    }

    public function printImage()
    {
        $result = '';

        if ($this->Errors == 0) {
            return $result;
        } else {
            $result .= '<div class="img-container">';
            $result .= '<img src="' . PATH_IMG . 'sprites/' . $this->getErrors() . '.png" alt="Image pendu" draggable="false">';
            $result .= '</div>';
        }

        return $result;
    }

    public function verifyWord()
    {
        $res = false;
        // On vérifie que le mot ne contient pas de caractères spéciaux en dehors des espaces et accents
        if (preg_match('/[^A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸ\'\- ]/', $this->stringWord)) {
            $res = true;
        }

        echo $res;

        return $res;
    }

    public function verifyWordLength()
    {
        $res = false;
        $error = null;
        // On vérifie que le mot ne contient pas plus de 20 caractères
        if (count($this->word) > 20 || count($this->word) < 3) {
            $res = true;
        }

        return $res;
    }

    public function verifyPseudo()
    {

        $res = false;
        // On vérifie que le pseudo ne contient pas de caractères spéciaux en dehors des espaces et accents

        $pattern = '/[^a-z0-9àâäçéèêëîïôöùûüÿ\- ]/i';

        if (preg_match($pattern, strtolower($this->pseudo1)) || preg_match($pattern, strtolower($this->pseudo2))) {
            $res = true;
        }

        return $res;
    }

    public function verifySamePseudo()
    {
        $res = false;
        // On vérifie que les pseudos ne sont pas identiques
        if (strtolower($this->pseudo1) == strtolower($this->pseudo2)) {
            $res = true;
        }

        return $res;
    }

    public function verifyLetter($letter)
    {
        $res = false;

        $pattern = '/[^a-zàâäçéèêëîïôöùûüÿ\- ]/i';

        // On vérifie que la lettre ne contient pas de caractères spéciaux en dehors des espaces et accents
        if (preg_match($pattern, $letter)) {
            $res = true;
        }

        return $res;
    }

    public function verifyLetterLength($letter)
    {
        $res = false;
        // On vérifie que la lettre ne contient pas plus de 1 caractères
        if (strlen($letter) > 1 && !$this->isAccent($letter)) {
            $res = true;
        }

        return $res;
    }

    public function isAccent($letter)
    {
        $res = false;

        $pattern = '/[àâäçéèêëîïôöùûüÿ]/i';

        if (preg_match($pattern, $letter)) {
            $res = true;
        }

        return $res;
    }

    public function replaceAccent($letter)
    {
        if ($this->isAccent($letter)) {

            $letter = str_replace('à', 'a', $letter);
            $letter = str_replace('â', 'a', $letter);
            $letter = str_replace('ä', 'a', $letter);
            $letter = str_replace('ç', 'c', $letter);
            $letter = str_replace('é', 'e', $letter);
            $letter = str_replace('è', 'e', $letter);
            $letter = str_replace('ê', 'e', $letter);
            $letter = str_replace('ë', 'e', $letter);
            $letter = str_replace('î', 'i', $letter);
            $letter = str_replace('ï', 'i', $letter);
            $letter = str_replace('ô', 'o', $letter);
            $letter = str_replace('ö', 'o', $letter);
            $letter = str_replace('ù', 'u', $letter);
            $letter = str_replace('û', 'u', $letter);
            $letter = str_replace('ü', 'u', $letter);
            $letter = str_replace('ÿ', 'y', $letter);

            return $letter;
        } else {
            return $letter;
        }
    }
}

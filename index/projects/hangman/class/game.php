<?php

class Game
{
    private string $pseudo1;
    private string $pseudo2;
    private string $word;
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

        $gameDAO = new GameDAO();

        if ($word != null) {
            $this->word = $word;
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
        return strlen($this->word);
    }

    public function setWord($word)
    {
        $this->word = $word;
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

    public function getWordLength()
    {
        return strlen($this->word);
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

    public function getWordChooser()
    {
        return $this->wordChooser;
    }

    public function getNbChars()
    {
        return strlen($this->word);
    }

    public function tryLetter($letter)
    {
        if ($this->isFinished()) {
            return;
        }
        $letter = strtoupper($letter);
        $word = $this->getWord();
        $word = strtoupper($word);

        if (in_array($letter, $this->allLetters)) {
            echo '<p class="already-tried-letter">Vous avez déjà essayé cette lettre !';
            return false;
        }

        if (strpos($word, $letter) !== false) {
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

    private function addTrueLetter($letter)
    {
        $letter = strtoupper($letter);
        array_push($this->trueLetters, $letter);
    }

    private function addFalseLetter($letter)
    {
        $letter = strtoupper($letter);
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
        $word = strtoupper($this->word);
        $result = "";

        for ($i = 0; $i < $this->getNbChars(); $i++) {
            if (in_array($word[$i], $this->trueLetters)) {
                $result .= '<p class="hide-word">' . $word[$i] . '</p>';
            } else if ($word[$i] == ' ') {
                $result .= '<p class="hide-word-space"> </p>';
            } else {
                $result .= '<p class="hide-word">_</p>';
            }
        }

        return $result;
    }

    public function printFalseLetters()
    {
        if (empty($this->falseLetters)) {
            return "";
        } else {
            $result = "";

            $result .= '<div class="false-letters">';
            $result .= '<p>Fausses lettres :</p>';

            $i = 0;
            foreach ($this->falseLetters as $letter) {
                $letter = $this->falseLetters[$i];
                if ($i != 0) {
                    $result .= '<p class="false-letter">- ' . $letter . '</p>';
                } else {
                    $result .= '<p class="false-letter">' . $letter . '</p>';
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
            $result .= '<p>Erreurs :</p>';
            $result .= '<p class="nb-tries">' . $this->Errors . '</p>';
        }

        return $result;
    }

    public function isFinished()
    {
        $word = $this->getWord();
        $word = strtoupper($word);

        $result = true;

        for ($i = 0; $i < $this->getNbChars(); $i++) {
            if (!in_array($word[$i], $this->trueLetters) && $word[$i] != ' ') {
                if ($this->Errors < 10) {
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
}

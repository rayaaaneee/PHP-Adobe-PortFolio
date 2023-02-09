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
        return strlen($this->word);
    }

    public function tryLetter($letter)
    {
        if ($this->isFinished()) {
            echo "Le jeu est terminé";
            return;
        } else {
            $letter = strtoupper($letter);
            $word = $this->getWord();
            $word = strtoupper($word);

            if (in_array($letter, $this->allLetters)) {
                return 'tried';
            } else {
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
            } else if ($word[$i] == '\'') {
                $result .= '<p class="hide-word-space">\'</p>';
            } else if ($word[$i] == '-') {
                $result .= '<p class="hide-word-space">-</p>';
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

        if ($this->Errors < 10) {
            for ($i = 0; $i < $this->getNbChars(); $i++) {
                if (!in_array($word[$i], $this->trueLetters) && $word[$i] != ' ') {
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
        $word = strtoupper($this->word);
        $res = false;
        // On vérifie que le mot ne contient pas de caractères spéciaux en dehors des espaces et accents
        if (preg_match('/[^A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸ\'\- ]/', $word)) {
            $res = true;
        }

        return $res;
    }

    public function verifyWordLength()
    {
        $word = strtoupper($this->word);
        $res = false;
        $error = null;
        // On vérifie que le mot ne contient pas plus de 20 caractères
        if (strlen($word) > 20 || strlen($word) < 3) {
            $res = true;
        }

        return $res;
    }

    public function verifyPseudo()
    {

        $res = false;
        // On vérifie que le pseudo ne contient pas de caractères spéciaux en dehors des espaces et accents

        if (preg_match('/[^A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸ\- ]/', strtoupper($this->pseudo1)) || preg_match('/[^A-Za-zÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸ\'\- ]/', strtoupper($this->pseudo2))) {
            $res = true;
        }

        return $res;
    }

    public function verifySamePseudo()
    {
        $res = false;
        // On vérifie que les pseudos ne sont pas identiques
        if (strtoupper($this->pseudo1) == strtoupper($this->pseudo2)) {
            $res = true;
        }

        return $res;
    }
}

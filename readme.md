### MarketManager

## Avant tout assurez vous d'avoir une version de php 8.2 ou supérieur, composer et npm installés sur votre machine

# Pour lancer le projet, pensez à lancer un serveur (php -S localhost:8000) dans le dossier public

# Insérer les tables situées dans assets/sql/MarketManager.sql dans votre base de données "MarketManager" pour pouvoir utiliser le projet

# Passez un coup de composer install puis npm install pour installer les dépendances nécéssaires au bon fonctionnement du projet

# Ajoutez la fonction suivante dans votre AbstractController au chemin vendor/symfony/framework/framework-bundle/Controller/AbstractController.php

## protected function verifyConnection(Session $session): void

## {

## if (!$session->get('user')) {

## $url = $this->generateUrl('connect');

## $response = new RedirectResponse($url);

## $response->send();

## }

## }

# Lancez un serveur interne avec php -S localhost:8000 Vous pouvez ensuite lancer le projet en vous rendant sur localhost:8000 !

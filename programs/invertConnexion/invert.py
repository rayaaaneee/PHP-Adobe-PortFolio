"""Programme qui ouvre le fichier m_connect.php et qui commente toute fonction non commentée et décommente 
toute fonction commentée, est utile pour inverser les fonctions de connexion à la base de données lors de 
la mise en ligne sur le serveur AWS"""
import os

# On lit ligne par ligne le fichier m_connect.php et on stocke les lignes dans une liste,
# on parcourt la liste et on remplace les lignes par les lignes modifiées


def invert(filename):
    with open(filename, 'r') as file:
        lines = file.readlines()
        i = 0
        nbcrochet = 0
        for line in lines:
            # On compte le nombre de crochet ouvrant pour savoir si on est dans une fonction ou non
            if '{' in line:
                nbcrochet += 1

            # On décommente la fonction commentée, on commente la non commentée et supprime les espaces en trop
            if 'function' in line:
                if '/*' in line:
                    tmp = line.split('/*')
                    lines[i] = tmp[1]
                else:
                    lines[i] = line.replace('function', '/* function')
                # On supprime les espaces du début
                if lines[i][0] == ' ':
                    lines[i] = lines[i][1:]

            # On décrémente le nombre de crochet ouvrant si on rencontre un crochet fermant
            if '}' in line and nbcrochet != 0:
                nbcrochet -= 1

            # On ajoute un crochet fermant à la fin de la fonction si il n'y en a pas, on l'enlève si il y en a
            if '}' in line and nbcrochet == 0:
                if '*/' not in line:
                    lines[i] = line.replace('}', '} */')
                else:
                    lines[i] = line.replace('*/', '')
            i += 1

    # On réécrit le fichier m_connect.php avec les lignes modifiées
    with open(filename, 'w') as file:
        file.write(''.join(lines))


if __name__ == '__main__':
    invert('config.php')

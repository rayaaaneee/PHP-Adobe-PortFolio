""" Programme qui permet de mettre a jour les informations du fichier "data.txt" utilisé 
pour afficher les informations du fichier CV_Rayane_Merlin.pdf dans la page principale"""

import os.path
import time

# Fonction qui permet de convertir le mois en chiffre


def getNumberOfMonths(month):
    match(month):
        case "Jan":
            return "01"
        case "Feb":
            return "02"
        case "Mar":
            return "03"
        case "Apr":
            return "04"
        case "May":
            return "05"
        case "Jun":
            return "06"
        case "Jul":
            return "07"
        case "Aug":
            return "08"
        case "Sep":
            return "09"
        case "Oct":
            return "10"
        case "Nov":
            return "11"
        case "Dec":
            return "12"

# Fonction qui permet de recuperer les informations du fichier


def getFileInformations(filename, path):
    date = time.ctime(os.path.getmtime(path + filename))
    date = date.split(" ")
    date = date[2] + " " + date[1] + " " + date[4]
    date = date.split(" ")
    date[1] = getNumberOfMonths(date[1])
    date = date[0] + "/" + date[1] + "/" + date[2]

    size = os.path.getsize(path + filename)
    size = size / 1024
    size = str(size)
    size = size.split(".")
    size = size[0] + "." + size[1][0] + size[1][1]

    type = filename.split(".")[1]

    return date, size, type


# Ouvrir un fichier en mode lecture ecriture
name = None


def write(path):
    with open(path + "data.txt", "w") as f:

        name = "CV.pdf"

        # Recuperer les informations du fichier
        date, size, type = getFileInformations(name, path)

        # Ecrire les informations dans le fichier
        print("Writing...")
        f.write("File : " + name+"\n")
        f.write("Last Modification : " + date+"\n")
        f.write("Size : " + size + " Ko"+"\n")
        f.write("Type : " + type+"\n")

        print("File modified")


# Fonction main du programme
if __name__ == "__main__":
    write("asset/file/")

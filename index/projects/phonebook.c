#include <stdio.h>
#include <stdlib.h>
// modules
#include "api/ajouter_client.h"
#include "api/filtrer_combiner_deux_champs.h"
#include "api/filtrer_donnee_manquante.h"
#include "api/filtrer_un_champ.h"
#include "api/modifier_mel_client.h"
#include "api/supprimer_client.h"
#include "api/trier_clients_par_nom.h"
#include "api/modifier_autre_que_mail.h"

int main() {

   int leave = 0;
    while(leave == 0) {
        char choice[8] = {0};
        printf("--- MENU ---\n\n");
        printf("[0] Lire le fichier\n");
        printf("[1] Ajouter client\n");
        printf("[2] Modifier mel client\n");
        printf("[3] Modifier autre que mel client\n");
        printf("[4] Supprimer client\n");
        printf("[5] Trier clients par nom\n");
        printf("[6] Filtrer clients donnees manquantes\n");
        printf("[7] Filtrer un champ\n");
        printf("[8] Filtrer combiner deux champs\n");
        printf("[9] Quitter\n");

        fgets(choice, 10, stdin);
        int val = atoi(choice);
        if (val == 9) {
            leave = 1;
        }
        if (val == 0) {

            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            FILE *fichier = fopen(nom, "r+");
            if (fichier != NULL) {
                char c = 0;
                do {
                    c = fgetc(fichier);
                    printf("%c", c);
                } while (c != EOF);
            } else {
                printf("Fichier non trouve\n");
            }
        }
        if (val == 1) {
            printf("Entrez le nom du fichier\n");
            char filename[50], *a;
            fgets(filename, sizeof(filename), stdin);
            if ((a = strchr(filename, '\n')) != NULL) {
                *a = '\0';
            }

            char nom_p[100], *n, prenom_p[100], *np, code_p[100], *cp, ville_p[100], *v, telephone_p[40], *t, mel_p[100], *m, profession_p[100], *pp;
            printf("Entrez le nom\n");
            fgets(nom_p, 100, stdin);
            if ((n = strchr(nom_p, '\n')) != NULL) {
                *n = '\0';
            }
            printf("Entrez le prenom\n");
            fgets(prenom_p, 100, stdin);
            if ((np = strchr(prenom_p, '\n')) != NULL) {
                *np = '\0';
            }
            printf("Entrez le code postal\n");
            fgets(code_p, 100, stdin);
            if ((cp = strchr(code_p, '\n')) != NULL) {
                *cp = '\0';
            }
            printf("Entrez la ville\n");
            fgets(ville_p, 100, stdin);
            if ((v = strchr(ville_p, '\n')) != NULL) {
                *v = '\0';
            }
            printf("Entrez le numero de telephone\n");
            fgets(telephone_p, 40, stdin);
            if ((t = strchr(telephone_p, '\n')) != NULL) {
                *t = '\0';
            }
            printf("Entrez le mail\n");
            fgets(mel_p, 100, stdin);
            if ((m = strchr(mel_p, '\n')) != NULL) {
                *m = '\0';
            }
            printf("Entrez la profession\n");
            fgets(profession_p, 100, stdin);
            if ((pp = strchr(profession_p, '\n')) != NULL) {
                *pp = '\0';
            }
            ajouter_client(filename, nom_p, prenom_p, code_p, ville_p, telephone_p, mel_p, profession_p);
            leave = 1;
        }
        if (val == 2) {
            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            char mel_p[100], *m, nv_mel[100], *nvm;
            printf("Entrez le mail à modifier\n");
            fgets(mel_p, 100, stdin);
            if ((m = strchr(mel_p, '\n')) != NULL) {
                *m = '\0';
            }
            printf("Entrez le nouveau mail\n");
            fgets(nv_mel, 100, stdin);
            if ((nvm= strchr(nv_mel, '\n')) != NULL) {
                *nvm = '\0';
            }
            modifier_mel_client(nom, mel_p, nv_mel);
            leave = 1;
        }
        if(val == 3){
            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            char mel_p[100], *m, nv_val[100], *nvm, champ[100], *c;
            printf("Entrez le mail de la personne\n");
            fgets(mel_p, 100, stdin);
            if ((m = strchr(mel_p, '\n')) != NULL) {
                *m = '\0';
            }
            printf("Entrez le champ\n");
            fgets(champ, 100, stdin);
            if ((c= strchr(champ, '\n')) != NULL) {
                *c = '\0';
            }

            printf("Entrez la nouvelle valeur du champ\n");
            fgets(nv_val, 100, stdin);
            if ((nvm= strchr(nv_val, '\n')) != NULL) {
                *nvm = '\0';
            }
            modifier_autres_que_mel_client(nom, mel_p, champ, nv_val);
            leave = 1;
        }
        if(val ==4){
            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            char mel_p[100], *m;
            printf("Entrez le mail à supprimer\n");
            fgets(mel_p, 100, stdin);
            if ((m = strchr(mel_p, '\n')) != NULL) {
                *m = '\0';
            }
            supprimer_client(nom, mel_p);
            leave = 1;
        }
        if(val == 5){
            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            trier_clients_par_nom(nom);
            leave = 1;
        }
        if(val == 6){
            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            filtrer_client_donnee_manquante(nom);
            leave = 1;
        }
        if(val == 7){
            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            printf("Entrez le champ que vous voulez filtrer \n");
            char nom_champ[100], *c, val_chaine[100], *v;
            fgets(nom_champ, 100, stdin);
            if ((c = strchr(nom_champ, '\n')) != NULL) {
                *c = '\0';
            }
            printf("Entrez la valeur a garder\n");
            fgets(val_chaine, 100, stdin);
            if ((v = strchr(val_chaine, '\n')) != NULL) {
                *v = '\0';
            }
            filtrer_un_champ(nom, nom_champ, val_chaine);
            leave = 1;

        }
        if(val == 8){
            printf("Entrez le nom du fichier\n");
            char nom[50], *p;
            fgets(nom, sizeof(nom), stdin);
            if ((p = strchr(nom, '\n')) != NULL) {
                *p = '\0';
            }
            printf("Entrez le champ 2 que vous voulez filtrer \n");
            char nom_champ1[100], *c1, val_chaine1[100], *v1, nom_champ2[100], *c2, val_chaine2[100], *v2;
            fgets(nom_champ1, 100, stdin);
            if ((c1 = strchr(nom_champ1, '\n')) != NULL) {
                *c1 = '\0';
            }
            printf("Entrez la valeur 2 a garder\n");
            fgets(val_chaine1, 100, stdin);
            if ((v1 = strchr(val_chaine1, '\n')) != NULL) {
                *v1 = '\0';
            }
            printf("Entrez le champ 1 que vous voulez filtrer \n");
            fgets(nom_champ2, 100, stdin);
            if ((c2 = strchr(nom_champ2, '\n')) != NULL) {
                *c2 = '\0';
            }
            printf("Entrez la valeur 1 a garder\n");
            fgets(val_chaine2, 100, stdin);
            if ((v2 = strchr(val_chaine2, '\n')) != NULL) {
                *v2 = '\0';
            }
            filtrer_combiner_deux_champs(nom, nom_champ1, val_chaine1, nom_champ2, val_chaine2);
            leave = 1;
        }
    }
    printf("Bisous");



    return 0;
}

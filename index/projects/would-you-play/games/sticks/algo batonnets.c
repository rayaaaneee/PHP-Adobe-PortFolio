#include <stdio.h>

void display(int count);

void play(int *player, int *count);

int askForRemoveCount();

int askForCount();

int askForPlayer();

int main() {

    printf("   ~~~ Jeu des batonnets ~~~\n\n");

    int choice;
    int player;
    int count;

    do {
        printf("Décidez qui commence (0) ou le nombre de bâtonnets (1) : ");
        scanf("%d", &choice);
    } while (choice != 0 && choice != 1);
    
    if (choice == 0) {
        player = askForPlayer();
        count = player == 0 ? 21 : 20;
        printf("Nous jouerons avec %d batonnets.\n", count);
    }

    if (choice == 1) {
        count = askForCount();
        player = count % 4 == 1 ? 0 : 1;
        printf("%s.\n", player == 0 ? "Vous commencez" : "Je commence");
    }

    while (count > 0) {
        display(count);
        play(&player, &count);
    }

    char *message = player == 0 ? "Vous avez gagné !" : "Vous avez perdu !";
    printf("%s\n", message);
    printf("\n   ~~~ Jeu des batonnets ~~~\n");
}

void display(int count) {

    printf("\nNombre de batonnets restant : %d.\n", count);

    for (int i = 0; i < count; i++) {

        printf("|");

        if (i % 5 == 4) {
            printf(" ");
        }

    }

    printf("\n");
}

void play(int *player, int *count) {

    *player = (*player + 1) % 2;

    if (*player == 1) {
        printf("C'est à vous.\n");
        *count -= askForRemoveCount();
        return;
    }

    int toRemove;
    printf("C'est à moi.\n");
    switch ((*count - 1) % 4) {

        case 1:
            toRemove = 1;
            break;

        case 2:
            toRemove = 2;
            break;

        case 3:
            toRemove = 3;
            break;

        default:
            toRemove = 1;
    }

    printf("Je retire %d batonnet%s.\n", toRemove, toRemove > 1 ? "s" : "");
    *count -= toRemove;
}

int askForRemoveCount() {

    int remove;

    do {
        printf("Choisissez le nombre de batonnets à retirer (1, 2 ou 3) : ");
        scanf("%d", &remove);
    } while (remove <= 0 || 3 < remove);

    return remove;
}

int askForCount() {

    int count;

    do {
        printf("Choisissez le nombre de batonnets (minimum 20) : ");
        scanf("%d", &count);
    } while (count < 20);

    return count;
}

int askForPlayer() {

    int player;

    do {
        printf("Choisissez si vous commencez (0) ou si je commence (1) : ");
        scanf("%d", &player);
    } while (player != 0 && player != 1);

    return player;
}

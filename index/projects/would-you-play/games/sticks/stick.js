class stick{
    static lastNbr = 1;
    constructor(){
        this.id = stick.lastNbr++;
    }

    destroy(){
        this.id = "null";
        stick.lastNbr--;
    }
}
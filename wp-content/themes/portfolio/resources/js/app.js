import BurgerMenu from "./parts/BurgerMenu";

class DW_Controller
{
    constructor() {
        // A ce stade-ci, le DOM n'est pas encore prêt car on est dans le <head>
        // Permet d'instancier les classes utilitaires par exemple

    }

    run() {
        // Désormais, le DOM est prêt, on peut commencer à manipuler
        // Permet d'instancier les classes de composants d'interface par exemple
        // ici : this.responsiveMenu = new ResponsiveMenu()
        this.burgerMenu = new BurgerMenu()
    }

}
window.dw = new DW_Controller()
window.addEventListener('load', () => {
    window.dw.run()
})
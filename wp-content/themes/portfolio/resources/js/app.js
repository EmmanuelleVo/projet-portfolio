import BurgerMenu from "./parts/BurgerMenu";
import Language from "./parts/Language";
import JsEnabled from "./parts/JsEnabled";
import Circle from "./Circle";
import {settings} from "./settings";

class DW_Controller
{
    constructor() {
        // A ce stade-ci, le DOM n'est pas encore prêt car on est dans le <head>
        // Permet d'instancier les classes utilitaires par exemple
        this.circles = []
        this.mouse = {x: 0, y: 0}

    }

    run() {
        // Désormais, le DOM est prêt, on peut commencer à manipuler
        // Permet d'instancier les classes de composants d'interface par exemple

        //this.resizeCanvas()
        //this.addEventListeners()

        this.jsEnabled = new JsEnabled()
        this.burgerMenu = new BurgerMenu()
        this.language = new Language()
        //this.circle = new Circle()

    }

    loadCircles() {
        for (let i = 0; i < settings.bubble.maxCount; i++) {
            //this.circles.push(new Circle())
        }
    }

    resizeCanvas() {
        //this.canvas.width = window.innerWidth
        //this.canvas.height = window.innerHeight
    }

    addEventListeners() {
        /*window.addEventListener('resize', () => {
            this.resizeCanvas()
        })*/

        window.addEventListener('mousemove', (e) => {
            this.mouse.x = e.x
            this.mouse.y = e.y
        });
        return this;
    }



}
window.dw = new DW_Controller()
window.addEventListener('load', () => {
    window.dw.run()
})
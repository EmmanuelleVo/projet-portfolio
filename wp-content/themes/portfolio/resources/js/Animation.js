export default class Animation {
    init(canvas, bubbles, mousePointer) {
        this.bubbles = bubbles
        this.mousePointer = mousePointer
        this.canvas = canvas
        this.animate()

        return this
    }


    animate() {
        this.canvas.draw()
        this.bubbles.forEach((bubble) => {
            bubble.update()
        })
        this.mousePointer.update()

        /*requestAnimationFrame(() => {
            this.animate()
        });*/

    }

}
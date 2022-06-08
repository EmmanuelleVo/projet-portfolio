import {random} from "./helpers";
import {settings} from "./settings";

export default class Circle {
    constructor() {
        this.canvas = canvas
        this.ctx = ctx
        this.position = mouse
        this.radius = random(settings.circle.radius.min, settings.circle.radius.max)
        this.color = color
        this.origin = {
            x: this.position.x,
            y: this.position.y
        }
        this.opacity = opacity
    }

    draw() {
        this.ctx.globalAlpha = this.opacity
        this.ctx.fillStyle = this.color
        this.ctx.beginPath()
        this.ctx.arc(this.origin.x, this.origin.y, this.radius, 0, 2 * Math.PI)
        this.ctx.fill()
        this.ctx.closePath()
        this.ctx.globalAlpha = 1

    }

    update() {
        this.origin.x = this.position.x
        this.origin.y = this.position.y
        this.draw()
    }
}
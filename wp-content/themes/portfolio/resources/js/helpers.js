export function random(min, max, ceil = true) {
    if(ceil) {
        return Math.ceil(Math.random() * (max - min) + min)
    }

    return Math.random() * (max - min) + min
}
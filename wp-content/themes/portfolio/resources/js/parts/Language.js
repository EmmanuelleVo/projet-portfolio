export default class Language {
    static get selector() {
        return '.lang__container'
    }

    constructor() {
        this.button = document.querySelector('.lang__current')
        this.arrow = document.querySelector('.arrow-js')
        this.hiddenLang = document.querySelector('.lang__other')

        this.button.addEventListener('click', (e) => {
            this.toggle(e)
        })

        document.addEventListener('click', (e) => {
            this.bodyClick(e)
        })

    }

    toggle(e) {
        e.preventDefault()
        if (this.hiddenLang.classList.contains('lang__hidden')) {
            this.hiddenLang.classList.remove('lang__hidden')
            this.arrow.classList.remove('arrow-down')
            this.arrow.classList.add('arrow-up')
        } else {
            this.hiddenLang.classList.add('lang__hidden')
            this.arrow.classList.remove('arrow-up')
            this.arrow.classList.add('arrow-down')
        }
    }

    bodyClick(e) {
        if(!this.hiddenLang.classList.contains('lang__hidden') && e.target !== this.button) {
            this.hiddenLang.classList.add('lang__hidden')
            this.arrow.classList.remove('arrow-up')
            this.arrow.classList.add('arrow-down')
        }
    }
}
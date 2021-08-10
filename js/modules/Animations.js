let selectBarArrow = document.querySelector('#selectBarArrow')
let selectBarBtn = document.querySelector('#dropdownMenuLink')

const removeClickListener = () => {
    document.removeEventListener('click', rotateArrow)
}

let rotateArrow = (state) => {
    console.log('click event')

    let animation = {}
    if (state === true) {
        animation = {
            css:{rotation: 280},
            ease:Quad.easeInOut
        }
    } else {
        animation = {
            css:{rotation: 90},
            ease:Quad.easeInOut
        }
    }

    TweenMax.from( selectBarArrow, 0.5,
        animation
        )

    removeClickListener()
}

selectBarBtn.addEventListener('click', rotateArrow(true))
document.addEventListener('click', rotateArrow(false))

// !selectBarBtn.classList.contains('show') ? null : null;

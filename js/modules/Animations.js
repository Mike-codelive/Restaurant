let selectBarArrow = document.querySelector('#selectBarArrow')
let selectBarBtn = document.querySelector('#dropdownMenuLink')
let body = document.querySelector('body')

// const removeClickListener = () => {
//     document.removeEventListener('click', rotateArrow)
// }

function rotateArrow(state) {
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

    // removeClickListener()
}

TweenMax.from( selectBarArrow, 0.5,
    {css:{rotation: 90},
    ease:Quad.easeInOut}
    )

selectBarBtn.addEventListener('click', rotateArrow(true))
// body.addEventListener('click', rotateArrow(false))

// !selectBarBtn.classList.contains('show') ? null : null;

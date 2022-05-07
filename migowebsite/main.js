window.addEventListener('DOMContentLoaded', (event) => {
   
let formHolder = document.querySelector('.contact'),
    //email = document.querySelector('label'),
    generalLabel  = document.querySelectorAll('label'),
    welcome = document.querySelectorAll('.sum');

    for (let j = 0; j < generalLabel.length; j++) {
        generalLabel[j].addEventListener('click', function(){
            let sum = 20 * j

            welcome[j].value = sum
        })        
    }
   
    // email.addEventListener('click', function(){
    //     let sum = 2 + 3,
    //         sumInput = document.querySelector('.sum');

    //     sumInput.value = 'Thank you!'
    // });
formHolder.addEventListener('submit', function(){

})

})





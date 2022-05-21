
window.addEventListener('DOMContentLoaded', (event) => {

let valueInput = document.querySelector('#number'),
    base = document.querySelector('#base'),
    button = document.querySelector('.button');

    function calculateTwoNumbers(value = 2, base = 12){
        let data = 0,
            tableBody = document.querySelector('tbody'),
            tableData = '';
        for (let j = 1; j <= base; j++) {
            data = value * j;
            tableData += '<li><strong>' 
                    + j  
                    + '</strong> * ' 
                    + value 
                    +  ' = ' + data + '</li>'     
            }
    
            tableBody.innerHTML = tableData;
 }

button.addEventListener('click', function(){
   button.value = 'Calculatiing....';
   
    setTimeout(
        function(){
            calculateTwoNumbers(valueInput.value, base.value);
            button.value = 'Calculate'
        },
        3000
    )
});


});
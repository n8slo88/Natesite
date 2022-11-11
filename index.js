const progressBar = document.querySelectorAll('.progress-bar')
const about=document.getElementById('clabout')
about.addEventListener('click', go, false)


let num = 0

function addNumber(){
progressBar.forEach(bar=>{
         if (num<bar.getAttribute('valuenow')){
             num+=1
             bar.style.width = `${num}`+"%"
             return num;
        }else{
             return;
            }
    })
}  


function slowAdd(){
    setInterval(addNumber, 100)
}

function go(){
 setTimeout(slowAdd, 500)
}

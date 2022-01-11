let switch = document.querySelector(".switch")
let content = document.querySelector(".contentPage");
let check = true;

switch.addEventListener("click",changeClasses)

function changeClasses(){
    if(check== true){
        document.body.classList.remove("bg-dark")
        content.classList.remove("text-white")
        content.classList.add("text-dark")
        document.body.classList.add("bg-white")
        check=!check;
    }else{
        document.body.classList.remove("bg-white")
        document.body.classList.add("bg-dark")
        content.classList.add("text-white")
        content.classList.remove("text-dark")
        check=!check;
    }


}
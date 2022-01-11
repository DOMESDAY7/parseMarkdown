let switch = document.querySelector(".switch");
let content = document.querySelector(".contentPage");
let check = true;
switch.addEventListener("click",)

function changeClasses(){
    if(check== true){
        document.body.classList.remove("bg-dark")
        document.body.classList.add("bg-white")
        check=!check;
    }else{
        document.body.classList.remove("bg-white")
        document.body.classList.add("bg-dark")
        check=!check;
    }


}
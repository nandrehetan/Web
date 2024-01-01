var bulb = document.querySelector("#bulb")
var btn = document.querySelector("button")

flag=0

btn.addEventListener("click",function(){
        if(flag==0){
                bulb.style.backgroundColor="yellow"
                flag=1
                btn.innerHTML="Switch OFF!"
        }else{
                bulb.style.backgroundColor="red"
                flag=0
                btn.innerHTML="Switch ON!"
        }
        
})
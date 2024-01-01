// 4 pillars of DOM

// 1. Selection of element
// 2. Changing HTML
// 3. Changing CSS
// 4. Event Listeners

var a = document.querySelector("h1")

// 1.Selection of element
var a = document.querySelector("h1")
console.log(a)

// 2. Changing HTML
var a = document.querySelector("h1")
a.innerHTML = "I am god"

// 3. Changing CSS
var a = document.querySelector("h1")
a.style.color="green"

// 4. Event Listeners
var a = document.querySelector("h1")
a.addEventListener("click",function(){
        console.log("Hey, i am GOAT")
        a.innerHTML = "Text changed now, DOM learned!"
})



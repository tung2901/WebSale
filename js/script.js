//------------------------Menu-item------------------------
const toP = document.querySelector(".top")
window.addEventListener("scroll", function(){
    const X = this.pageYOffset;
    if(X > 1){toP.classList.add("active")}
    else {toP.classList.remove("active")}
})

//------------------------Menu-SLIDEBAR-CATEGORY------------------------
const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu, index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    })
})
// ------------------------product------------------
const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if(baoquan) {
    baoquan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display="none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display="block"
    })
}
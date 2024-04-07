//   connexion card    ///////////////////////////
let loginIcon= document.querySelector(".lg");
let loginCard=document.querySelector(".loginCard");
let singUpCard=document.querySelector(".singUpCard");
let removeCard=document.querySelectorAll(".removeCard");
console.log(removeCard);

// loginIcon.addEventListener("click",function(){
//     loginCard.style.display = 'block';
// });
// removeCard[0].addEventListener("click",function(){
//     loginCard.style.display='none'; 
//     singUpCard.style.display='none';
// });
// removeCard[1].addEventListener("click",function(){
//     loginCard.style.display='none'; 
//     singUpCard.style.display='none';
// });

// let t1=document.querySelectorAll(".T1");
// let t2=document.querySelectorAll(".T2");
// t2[0].addEventListener("click",function(){
//     singUpCard.style.display='block';
//     t2[1].style.borderBottom='solid 1px violet';
//     t1[1].style.borderBottom='none';
//     loginCard.style.display = 'none';

// });
// console.log(t1);
// t1[1].addEventListener("click",function(){
//     console.log('login block');
//     loginCard.style.display = 'block';
//     t1[1].style.borderBottom='solid 1px violet';
//     t2[0].style.borderBottom='none';
//     singUpCard.style.display='none';

// });
/////////////////////////////////////////////////////////
// let img1=document.querySelector('#img1');
// function hoverImg(img1){
//     img1.src="images/femme/F1'.webp";
// }

////////////////////////   les boutiques    ////////////////////////////
let boutique=document.querySelector("#boutique");
let listeBoutique=document.querySelector(".boutiques");
boutique.addEventListener("click",function(){
    listeBoutique.style.display="block";  
    boutique.addEventListener("click",function(){
        if(listeBoutique.style.display=="block"){
            listeBoutique.style.display="none";
        }else if(listeBoutique.style.display=="none"){
            listeBoutique.style.display="block";
        }
    })
})

//media 
const nav = document.querySelector(".row"),
//   searchIcon = document.querySelector("#searchIcon"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");

// searchIcon.addEventListener("click", () => {
//   nav.classList.toggle("openSearch");
//   nav.classList.remove("openNav");
//   if (nav.classList.contains("openSearch")) {
//     return searchIcon.classList.replace("uil-search", "uil-times");
//   }
//   searchIcon.classList.replace("uil-times", "uil-search");
// });

navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
  nav.classList.remove("openSearch");
//   searchIcon.classList.replace("uil-times", "uil-search");
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});

// ====the sizes script==== //

// Get all the size elements
const sizeElements = document.querySelectorAll('.size-selector .size');

// Add click event listener to each size element
sizeElements.forEach((sizeElement) => {
  sizeElement.addEventListener('click', () => {
    // Remove the 'selected' class from all size elements
    sizeElements.forEach((el) => {
      el.classList.remove('selected');
    });

    // Add the 'selected' class to the clicked size element
    sizeElement.classList.add('selected');

    // Get the selected size value
    const selectedSize = sizeElement.dataset.value;

    // Do something with the selected size value (e.g., update a variable, send to server, etc.)
    console.log('Selected size:', selectedSize);
  });
});





const vmbtn1 = document.getElementById("vmbtn1");
vmbtn1.addEventListener("click", () =>  {

const parentSwPool = document.getElementsByClassName("gridbox-item")[0];
const para1= document.getElementById("para1");


const p1 = document.createElement('p');
const paranew1 = document.createTextNode("eyu hotel has a restaurant, outdoor swimming pool, a bar and shared lounge in Āwasa. Among the facilities at this property are a kids' club and an ATM, along with free WiFi throughout the entire areas of the hotel. price for REGULAR DAYS 300birr and ON WEEKENDS 400birr.");
p1.appendChild(paranew1);

parentSwPool.replaceChild(p1 ,para1 );

parentSwPool.removeChild(vmbtn1)


});



 
const vmbtn2 = document.getElementById("vmbtn2");
vmbtn2.addEventListener("click", () =>  {

    const parentRoom = document.getElementsByClassName("gridbox-item")[1];
    const para2= document.getElementById("para2");


    const p2 = document.createElement('p');
    const paranew2 = document.createTextNode("The rooms at the resort come with a seating area, a flat-screen TV with cable channels, a safety deposit box and a private bathroom with a shower, bathrobes and slippers. Reserve now and Enjoy!!!!");
   

    p2.appendChild(paranew2);

    parentRoom.replaceChild(p2 ,para2 );

    parentRoom.removeChild(vmbtn2)


});



const vmbtn3 = document.getElementById("vmbtn3");
vmbtn3.addEventListener("click", () =>  {

    const parentFood = document.getElementsByClassName("gridbox-item")[2];
    const para3= document.getElementById("para3");


    const p3 = document.createElement('p');
    const paranew3 = document.createTextNode("This the best healthy place to eat. For any one who needs a healthy, gluten free and cholesterol free food. This is your place. we use dark teff for break everything is healthy. we have delicious food starting from price 100birr. ");
    p3.appendChild(paranew3);

    parentFood.replaceChild(p3 ,para3 );

    parentFood.removeChild(vmbtn3)


});


const vmbtn4 = document.getElementById("vmbtn4");
vmbtn4.addEventListener("click", () =>  {

    const parentWifi = document.getElementsByClassName("gridbox-item")[3];
    const para4= document.getElementById("para4");


    const p4 = document.createElement('p');
    const paranew4 = document.createTextNode("eyu hotel offers self-catering accommodations located in Addis Ababa. Free WiFi access is available and a continental breakfast is served every morning before the sun rises , also wifi is available in every room though out the hotel");
    p4.appendChild(paranew4);

    parentWifi.replaceChild(p4 ,para4 );

    parentWifi.removeChild(vmbtn4)


});



const prev =document.querySelector(".prev");
const next =document.querySelector(".next");

let customersPart1 =document.querySelector(".cust-part1");
let customersPart2 =document.querySelector(".cust-part2");


function prevNextItems(n){
    if(n==1){
    customersPart1.style.display= "none";
    customersPart2.style.display = "grid";

    next.style.display = "none";
    prev.style.display = "flex";

    }

    else if(n==-1){
    customersPart1.style.display= "grid";
    customersPart2.style.display = "none";

    prev.style.display = "none";
    next.style.display = "flex";
    }
}
 
const hamBurger = document.querySelectorAll(".hamburger")[0];
const navBtns = document.getElementsByClassName("nav-btns")[0];

hamBurger.addEventListener("click" , ()=>{
    hamBurger.classList.toggle("is_active");
    navBtns.classList.toggle("is_active");

});






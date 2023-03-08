const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const phoneNumber = document.getElementById("phoneNumber");
const roomType = document.getElementById("roomType");

const submit = document.getElementById("submit");



submit.addEventListener('click' , (e)=>{

    // e.preventDefault();
    checkInput(e);
    
})



const setError = (element, message)=>{

    //display error
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error")
    errorDisplay.innerText = message;

    //add class

    inputControl.className ="input-control error";


}

const setSucess = (element)=>{
    // make errorDisplay empty
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error")
    errorDisplay.innerText = '';

    //  add class
    inputControl.className = "input-control sucess";
 
}



const checkInput = (e)=>{
    const fNameValue=firstName.value.trim();
    const lNameValue=lastName.value.trim();
    var nameRegExp = /^[a-zA-Z]+[a-zA-Z0-9]$/;


    if(fNameValue==='' || fNameValue==null){
        setError(firstName, "*first name can't be empty")   
        e.preventDefault(); 
    }
    else if(!nameRegExp.test(fNameValue)){
        setError(firstName , "invalid name")
    }

    
    else{
        setSucess(firstName);
    }



    // validating for lastname      
    if (lNameValue==='' || lNameValue==null){
        setError(lastName, "*last name can't be empty")   
        e.preventDefault(); 
    }
    else{
        setSucess(lastName);
    }

}




const hamBurger = document.querySelectorAll(".hamburger")[0];
const navBtns = document.getElementsByClassName("nav-btns")[0];

hamBurger.addEventListener("click" , ()=>{
    hamBurger.classList.toggle("is_active");
    navBtns.classList.toggle("is_active");

});
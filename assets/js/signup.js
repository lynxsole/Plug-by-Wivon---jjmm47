const form = document.querySelector("form.signup"),
continueBtn = form.querySelector("input.continueBtn"),
passwrdIn = form.querySelector("input.password"),
confPassIn = form.querySelector("input.confpsswrd"),
errorText = form.querySelector(".errorTxt");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    if (passwrdIn.value === confPassIn.value) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "php/signup.php", true);
        xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status === 200){
                  let data = xhr.response;
                  if(data === "success"){
                    window.location.href="main.php";
                  }else{
                    errorText.style.display = "block";
                    errorText.textContent = data;
                  }
              }
          }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        console.log("test")
    }
    else {
      errorText.style.display = "block";
      errorText.textContent = "Mots de passe non comfirmé";
      confPassIn.style.border = "3px solid tomato"
    }
}
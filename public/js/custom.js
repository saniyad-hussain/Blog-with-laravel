var counter = 0;
function changeBG(){
    var imgs = [
        "url(/storage/background-img/bg3.jpg)",
        "url(/storage/background-img/bg.jpg)",
        "url(/storage/background-img/bg4.jpg)",
      ]
    
    if(counter === imgs.length) counter = 0;
    $("body").css("background-image", imgs[counter]);

    counter++;
}
  
  setInterval(changeBG, 2000);
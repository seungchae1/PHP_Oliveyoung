let cnt=0;

function DropOnclick(){
    cnt++;
    if(cnt%2==0){
      document.getElementById("dropdown-mn").style.width="0px";
      document.getElementById("dropdown-mn").style.height="0px";
      document.getElementById("dropdown-mn").style.border="none";
      document.getElementById("dropdown-mn").style.overflow= "none";
      document.getElementById("dropdown-mn").style.marginTop="0px";
      document.getElementById("menu-title").style.background="white";
      document.getElementById("dropdownMenuLink").style.color="black";
      document.getElementById("text_img").style.width="500px";
      document.getElementById("text_img").style.overflow= "none";
      document.getElementById("circle_btn").style.width="200px";
      document.getElementById("circle_btn").style.overflow= "none";
      if (matchMedia("screen and (max-width: 1023px)").matches){
        document.getElementById("img_mn").style.width="14.2%";
        document.getElementById("img_mn").style.height="335px";
      }
      else{
        document.getElementById("img_mn").style.width="12.15%";
        document.getElementById("img_mn").style.height="433px";
      }
    }
    else{
      if (matchMedia("screen and (max-width: 1023px)").matches){
        document.getElementById("dropdown-mn").style.marginTop="4px";
        document.getElementById("dropdown-mn").style.width="500%";
        document.getElementById("dropdown-mn").style.height="500px";
      } 
      else if(matchMedia("screen and (min-width: 1024px)").matches){
        document.getElementById("dropdown-mn").style.width="1050px";
        document.getElementById("dropdown-mn").style.height="900px";
      }
      document.getElementById("text_img").style.width="0px";
      document.getElementById("text_img").style.overflow= "hidden";
      document.getElementById("circle_btn").style.width="0px";
      document.getElementById("circle_btn").style.overflow= "hidden";
      document.getElementById("img_mn").style.width="0px";
      document.getElementById("img_mn").style.height="0px";
      document.getElementById("img_mn").style.overflow= "hidden";
      document.getElementById("dropdown-mn").style.border="3px solid black";
      document.getElementById("menu-title").style.background="black";
      document.getElementById("dropdownMenuLink").style.color="white";
    }
}
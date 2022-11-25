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

let index=0;
var imgarr=["./img/slide_img2.jpg","./img/slide_img4.jpg","./img/slide_img3.jpg","./img/slide_img5.jpg","./img/slide_img6.jpg","./img/slide_img7.jpg","./img/slide_img8.jpg","./img/slide_img9.jpg"];
function Slide_left(){
  if(index==0) index=imgarr.length;
  document.getElementById("show_img").src=imgarr[--index];
  document.getElementById("slide_cnt").innerText=index+1+"/"+imgarr.length;
}
function Slide_right(){
  if(index==imgarr.length-1) index=-1;
  document.getElementById("show_img").src=imgarr[++index];
  document.getElementById("slide_cnt").innerText=index+1+"/"+imgarr.length;
}

function Change_text(){
  switch(index){
    case 0: 
      document.getElementById("img_top").innerText="올리브영 멤버십";
      document.getElementById("img_mid").innerText="컬러업 혜택UP\n진짜 라스트찬스\n끝까지 도전!\n";
      document.getElementById("img_bottom").innerText="참여자전원100%혜택 증정";
      break;
    case 1: 
      document.getElementById("img_top").innerText="삐아";
      document.getElementById("img_mid").innerText="번짐없이\n또렷한 눈매를\n만들어요\n";
      document.getElementById("img_bottom").innerText="최대30%할인";
      break;
    case 2: 
      document.getElementById("img_top").innerText="헤라";
      document.getElementById("img_mid").innerText="슥- 발라도\n선명한\n맑은 컬러감\n";
      document.getElementById("img_bottom").innerText="최대 15%할인, 증정";
      break;
    case 3: 
      document.getElementById("img_top").innerText="써머스킨케어";
      document.getElementById("img_mid").innerText="답답한 여름피부\n더모 루틴으로\n산뜻하게 바꿔요\n";
      document.getElementById("img_bottom").innerText="더모 제품 구매시 선착순 증정";
      break;
    case 4: 
      document.getElementById("img_top").innerText="올영P!CK";
      document.getElementById("img_mid").innerText="간편하게 바르는\n대체불가\n수분 진정\n";
      document.getElementById("img_bottom").innerText="스킨케어 최대 50%할인";
      break;
    case 5: 
      document.getElementById("img_top").innerText="올영P!CK";
      document.getElementById("img_mid").innerText="집에서도\n완벽한\n메이크업의 비법\n";
      document.getElementById("img_bottom").innerText="미용소품 최대 42%할인";
      break;
    case 6: 
      document.getElementById("img_top").innerText="올영P!CK";
      document.getElementById("img_mid").innerText="셀프로 만드는\n나만의\n여름 헤어컬러\n";
      document.getElementById("img_bottom").innerText="염색약 최대 50%할인";
      break;
    case 7: 
      document.getElementById("img_top").innerText="올영P!CK";
      document.getElementById("img_mid").innerText="무더위에도\n끄떡없는\n메이크업 치트키\n";
      document.getElementById("img_bottom").innerText="여름 색조템 최대 35%할인";
      break;
  }
  if(index==1)
    document.getElementById("text_img").style.color="white";
  else
    document.getElementById("text_img").style.color="black";
}


playAlert = setInterval(function() {
  Slide_right();
  Change_text();
}, 4200);

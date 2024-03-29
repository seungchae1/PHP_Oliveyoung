<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./main.css">
<script src="main.js"></script>
<body>
  <header class="header-all-wrap">
    <div class="header-top">
      <ul class="header-top-ul">
        <?php
          include("conn_db.php");
          if(!isset($_COOKIE['uid']) && !isset($_COOKIE['upass']))
          echo'
          <li><a href="join.php">회원가입</a></li>
          <li class="center"><a href="login.php">로그인</a></li>
          <li><a href="cart.html">장바구니</a></li>';
          else{
            $id = $_COOKIE['uid'];
            $sel = mysqli_query($conn, "select name from olive_join where id='$id';");
            $name = mysqli_fetch_row($sel)[0];
            echo '
            <li class="user_name">'.$name.' 고객님</li>
            <li><a href="logout.php">로그아웃</a></li>
            <li class="center"><a href="login.html">마이페이지</a></li>
            <li><a href="cart.php">장바구니<span class="cart_cnt"> ( 0 )</span></a></li>';
          }
        ?>
        <li class="center">주문배송</li>
        <li>고객센터</li>
        <li class="center">매장안내</li>
        <li>Global</li>
      </ul>
    </div>
    <p style="height:20px;"></p>
    <div class="header-inner">
      <a class="brand"  onClick="window.location.reload()" style="cursor: pointer;" href="index.html">
        <img src="img/logo.png" alt="" width="100%" href="index.html">
      </a>
        <input type="text" class="search-txt"name="search-txt" placeholder="서울라이트PICK 필로소피💖">
        <i class="search-btn" ><img src="img/search_icon.PNG" width="27px"></i>
      
        <ul class="inner-ul">
          <li>오늘드림<img src="./img/thunder_icon.PNG" width="30px"></li>
          <li class="center">관심 매장소식<img src="./img/pointer_icon.PNG" width="20px"></li>
          <li>최근 본 상품<img src="./img/pointer_icon.PNG" width="20px"></li>
        </ul>
    </div>
    <p></p>
    <ul class="nav-pills">
        <li class="nav-item" id="menu-title">
          <div class="dropdown">
            <div onclick="DropOnclick()">
            <a class="menu" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              카테고리
            </a>
          </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdown-mn">
              <li>
                <div class="beauty">
                  <ul class="menu-ul">
                    <li class="menu-head">
                      뷰티
                    </li>
                    <div class="menu-ver">
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">스킨케어 > </p></a>
                      <ul class="menu-item-ul">
                        <li>스킨/로션/올인원</li>
                        <li>에센스/크림</li>
                        <li>미스트/오일</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">마스크팩 > </p></a>
                      <ul class="menu-item-ul">
                        <li>시트팩/패드</li>
                        <li>페이셜팩</li>
                        <li>코팩/패치</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">클렌징 > </p></a>
                      <ul class="menu-item-ul">
                        <li>클렌징폼/젤</li>
                        <li>오일/워터/리무버</li>
                        <li>필링/패드</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">선케어 > </p></a>
                      <ul class="menu-item-ul">
                        <li>선블록</li>
                        <li>태닝/애프터선</li>
                      </ul>
                    </li>
                    </div>
                    <div class="menu-ver">
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">더모 코스메틱 > </p></a>
                      <ul class="menu-item-ul">
                        <li>스킨/로션</li>
                        <li>에센스/크림</li>
                        <li>미스트/오일</li>
                        <li>마스크팩</li>
                        <li>클렌징</li>
                        <li>선케어</li>
                        <li>바디케어</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">메이크업 > </p></a>
                      <ul class="menu-item-ul">
                        <li>립메이크업</li>
                        <li>베이스메이크업</li>
                        <li>아이메이크업</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">네일 > </p></a>
                      <ul class="menu-item-ul">
                        <li>폴리쉬</li>
                        <li>팁/스티커</li>
                        <li>반경화</li>
                        <li>케어</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">바디케어 > </p></a>
                      <ul class="menu-item-ul">
                        <li>워시/스크럽</li>
                        <li>로션/오일</li>
                        <li>제모용품</li>
                        <li>핸드케어</li>
                        <li>립케어</li>
                        <li>바디미스트</li>
                        <li>데오도란트</li>
                        <li>풋케어</li>
                        <li>선물세트</li>
                      </ul>
                    </li>
                  </div>
                  <div class="menu-ver">
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">헤어케어 > </p></a>
                      <ul class="menu-item-ul">
                        <li>샴푸/린스</li>
                        <li>트리트먼트/팩</li>
                        <li>헤어기기</li>
                        <li>헤어브러쉬</li>
                        <li>염색약/펌</li>
                        <li>스타일링</li>
                        <li>탈모케어</li>
                        <li>에센스</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">향수/디퓨저 > </p></a>
                      <ul class="menu-item-ul">
                        <li>여성향수</li>
                        <li>남성향수</li>
                        <li>캔들/디퓨저</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">미용소품 > </p></a>
                      <ul class="menu-item-ul">
                        <li>페이스</li>
                        <li>아이</li>
                        <li>헤어/바디</li>
                        <li>코튼</li>
                        <li>디바이스</li>
                        <li>네일</li>
                        <li>기타소품</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">남성 > </p></a>
                      <ul class="menu-item-ul">
                        <li>스킨케어</li>
                        <li>바디케어</li>
                        <li>헤어케어</li>
                        <li>메이크업</li>
                        <li>쉐이빙</li>
                        <li>향수</li>
                        <li>매너용품</li>
                        <li>건강식품</li>
                      </ul>
                    </li>
                  </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="health_food">
                  <ul class="menu-ul">
                    <li class="menu-head">
                      헬스/푸드
                    </li>
                    <div class="menu-ver">
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">건강/위생용품 > </p></a>
                      <ul class="menu-item-ul">
                        <li>덴탈케어</li>
                        <li>스팟패치/마스크</li>
                        <li>여성/위생용품</li>
                        <li>아이케어</li>
                        <li>운동/헬스/재활용품</li>
                        <li>물티슈/손소독티슈</li>
                        <li>마사지/찜질용품</li>
                        <li>홈케어/의료용품</li>
                        <li>성인용품</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">건강식품 > </p></a>
                      <ul class="menu-item-ul">
                        <li>비타민류</li>
                        <li>장 건강</li>
                        <li>체중 관리</li>
                        <li>이너뷰티 케어</li>
                        <li>여성 건강</li>
                        <li>혈행/눈/간 건강</li>
                        <li>홍삼/면역케어</li>
                        <li>관절/뼈/치아 건강</li>
                        <li>기타(스페셜케어)</li>
                        <li>선물용 건강세트</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">푸드 > </p></a>
                      <ul class="menu-item-ul">
                        <li>식단/이너뷰티</li>
                        <li>간편식/요리</li>
                        <li>디저트/간식</li>
                        <li>생수/음료</li>
                        <li>베이비푸드</li>
                      </ul>
                    </li>
                  </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="life_mn">
                  <ul class="menu-ul">
                    <li class="menu-head">
                      라이프
                    </li>
                    <div class="menu-ver">
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">라이프/홈 > </p></a>
                      <ul class="menu-item-ul">
                        <li>공간방향/제습</li>
                        <li>홈 클리닝</li>
                        <li>생활</li>
                        <li>주방</li>
                        <li>라이프웨어</li>
                        <li>테크</li>
                        <li>홈데코</li>
                        <li>악세서리</li>
                        <li>굿즈</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">반려동물 > </p></a>
                      <ul class="menu-item-ul">
                        <li>강아지 식품</li>
                        <li>강아지 용품</li>
                        <li>고양이 식품</li>
                        <li>고양이 용품</li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><p class="menu-p">베이비 > </p></a>
                      <ul class="menu-item-ul">
                        <li>기저귀</li>
                        <li>분유/이유식/간식</li>
                        <li>스킨/바디케어</li>
                        <li>유아용품</li>
                        <li>베이비 물티슈</li>
                      </ul>
                    </li>
                  </div>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">오특</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">신상</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">랭킹</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">프리미엄관</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">기획전</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">세일</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">기프트카드</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">멤버십/쿠폰</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">이벤트</a>
        </li>
    </ul>
</header>

<div class="imgview">
  <ul class="img_menu" id="img_mn">
    <li class="img_mn_li">기초화장품</li>
    <li class="img_mn_li">더모 코스메틱</li>
    <li class="img_mn_li">메이크업·네일</li>
    <li class="img_mn_li">바디케어</li>
    <li class="img_mn_li">헤어케어</li>
    <li class="img_mn_li">향수/디퓨저</li>
    <li class="img_mn_li">미용소품</li>
    <li class="img_mn_li">남성</li>
    <li class="img_mn_li">건강/위생용품</li>
    <li class="img_mn_li">건강식품</li>
    <li class="img_mn_li">푸드</li>
    <li class="img_mn_li">라이프/홈</li>
    <li class="img_mn_li">반려동물</li>
    <li class="img_mn_li">베이비</li>
    <li class="awards">🏆AWARDS</li>
  </ul>
  <div class="img_text" id="text_img">
    <span class="text-top" id="img_top">올리브영 멤버십</span><p>
    -<p>
    <span class="text-mid" id="img_mid">컬러업 혜택UP<br>
    진짜 라스트찬스<br>
    끝까지 도전!<br></span>
    <span class="text-bottom" id="img_bottom">참여자전원100%혜택 증정</span>
  </div> 
  <div class="circle" id="circle_btn"><button onclick="Slide_left(); Change_text();"><</button><span id="slide_cnt">1/8</span><button onclick="Slide_right(); Change_text();">></button></div>
  <img src="./img/slide_img2.jpg" id="show_img">
</div>

<div class="content_wrap">
  <img src="./img/ad.jpg" width="100%" class="ad_img">
  <div class="recm_wrap">
    <div class="half" id="border_point">
      <div class="text_div">유사한 고객님이<br>많이 구매했어요
        <button class="more">더보기 ></button>
      </div>
      <div class="img_wrap">
        <img src="./img/img1_1.jpg" width="100%">
        <div class="g_name"><br>[한정기획] 투쿨포스쿨 바이로댕<br>쉐딩 (브러쉬 증정기획)</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">16,000</span>원~</span> <span class="n_money"><span class="n_money_num">12,800</span>원~</span>
          <img src="./img/bag_icon.PNG" width="10%" class="bag_icon">
        </p>
        <button class="sale_icon">세일</button>
        <button class="today_icon">오늘드림</button>
      </div>
      <div class="img_wrap">
        <img src="./img/img1_2.jpg" width="100%">
        <div class="g_name"><br>컬러그램 올인원 애교살 메이커</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">9,800</span>원~</span> <span class="n_money"><span class="n_money_num">7,900</span>원~</span>
          <img src="./img/bag_icon.PNG" width="10%" class="bag_icon">
        </p>
        <button class="sale_icon">세일</button>
        <button class="today_icon">오늘드림</button>
      </div>
      <div class="other_recm">다른상품 추천해드릴게요<ul><li id="border_point">1</li><li class="recm_cnt">5</li></ul></div>
    </div>
    <div class="half">
      <div class="text_div">최근 본 상품과<br>연관 상품 추천해드려요
        <button class="more">더보기 ></button>
      </div>
      <div class="img_wrap">
        <img src="./img/img2_1.jpg" width="100%">
        <div class="g_name"><br>[NEW] 데이지크 섀도우 팔레트 (1~13호 단품/ 브러쉬 기획)</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">34,000</span>원~</span> <span class="n_money"><span class="n_money_num">28,900</span>원~</span>
          <img src="./img/bag_icon.PNG" width="10%" class="bag_icon">
        </p>
        <button class="sale_icon">세일</button>
        <button class="coupon_icon">쿠폰</button>
        <button class="present_icon">증정</button>
        <button class="today_icon">오늘드림</button>
      </div>
      <div class="img_wrap">
        <img src="./img/img2_2.jpg" width="100%">
        <div class="g_name"><br>[New] 페리페라 잉크더에어리벨벳 New color 추가</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">9,000</span>원~</span> <span class="n_money"><span class="n_money_num">7,200</span>원~</span>
          <img src="./img/bag_icon.PNG" width="10%" class="bag_icon">
        </p>
        <button class="sale_icon">세일</button>
        <button class="today_icon">오늘드림</button>
      </div>
      <div class="other_recm">다른상품 추천해드릴게요<ul><li id="border_point">1</li><li class="recm_cnt">5</li></ul></div>
    </div>
  </div>

  <div class="weekly">
    <div class="text_title">Weekly Special</div>
    <div class="half">
      <img src="./img/img3_1.jpg" width="100%">
    </div>
    <div class="half">
      <img src="./img/img3_2.jpg" width="100%">
    </div>
  </div>

  <div class="popular">
    <div class="text_title">인기 행사만 모았어요!</div>
    <div class="half" id="border_point" style="background-image: url(./img/img4_1.PNG); background-size: 96.3%; background-repeat: no-repeat; background-position: top;">
      <div class="img_wrap">
        <button class="heart-icon"><img src="./img/heart_icon.PNG" width="100%"></button>
        <img src="./img/img5_1.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">더랩바이블랑두</div>
          <div class="g_name"><br>더랩바이블랑두 올리고 히알루론산 5000토너 500ml+200ml 리필기획</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">34,000</span>원</span> <span class="n_money"><span class="n_money_num">27,100</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="img_wrap">
        <button class="heart-icon"><img src="./img/heart_icon.PNG" width="100%"></button>
        <img src="./img/img5_2.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">더랩바이블랑두</div>
          <div class="g_name"><br>[더랩바이블랑두 올리고 히알루론산<br> 카밍 + 크림(본품80ml+20ml 추가 증정)</div>
          <p class="money_div">
            <span class="n_money"><span class="n_money_num">35,000</span>원</span>
          </p>
        <div class="btn_wrap2">
          <button class="present_icon">증정</button>
          <button class="today_icon">오늘드림</button>
        </div>
        </div>
      </div>
    </div>
    <div class="half" style="background-image: url(./img/img4_2.PNG); background-size: 96.3%; background-repeat: no-repeat; background-position: top;">
      <div class="img_wrap">
        <button class="heart-icon"><img src="./img/heart_icon.PNG" width="100%"></button>
        <img src="./img/img5_3.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">더랩바이블랑두</div>
          <div class="g_name"><br>더랩바이블랑두 올리고 히알루론산 5000토너 500ml+200ml 리필기획</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">34,000</span>원</span> <span class="n_money"><span class="n_money_num">27,100</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="img_wrap">
        <button class="heart-icon"><img src="./img/heart_icon.PNG" width="100%"></button>
        <img src="./img/img5_4.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">더랩바이블랑두</div>
          <div class="g_name"><br>[더랩바이블랑두 올리고 히알루론산 카밍 + 크림(본품80ml+20ml 추가 증정)</div>
          <p class="money_div">
            <span class="f_money"><span class="n_money"><span class="n_money_num">35,000</span>원</span>
          </p>
        <div class="btn_wrap1">
          <button class="sale_icon">세일</button>
          <button class="coupon_icon">쿠폰</button>
          <button class="present_icon">증정</button>
          <button class="today_icon">오늘드림</button>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="keyword">
    <div class="text_title">Catch Keyword</div>
    <div class="half">
      <img src="./img/img6_1.jpg" width="100%">
      <span class="small_title">하루 1,000번 검색되는 블랙헤드</span><p>
      <span>자고 일어나면 또 생기는 검은 점이 지긋지긋하다면</span>
    </div>
    <div class="half">
      <img src="./img/img6_2.jpg" width="100%">
      <span class="small_title">검색량 세 배 증가, 스크럽</span><p>
      <span>까슬까슬한 피부가 신경쓰일 땐 스크럽으로 관리해요</span>
    </div>
    <div class="other_recm">다른 키워드 더보기<ul><li id="border_point">1</li><li class="recm_cnt">5</li></ul></div>
  </div>

  <div class="only">
    <div class="text_title">오직 올리브영에서만</div>
    <div class="piece3_img">
      <img src="./img/img7_1.jpg" width="100%">
    </div>
    <div class="piece3_img" id="mid_img">
      <img src="./img/img7_2.jpg" width="100%">
    </div>
    <div class="piece3_img">
      <img src="./img/img7_3.jpg" width="100%">
    </div>
  </div>

  <div class="how">
    <div class="text_title">이 상품 어때요?</div>
    <hr style="margin-bottom: 3%;">
    <div class="piece4_img">
      <button class="heart-icon"></button>
      <img src="./img/img8_1.jpg" width="100%">
      <div class="g_text">
        <div class="g_brand">그라펜</div>
        <div class="g_name"><br>[빈지노PICK] 그라펜 타투 퍼퓸 원우드<br> 50ml 기프트세트 (롤온 11ml 증정)</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">43,000</span>원</span> <span class="n_money"><span class="n_money_num">36,500</span>원</span>
        </p>
        <div class="btn_wrap1">
          <button class="sale_icon">세일</button>
          <button class="coupon_icon">쿠폰</button>
          <button class="present_icon">증정</button>
          <button class="today_icon">오늘드림</button>
        </div>
      </div>
    </div>
    <div class="piece4_img" id="mid_img1">
      <button class="heart-icon"></button>
      <img src="./img/img8_2.jpg" width="100%">
      <div class="g_text">
        <div class="g_brand">맨소래담</div>
        <div class="g_name"><br>[차준환 Pick] 멘소래담 롤온로션 번들<br> 기획</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">17,900</span>원</span> <span class="n_money"><span class="n_money_num">11,500</span>원</span>
        </p>
        <div class="btn_wrap3">
          <button class="sale_icon">세일</button>
          <button class="coupon_icon">쿠폰</button>
          <button class="today_icon">오늘드림</button>
        </div>
      </div>
    </div>
    <div class="piece4_img" id="mid_img2">
      <button class="heart-icon"></button>
      <img src="./img/img8_3.jpg" width="100%">
      <div class="g_text">
        <div class="g_brand">바이탈뷰티</div>
        <div class="g_name"><br>바이탈뷰티 메타그린 슬림업 14일<br> (2주분) (42정/42정+30정 기획세트 중...</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">19,000</span>원</span> <span class="n_money"><span class="n_money_num">16,700</span>원</span>
        </p>
        <div class="btn_wrap2">
          <button class="sale_icon">세일</button>
          <button class="today_icon">오늘드림</button>
        </div>
      </div>
    </div>
    <div class="piece4_img">
      <button class="heart-icon"></button>
      <img src="./img/img8_4.jpg" width="100%">
      <div class="g_text">
        <div class="g_brand">아베다</div>
        <div class="g_name"><br>[손상모발용] 아베다 데미지 레미디<br> 리스트럭처링 샴푸 250ml</div>
        <p class="money_div">
          <span class="f_money"><span class="f_money_num">39,000</span>원</span> <span class="n_money"><span class="n_money_num">31,200</span>원</span>
        </p>
        <div class="btn_wrap3">
          <button class="sale_icon">세일</button>
          <button class="present_icon">증정</button>
          <button class="today_icon">오늘드림</button>
        </div>
      </div>
    </div>
  </div>

  <div class="h_life">
    <div class="text_title">Healthy Life</div>
    <div class="piece3_img" style="background-image: url(./img/img9_1.jpg); background-size: 160%; background-position: top center;"></div>
    <div class="piece3_img" id="mid_img" style="background-image: url(./img/img9_2.jpg); background-size: 160%; background-position: top center;"></div>
    <div class="piece3_img" style="background-image: url(./img/img9_3.jpg); background-size: 160%; background-position: top center;"></div>
  </div>
  <!--- -->
  <div class="attention">
    <div class="text_title">주목해야 할 브랜드</div>
    <ul class="brand_list">
      <li id="brand_hy">한율</li>
      <li id="brand_bio" onclick="brand_Drop_bio()">바이오더마</li>
      <li id="brand_bln">바렌</li>
      <li id="brand_rtp">락토핏</li>
      <li id="brand_bnt">브로앤팁스</li>
      <li id="brand_kbk">캘빈클라인</li>
    </ul>
    <div id="drop_brand_hy" onclick="brand_Drop_hy()">
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img11_1.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">한율</div>
          <div class="g_name"><br>[단독기획/지성용] 한율 부들밤 말끔피지 모공팩 100ml(+20ml+브러쉬)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">43,000</span>원</span> <span class="n_money"><span class="n_money_num">36,500</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img1">
        <button class="heart-icon"></button>
        <img src="./img/img11_2.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">한율</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">17,900</span>원</span> <span class="n_money"><span class="n_money_num">11,500</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img2">
        <button class="heart-icon"></button>
        <img src="./img/img11_3.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">한율</div>
          <div class="g_name"><br>[율리PICK] NEW 한율 달빛유자 비타C 선크림 기획세트(50ml+20ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">19,000</span>원</span> <span class="n_money"><span class="n_money_num">16,700</span>원</span>
          </p>
          <div class="btn_wrap2">
            <button class="sale_icon">세일</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img11_4.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">한율</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">39,000</span>원</span> <span class="n_money"><span class="n_money_num">31,200</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
    </div>

    
    <div id="drop_brand_bio">
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img10_1.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바이오더마</div>
          <div class="g_name"><br>[단독기획/지성용] 한율 부들밤 말끔피지 모공팩 100ml(+20ml+브러쉬)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">43,000</span>원</span> <span class="n_money"><span class="n_money_num">36,500</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img1">
        <button class="heart-icon"></button>
        <img src="./img/img10_2.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바이오더마</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">17,900</span>원</span> <span class="n_money"><span class="n_money_num">11,500</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img2">
        <button class="heart-icon"></button>
        <img src="./img/img10_3.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바이오더마</div>
          <div class="g_name"><br>[율리PICK] NEW 한율 달빛유자 비타C 선크림 기획세트(50ml+20ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">19,000</span>원</span> <span class="n_money"><span class="n_money_num">16,700</span>원</span>
          </p>
          <div class="btn_wrap2">
            <button class="sale_icon">세일</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img10_4.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바이오더마</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">39,000</span>원</span> <span class="n_money"><span class="n_money_num">31,200</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
    </div>

    <div id="drop_brand_bln">
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img12_1.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바렌</div>
          <div class="g_name"><br>[단독기획/지성용] 한율 부들밤 말끔피지 모공팩 100ml(+20ml+브러쉬)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">43,000</span>원</span> <span class="n_money"><span class="n_money_num">36,500</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img1">
        <button class="heart-icon"></button>
        <img src="./img/img12_2.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바렌</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">17,900</span>원</span> <span class="n_money"><span class="n_money_num">11,500</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img2">
        <button class="heart-icon"></button>
        <img src="./img/img12_3.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바렌</div>
          <div class="g_name"><br>[율리PICK] NEW 한율 달빛유자 비타C 선크림 기획세트(50ml+20ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">19,000</span>원</span> <span class="n_money"><span class="n_money_num">16,700</span>원</span>
          </p>
          <div class="btn_wrap2">
            <button class="sale_icon">세일</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img12_4.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">바렌</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">39,000</span>원</span> <span class="n_money"><span class="n_money_num">31,200</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
    </div>

    <div id="drop_brand_rtp">
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img12_1.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">락토핏</div>
          <div class="g_name"><br>[단독기획/지성용] 한율 부들밤 말끔피지 모공팩 100ml(+20ml+브러쉬)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">43,000</span>원</span> <span class="n_money"><span class="n_money_num">36,500</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img1">
        <button class="heart-icon"></button>
        <img src="./img/img12_2.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">락토핏</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">17,900</span>원</span> <span class="n_money"><span class="n_money_num">11,500</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img2">
        <button class="heart-icon"></button>
        <img src="./img/img12_3.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">락토핏</div>
          <div class="g_name"><br>[율리PICK] NEW 한율 달빛유자 비타C 선크림 기획세트(50ml+20ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">19,000</span>원</span> <span class="n_money"><span class="n_money_num">16,700</span>원</span>
          </p>
          <div class="btn_wrap2">
            <button class="sale_icon">세일</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img12_4.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">락토핏</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">39,000</span>원</span> <span class="n_money"><span class="n_money_num">31,200</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
    </div>


    <div id="drop_brand_bnt">
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img13_1.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">브로앤팁스</div>
          <div class="g_name"><br>[단독기획/지성용] 한율 부들밤 말끔피지 모공팩 100ml(+20ml+브러쉬)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">43,000</span>원</span> <span class="n_money"><span class="n_money_num">36,500</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img1">
        <button class="heart-icon"></button>
        <img src="./img/img13_2.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">브로앤팁스</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">17,900</span>원</span> <span class="n_money"><span class="n_money_num">11,500</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img2">
        <button class="heart-icon"></button>
        <img src="./img/img13_3.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">브로앤팁스</div>
          <div class="g_name"><br>[율리PICK] NEW 한율 달빛유자 비타C 선크림 기획세트(50ml+20ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">19,000</span>원</span> <span class="n_money"><span class="n_money_num">16,700</span>원</span>
          </p>
          <div class="btn_wrap2">
            <button class="sale_icon">세일</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img13_4.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">브로앤팁스</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">39,000</span>원</span> <span class="n_money"><span class="n_money_num">31,200</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
    </div>



    <div id="drop_brand_kbk">
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img14_1.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">캘빈클라인</div>
          <div class="g_name"><br>[단독기획/지성용] 한율 부들밤 말끔피지 모공팩 100ml(+20ml+브러쉬)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">43,000</span>원</span> <span class="n_money"><span class="n_money_num">36,500</span>원</span>
          </p>
          <div class="btn_wrap1">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img1">
        <button class="heart-icon"></button>
        <img src="./img/img14_2.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">캘빈클라인</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">17,900</span>원</span> <span class="n_money"><span class="n_money_num">11,500</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="coupon_icon">쿠폰</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img" id="mid_img2">
        <button class="heart-icon"></button>
        <img src="./img/img14_3.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">캘빈클라인</div>
          <div class="g_name"><br>[율리PICK] NEW 한율 달빛유자 비타C 선크림 기획세트(50ml+20ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">19,000</span>원</span> <span class="n_money"><span class="n_money_num">16,700</span>원</span>
          </p>
          <div class="btn_wrap2">
            <button class="sale_icon">세일</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
      <div class="piece4_img">
        <button class="heart-icon"></button>
        <img src="./img/img14_4.jpg" width="100%">
        <div class="g_text">
          <div class="g_brand">캘빈클라인</div>
          <div class="g_name"><br>한율 어린쑥수분진정앰플세럼 기획 28ml(+토너18ml+크림 8ml)</div>
          <p class="money_div">
            <span class="f_money"><span class="f_money_num">39,000</span>원</span> <span class="n_money"><span class="n_money_num">31,200</span>원</span>
          </p>
          <div class="btn_wrap3">
            <button class="sale_icon">세일</button>
            <button class="present_icon">증정</button>
            <button class="today_icon">오늘드림</button>
          </div>
        </div>
      </div>
    </div>

  </div>
<footer>
  <ul class="footer_ul">
    <li class="footer_center">회사소개</li>
    <li class="footer_center">채용안내</li>
    <li class="footer_center">가맹점 개설문의</li>
    <li class="footer_center">상품입점 및 제휴문의</li>
    <li class="footer_center">사이버 감사실</li>
    <li>고객센터</li>
  </ul>
  <ul class="footer_more">
    <li class="logo_list"><img src="./img/logo.png" width="100%"></li>
    <li style="width: 35%;">
      <ul>
        <li class="point_text">씨제이올리브영 주식회사</li>
        <li>대표이사 : 구창근 | 사업자등록번호 : 809-81-01574</li>
        <li>주소 : (04323) 서울특별시 용산구 한강대로 372, 24층(동자동, KDB타워)</li>
        <li>호스팅사업자 : CJ 올리브네트웍스</li>
        <li>통신판매업신고번호 : 2019-서울용산-1428</li>
        <li>이메일 : oliveweb@cj.net</li>
        <li>사업자 정보확인 > </li>
      </ul>
    </li>
    <li class="center" style="width: 18%;">
      <ul>
        <li>이용약관 · 법적고지</li>
        <li class="point_text">개인정보처리방침</li>
        <li>청소년보호방침</li>
        <li>영상정보처리기기 운영/관리 방침</li>
        <li>이메일무단수집거부</li>
      </ul>
    </li>
    <li style="width: 24.5%;">
      <ul>
        <li class="point_text">하나은행 구매안전 서비스</li>
        <li>올리브영은 현금 결제한 금액에 대해</li>
        <li>하나은행과 채무지급보증 계약을체결하여 안전한 거래를 보장하고 있습니다</li>
        <li>서비스 가입사실 확인></li>
      </ul>
    </li>
  </ul>
  <div class="footer_div"></div>
</footer>
</body>
</html>
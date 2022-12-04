<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./GoodsDetail.css">
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
          <li><a href="cart.php">장바구니</a></li>';
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
      <a class="brand"  onClick="window.location.reload()" style="cursor: pointer;" href="index.php">
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
        </ul>
        <ul class="category">
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
<?php
  include("conn_db.php");
  $sql ="select brand, name, price, sale, s_icon, t_icon, p_icon, c_icon, review, head_img from goods where id=1;";
  $sel = mysqli_query($conn, $sql);
  $re=mysqli_fetch_row($sel);
  $brand = $re[0];
  $name = $re[1];
  $price =  $re[2];
  $sale = $re[3];
  $s_icon = $re[4];
  $t_icon = $re[5];
  $p_icon = $re[6];
  $c_icon = $re[7];
  $headImg = $re[9];
?>
<div class="background">
    <img src="<?php echo $headImg; ?>" class="goodsImg"></button>
    <div class="goods_impormation">
    <a class="g_brand"><?php echo $brand;?>></a><p></p>
    <span class="g_name"><?php echo $name;?></span><p></p>
    <span class="price"><?php echo $price;?></span><span class="priceW">원</span> <span class="priceS"><?php echo $sale;?>원</span><p></p>
    <?php if($s_icon){?><div id="sale_icon">세일</div> <?php } if($t_icon){?><div id="today_icon">오늘드림</div> <?php }if($p_icon){?><div id="present_icon">증정</div> <?php } if($c_icon){?><div id="coupon_icon">쿠폰</div><?php }?>
    <div class="d_impormation">
        <div class="d_head_div">
            <div class="d_head">배송정보</div>
            <div class="d_h">일반배송</div>	
                <div class="d_h_d">2,500원 ( 20,000원 이상 무료배송 )</div> <br>
            <div class="d_h">오늘드림</div>
                <div class="d_h_d">2,500원 또는 5,000원 배송 </div>
        </div>
        <div class="d_head_div">
            <div class="d_head">결제혜택</div>
            <div class="d_h_d2"> CJ 카드 추가 10%할인 카드혜택가 안내<br>
                CJ ONE 포인트 BABY OLIVE 1% 적립 예상 CJ ONE 포인트 예상적립</div>
        </div>
    </div>
    <button class="cart">장바구니</button>
    </div>
    <div class="detail_text">상품설명</div>
    <div class="detail">
        <img src="./img/test_detail.jpg">
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
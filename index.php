<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>텀블벅</title>


    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
    />

    <!-- CSS Style Link -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" href="css/slider.css" />

    <!-- jquery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    <!-- JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  </head>
  <body>
    <div class="wrap">
      <!-- header -->
      <?php include $_SERVER["DOCUMENT_ROOT"]."/tumblbug/include/header.php"; ?>
      <div class="scBt">
        <div class="topBtn">
        <button class="scrollBtn" onclick="#">
        <i class="fa fa-angle-double-up"></i>
        </button>
        </div>
      </div>

        <div class="center sliderCenter">

        <div class="main-content">

<div class="recipe-wrapper">

  <div class="navigation">
    <i class="js-navigate js-left disabled icon-arrow-left-circle icons">
    </i>
    <i class="js-navigate js-right icon-arrow-right-circle icons">   
    </i>
  </div>

  <div class="recipe-image">

    <div class="recipe active">
      <img
        class="pie-photo"
        src="img/slider1.jpg"
      />
    </div>

    <div class="recipe">
      <img
        class="pie-photo"
        src="img/slider2.jpg"
      />
    </div>

    <div class="recipe">
      <img
        class="pie-photo"
        src="img/slider3.jpg"
      />
    </div>

    <div class="recipe">
      <img
        class="pie-photo"
        src="img/slider4.jpg"
      />
    </div>

    <div class="recipe">
      <img
        class="pie-photo"
        src="img/slider5.png"
      />
    </div>

    <div class="recipe">
      <img
        class="pie-photo"
        src="img/slider6.png"
      />
    </div>

  </div>

  <div class="recipe-content">
      
    <div class="recipe active">
      <div class="recipe-page">1 / 6</div>
      <div class="recipe-content-inner" style="background:#d89687">
        <h1 class="pie-name">
          차분히 <br> 기다리면
        </h1>
        <div class="pie-context">
         3개월 이상 소요 되는 장기 프로젝트
        </div>
      </div>
    </div>

    <div class="recipe">
      <div class="recipe-page ">2 / 6</div>
      <div class="recipe-content-inner"
      style="background:#f88b02">
        <h1 class="pie-name">수납에 </br>색을 더해요</h1>
        <div class="pie-context">
        다양한 연출이 가능한</br>매거진 맥 Rayon
        </div>
      </div>
    </div>
    
    <div class="recipe">
      <div class="recipe-page">3 / 6</div>
      <div class="recipe-content-inner"
      style="background:#1a2874">
        <h1 class="pie-name">비대면 방탈출 </br>물오름달 열닷새</h1>
        <div class="pie-context">
        경주의 숨은 명소를 찾아 </br>
                    시간여행을 떠나자
        </div>
      </div>
    </div>

    <div class="recipe">
      <div class="recipe-page">4 / 6</div>
      <div class="recipe-content-inner"
      style="background:#582e37">
        <h1 class="pie-name">모험의 배경은 </br>익명의 sns</h1>
        <div class="pie-context">
        인플루언서 사이에</br>사건의 실마리가 있다
        </div>
      </div>
    </div>

    <div class="recipe">
      <div class="recipe-page">5 / 6</div>
      <div class="recipe-content-inner"
      style="background:#bfa690">
        <h1 class="pie-name">여행을</br>소장하는 방법</h1>
        <div class="pie-context">
        떠나지 않고도 여행지를</br>가까이 하는 아이디어들
        </div>
      </div>
    </div>

    <div class="recipe">
      <div class="recipe-page">6 / 6</div>
      <div class="recipe-content-inner"
      style="background:#6bafac">
        <h1 class="pie-name">플라스틱을 덜어내는</br>새로운 제작시도를</h1>
        <div class="pie-context">
        창작자를 위한 실험실</br>CLAP 3기 '플라스틱
        </div>
      </div>
    </div>

  </div>
</div>
             <!-- <div class="navi1">
                <div class="prev1">
                  <i class='fa fa-chevron-circle-left'></i>
                </div>

                <div class="next1">
                  <i class='fa fa-chevron-circle-right'></i>
                </div>
              </div> -->
              <!-- end of navi1 -->
              
              <!-- <div></div> -->
<!-- 
              <div class="slider">

                <div class="img-box">
                  <img src="img/slider1.jpg" alt="" />
                  <div class="item1">
                      <ul class="sliderText">
                        <h1>차분히 </br>기다리면</h1></br>
                        <h4>3개월 이상 소요되는장기프로젝트</h4>
                      </ul>
                  </div>
                </div>

                <div class="img-box">
                  <img src="img/slider2.jpg" alt="" />
                  <div class="item2">
                    <ul class="sliderText">
                    <h1>수납에 </br>색을 더해요</h1></br>
                    <h4>다양한 연출이 가능한</br>매거진 맥 Rayon</h4>
                    </ul>
                  </div>
                </div>
    
                <div class="img-box">
                  <img src="img/slider3.jpg" alt="" />
                  <div class="item3">
                    <ul class="sliderText">
                    <h1>비대면 방탈출 </br>물오름달 열닷새</h1></br>
                    <h4>경주의 숨은 명소를 찾아 </br>
                    시간여행을 떠나자</h4>
                    </ul>
                  </div>
                </div>
 
                <div class="img-box">
                  <img src="img/slider4.jpg" alt="" />
                  <div class="item4">
                    <ul class="sliderText">
                    <h1>모험의 배경은 </br>익명의 sns</h1></br>
                    <h4>인플루언서 사이에</br>사건의 실마리가 있다</h4>
                  </ul>
                 </div>
                </div>
       
                <div class="img-box">
                  <img src="img/slider5.png" alt="" />
                  <div class="item5">
                    <ul class="sliderText">
                    <h1>여행을</br>소장하는 방법</h1></br>
                    <h4>떠나지 않고도 여행지를</br>가까이 하는 아이디어들</h4>
                    </ul>
                  </div>
                </div>

                <div class="img-box">
                  <img src="img/slider6.png" alt="" />
                  <div class="item6">
                    <ul class="sliderText">
                    <h1>플라스틱을 덜어내는 </br>새로운 제작 시도를</h1></br>
                    <h4>창작자를 위한 실험실</br>CLAP 3기 '플라스틱'</h4>
                    </ul>
                  </div>
                </div>

              </div>  -->
              <!-- end of slider -->
        </div>
      <!-- end of slider center -->


      <div class="center projectCenter">
        <div class="prjTit">주목할 만한 프로젝트</div>

        <div class="project">
          
          <div class="prjBox">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
            <div class="prjImg">
              <a href="#">
                <img src="img/project1.jpg" alt="prjImg">
              </a>
            </div>
            <p>만화 * 웹툰 리소스 | Enable Soft</p>
            <h3>웹툰용 메신저 프로그램(EnableToon)</h3>
            <h4>2780% 달성</h4>
          </div>

          <div class="prjBox">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
          <div class="prjImg">
            <a href="#">
          <img src="img/project2.jpg" alt="prjImg">
          </a>
            </div>
            <p>음료 | 위아루이</p>
            <h3>오로라는 어떤 맛일까?<오로라&위키드 루이보스></h3>
            <h4>278% 달성</h4>
          </div>

          <div class="prjBox">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
          </div>
          <div class="prjImg">
            <a href="#">
          <img src="img/project3.jpg" alt="prjImg">
          </a>
            </div>
          <p>제품 디자인 | FLOPPY DESIGN STUDIO</p>
            <h3>책을 담은 수건<타월북 with 이슬아 작가></h3>
            <h4>73% 달성</h4>
          </div>

          <div class="prjBox">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
          <div class="prjImg">
            <a href="#">
          <img src="img/project4.jpg" alt="prjImg">
          </a>
            </div>
          <p>일러스트레이션 | 502</p>
            <h3>전사들의 끝없는 싸움<Warriors>
            </h3>
            <h4></br>193% 달성</h4>
          </div>

          <div class="prjBox">
            <div class="prjImg">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
            <a href="#">
          <img src="img/project5.jpg" alt="prjImg">
          </a>
            </div>
          <p>웹툰 | 사자솜</p>
            <h3>사자와 함께 제주도 가자! 제주도를 담은 인형과 파우치<18% 달성></h3>
            <h4>73% 달성</h4>
          </div>

          <div class="prjBox">
            <div class="prjImg">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
            <a href="#">
          <img src="img/project6.jpg" alt="prjImg">
          </a>
            </div>
          <p>팝 음악 | 문소낙</p>
            <h3>문소낙 'way too deep', CD's and more</h3>
            <h4></br>122% 달성</h4>
          </div>

          <div class="prjBox">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
          <div class="prjImg">
            <a href="#">
          <img src="img/project7.jpg" alt="prjImg">
          </a>
            </div>
          <p>도예 | moments of 유진</p>
            <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
            <h4></br>68% 달성</h4>
          </div>

          <div class="prjBox">
            <div class="heart">
              <a href="#">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
          <div class="prjImg">
            <a href="#">
          <img src="img/project8.jpg" alt="prjImg">
          </a>
            </div>
          <p>공예 | 신하루</p>
            <h3>몸과 마음이 지친 이를 위한 힐링 모빌, 담쟁이 모빌</h3>
            <h4></br>41% 달성</h4>
          </div>

        </div>
        <!-- end of project1 -->

        <div class="prjTit"><a href="#">공개 예정 프로젝트</a>
        <i class="fa fa-angle-right"></i>
        </div>
        

        <div class="project">

          <div class="prjBox">
            <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>
            <div class="prjImg">
              <a href="#">
              <img src="img/project9.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>

            <div class="prjBox">
              <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>
              <div class="prjImg">
              <a href="#">
              <img src="img/project10.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>

            <div class="prjBox">
              <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>
              <div class="prjImg">
              <a href="#">
              <img src="img/project11.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>

            <div class="prjBox">
              <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>
              <div class="prjImg">
              <a href="#">
              <img src="img/project12.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>

            <div class="prjBox">
              <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>
              <div class="prjImg">
              <a href="#">
              <img src="img/project13.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>

            <div class="prjBox">
              <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>  
              <div class="prjImg">
              <a href="#">
              <img src="img/project14.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>

            <div class="prjBox">
              <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>
              <div class="prjImg">
              <a href="#">
              <img src="img/project15.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>
            
            <div class="prjBox">
              <div class="heart">
                <a href="#">
                  <i class="fa fa-heart-o"></i>
                </a>
              </div>
              <div class="prjImg">
              <a href="#">
              <img src="img/project16.jpg" alt="">
              </a>
              </div>
            <p>도예 | moments of 유진</p>
              <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
              <h4>68% 달성</h4>
            </div>    

        </div>
        <!-- end of project2 -->

        <div class="loadmoreBtn">
          <a href="">
          <button class=loadMore>공개 예정 프로젝트 더보기</button>
          </a>
        </div>

        <div class="prjTit"> 진행중인 기획전</div>
         <div class="navi2">
                <div class="prev2">
                   <i class='fa fa-chevron-circle-left'></i>
                 </div>
                <div class="next2">
                  <i class='fa fa-chevron-circle-right'></i>
                </div>
            </div>
            <!-- end of navi2 -->

        <div class="progress">

            <div class="progressBox">
              <div class="progressImg">
                <a href="#">
                  <img src="img/progress1.png" alt="">
                </a>
              </div>
              <h3>CLAP 3기 : Plastic</h3>
              <h4><span>26개</span>프로젝트</h4>
            </div> 

              <div class="progressBox">
                <div class="progressImg">
                  <a href="#">
                  <img src="img/progress2.jpg" alt="">
                  </a>
                </div>
                  <h3>여행을 소장하는 방법</h3>
                  <h4><span>26개</span>프로젝트</h4>
              </div>    

              <div class="progressBox">
                <div class="progressImg">
                  <a href="#">
                  <img src="img/progress3.jpg" alt="">
                  </a>
                </div>
                  <h3>장기프로젝트</h3>
                  <h4><span>26개</span>프로젝트</h4>
              </div>   

              <div class="progressBox">
                <div class="progressImg">
                  <a href="#">
                  <img src="img/progress4.jpg" alt="">
                  </a>
                </div>
                  <h3>가족이란</h3>
                  <h4><span>26개</span>프로젝트</h4>
              </div>    

              <div class="progressBox">
                <div class="progressImg">
                  <a href="#">
                  <img src="img/progress5.jpg" alt="">
                  </a>
                </div>
                  <h3>영상으로 만나보시죠</h3>
                  <h4><span>44개</span>프로젝트</h4>
              </div>  
              
              <div class="progressBox">
                <div class="progressImg">
                  <a href="#">
                  <img src="img/progress6.jpg" alt="">
                  </a>
                </div>
                  <h3>소재의 반전</h3>
                  <h4><span>26개</span>프로젝트</h4>
              </div> 

              <div class="progressBox">
                <div class="progressImg">
                  <a href="#">
                  <img src="img/progress7.jpg" alt="">
                  </a>
                </div>
                  <h3>원대한 목표</h3>
                  <h4><span>26개</span>프로젝트</h4>
              </div>  


          </div>   
          <!-- end of project5   -->


          <div class="prjTit"><a href="">인기 추천 프로젝트</a>
          <i class="fa fa-angle-right"></i></div>

            <div class="project">
              
              <div class="prjBox">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
                </div>
                <div class="prjImg">
                  <a href="#">
                    <img src="img/best1.jpg" alt="prjImg">
                  </a>
                </div>
                <p>만화 * 웹툰 리소스 | Enable Soft</p>
                <h3>웹툰용 메신저 프로그램(EnableToon)</h3>
                <h4>2780% 달성</h4>
              </div>

              <div class="prjBox">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
                </div>
              <div class="prjImg">
                <a href="#">
              <img src="img/best2.jpg" alt="prjImg">
              </a>
                </div>
                <p>음료 | 위아루이</p>
                <h3>오로라는 어떤 맛일까?<오로라&위키드 루이보스></h3>
                <h4>278% 달성</h4>
              </div>

              <div class="prjBox">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
              </div>
              <div class="prjImg">
                <a href="#">
              <img src="img/best3.jpg" alt="prjImg">
              </a>
                </div>
              <p>제품 디자인 | FLOPPY DESIGN STUDIO</p>
                <h3>책을 담은 수건<타월북 with 이슬아 작가></h3>
                <h4>73% 달성</h4>
              </div>

              <div class="prjBox">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
                </div>
              <div class="prjImg">
                <a href="#">
              <img src="img/best4.jpg" alt="prjImg">
              </a>
                </div>
              <p>일러스트레이션 | 502</p>
                <h3>전사들의 끝없는 싸움<Warriors></h3>
                <h4></br>193% 달성</h4>
              </div>

              <div class="prjBox">
                <div class="prjImg">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
                </div>
                <a href="#">
              <img src="img/best5.jpg" alt="prjImg">
              </a>
                </div>
              <p>웹툰 | 사자솜</p>
                <h3>사자와 함께 제주도 가자! 제주도를 담은 인형과 파우치<18% 달성></h3>
                <h4>73% 달성</h4>
              </div>

              <div class="prjBox">
                <div class="prjImg">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
                </div>
                <a href="#">
              <img src="img/best6.jpg" alt="prjImg">
              </a>
                </div>
              <p>팝 음악 | 문소낙</p>
                <h3>문소낙 'way too deep', CD's and more</h3>
                <h4></br>122% 달성</h4>
              </div>

              <div class="prjBox">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
                </div>
              <div class="prjImg">
                <a href="#">
              <img src="img/best7.jpg" alt="prjImg">
              </a>
                </div>
              <p>도예 | moments of 유진</p>
                <h3>집으로 도자기 공방을 배달해 드려요,<도캉스 키트></h3>
                <h4></br>68% 달성</h4>
              </div>

              <div class="prjBox">
                <div class="heart">
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                  </a>
                </div>
              <div class="prjImg">
                <a href="#">
              <img src="img/best8.jpg" alt="prjImg">
              </a>
                </div>
              <p>공예 | 신하루</p>
                <h3>몸과 마음이 지친 이를 위한 힐링 모빌, 담쟁이 모빌</h3>
                <h4></br>41% 달성</h4>
              </div>
  
              </div>    
            <!-- end of project4     -->
            
            <div class="loadmoreBtn">
              <a href="">
              <button class=loadMore>인기 프로젝트 더보기</button>
              </a>
            </div>

      </div>
      <!-- end of projectcenter -->
      <!-- Footer -->
      <?php include $_SERVER["DOCUMENT_ROOT"]."/tumblbug/include/footer.php"; ?>
    </div>
    <!-- end of wrap -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/slider.js"></script>
  </body>
</html>

<?php
    echo "hello_world!";
?>

<html>
<head>
    <meta charset="utf-8">
    <title>catagory</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="catagory.css"/>
</head>
<body>
<div class = "container">
    <div id="name_header">
        <p>SID Laboratory</p>
    </div>
    <div id="top_header">
        <div class="nav nav_left">
            <a href="#1"><img src="search.png"></a>
        </div>
        <div class='nav nav_right'>
            <a href="cartpage.html" target="_blank"><img src="shopping-cart.png"></a>
            <a href="#3"><img src="user.png"></a>
        </div>
    </div>
    <br>
    <div id="top_catagory">
        <div class="menu_button">
            <img src="menu.png">
        </div>
        <div class="list_buttons">
            <div class="list_button prev_button">&lang;&lang;</div>
            <div class="list_button">1</div>
            <div class="list_button">2</div>
            <div class="list_button">3</div>
            <div class="list_button next_button">&rang;&rang;</div>
        </div>
        <div class="sort_buttons">
            <div class="sort_button first_button">판매량순</div>
            <div class="sort_button below_button">낮은 가격순</div>
            <div class="sort_button below_button" style="border-top: 0px;">높은 가격순</div>
        </div>
        <script type="text/javascript">
            const clicksort = document.querySelector(".first_button");
            let belowdisplay = document.querySelectorAll(".below_button");
            clicksort.addEventListener('click', function(){showhideBelow()});
            function showhideBelow(){
                if (belowdisplay[0].style.display == "none"){
                
                    for(var i =0;i<belowdisplay.length;i++){
                        belowdisplay[i].style.display = "block";
                    }
                }
                else{
                    for(var i =0;i<belowdisplay.length;i++){
                        belowdisplay[i].style.display = "none";
                    }
                }
            }
        </script>
    </div>
    <div id="middle">
        <div class="left_catagory">                                     
            <div class ="move_catagories">
                <a href="#4"><div>Running</div></a>
                <br>
                <a href="#5"><div>Canvas</div></a>
            </div>
        </div>
        
        <div class="main_items_container">
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
            <div class="item_container">
                <div class="item_img">
                    <img src="item1.png">
                </div>
                <div class="item_explain">
                    <p id="name">나이키 에어 포스 1 '07</p>
                    <p>139,000 원</p>
                </div>
            </div>
        </div>
            
            <script type="text/javascript">/*  딜레이 이미지 로딩
                const item_img = document.querySelectorAll('.item_img');
                image = new Image();
                image.src = "item1.png";
                image.onload = function(){
                    setTimeout(function() {item_img[0].appendChild(image);}, 2000);
                };*/
            </script>
    </div>
    <script type="text/javascript">
        const clickmenu = document.querySelector(".menu_button");
        let leftdisplay = document.querySelector(".left_catagory");
        let rightwidth = document.querySelector(".main_items_container");
        let catagory_visible = document.querySelector(".move_catagories");
        clickmenu.addEventListener("click", function(){extentionright()});
        function extentionright(){
            if(leftdisplay.style.width =="0%"){
                rightwidth.style.width = "85%";
                leftdisplay.style.width = "15%";
                catagory_visible.style.visibility = "visible";
            }
            else{
                rightwidth.style.width = "100%";
                leftdisplay.style.width = "0%";
                catagory_visible.style.visibility = "hidden";
            }
             
        }
    </script> 

    <div id="bottom_catagory">
        <div class="list_buttons">
            <div class="list_button prev_button">&lang;&lang;</div>
            <div class="list_button">1</div>
            <div class="list_button">2</div>
            <div class="list_button">3</div>
            <div class="list_button next_button">&rang;&rang;</div>
        </div>
    </div>
    <br>
    <div id="bottom">
        
    </div>
</div>

</body>


</html>
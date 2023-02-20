<div class="row mb">
        <div class="boxtrai mr">
            <div class="row">
                <div class="banner">
                                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <img src="./images/banner1.jpg" >
                    </div>

                    <div class="mySlides fade">
                    <img src="./images/banner4.jpg" >
                    </div>

                    <div class="mySlides fade">
                    <img src="./images/banner3.jpg">
                    </div>

                    <!-- Next and previous buttons
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp '.$mr.'">
                                <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                <p>$'.$price.'</p>
                                <a href="'.$linksp.'"><p>'.$name.'</p></a>
                            </div>';
                            $i+=1;
                    }
                ?>
                <!-- <div class="boxsp mr">
                    <div class="row img"><img src="./images/ace1.jfif" alt=""></div>
                    <p>$9</p>
                    <a href="#"><p>Ace Chữ Thập</p></a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"><img src="./images/luffy1.jfif" alt=""></div>
                    <p>$10</p>
                    <a href="#"><p>Luffy Gear 4 King Kong</p></a>
                </div>
                <div class="boxsp">
                    <div class="row img"><img src="./images/edwardnewgate1.jfif" alt=""></div>
                    <p>$8</p>
                    <a href="#"><p>Râu Trắng Edward Newgate</p></a>
                </div>
            </div>

            <div class="row">
                <div class="boxsp mr">
                    <div class="row img"><img src="./images/sanji1.jfif" alt=""></div>
                    <p>$7</p>
                    <a href="#"><p>Sanji Hắc Cước</p></a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"><img src="./images/luffy2.jfif" alt=""></div>
                    <p>$11</p>
                    <a href="#"><p>Luffy Gear 4 Snake Man</p></a>
                </div>
                <div class="boxsp">
                    <div class="row img"><img src="./images/zoro1.jfif" alt=""></div>
                    <p>$8</p>
                    <a href="#"><p>Roronoa Zoro Hắc Kiếm</p></a>
                </div>
            </div>

            <div class="row">
                <div class="boxsp mr">
                    <div class="row img"><img src="./images/ace2.jfif" alt=""></div>
                    <p>$8</p>
                    <a href="#"><p>Ace Hỏa Quyền</p></a>
                </div>
                <div class="boxsp mr">
                    <div class="row img"><img src="./images/marco.jfif" alt=""></div>
                    <p>$7</p>
                    <a href="#"><p>Marco Phượng Hoàng</p></a>
                </div>
                <div class="boxsp">
                    <div class="row img"><img src="./images/zoro2.jfif" alt=""></div>
                    <p>$9</p>
                    <a href="#"><p>Roronoa Zoro Wano trên mái</p></a>
                </div> -->
            </div>
        </div>
        <div class="boxphai ">
            <?php
            include "boxright.php";
            ?>
        </div>
    </div>
<?php
    for($i = 0 ; $i < $filas ; $i++){
        ?>
            <div class="cubes-row">
        <?php
        if(($i % 2) == 0){
            for($j = 0 ; $j < ($cubos) ; $j++){
            ?>
                <div class="cubes-wrap">
                    <div class="cube">
                        <div class="front">
                            <span class="first"></span>
                            <span class="second"></span>
                        </div>
                        <div class="back"></div>
                        <div class="top">
                            <span class="first"></span>
                            <span class="second"></span>
                            <span class="third"></span>
                            <span class="fourth"></span>
                        </div>
                        <div class="bottom"></div>
                        <div class="left">
                            <span class="first"></span>
                            <span class="second"></span>
                        </div>
                        <div class="right"></div>
                    </div>
                </div>
            <?php
            }
        }else{
            for($j = 0 ; $j < ($cubos-1) ; $j++){
            ?>
                <div class="cubes-wrap">
                    <div class="cube">
                        <div class="front">
                            <span class="first"></span>
                            <span class="second"></span>
                        </div>
                        <div class="back"></div>
                        <div class="top">
                            <span class="first"></span>
                            <span class="second"></span>
                            <span class="third"></span>
                            <span class="fourth"></span>
                        </div>
                        <div class="bottom"></div>
                        <div class="left">
                            <span class="first"></span>
                            <span class="second"></span>
                        </div>
                        <div class="right"></div>
                    </div>
                </div>
            <?php
            }
        }
        ?>
            </div>
        <?php
    }
?>
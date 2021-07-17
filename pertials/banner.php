<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <?php

            include("./pertials/db.php");
            $query = "SELECT * FROM catagories";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="<?php echo $row['pictures'] ?>" alt="IMG-BANNER" style="width: 100% ; height: 350px;">

                        <a href=" product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class=" block1-name ltext-102 trans-04 p-b-8" style="color: white;">
                                <?php echo $row['name'] ?>
                            </span>

                            <span class="block1-info stext-102 trans-04" style="color: white;">
                                Spring 2018
                            </span>
                        </div>

                        <div class=" block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09" style="color: white;">
                                Shop Now
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
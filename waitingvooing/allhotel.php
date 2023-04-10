<?php
require_once 'conect.php';

$_SESSION['page'] = "allhotel";
?>
<html lang="">
    <?php
    require_once 'head.php';
    ?>
    <body onload="finddata('allhotel','',0);findboxh('hsearch');">
        <?php
        require_once 'header1.php';
        require_once 'header2.php';
        ?>


        <div class="container-fluid" >
            <div class="row mainn1">
                <div class="col-md-12">

                    <div>



                        <h1> hotel</h1>

                        <div class="breadcrumbs">
                            <ul>
                                <li class="home">
                                    <a href="index.php" title="Go to Home Page">Home</a>
                                    <span>/ </span>
                                </li>
                                <li class="cms_page">
                                    <strong class="animated swing infinite">hotel</strong>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>

        </div>



        <div id="findboxh">

        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" style="overflow: auto;">
                    <hr/>
                    <div>
                        <div>
                            <h1><b>popular</b><i class="fa fa-hotel" style="margin-left: 15px;"></i></h1>
                        </div>
                           <br/>
                        <div style="margin-top: 10px;">


                            <input type="checkbox" name="checkstar" value="1" style="border:none;outline:0px;background: transparent;"  onclick="finddatasearch('fivestar','','')" />

                            &nbsp;&nbsp;&nbsp;
                            <span style="color: yellow;font-size:19px;">
                                <?php
//five
                                for ($i = 1; $i <= 5; $i++) {
                                    ?>

                                    <i class="fa fa-star"></i>

                                    <?php
                                }
                                ?>
                            </span>
                        </div>
                        <br/>
                        <div style="margin-top: -5px;">
                            <input type="checkbox" style=""  onclick="finddatasearch('fourstar','','')" />
                            &nbsp;&nbsp;&nbsp;
                            <span style="color: yellow;font-size:19px; ;">
                                <?php
//four
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= 4) {
                                        ?>

                                        <i class="fa fa-star"></i>

                                        <?php
                                    } else {
                                        ?>
                                        <i class="fa fa-star-o"></i>
                                        <?php
                                    }
                                }
                                ?>
                            </span>
                        </div>
                        <br/>
                        <div style="margin-top: -5px;">
                            <input type="checkbox" style="" onclick="finddatasearch('threestar','','')"/>
                            &nbsp;&nbsp;&nbsp;
                            <span style="color: yellow;font-size:19px; ;">
                                <?php
//three
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= 3) {
                                        ?>

                                        <i class="fa fa-star"></i>

                                        <?php
                                    } else {
                                        ?>
                                        <i class="fa fa-star-o"></i>
                                        <?php
                                    }
                                }
                                ?>
                            </span>
                        </div>
                        <br/>
                        <div style="margin-top: -5px;">
                            <input type="checkbox" style="" onclick="finddatasearch('twostar','','')"/>
                            &nbsp;&nbsp;&nbsp;
                            <span style="color: yellow;font-size:19px; ;">
                                <?php
//two
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= 2) {
                                        ?>

                                        <i class="fa fa-star"></i>

                                        <?php
                                    } else {
                                        ?>
                                        <i class="fa fa-star-o"></i>
                                        <?php
                                    }
                                }
                                ?>
                            </span>
                        </div>

                        <br/>


                    </div>

                    <div style="">
                        <div>
                            <hr/>
                            <h1><b>area</b><i class="fa fa-long-arrow-up" style="margin-left: 15px;"></i></h1>
                        </div>
                        <div style="font-size: 18px;margin-top: 20px;overflow: auto;max-height: 380px;">
                            <?php
//area
                            $ar = $con->query("select * from area");
                            while ($arrow = mysqli_fetch_array($ar)) {
                                ?>
                                <div style="height: 40px;">
                                    <input type="checkbox" name="areacheck" id="areacheck" onclick="finddatasearch('area','','')"/>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $arrow[1]; ?>
                                </div>
                            <?php echo $arrow[0]; ?>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div style="font-size: 18px;">
                        <div>
                            <hr/>
                            <h1><b>wi-fi</b><i class="fa fa-wifi" style="margin-left: 15px;"></i></h1>
                        </div>
                        <div style="margin-top: 20px;">
                            <input type="checkbox"/>&nbsp;&nbsp;&nbsp;&nbsp;<font>allow</font>
                        </div>
                    </div>

                    <div style="font-size: 18px;">
                        <div>
                            <hr/>
                            <h1><b>refercode</b><i class="fa fa-code-fork" style="margin-left: 15px;"></i></h1>
                        </div>
                        <div style="margin-top: 20px;">
                            <input type="checkbox"/>&nbsp;&nbsp;&nbsp;&nbsp;<font>allow</font>
                        </div>
                    </div>

                    <div style="font-size: 18px;">
                        <div>
                            <hr/>
                            <h1><b>banquet request</b><i class="fa fa-bookmark" style="margin-left: 15px;"></i></h1>
                        </div>
                        <?php
                        $bb = $con->query("select * from banquetbooking");
                        $bbrow = mysqli_fetch_array($bb);
                        ?>
                        <div style="margin-top: 20px;">
                            <input type="checkbox"/>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $bbrow[4]; ?>
                        </div>
                    </div>



                </div>







                <div class="col-md-9" id="rrdata">



                </div>
            </div>
        </div>


        <?php
        require_once 'footer1.php';
        require_once 'footer2.php';
        require_once 'footer3.php';
        ?>


        <?php
        require_once 'allscript.php';
        ?>




<div class="modal fade"  id="test" style="margin-top: 300px;">
    <div class="modal-dialog">
        <div class="modal-content" id="rrbdata">
           
        </div>
    </div>
</div>

    </body>
</html>
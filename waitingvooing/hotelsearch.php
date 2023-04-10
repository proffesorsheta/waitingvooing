
<?php
if ($_REQUEST['box'] == "hsearch") {
    ?>


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-4" style="margin-left: 300px;">
                <i class="fa fa-list-ul" style="font-size: 30px;position: absolute;"></i>
            </div>
            <div class="col-md-4" >
                <input type="text" placeholder="search hotel" name="hotelsearch" onkeyup="finddatasearch('hsearch','search',this.value);" style="border: 1px solid #999;height: 39px;margin-left: 60px;width: 390px;font-size: 20px;text-align: center;"/>
                
            </div>
            <div class="col-md-4">
            </div>

        </div>
        <!--
        -->
    </div>
        
      
      




    <?php
}
?>

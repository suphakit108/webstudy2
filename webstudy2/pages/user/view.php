<style type="text/css">
    .navbar{
        margin-bottom: 0px !IMPORTANT;
        padding-bottom: 0px !IMPORTANT;
        padding-top: 0px !IMPORTANT;
    }
    .body {
        background-image: url('../images/6666.jpg');
        /*background-repeat: no-repeat;*/
        /*background-attachment: fixed;  */
        background-size: cover;
    }
</style>
<div class="p-5 pt-5 body" >
    <div class="container">
        <form action="index.php?app=user&action=addcompany" method="post" >
            <div class="row" >
                <div class="col-md-6" >
                    <div class="input-container"align="center">
                        <h3   class="b" style=" font-size: 40px;  margin-bottom: 20px ;margin-top: 60px;margin-top: 300px;"> <b>รายงานการศึกษาความเป็นไปได้</b></h3>
                        <p style="color: white; font-size: 20px;"><b>รายงานที่จะช่วยให้คุณสามารถประเมินสภาพธุรกิจก่อนการกู้ได้</b></p>
                    </div>
                </div>


                <div class="col-md-6" style="padding: 15px;  ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <b class="shadow1" style="font-size: 20px;">ชื่อโครงการ</b>
                                <input style="height: 40px; border-radius:50px; font-size: 20px;color: #708090;" type="text" id="company_project" class=".effect-20" name="company_project" required=""/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <b class="shadow1" style="font-size: 20px;">บริษัท</b>
                                <input style="height: 40px; border-radius:50px; font-size: 20px;color: #708090;" type="text" id="company_name" name="company_name" required="บริษัท" />        
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <b class="shadow1" style="font-size: 20px;">สถานที่ตั้งโครงการ</b>
                                <input style="height: 40px; border-radius:50px; font-size: 20px;color: #708090;" type="text" id="company_local" name="company_local" required="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <b class="shadow1" style="font-size: 20px;">ประเภทกิจการของผู้ประกอบกิจการ </b>
                                <input style="height: 40px; border-radius:50px; font-size: 20px;color: #708090;" type="text" id="company_type" name="company_type" required=""/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <b class="shadow1" style="font-size: 20px;">วัน-เดือน-ปี ที่จัดทำเอกสารของผู้ประกอบการ</b><br>
                                <input style="height: 40px; border-radius:50px; font-size: 20px;color: #708090;" type="date" id=" month" name="month" placeholder="123" required=""/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <b class="shadow1" style="font-size: 20px;">เสนอหน่วยงานที่อนุมัติสินเชื่อ </b><br>
                                <select style="height: 40px; border-radius:50px; font-size: 20px; padding-left: 20px;color: #708090;" name="offer" id="offer" >
                                   <?php for ($i = 0; $i <count($bank) ; $i++) {?>
                                    <option value="<?php echo $bank[$i]['bank_name'];?>">   <?php echo $bank[$i]['bank_name'] ?></option>
                                    <?php  }?></select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-container">
                                    <b class="shadow1" style="font-size: 20px;">ที่อยู่ของผู้ประกอบการที่ใช้ในการตั้งโครงการ</b>
                                    <input style="height: 40px; border-radius:50px; font-size: 20px;color: #708090;" type="text" id="address" name="address" required=""/>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12" align="center" style="padding-left: 0px;">
                            <button  style="height: 40px; border-radius:50px; font-size: 20px;"type="submit" class = "myButton success " >สร้างรายงาน</button> 
                        </div>
                    </div>
                </div>
            </div>
            <input type="text" id="code" name="code" style="visibility: collapse;">
        </form>
    </div>
    <script type="text/javascript">
        console.log( "ready!" );
        var str = " abcdefghijklmupqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var x = str.charAt( Math.floor((Math.random() * 50) + 1));
        x += str.charAt( Math.floor((Math.random() * 50) + 1));
        x += Math.floor((Math.random() * 1000000) + 1);
        console.log(x);
        document.getElementById("code").value = x;
        $( document ).ready(function() {
            console.log("sssss");
            var aa = document.getElementById("sidebar");
            aa.style.display = 'none';
        });
    </script>
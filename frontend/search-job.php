<?php
/**
 * Created by PhpStorm.
 * User: phamphuong
 * Date: 10/09/2018
 * Time: 22:11
 */
require_once app_default.'/functions/functions.php';
$objTP = new functions();

?>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" id="scrollToMe">
            <h2>Tìm việc làm</h2>
            <p>Tìm kiếm việc làm.</p>
        </div>
    </div>
    <form action="" method="get">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="form-group">
                    <lable>Chọn Tỉnh/ Thành phố</lable>
                    <select name="tinh" class="form-control" id="tinh">
                        <option value="">== Chọn tỉnh/ thành phố ==</option>
                        <?php
                        $tp = $objTP->get_all(['city']);
                        foreach($tp as $value){
                            echo "<option value='".$value['id']."'>".$value['namecity']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="form-group">
                    <lable>Chọn chuyên ngành</lable>
                    <select name="nganh" class="form-control" id="nganh">
                        <option value="">== Chọn chuyên ngành ==</option>
                        <?php
                        $tp = $objTP->get_all(['academy']);
                        foreach($tp as $value){
                            echo "<option value='".$value['id']."'>".$value['nameAcademy']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="form-group">
                    <lable>Chọn vị trí</lable>
                    <select name="vitri" class="form-control" id="vitri">
                        <option value="">== Chọn vị trí ==</option>
                        <?php
                        $tp = $objTP->get_all(['vitri']);
                        foreach($tp as $value){
                            echo "<option value='".$value['id']."'>".$value['name']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="form-group">
                    <lable>Mức lương mong muốn</lable>
                    <input type="number" name="luong" id="luong" class="form-control" placeholder="vd: 10000000">
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <button class="btn btn-info" type="button" id="btnSearch2"><i class="icon-search"></i> Phân tích</button>
            </div>
        </div>
    </form>
    <div id="data" style="margin-top:20px;"></div>
</div>
<script>

    $(document).ready(function () {
        // $("#tinh").change(function () {
        //     $.get('../hechuyengia/functions/ajax.php?tb=university&id='+$(this).val())
        //         .done(function (data) {
        //             var result = JSON.parse(data);
        //
        //             var div = '<option value="">== Chọn trường ==</option>';
        //             $.each(result,function (index,item) {
        //                 div +='<option value="'+item.universityid+'">'+item.nameUnversity+'</option>';
        //             });
        //             console.log(div);
        //             $("#truong").html(div);
        //         })
        //         .fail(function (err) {
        //             console.log(err);
        //         })
        // });
        $("#btnSearch2").click(function () {
            if($('#tinh').val() == ''){
                alert('Vui lòng chọn tỉnh');
                return false;
            }
            if($('#vitri').val() == ''){
                alert('Vui lòng chọn vị trí');
                return false;
            }
            if($('#nganh').val() == ''){
                alert('Vui lòng chọn chuyên ngành');
                return false;
            }
            if($('#luong').val() == ''){
                alert('Vui lòng nhập mức lương mong muốn');
                return false;
            }
            $.get('../hechuyengia/functions/ajax.php?tb=more2&city='+$('#tinh').val()+'&nganh='+$('#nganh').val()+'&luong='+$('#luong').val()+'&vitri='+$('#vitri').val())
                .done(function (data) {
                    var result = JSON.parse(data);
                    var i = 0;
                    var div = '<table class="table table-bordered">';
                    div +='<tr><th>STT</th><th>Công ty</th><th>Chuyên ngành</th><th>Công việc</th><th>Hệ</th><th>Lương</th><th>% Trúng tuyển</th></tr>';
                    $.each(result,function (index,item) {
                        div +='<tr><td>'+(++i)+'</td><td>'+item.companyname+'</td><td>'+item.nameAcademy+'</td><td>'+item.tencv+'</td><td>'+item.tenhe+'</td><td>'+item.salary+'</td><td></td></tr>';
                    });
                    div +='</table>';
                    console.log(div);
                    $("#data").html(div);
                })
                .fail(function (err) {
                    console.log(err);
                })
        });

        // $("#truong").change(function () {
        //     $.get('../hechuyengia/functions/ajax.php?tb=academy&id='+$(this).val())
        //         .done(function (data) {
        //             var result = JSON.parse(data);
        //
        //             var div = '<option value="">== Chọn khoa ==</option>';
        //             $.each(result,function (index,item) {
        //                 div +='<option value="'+item.academyid+'">'+item.nameAcademy+'</option>';
        //             });
        //             console.log(div);
        //             $("#khoa").html(div);
        //         })
        //         .fail(function (err) {
        //             console.log(err);
        //         })
        // });

        // Handler for .ready() called.
        $('html, body').animate({
            scrollTop: $('#scrollToMe').offset().top
        }, 'slow');
    });
</script>

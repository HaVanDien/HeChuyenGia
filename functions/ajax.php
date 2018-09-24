<?php
/**
 * Created by PhpStorm.
 * User: phamphuong
 * Date: 14/09/2018
 * Time: 22:14
 */
require_once __DIR__.'/functions.php';
if(isset($_GET['tb'])){
    $obj = new functions();
    if($_GET['tb']=='university'){

        $data = $obj->get_all($_GET['tb'],['id','nameUnversity'],['codecity'=>$_GET['id']]);
        echo json_encode($data);
    }
    if($_GET['tb']=='academy'){
//        $obj = new functions();
        $data = $obj->get_all($_GET['tb'],['id','nameAcademy'],['universityid'=>$_GET['id']]);
        echo json_encode($data);
    }
    if($_GET['tb'] == 'more'){
        $where = ['university.id = '=>'truong_khoa.id_truong','academy.id = '=>'truong_khoa.id_khoa','university.codecity = '=>$_GET['city']];
        if(!empty($_GET['khoa']))
            $where['truong_khoa.id_khoa = '] =$_GET['khoa'];
        $data = $obj->get_all(['university','academy','truong_khoa'],['nameUnversity','nameAcademy'],$where);

        echo json_encode($data);
    }
    if($_GET['tb'] == 'more2'){
        $where = [
            'company.id = '=>'congviec.id_company',
            'vitri.id = '=>'congviec.id_vitri',
            'academy.id = '=>'congviec.id_academy',
            'he.id = '=>'congviec.id_he',
            'congviec.id_vitri = '=>$_GET['vitri'],
            'congviec.id_academy = '=>$_GET['nganh'],
            'company.codecity = '=>$_GET['city']

        ];
        $data = $obj->get_all(['company','academy','he','vitri','congviec'],['companyname','nameAcademy','congviec.name as tencv','congviec.salary','he.name as tenhe'],$where);

        echo json_encode($data);
    }
}
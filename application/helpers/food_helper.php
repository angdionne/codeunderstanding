<?php
function kitMenu($fid,$fsid,$kid){
	$CI=get_instance();
	$mod=$CI->load->model('Front_model');
	$res=$CI->Front_model->getkitMenu($fid,$fsid,$kid);
	
	return $res;
}

function menuExtra($mid){
	$CI=get_instance();
	$mod=$CI->load->model('Front_model');
	$res=$CI->Front_model->getMenuExtra($mid);
	return $res;
}

function menuExtraPrice($menu){
	$CI=get_instance();
	$mod=$CI->load->model('Front_model');
	$res=$CI->Front_model->getExtraPrice($menu);
	return $res;
}
function Menu($id){
    $CI=get_instance();
    $mod=$CI->load->model('Owner_model');
    $res=$CI->Owner_model->getkitMenu($id);
    return $res;
}
function MenuEx($id){
    $CI=get_instance();
    $mod=$CI->load->model('Owner_model');
    $res=$CI->Owner_model->getkitMenuEx($id);
    return $res;
}
function kitchens(){
    $CI=get_instance();
    $mod=$CI->load->model('Front_model');
    $res=$CI->Front_model->getkitchens();
    return $res;
}

function orderdetail($orderid){
    $CI=get_instance();
    $mod=$CI->load->model('Front_model');
    $res=$CI->Owner_model->getorderdetail($orderid);
    return $res;
}
function getRating($id){
    $CI=get_instance();
    $mod=$CI->load->model('Front_model');
    $res=$CI->Front_model->getRating($id);
    return $res;
}
function getRatingCount($id){
    $CI=get_instance();
    $mod=$CI->load->model('Front_model');
    $res=$CI->Front_model->getRatingCount($id);
    return $res;
}
?>
<?php
namespace Home\Controller;
use Think\Controller;
class PrincipalController extends Controller {
    /**
     * 园长身份（首页）
     */
    public function index(){
        $this->display('cp_body_situation');
    }
    /**
     * 园长身份（专家）
     */
    public function expert(){
        $this->display('expert');
    }
    /**
     * 园长身份（方案）
     */
    public function scheme(){
        $this->display('scheme_list');
    }
    /**
     * 园长身份（我）
     */
    public function my(){
        $this->display('my');
    }
    public function baby_photo(){
        $this->display('baby_photo');
    }
    public function video(){
        $this->display('video_list');
    }
    public function scheme_list(){
        $this->display('scheme_list');
    }
    public function manage(){
        $this->display('cp_manage');
    }

}
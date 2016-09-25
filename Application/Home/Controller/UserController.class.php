<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    /**
     * 登录页面
     */
    public function login(){
        $uid=session('uid');
        $t_uid=session('t_uid');
        $d_uid=session('d_uid');
        if(!empty($uid) && $uid!='0'){
            //园长登录看的页面
        }
        if(!empty($t_uid) && $t_uid){

            $this->redirect('User/ceping');
        }

        if(!empty($d_uid) && $d_uid){
            //代理商页面
        }
        $this->display('login');
    }
    /**
     * 调用接口,获取验证码
     */
    public function Code(){
        //获取用户的手机号
        $tel=I("post.utel");
        //echo $tel;die;
        //园长
        $data=M('tb_user')->where("utel=$tel")->find();
        //家长
        $baby=M('tb_baby')->where("mom_phone=$tel or dad_phone=$tel")->find();
        //代理商
        $pdo=new \PDO('mysql:host=123.56.162.14;dbname=db_aibo_movement','root','ideal2013');
        $pdo->exec('set names utf8');
        $sql="select telephone from t_user where telephone=$tel";
        $arr=$pdo->query($sql);
        $row=$arr->fetch();
        if($data || $baby || $row){
            $data=rand(100000,999999);
            session('code',$data);
            $tempId="103738";
            $appid="8a216da85610bfb801562118303b0a29";
            $type="1";
            $url="http://jc.vxin365.com/index.php/sendcode";
            $content=array('tel'=>$tel,'data'=>$data,'tempId'=>$tempId,'appid'=>$appid,'type'=>$type);
            $arr=$this->http_curl($url,"POST",$content);
            var_dump($arr);
        }else{
            echo "4";
        }
    }
    /**
     * 验证登录
     */
    public function login_do(){
        $tel=I("post.utel");
        //echo $tel;die;
        $user_code=I("post.code");
        $data=M('tb_user')->where("utel=$tel")->find();
        $uid=$data['id'];
        $code=session('code');
        $role=$data['role'];
        //家长身份
        $baby=M('tb_baby')->where("mom_phone=$tel or dad_phone=$tel")->find();
        if($tel==$data['utel']){
            if($data){
                if($user_code==$code){
                    //园长
                    if($role=='1'){
                    session('uid',$uid);
                    session('tel',$tel);
                        echo"1";
                    }else{
                        echo "该用户不是园长身份";
                    }
                }else{
                    echo "您输入的验证码不正确";
                }
            }else{
                echo "您输入的手机号不正确";
            }

        }elseif($tel==$baby['mom_phone'] || $tel==$baby['dad_phone']){
            //家长身份
            $baby=M('tb_baby')->where("mom_phone=$tel or dad_phone=$tel")->find();
            $t_uid=$baby['id'];
//            //宝宝ID
//            $baby_id=$baby['id'];
//            $exam_records=M('tb_exam_records')->where("baby_id=$baby_id")->select();
//            //获取体侧表
//            $id=$exam_records['id'];
//            $exam_image=M('tb_exam_image')->where("exam_id=$id")->find();
            if($baby){
                if($user_code==$code){
                    session('t_uid',$t_uid);
                    session('tel',$tel);
                    //$this->assign('exam_image',$exam_image);
                    //$this->display('ceping_data');
                   $this->display('ceping_data');
                }else{
                    echo "您输入的验证码不正确";
                }
            }else{
                echo "您输入的手机号不正确";
            }
        }else{
            //代理商
            //1连接的认证
            $pdo=new \PDO('mysql:host=123.56.162.14;dbname=db_aibo_movement','root','ideal2013');
            $pdo->exec('set names utf8');
            $sql="select company_id from t_user where telephone=$tel";
            $arr=$pdo->query($sql);
            $row=$arr->fetch();
            $company_id=$row['company_id'];
            $d_uid=$row['id'];
            if($row){
                //代理商
                if($code==$user_code){
                    session('d_uid',$d_uid);
                    session('tel',$tel);
                    if($company_id!=''){
                        echo "3";
                    }else{
                        echo"该用户不是代理商身份";
                    }
                }else{
                    echo "您输入的的验证码不正确";
                }
            }else{
                echo "您输入的手号码不正确";
            }
        }
    }
    /**
     * 家长身份（我的页面）
     */
    public function my(){
        $this->display('my');
    }
    /**
     * 家长身份（宝宝相册）
     */
    public function baby_photo(){
//        $data = M("Tb_exam_records","","DB_CONFIG1")->where("baby_id=1")->getField('id',true);
//        print_r($data);
//        die;
        //        $t_uid=session('t_uid');
        $exam_records=M('tb_exam_records')->where("baby_id=1")->getField('id',true);
        $exam_records=implode(',',$exam_records);
        $map['exam_id'] = array ('in',$exam_records);

        $exam_image=M('tb_exam_image')->field("GROUP_CONCAT(thum_image) as image,update_time,id")
            ->group("date_format(update_time,'%Y-%m-%d') desc")
            ->where($map)
            ->select();
        //print_r($exam_image);die;
        $arr=array();
        foreach($exam_image as $k=>$v){
            $arr[] = explode(",",$v['image']);
            foreach($arr as $l=>$s){
                $exam_image[$k]['image']=$s;
            }
        }
        //print_r($exam_image);die;
        $this->assign('exam_image',$exam_image);
        $this->display('baby_photo');
    }
    //家长测评统计
    public function ceping(){
        //查看宝宝历史测评记录
        //$time=M('tb_exam_records')->field('create_time')->group("date_format(create_time,'%Y-%m-%d') desc")->select();
       //print_r($time);die;
//        foreach($time as $val){
//           foreach($val as $v){
//               $time=strtotime($v);
//               $date=date("Y-m-d",$time);
//               echo $date;
//           }
//        }
        //$this->assign('time',$time);
        $this->display('ceping_data');
    }
    /**
     *家长方案
     */
     public function scheme(){
         //$this->display('scheme');die;
         $pdo=new \PDO('mysql:host=123.56.162.14;dbname=db_programme','root','ideal2013');
         $pdo->exec('set names utf8');
         $sql="SELECT *
          FROM t_manage
          WHERE id BETWEEN '725' AND '733' ";
         $arr=$pdo->query($sql);
         $data=$arr->fetchAll(\PDO::FETCH_ASSOC);
         $this->assign('data',$data);
         $this->display('scheme');
    }
    /**
     * 家长方案详情
     */
    public function expert_list(){

        $id=I("get.id");
        $data = M("T_manage","","DB_CONFIG2")->where("id='$id'")->getField('content');
        //echo $data;die;
        //方案创建者
        $create_name=M("T_manage","","DB_CONFIG2")->where("id='$id'")->getField('create_author');
        //标题
        $title=M("T_manage","","DB_CONFIG2")->where("id='$id'")->getField('title');
        //创建时间
        $create_time=M("T_manage","","DB_CONFIG2")->where("id='$id'")->getField('update_date');
        $this->assign('create_time',$create_time);
        $this->assign('title',$title);
        $this->assign('create_name',$create_name);
        $this->assign('data',$data);
        $this->display('scheme_detail');
    }
    /**
     *家长专家
     */
    public function expert(){
        $video=M('tb_test_expert_video')->select();
        $this->assign('video',$video);
        $this->display('expert');
    }

    /**
     * @return array $arr
     */
    public function video_port(){
        $video=M('tb_test_expert_video')->field("id,url,thum_image")->select();
        $arr=json_encode($video);
        echo $arr;
    }
    /**
     *宝宝勋章
     */
    public function medal(){
        $this->display('huizhang_list');
    }
    /**
     *宝宝视频
     */
    public function video(){


        //        $t_uid=session('t_uid');
//        $exam_records=M('tb_exam_records')->where("baby_id='1'")->getField('id',true);
//        $exam_records=implode(',',$exam_records);
//        //print_r($exam_records);
//        $map['exam_id'] = array ('in',$exam_records);
//
//        $exam_video=M('tb_exam_video')->field("GROUP_CONCAT(thum_image) as image,GROUP_CONCAT(url)as v_url,update_time,id")
//            ->group("date_format(update_time,'%Y-%m-%d') desc")
//            ->where($map)
//            ->select();
//        $arr=array();
//        foreach($exam_video as $k=>$v){
//            $arr[] = explode(",",$v['image']);
//            $arr[] = explode(",",$v['v_url']);
//            foreach($arr as $l=>$s){
//                $exam_image[$k]['image']=$s;
//                $exam_image[$k]['v_url']=$s;
//            }
//
//        }

        $exam_records=M('tb_exam_records')->where("baby_id='1'")->getField('id',true);
        $exam_records=implode(',',$exam_records);
        //print_r($exam_records);
        $map['exam_id'] = array ('in',$exam_records);

        $exam_video=M('tb_exam_video',"","DB_CONFIG1")->field("
        GROUP_CONCAT(thum_image) as image,
        GROUP_CONCAT(url)as v_url,
        GROUP_CONCAT(id)as v_id,
        create_time")
            ->group("date_format(create_time,'%Y-%m-%d') desc")
            ->where($map)
            ->select();
        //print_r($exam_video);die;
        foreach($exam_video as $k=>&$v){
            $v["image"] = explode(",",$v['image']);
            $v['v_url'] = explode(",",$v['v_url']);
            $v['v_id'] = explode(",",$v['v_id']);
        }
       //print_r($map);die;
        //echo json_encode($exam_video);
        $this->assign('exam_video',$exam_video);
        $this->display('video_list');
    }


    public function baby_video_port(){
        //        $t_uid=session('t_uid');
        $exam_records=M('tb_exam_records')->where("baby_id='1'")->getField('id',true);
        $exam_records=implode(',',$exam_records);
        //print_r($exam_records);
        $map['exam_id'] = array ('in',$exam_records);

        $exam_video=M('tb_exam_video')->field("GROUP_CONCAT(thum_image) as image,GROUP_CONCAT(url)as v_url,GROUP_CONCAT(id)as v_id,update_time")
            ->group("date_format(update_time,'%Y-%m-%d') desc")
            ->where($map)
            ->select();
        //print_r($exam_video);die;
        foreach($exam_video as $k=>&$v){
            $v["image"] = explode(",",$v['image']);
            $v['v_url'] = explode(",",$v['v_url']);
            $v['v_id'] = explode(",",$v['v_id']);
        }
        //print_r($exam_video);die;
        echo json_encode($exam_video);
    }
    /**
     * 退出登录
     */
    public function exit_login(){
        session('t_uid',null);
        session('tel',null);
        $this->display('login');
    }
//    public function aa(){
//        $url="http://mp.weixin.qq.com/s?__biz=MzIzMTI0MjA2Mg==&mid=2651050510&idx=1&sn=eb6e9f3607ef8f81e8c5233b2ec9a62b#rd";
//        header( 'location:'. $url);
//    }
    /**
     *家长页面（我->宝宝相册点击小图查看大图）
     */
    public function big_image(){
        //获取图片的时间日期
        $time=I("post.date");
        $time=strtotime($time);
        $time=date("Y-m-d",$time);
        //echo $time;die;
        $data=M('tb_exam_image')->where("date_format(update_time,'%Y-%m-%d')='$time'")->select();
        $arr=array();
        foreach($data as $key=>$val){
            $arr[]=$val['url'];
        }
        $arr=json_encode($arr);
        echo($arr);
        /*$this->ajaxReturn($arr);*/
    }

    /**
     * $url   接口 url
     * $type  数据请求类型
     * $res   返回数据类型
     * $arr   post请求参数
     */
    // curl 请求
    public function http_curl($url,$method,$content){
        $ch = curl_init();   //1.初始化
        curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式
        //4.参数如下
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//https
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));//gzip解压内容
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');

        if($method=="POST"){//5.post方式的时候添加数据
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);//6.执行

        if (curl_errno($ch)) {//7.如果出错
            return curl_error($ch);
        }
        return $tmpInfo;
        curl_close($ch);//8.关闭
    }
}
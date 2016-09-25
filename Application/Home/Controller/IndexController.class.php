<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 微信消息接口入口
     * 所有发送到微信的消息都会推送到该操作
     * 所以，微信公众平台后台填写的api地址则为该操作的访问地址
     */
    public function index(){
        // 1.将timestamp， nonce，token 按字典排序
        $timestamp = $_GET['timestamp'];
        $nonce     = $_GET['nonce'];
        $token     = 'weixin';
        $signature = $_GET['signature'];
        $array     = array( $timestamp, $nonce, $token );
        sort( $array );
        // 2.将排序后的三个参数拼接之后用sha1加密
        $tmpstr    = implode('', $array);
        $tmpstr    = sha1( $tmpstr );
        // 3.将加密后的字符串与signature进行对比，判断该请求是否来自微信
        if ( $tmpstr == $signature ) {
            echo $_GET['echostr'];
            exit;
        }else {
            // $this -> reponseMeg();
        }
    }
    /**
     * 获取access_token，用于后续接口访问
     * @return array access_token信息，包含 token 和有效期
     */
    public function getWxAccessToken() {
        $appid="wx81d2387e847996e5";
        $appsecret="f9eb537bb17201275ef784286da5d7c3";
         $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
        $data=file_get_contents($url);
        $data=json_decode($data,true);
        return  $data['access_token'];
    }

    /**
     * 创建自定义菜单
     */
    public function menuCreate(){
        $access_token = $this -> getWxAccessToken();
        //echo $access_token;die;
        $url     = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=". $access_token;
        $data='{
     "button":[
     {
          "type":"view",
          "name":"爱宝运动测评",
          "url":"http://wxyd.vxin365.com/weixin_test/index.php/Home/User/login"
      },
      {
           "type":"view",
          "name":"用户中心",
          "url":"http://wxyd.vxin365.com/weixin_test/index.php/Home/User/my"
        },

        {
         "type":"view",
          "name":"关于我们",
          "url":""
       }]
 }';
        $data=$this->http_curl($url,"POST",$data);
        print_r($data);
    }
    /**
     * $url   接口 url
     * $type  数据请求类型
     * $res   返回数据类型
     * $arr   post请求参数
     */
    // curl 请求
    public function http_curl($url,$method,$data){
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
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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
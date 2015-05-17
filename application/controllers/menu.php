<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');

    $this->load->model('menus');
  }

	function index()
	{
		$this->data['title'] = 'Home';

    $menus = $this->menus->get();

    $this->data['menus'] = $menus;
		
		$this->load->view('menu', $this->data);
	}

  function create()
  {
    $postData = $this->input->post();

    if ($postData) {
      $menu = array(
        'name' => $postData['food_name'],
        'price' => $postData['price'],
        'rating' => $postData['rating'],
      );

      $result = $this->menus->insert($menu);

      if ($result) {
        //echo "ok";
        $this->alert("ok");
      } else {
        $this->alert("not ok");
        //echo "not ok";
      }
    }

    $this->data['title'] = 'Create Menu';


    $this->load->view('menu/create', $this->data);
  }

 //函数:通用提示
//参数:提示訊息,類型或網址,窗口名或函數名,延时毫秒Alert("","function","close2",300);
Function alert($Str,$Typ="back",$TopWindow="",$Tim=100){
    Echo "<script>".Chr(10);
    If(!Empty($Str)){
        Echo "alert(\"Warning:\\n\\n{$Str}\\n\\n\");".Chr(10);
    }
 
    Echo "function _r_r_(){";
    $WinName=(!Empty($TopWindow))?"top":"self";
    Switch (StrToLower($Typ)){
    Case "#":
        Break;
    Case "back":
        Echo $WinName.".history.go(-1);".Chr(10);
        Break;
    Case "reload":
        Echo $WinName.".window.location.reload();".Chr(10);
        Break;
    Case "close":
        Echo "window.opener=null;window.close();".Chr(10);
        Break;
    Case "function":
        Echo "var _T=new Function('return {$TopWindow}')();_T();".Chr(10);
        Break;
        //Die();
    Default:
        If($Typ!=""){
            //Echo "window.{$WinName}.location.href='{$Typ}';";
            Echo "window.{$WinName}.location=('{$Typ}');";
        }
    }
 
    Echo "}".Chr(10);
 
    //為防止Firefox不執行setTimeout
    Echo "if(setTimeout(\"_r_r_()\",".$Tim.")==2){_r_r_();}";
    IF($Tim==100){
        Echo "_r_r_();".Chr(10);
    }Else{
        Echo "setTimeout(\"_r_r_()\",".$Tim.");".Chr(10);
    }
    Echo "</script>".Chr(10);
    Exit();
} 
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
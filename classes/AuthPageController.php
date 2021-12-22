<?

class AuthPageController extends PageController
{

    public function process()
    {
        $arResult = [];
        if($this->registry->get("register") == "Y"):
            $arResult["RESULT"] = "Вы авторизованы";
        endif;

        if($this->request->get("authorize") == "Y"){
  
            $login = $this->request->get("login");
            $pass = $this->request->get("pass");
 

           $arResult =  $this->db->execute("SELECT * FROM `users` WHERE `login`='{$login}'");

           if($arResult[0]["pass"] == $pass){
                $this->registry->set("authorized","Y");
                header('Location: /index.php?auth=Y');
                exit;      
           }
        }

          
     
    }

    public function init()
    {
        $this->process();
            $this->render($_SERVER["DOCUMENT_ROOT"]."/temp/auth_page.php");
    }
}
<?

class RegisterPageController extends PageController
{

    public function process()
    {
        $arResult = [];
        if($this->registry->get("register") == "Y"):
            $arResult["RESULT"] = "Вы авторизованы";
        endif;

        if($this->request->get("register") == "Y"){
            $name = $this->request->get("register");
            $email = $this->request->get("email");
            $login = $this->request->get("login");
            $pass = $this->request->get("pass");

            if(!$name || !$email || !$login || !$pass):
                $arResult["ERROR"] = "Write down all the fields";
                return;
            endif;

           $arResult =  $this->db->execute("SELECT COUNT(*) FROM `users` WHERE `login`='{$login}'");
           
           if($arResult[0]["COUNT(*)"] == 0):

                $query = "INSERT INTO `users` (`login`, `name`, `email`, `pass`, `id`) VALUES ('{$login}', '{$name}', '{$email}', '{$pass}', NULL)";
                $arResult["ADDED_ELEMENT"] =  $this->db->insert($query);
                
                if($arResult["ADDED_ELEMENT"] > 0){
                    $arResult["ADDED_ELEMENT_REVIEW"]  ="USER id:#{$arResult["ADDED_ELEMENT"]} was added";
                   // $this->registry->set("authorized","Y");
                } 
                header('Location: /reg.php?auth=Y');
                exit;            
               
           endif;
      
        }

          
     
    }

    public function init()
    {
        $this->process();

        if($this->registry->get("register") == "Y"){
            Header("Location: /index.php");
        }else{
            $this->render($_SERVER["DOCUMENT_ROOT"]."/temp/register_page.php");
            
        }
        
    }
}
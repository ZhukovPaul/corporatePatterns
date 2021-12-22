<?

class IndexPageController extends PageController
{

    public function process()
    {
         
    }

    public function init()
    {
        $this->process();

        $this->render($_SERVER["DOCUMENT_ROOT"]."/temp/index_page.php");
       
        
    }
}
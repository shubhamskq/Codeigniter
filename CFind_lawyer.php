<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Find_lawyer extends BaseController
{

  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->library('base_library');
    $this->load->model('admin/Sub_sub_category_model');
    $this->load->model('admin/Category_model');
    $this->load->model('admin/Lawyer_model');

    $this->load->model('admin/Certificate_model');
    // Cookie helper
    $this->load->helper('cookie');
    $lang = '';
    if (!empty($_COOKIE['lang']) && isset($_COOKIE['lang'])) {
      $lang = $_COOKIE['lang'];
    } else {
      $lang = config_item('language');
    }
    $this->lang->load('menu', $lang);
  }


  // Index =============================================================
  public function index($slug = NULL, $urlCity = NULL)
  {
      
    $this->load->model('admin/case_category_model');
      if(isset($urlCity) && !empty($urlCity)){
        // when search by city & case category
        
        $temp = str_replace('-lawyers', '', $slug);
        $searchCaseCat = str_replace('-', ' ', $temp);
        $slug = $this->uri->segment(2);
        $data['selectedCaseCat'] = array('name' => ucwords($searchCaseCat),'class' => text_to_url($searchCaseCat) );
      }
        $city = (!isset($slug) || empty($slug))?'':str_replace('lawyers-in-', '', $slug);
        $city = str_replace("-", " ", $city);

        //echo meet_link('lawyer','244','240');
        $w['table']  = 'category';
        $w['id']     = '-id'; // Desc when - add
        $w['limit']     = '20'; // Desc when - add
        $data['categoryMenu']  = $this->getCategory($w);
      

      $topCat = array();
     // get all category list 
     $dbData = $this->case_category_model->findDynamic(array('status'=>1));
     foreach ($dbData as $k => $v) {
        $data['categoryList'][$v->id] = $v;
        $tempStr = strtolower($v->name);
        if (strpos($tempStr, 'divorce') !== false) {
          $topCat[text_to_url($tempStr)] = $tempStr;
        }else if (strpos($tempStr, 'civil') !== false) {
          $topCat[text_to_url($tempStr)] = $tempStr;
        }else if (strpos($tempStr, 'property') !== false) {
          $topCat[text_to_url($tempStr)] = $tempStr;
        }else if (strpos($tempStr, 'criminal') !== false) {
          $topCat[text_to_url($tempStr)] = $tempStr;
        }else if (strpos($tempStr, 'legal') !== false) {
          $topCat[text_to_url($tempStr)] = $tempStr;
        }

      }

      $data['topCat'] = $topCat;




    



       $where['status'] = 1;
       $where['limit'] = 40;
       if(!empty($city)){
        $where['city'] = $city;
       }




       $data['get_lawyer'] = $this->Lawyer_model->finddynamic($where);
       //pre($data['get_lawyer']);exit;
       


        // ge category list
        $w = array();
        $w['table'] = 'case_category';
        $w['status'] = '1';
        
        $data['catData'] = $this->Lawyer_model->finddynamic($w);
      
    

    // Define ===========================  
    if(!isset($searchCaseCat)){ 
      $data["title"] = "Consult With Best Lawyers in ".ucwords($city)." / Advocates Near By";
      
    }else{
      $data["title"] = "Consult With ".ucwords($searchCaseCat)." Lawyers in ".ucwords($city);
    }
    $data["keywords"] = "Free legal advice, lawyer, law, legal advice, legal assistance, legal issues, legal questions, find a lawyer, legal advice, a lawyer, legal questions, legal answers, free legal advice, legal response, law consultants, legal advisers ask, ask a legal question needs legal help, legal assistance, free legal answers, get free legal answer, find a local lawyers";
    $data["description"] = "Insaaf99 - discover lawyers or advocates online for legal advice services in India. Consult professional advocates on phone to resolve your legal question 24/7 for family law, divorce, criminal law, cheque bounce, property, child custody, consumer matters, matrimony and many more.";
    $data["og_url"] = "https://insaaf99.com/about-us";
    $data["og_title"] = "Appoint Lawyers Online for Legal Consultation in India | Insaaf99";
    $data["og_description"] = "Insaaf99 - discover lawyers or advocates online for legal advice services in India. Consult professional advocates on phone to resolve your legal question 24/7 for family law, divorce, criminal law, cheque bounce, property, child custody, consumer matters, matrimony and many more.";
    $data["og_site_name"] = "insaaf99.com";
    $data["twitter_card"] = "summary";
    $data["twitter_title"] = "Appoint Lawyers Online for Legal Consultation in India | Insaaf99";
    $data["twitter_description"] = "Insaaf99 - discover lawyers or advocates online for legal advice services in India. Consult professional advocates on phone to resolve your legal question 24/7 for family law, divorce, criminal law, cheque bounce, property, child custody, consumer matters, matrimony and many more.";
    $data["canonical"] = "https://insaaf99.com/about-us";

    $data['city'] = $city;

    $data["file"] = "front/find_lawyer";
    $this->load->view('front/template', $data);
  }
}

<?php
namespace larava\controllers;
use larava\core\Controller;
class CategoryController extends Controller{
    public $categories;   
    public function __construct(){
        $this->categories=$this->Model('CategoryModel');
    }

    public function index(){        
        $list=$this->categories::all();       
        $this->View("category/index",$list,'admin');
    }

    public function addCate(){
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        if($name!="")
        $this->categories::create([
            'name' => $name
        ]);
        header("location:/lampart/category");
    }
    function displayCategories($parentId = null, $level = 0) {
        $categories = $this->categories::where('parent_id', $parentId)->get();
        if (count($categories) == 0) {
            return;
        }
        foreach ($categories as $category) {
            echo str_repeat('-', $level) . $category->name . '<br>';
            $this->displayCategories($category->id, $level + 1);
        }
    }
    public function delCate(){
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!="") $this->categories::where("id",$id)->delete();
        header("location:/lampart/category");
    }

    public function editCate(){        
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!=""){
            $cate=$this->categories::where("id",$id)->get();           
            $this->View("category/editcate",$cate,'admin');
        }        
    }

    public function updateCate(){
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($name!="") 
            $this->categories::where("id",$id)->update([
                "name"=>$name
            ]);
        header("location:/lampart/category",'admin');
    }
    
}
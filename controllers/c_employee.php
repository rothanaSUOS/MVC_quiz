<?php 

    include_once "connection.php";

$data= array();
flexible_function($data);
 function flexible_function(&$data){
   $function ='login';

    if(isset($_GET['action'])){
        $action =$_GET['action'];
        $function=$action;
    }
   echo $function($data);

 }


function view(&$data){
    $data['employee_data'] = view_employee();
    $data['page']='employee/view';
    

}
function viewUsers(&$data){
    $data['user_data'] = view_user();
    $data['page']='employee/viewUser';
    

}
function add(&$data){
    $data['page']='employee/add';

}

function get_form_data(&$data){
    $add_data = m_add_empolyee();
    if($add_data){
        $action = "view";
    }else{
        $action = "add";
    }
    header("Location: index.php?action=$action");
}

function delete(&$data){
   $data_delete = m_delete_employee();
   if($data_delete){
      header("location:index.php?action=view");
   }

}
function delete_user(&$data){
   $user_delete = m_delete_user();
   if($user_delete){
      header("location:index.php?action=viewUsers");
   }
}

function detail(&$data){
    $data['detail_employee']=detail_employee();
    $data['page']='employee/detail';
    }
function detail_users(&$data){
    $data['detail_user']=detail_user();
    
}

function update(&$data){
    $data['employee_detail'] = detail_employee();
    $data['employee_update'] =  m_update_empolyee();
    $data['page']='employee/update';
    if($data['employee_update']){
        header("location:index.php?action=view");  
    }
    
   
}
function update_user(&$data){
    $data['user_detail'] = detail_user();
    $data['user_update'] =  m_update_users();
    $data['page']='employee/update_user';
    if($data['user_update']){
        header("location:index.php?action=viewUsers");  
    }
    
   
}
function login(&$data){
    $data['page']='login';
}
function loginValidate(&$data){
    validateFromDb();
}
function add_User(&$data){
    $data['page']='register';
}
function insert_User(){
    addUser();
}
function create_Users(&$data){
    $data['page']='employee/create_user';
}
function create_User(){
    createUser();
}
?>
<?php 
    // function get and return an array()

    // function m_get_data(){
    //     $query = "select * from employee";    // could be more dynamic next time
    //     include 'connection.php';
    //     $result = mysqli_query($connection, $query);
    //     $rows = [];
    //     if ($result && mysqli_num_rows($result) > 0){
    //         while ( $get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    //             $rows[] = $get_result_to_array;
    //         }
    //     }
        
    // }

    function view_employee(){
        $query = " SELECT * FROM employee";
        include 'connection.php';
        $result = mysqli_query($connection,$query);
        $rows = [];

        if(mysqli_num_rows($result) > 0){
            while($result_into_array=mysqli_fetch_assoc($result)){
                $rows[] = $result_into_array;
            }
            
        }
        return $rows;
    }
 
    function view_user(){
        $query = " SELECT * FROM user";
        include 'connection.php';
        $result = mysqli_query($connection,$query);
        $rows = [];

        if(mysqli_num_rows($result) > 0){
            while($result_into_array=mysqli_fetch_assoc($result)){
                $rows[] = $result_into_array;
            }
            
        }
        return $rows;
    }
 
   
 function m_add_empolyee(){
            include 'connection.php';

            if(isset($_POST['add'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age=$_POST['age'];
            $salary=$_POST['salary'];
            
            $sql = "INSERT INTO employee(firstname,lastname,age,salary)
            VALUES('$firstname', '$lastname', '$age','$salary')";

            $result=mysqli_query($connection,$sql);

            return $result;
  
}
    }

    function m_delete_employee(){
        include 'connection.php';
        $id = $_GET['id'];
        $query = "DELETE FROM employee WHERE id='$id' ";
        $result = mysqli_query($connection,$query);
        return $result;
    }
    function m_delete_user(){
        include 'connection.php';
        $id = $_GET['id'];
        $query = "DELETE FROM user WHERE id='$id' ";
        $result = mysqli_query($connection,$query);
        return $result;
    }

    function m_update_empolyee(){
        include 'connection.php';
        $id = $_GET['id'];
        if(isset($_POST['update'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age=$_POST['age'];
        $salary=$_POST['salary'];
        
        $sql = "UPDATE employee SET 
            firstname='$firstname',lastname='$lastname',age='$age',salary='$salary'
         WHERE id ='$id' ";
    
        $updated = mysqli_query($connection,$sql);
        return $updated;
           
}

}
    function m_update_users(){
        include 'connection.php';
        $id = $_GET['id'];
        if(isset($_POST['update_user'])){

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password=$_POST['password'];
        
        $sql = "UPDATE user SET 
            name='$name',username='$username',password='$password'
         WHERE id ='$id' ";
    
        $updated = mysqli_query($connection,$sql);
        return $updated;
           
}

}

function detail_employee(){
    include 'connection.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM employee WHERE id = '$id' ";

    $result = mysqli_query($connection,$query);

   return $result;
}
function detail_user(){
    include 'connection.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM user WHERE id = '$id' ";

    $result = mysqli_query($connection,$query);

   return $result;
}

function validateFromDb(){
    include 'connection.php';
    if(isset($_POST['but_submit'])){
       
        $uname = mysqli_real_escape_string( $connection,$_POST['txt_uname']);
        $password = mysqli_real_escape_string( $connection,$_POST['txt_pwd']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($connection,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: index.php?action=view');
            }else{
                header('Location: index.php');
            }
    
        }
    }
}

function addUser(){
    include 'connection.php';
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO user(username,name,password) VALUES ('$username','$name','$password')";
        $result = mysqli_query($connection,$query);
        
        if($result){
            header("location:index.php?action=login"); 
        }else{
            header("location:index.php?action=add_User"); 

       }
       
    }
function createUser(){
    include 'connection.php';
        $name = $_POST['Uname'];
        $username = $_POST['Uusername'];
        $password = $_POST['Upassword'];

        $query = "INSERT INTO user(username,name,password) VALUES ('$username','$name','$password')";
        $result = mysqli_query($connection,$query);
        
        if($result){
            header("location:index.php?action=viewUsers"); 
        }else{
            header("location:index.php?action=create_User"); 

       }
       
    }
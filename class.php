<?php 

class mentalHealth {
    private $server = "mysql:host=localhost;dbname=mentalhealth";
    private $user = "root";
    private $pass = "";
    private $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;
    
    public function openConnection() {
        
        try {
        
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->option);
            return $this->con;

        } catch (PDOException $e) { 

            echo "There is a problem in your connection:". $e->getMessage();
            
        }
    }

    public function closeConnection(){

        $this->con = null;


    }

    //GETTING USER
    public function getUsers(){
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM patientinfo");
        $stmt->execute();
        $patient = $stmt->fetchAll();
        $patientcount = $stmt->rowCount(); 

        if ($patientcount > 0) {

            return $patient;
            
        } else {

            return 0;
            
        }
        
    }


    public function check_admin(){


        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM patientinfo WHERE access= 'admin1' ");
        $stmt->execute();
        $total = $stmt->rowCount();
        
        return $total;
       
    }

    

    public function login_admin(){
    
        if(isset($_POST['login'])){


            $email = $_POST['email'];
            $pass = $_POST['password'];

                $connection = $this->openConnection();
                $stmt = $connection->prepare("SELECT * FROM patientinfo WHERE email= ? AND password = ?");
                $stmt->execute([$email, $pass ]);

                $total = $stmt->rowCount();

            
            // if ($total > 0 ){

                if($this-> check_admin() > 0 ){

                    $email = $_POST['email'];
                    $pass = $_POST['password'];
        
                        $connection = $this->openConnection();
                        $stmt = $connection->prepare("SELECT * FROM patientinfo WHERE email= ? AND password = ?");
                        $stmt->execute([$email, $pass ]);
        
                        $total = $stmt->rowCount();

                        if ($total > 0 ){

                            header("location:dashboard/dashboard.php");
                        
                        }else {

                            echo "LOG IN FAILED";

                        }   

                }else {

                    echo "log in failed";
                }


            // }else {

            //    echo "LOG IN FAILED";
            // }
            

        }

    }


    //USER LOG IN
    public function login(){

        if(isset($_POST['login'])){


            $email = $_POST['email'];
            $pass = $_POST['password'];
            $id = $_POST['userid'];
            
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM patientinfo WHERE email= ? AND password = ?  ");
            $stmt->execute([$email, $pass]);
            $total = $stmt->rowCount();

            
            if ($total > 0  ){
                
                header("location:assesment.php?action=success");
             
            }else {

                header("location:login.php?action=danger");
            }
            

        }
    }
    //CHECKING EMAIL IF IT IS ALREADY EXIST
    public function check_user($email){

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM patientinfo WHERE email= ?");
        $stmt->execute([$email]);
        $total = $stmt->rowCount();
        
        return $total;
       
    }
    //REGISTRATION 
    public function register(){

        if(isset($_POST['register'])){

            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $password = $_POST['password'];
           

            if($this->check_user($email) == 0){

                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO patientinfo(`fname`,`lname`,`mobile`,`email`,`password`) 
                VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([ $fname, $lname, $number, $email, $password]);

                header("location:register.php?action=assesment3");

            }else {

                header("location:register.php?action=warning");

            }

        }
    } 


    //ASSESMENT 

    public function assesment(){   //DASS21
        
        if(isset($_POST['submit'])){
        
                $test1 = $_POST['test1'];
                $test2 = $_POST['test2'];
                $test3 = $_POST['test3'];
                $test4 = $_POST['test4'];
                $test5 = $_POST['test5'];
                $test6 = $_POST['test6'];
                $test7 = $_POST['test7'];
                $test8 = $_POST['test8'];
                $test9 = $_POST['test9'];
                $test10 = $_POST['test10'];
                $test11 = $_POST['test11'];
                $test12 = $_POST['test12'];
                $test13 = $_POST['test13'];
                $test14 = $_POST['test14'];
                $test15 = $_POST['test15'];
                $test16 = $_POST['test16'];
                $test17 = $_POST['test17'];
                $test18 = $_POST['test18'];
                $test19 = $_POST['test19'];
                $test20 = $_POST['test20'];
                $test21 = $_POST['test21'];


                $and =  $test1 + $test2 + $test3 + $test4 + $test5 + $test6 + $test7 + $test8 + $test9 + $test10
                + $test11 + $test12 + $test13 + $test14 + $test15 + $test16 + $test17 + $test18 + $test19 + $test20 + $test21;

                $normal = "NORMAL";
                

                if ($and < 21 ) {
                    
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("UPDATE patientinfo SET status= ?  ");
                    $stmt->execute([$normal]);

                    header("location:dass21.php?action=assesment");

                } else {

                    header("location:dass21.php?action=assesment2");
                    
                }
                



            
        }    
    }

    public function anxiety(){ //amxiety
        
        if(isset($_POST['submit'])){
        
                $test1 = $_POST['test1'];
                $test2 = $_POST['test2'];
                $test3 = $_POST['test3'];
                $test4 = $_POST['test4'];
                $test5 = $_POST['test5'];
                $test6 = $_POST['test6'];
                $test7 = $_POST['test7'];
                $test8 = $_POST['test8'];
                $test9 = $_POST['test9'];
                $test10 = $_POST['test10'];


                $and =  $test1 + $test2 + $test3 + $test4 + $test5 + $test6 + $test7 + $test8 + $test9 + $test10;

                $normal = "NORMAL";
                

                if ($and < 10 ) {
                    
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("UPDATE patientinfo SET status= ?  ");
                    $stmt->execute([$normal]);

                    header("location:anxiety.php?action=assesment");

                } else {

                    header("location:anxiety.php?action=assesment2");
                    
                }

            }
        }
    

        public function stress(){  //stress
        
            if(isset($_POST['submit'])){
            
                    $test1 = $_POST['test1'];
                    $test2 = $_POST['test2'];
                    $test3 = $_POST['test3'];
                    $test4 = $_POST['test4'];
                    $test5 = $_POST['test5'];
                    $test6 = $_POST['test6'];
                    $test7 = $_POST['test7'];
                    $test8 = $_POST['test8'];
                    $test9 = $_POST['test9'];
                    $test10 = $_POST['test10'];
    
    
                    $and =  $test1 + $test2 + $test3 + $test4 + $test5 + $test6 + $test7 + $test8 + $test9 + $test10;
    
                    $normal = "NORMAL";
                    
    
                    if ($and < 10 ) {
                        
                        $connection = $this->openConnection();
                        $stmt = $connection->prepare("UPDATE patientinfo SET status= ?  ");
                        $stmt->execute([$normal]);
    
                        header("location:stress.php?action=assesment");
    
                    } else {
    
                        header("location:stress.php?action=assesment2");
                        
                    }
    
                }
            }
    
    
        public function depression(){    //depression
    
            if(isset($_POST['submit'])){
            
                    $test1 = $_POST['test1'];
                    $test2 = $_POST['test2'];
                    $test3 = $_POST['test3'];
                    $test4 = $_POST['test4'];
                    $test5 = $_POST['test5'];
                    $test6 = $_POST['test6'];
                    $test7 = $_POST['test7'];
                    $test8 = $_POST['test8'];
                    $test9 = $_POST['test9'];
                    $test10 = $_POST['test10'];
    
    
                    $and =  $test1 + $test2 + $test3 + $test4 + $test5 + $test6 + $test7 + $test8 + $test9 + $test10;
    
                    $normal = "NORMAL";
                    
    
                    if ($and < 10 ) {
                        
                        $connection = $this->openConnection();
                        $stmt = $connection->prepare("UPDATE patientinfo SET status= ?  ");
                        $stmt->execute([$normal]);
    
                        header("location:stress.php?action=assesment");
    
                    } else {
    
                        header("location:stress.php?action=assesment2");
                        
                    }
    
                }
            }

}

$mhealth = new mentalHealth;

?>
<?php
include ('ppconnect.php');
class productcrud {
    private $msg="";

    public function getMsg(){
        return $this->msg;
    }
    public function readProducts(){
        $data = array();
        try{
            global $connString;
            $conn = pg_connect($connString);
            if($conn ===false){
                echo"Unable to connect";
                return $data;
            }
           $query='select code,name,price,image,details,link from "product"';
           $result=pg_query($conn,$query);
           while($row = pg_fetch_row($result)){
               array_push($data,array("code"=>$row[0],"name"=>$row[1],"price"=>$row[2],"image"=>$row[3],"details"=>$row[4],"link"=>$row[5]));

           }
           pg_close($conn);
        }
        catch(Exception $e){
             $this->msg= $e->getMessage();
        }
        return $data;
    }
    public function createProduct($code,$name,$price,$image,$details,$link){
        $success =-1;
        try{
            global $connString;
            $conn= pg_connect($connString);
            if( $conn==false){
                $this->msg="Unable to connect";
                return $success;
            }
            //insert data
            $query ='insert into "product"(
                code, name, price, image, details,link)
                values ($1, $2, $3, $4, $5,$6) returning code';
    
            $params =array(&$code,&$name,&$price,&$image,&$detail,&$link);
            $res=pg_query_params($conn,$query,$params);
            $row=pg_fetch_row($res);
            $success=$row[0];
            pg_close($conn);
        }
        catch(Exception $e){
            $this->msg =$e->getMessage();
            $success=-1;
        }
    }

    public function updateProduct($code,$name,$price,$image,$details,$link){
        $success= -1;
        try{
            global $connString;
            $conn= pg_connect($connString);
            if( $conn==false){
                $this->msg="Unable to connect";
                return $success;
            }
            $query='update "product"
            set code=$1,name=$2,price=$3,image=$4,details=$5,link=$6
            where code=$1';
            $params =array(&$code,&$name,&$price,&$image,&$details,&$link);
            $res=pg_query_params($conn,$query,$params);
            $row=pg_fetch_row($res);
            $success=$row[0];
            pg_close($conn);
        }
        catch(Exception $e)
        {
            $this->msg =$e->getMessage();
            $success= -1;
        }
    }
    




    public function deleteProduct($code){
        $success= -1;
        try{
            global $connString;
            $conn= pg_connect($connString);
            if( $conn==false){
                $this->msg="Unable to connect";
                return $success;
            }
            $query='delete from "product"where code=$1';
            $params = array(&$code);
            $res= pg_query_params($conn,$query,$params);
            if($res== FALSE){
                $this->msg =" Error";
                return $success;
            }
                $num_rows=pg_affected_rows($res);
                $success=$num_rows;
                $this->msg="";
                pg_close($conn);
        }
        catch(Exception $e)
        {
            $this->msg =$e->getMessage();
            $success= -1;
        }
    }
}

?>
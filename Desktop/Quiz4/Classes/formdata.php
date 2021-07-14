<?php
namespace Classes;
class formdata{
    public function getdatabyid($id,$dbcon){


        $sql = "SELECT * FROM quiz4 where id = :id";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->bindParam(':id',$id);
        $pdostm->execute();

        return $pdostm->fetchAll(\PDO::FETCH_OBJ);
    }
public function addcar($fname,$lname,$code,$phone,$email,$insurance){
    $sql = "INSERT into insrequests (firstname,lastname,postalcode,phone,email,insurance)
            VALUES (:fname,:lname,:code,:phone,:email,:insurance)";
    $pst = $dbcon->prepare($sql);

    $pst->bindParam(':fname' , $fname);
    $pst->bindParam(':lname' , $lname);
    $pst->bindParam(':code' , $code);
    $pst->bindParam(':phone' , $phone);
    $pst->bindParam(':email' , $email);
    $pst->bindParam(':insurance' , $insurance);
    return $pst->execute();
}
}
?>

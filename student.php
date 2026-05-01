<?php
require_once "database.php";

class Student extends Database {

    public function showData() {

        $sql = "SELECT * FROM student";
        $result = $this->conn->query($sql);

        if ($result) {

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo $row['name'] . "<br>";
                }

            } else {
                echo "No Data Found";
            }

        } else {
            echo "Query Error";
        }
    }
}

$obj = new Student();
$obj->showData();
?>
<?php
    //Array of handcoded User Information.
    $user_info = array(
        "joe" => array(
            "client_name" => "Joe Wilson",
            "client_add1" => "1234 Home street",
            "client_add2" => "N/A",
            "city" => "Houston",
            "state" => "TX",
            "zipcode" => "77036" 
        ),
        "jon" => array(
            "client_name" => "Jon Smith",
            "client_add1" => "4321 House street",
            "client_add2" => "N/A",
            "city" => "Austin",
            "state" => "TX",
            "zipcode" => "71081" 
        ),
        "joy" => array(
            "client_name" => "Joy Swift",
            "client_add1" => "558 Ghar street",
            "client_add2" => "N/A",
            "city" => "Dallas",
            "state" => "TX",
            "zipcode" => "87042" 
        ),
        "shavie" => array(
            "client_name" => "Shavie Shinde",
            "client_add1" => "7891 House street",
            "client_add2" => "N/A",
            "city" => "Baytown",
            "state" => "TX",
            "zipcode" => "77093" 
        )
    );

    // checks form fill inputs and returns bool
    function inputValidator () {
        $isValid = false;
        //required form fill validations
        if (isset($_POST['client_name']) && isset($_POST['client_add1']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zipcode'])) {
            //required form size validations
            if (strlen($_POST['client_name']) <= 50 && strlen($_POST['client_add1']) <= 100 && strlen($_POST['city']) <= 100 && 
               strlen($_POST['state']) <= 2 && strlen($_POST['zipcode']) >= 5 && strlen($_POST['zipcode']) <= 9) {
                $isValid = true;
            }
        }
        //if address 2 is input, validate
        if (isset($_POST['client_add2'])) {
            if (strlen($_POST['client_add2']) > 100) {
                $isValid = false;
            }
        }
        return $isValid;
    }

    //user info function
    function UserInfoHandler (&$userinfo){
        //setting vars
        $status = 0;
        $username = $_SESSION['username'];
        //if input form fields are valid
        if (inputValidator()) {
            $client_name = $_POST['client_name'];
            $client_add1 = $_POST['client_add1'];
            $client_add2 = $_POST['client_add2'];
            $client_city = $_POST['city'];
            $client_state = $_POST['state'];
            $client_zipcode = $_POST['zipcode'];
            // updating data for existing user
            if (isset($userinfo[$username])) {
                //notifies user of register failure
                $userinfo[$username]["client_name"] = $client_name;
                $userinfo[$username]["client_add1"] = $client_add1;
                $userinfo[$username]["client_add2"] = $client_add2;
                $userinfo[$username]["city"] = $client_city;
                $userinfo[$username]["state"] = $client_state;
                $userinfo[$username]["zipcode"] = $client_zipcode;
                echo '<script>alert("Your user information has been updated."); 
                                location = "../main/index.php"; </script>';
                $status = 1;
            }
            // push new clients to the user_info array
            else {
                $new_userinfo = array(
                    "client_name" => $client_name,
                    "client_add1" => $client_add1,
                    "client_add2" => $client_add2,
                    "city" => $client_city,
                    "state" => $client_state,
                    "zipcode" => $client_zipcode
                ); 
                //add data into existing user_info array
                $userinfo[$username] = $new_userinfo;
                echo '<script>alert("Your user profile has been created."); 
                                location = "../main/index.php"; </script>';            
                $status = 2;
            }
        }
        return $status;
    }

    if (isset($_POST['submit'])) {
        // call login handler function
        UserInfoHandler($user_info);
    }

?>
<?php
session_start();

if (!isset($_SESSION['success']))
    {
        $_SESSION['success'] = false;
    
    }

    if (!isset($_SESSION['form_valid']))
    {
        $_SESSION['form_valid'] = false;
    }
    
    if (!isset($_SESSION['errorMessage']))
    {
        $_SESSION['errorMessage'] = [];
    }
    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


// define variables and set to empty values
$nameErr = $company_nameErr = $emailErr = $telephoneErr = $messageErr = "";
$name = $company_name = $email = $telephone = $message = $marketing = "";
$emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$telephoneRegex = "/^(?:(?:\+?44\s?(?:\(\d{1,5}\)|\d{1,5})|\d{4}|\d{5})\s?\d{3}\s?\d{3}\s?)$/";






if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {            
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";

            }
        }    
        
        $company_name = test_input($_POST["company_name"]);

    
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match($emailRegex, $email)) {
                $emailErr = "Invalid email";
            }
    }

        
        if (empty($_POST["telephone"])) {
            $telephoneErr = "Telephone number is required";
        } else {
            $telephone = test_input($_POST["telephone"]);
            if (!preg_match($telephoneRegex, $telephone)) {
                $telephoneErr = "Invalid telephone number";

            }
        }    


        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
        }


        $marketing = test_input($_POST["marketing"]);

    

    if ($marketing == 1) {
        $marketing = 'accepted';
    } else {
        $marketing = 'declined';
    }
    
        if (
            empty($nameErr) &&
            empty($company_nameErr) &&
            empty($emailErr) &&
            empty($telephoneErr) &&
            empty($messageErr)
        )   {
            
                try{

                    $_SESSION['form_valid'] = true;

                    require_once "connection.php";
                    $query = "INSERT INTO contact_form (name, company_name, email, telephone, message, marketing) 
                    VALUES ( :name , :company_name , :email , :telephone, :message, :marketing)";            
        
                    $stmt = $conn->prepare($query);
        
                    $stmt->bindParam(":name", $name);
                    $stmt->bindParam(":company_name", $company_name);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":telephone", $telephone);
                    $stmt->bindParam(":message", $message);
                    $stmt->bindParam(":marketing", $marketing);
                    
                    $stmt->execute();
                
                    $conn = null;
                    $stmt = null;
                    header('Location: contact-us.php#contact-form-lo');
                    die();
                    
        
                } catch (PDOException $e) {
                    die("Query Failed: " . $e->getMessage());
                }
            
                // $_SESSION['form_valid'] = false;
            } 
            
    } else {
            // header("Location:./contact-us.php#contact-form-lo");
        }

        session_destroy();
    
?>
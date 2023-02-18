<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $std_id = $_POST['id'];
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <label class="search" for="id">Search by ID:</label>
        <input type="text" id="id" name="id">
        <input class="btn" type="submit" value="Search">
    </form>

    <div id="students">
        <?php
			
			$myArray = array(
				array('name' => 'Azad', 'age' => 25, 'gender' => 'male', 'school' => 'University of California, Los Angeles', 'id' => '1'),
				array('name' => 'Ahmed', 'age' => 30, 'gender' => 'male', 'school' => 'Stanford University', 'id' => '2'),
				array('name' => 'Yaqub', 'age' => 45, 'gender' => 'male', 'school' => 'University of Michigan', 'id' => '3'),
				array('name' => 'Salam', 'age' => 22, 'gender' => 'male', 'school' => 'Massachusetts Institute of Technology', 'id' => '4'),
				array('name' => 'Blnd', 'age' => 28, 'gender' => 'male', 'school' => 'California State University, Long Beach', 'id' => '5'),
				array('name' => 'Mustafa', 'age' => 19, 'gender' => 'male', 'school' => 'Harvard University', 'id' => '6'),
				array('name' => 'Lazo', 'age' => 33, 'gender' => 'male', 'school' => 'New York University', 'id' => '7'),
				array('name' => 'Haryad', 'age' => 27, 'gender' => 'male', 'school' => 'University of Texas at Austin', 'id' => '8'),
				array('name' => 'Edris', 'age' => 31, 'gender' => 'male', 'school' => 'Columbia University', 'id' => '9'),
				array('name' => 'Safa', 'age' => 29, 'gender' => 'male', 'school' => 'Yale University', 'id' => '10')
			);

            if (isset($std_id)){
                echo '<p>Id: ' . $std_id . '</p>';
            }

            

            if(!empty($_GET['id'])){
			
			foreach($myArray as $obj) {

				echo '<p>Name: ' . $obj['name'] . '</p>';
				echo '<p>Age: ' . $obj['age'] . '</p>';
				echo '<p>Gender: ' . $obj['gender'] . '</p>';
				echo '<p>School: ' . $obj['school'] . '</p>';
				echo '<p>ID: ' . $obj['id'] . '</p>';
				echo '<hr>';
			} 
        } else{
            
            foreach($myArray as $obj) {
                if($obj['id'] == $std_id) {
                    echo '<p>Name: ' . $obj['name'] . '</p>';
                    echo '<p>Age: ' . $obj['age'] . '</p>';
                    echo '<p>Gender: ' . $obj['gender'] . '</p>';
                    echo '<p>School: ' . $obj['school'] . '</p>';
                    echo '<p>ID: ' . $obj['id'] . '</p>';
                    $found = true;
                    break;
                } else{
                    echo '<p>Student Not Found</p>'; 
                }
            }

        }

       
           
		?>


    </div>

</body>

</html>
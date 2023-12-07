<?php 
    include 'top.php';

    //declaring varaibles
    $dataIsGood = false;
    $errorMessage = "";

    
    $firstName = '';
    $lastName = '';
    $email = '';
    $experience = '';
    $time = '';
    $millis = '';

    function getData($field){
        if (!isset($_POST[$field])){
            $data = "";
        } else{
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString){
        
        return (preg_match("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        print PHP_EOL . '<!-- Starting Sanitization -->' . PHP_EOL;
        $firstName = getData('txtFirstName');
        $lastName = getData('txtLastName');
        $email = getData('txtEmail');
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $experience = getData('radExperience');
        $time = getData('txtTime');
        $millis = getData('txtMillis');

    }

    print PHP_EOL . '<!-- starting validation -->' . PHP_EOL;

    $dataIsGood = true;
    //first name
    if( $firstName == ''){
        $errorMessage .= '<p class="mistake">Please enter your first name</p>';
        $dataIsGood = false;
    } elseif(!verifyAlphaNum($firstName)){
        $errorMessage .= '<p class="mistake">Your first name has invalid characters</p>';
        $dataIsGood = false;

    }
    //lastname
    if( $lastName == ''){
        $errorMessage .= '<p class="mistake">Please enter your last name</p>';
        $dataIsGood = false;
    } elseif(!verifyAlphaNum($lastName)){
        $errorMessage .= '<p class="mistake">Your last name has invalid characters</p>';
        $dataIsGood = false;
    //email
    }
    if( $email == ""){
        $errorMessage .= '<p class="mistake">Please enter your email</p>';
        $dataIsGood = false;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMessage .= '<p class="mistake">Your email address contains invalid characters</p>';
        $dataIsGood = false;
    }
    //radio buttons
    if($experience != "beginner" AND $experience != "intermediate" AND $experience != "advanced"){
        $errorMessage .= '<p class="mistake">Please fill in an experience level.</p>';
        $dataIsGood = false;
    }
    //checkboxes
    
    //timer doesn't need validation since input on backend???? (investigate later)
    if($time == ""){
        $errorMessage .= '<p class="mistake">Please include time in form submission</p>';
        $dataIsGood = false;
    }



    //saving
    print '<!-- starting save -->' . PHP_EOL; 
    if($dataIsGood){
        $sql = 'INSERT INTO tblRubixSurvey 
        (fldFirstName, fldLastName, fldEmail, fldExperience, fldTime, fldMillis)';


        $sql .= ' VALUES(?, ?, ?, ?, ?, ?)';
        $data = array( $firstName, $lastName, $email, $experience, $time, $millis); //fix fields
        try{
  
            

            $statement = $pdo->prepare($sql);
            if($statement-> execute($data)){
                $message .= '<h2>Thank you</h2>';
                $message .= '<p>Your information was succesfully saved.</p>';
            
            }else{
                $message .='<p>Record was NOT successfully saved.</p>';
            }            
        }catch(PDOException $e){
            $message .= '<p>Couldn\t insert the record, please contact someone </p>';
        }
    
    }

    print '<!-- finished save -->' . PHP_EOL; 
    
?>



<!--different per page -->
<main class="mainContainer wrapper"> 

        <!--Section 1-->       
        <section class ="introSection">
            <h2>Welcome!</h2>
            <p class="form-paragraph">
                <!--Gonna put some words here to introduce form-->
                Speed cubing is a hobby in which a person tries to solve Rubix puzzles, generally the 3x3 cube, as fast as they can.
                Once you've solved the cube a few times, it may be worth timing yourself. It can be fun to compete against your old times
                as you become more comfortable solving the cube and even learn faster algorithims. If you're also interested in competing agaisnt others'
                times then feel free to submit your times through our form. Do you have what it takes to stand on the leaderboard?
            </p>
        </section>

        <!--Section 2-->
        <section class ="leaderboardSection">
            <div class="leaderFlex">
                <div>
                    <h2>Leaderboard</h2>
                </div>
                <!--Leaderboard-->
                <div>
                <table>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Time</th>
                    </tr>
                    <!-- first place -->
                        <?php
                            $sql = "SELECT  fldFirstName, fldLastName, fldTime, fldMillis FROM tblRubixSurvey ORDER BY fldTime ASC, fldMillis ASC LIMIT 5";
                            $result = $pdo->query($sql);

                                if ($result->rowCount() > 0) {
                                    $rank = 1;
                                    // output data of each row
                                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                        echo "<tr><td>$rank</td><td>" . $row["fldFirstName"] . " " . $row["fldLastName"] . "</td><td>" . $row["fldTime"] . "." . $row["fldMillis"] . "</td></tr>";
                                        $rank++;
                                    }
                                }
                                else {
                                    echo "<tr><td colspan='3'>0 results</td></tr>";
                                }
                        ?> 
                </table>
                </div>
            </div>
        </section>

        <!--Section 3-->
        <section class="inputSection"> 
            <h2>Speed Test</h2>
                
                <form action ="#" method = "POST">
                
                    <div class="formGridPersonal">
                        <!-- name/email  -->
                        <fieldset>
                            <legend>Personal Info</legend>
                            <p class="form-paragraph">
                                <label for="txtFirstName">First Name:</label>
                                <input type="text" name="txtFirstName" id="txtFirstName" value= "<?php print $firstName; ?>" required>
                            </p>
                            <p class="form-paragraph">
                                <label for="txtLastName">Last Name:</label>
                                <input type="text" name="txtLastName" id="txtLastName" value= "<?php print $lastName; ?>" required>
                            </p>
                            <p class="form-paragraph">
                                <label for="txtEmail">Email Address:</label>
                                <input type="text" name="txtEmail" id="txtEmail" value= "<?php print $email; ?>" required>
                            </p>
                        </fieldset>
                    </div>
                    <!-- experience level -->
                    <div class="formGridRadio">
                        <fieldset>
                            <h4>How experienced are you?</h4>
                            <p class ="form-paragraph">
                                <input type="radio" name="radExperience" id="radBeginner" value="beginner"
                                <?php if($experience == "beginner") print 'checked'; ?>>
                                <label for="radBeginner">Beginner</label>
                            </p>
                            <p class ="form-paragraph">
                                <input type="radio" name="radExperience" id="radIntermediate" value="intermediate"
                                <?php if($experience == "intermediate") print 'checked'; ?>>
                                <label for="radIntermediate">Intermediate</label>
                            </p>
                            <p class ="form-paragraph">
                                <input type="radio" name="radExperience" id="radAdvanced" value="advanced"
                                <?php if($experience == "advanced") print 'checked'; ?>>
                                <label for="radAdvanced">Advanced</label>
                            </p>
                        </fieldset>
                    </div>     

                    <!-- timer -->
                    <div class="formGridTimer">
                        <fieldset>             
                        <legend>Speed Test</legend>
                            <!--timer display -->
                            <div class ="timer">
                                00 : 00 : 00 : 00
                            </div>
                            <!-- start and solved buttons-->
                            <div class ="buttons">
                            
                                <!-- js event listener waits for start button -->
                                <button class="btn" type ="button" id="button-start" >Start</button>
                                <!-- js event listener waits for button finish  -->
                                <button class='btn' type ='button' id='button-finish'>Solved</button>
                                
                            </div>
                            <p class="hidden">
                                <input type ="text" name="txtTime" id="txtTime" value="" required>    
                                
                            </p>
                            <p class="hidden">
                                <input type ="text" name="txtMillis" id="txtMillis" value="">
                                <script src="stopWatch.js"></script>
                            </p>
                        </fieldset>
                        <p class="form-paragraph">
                            <input class="btnSubmit" type="submit" name="btnSubmit" value="Submit">
                        </p>
                    </div>
                </form>

        </section>

</main>
    <?php 
        include 'footer.php';
    ?>

    </body>
</html>
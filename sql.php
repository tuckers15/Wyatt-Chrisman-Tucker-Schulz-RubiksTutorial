<?php
    include 'top.php';
?>
<main>
    <h1>SQL </h1>
    <h3>Create Table Function</h3>

    <pre>   
    CREATE TABLE tblRubixSurvey(
        pmkSurveyId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldFirstName varchar(40),
        fldLastName varchar(40),
        fldEmail varchar(50),
        fldExperience varchar(14),
        fldTime time,
        fldMmillis int(3)
    )
    </pre>

    <h3>Insert into Survey Table</h3>
    <pre>
    INSERT INTO tblRubixSurvey
        (fldFirstName, fldLastName, fldEmail, fldExperience, fldTime, fldMillis )
    VALUES
        ('Tucker', 'Schulz', 'taschulz@uvm.edu', 'intermediate', '0:0:4', 12)
    </pre>


</main>
<?php include 'footer.php'; ?>
</body>
</html>
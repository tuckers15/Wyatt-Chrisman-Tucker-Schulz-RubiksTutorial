<?php
    include 'top.php';
?>
    <!--different per page -->
    <main class ="container"> 
        <!--Section 1-->
        <section class ="section1">
            <h2>The Second Layer</h2>
            <p>
            After the white cross and corners are completed, the next step is the second layer. With the white side directed down,
            we will now be solving the second row of squares. To get started flip the cube to make sure that you are holding it yellow side up, and locate 
            a non-yellow edge piece. Rotate the top of the cube (U or U') until the color facing you is on it's matching side.
            </p>
        </section>

        <!--Section 2-->
        <section class ="section2"> 
            <h2>Left and Right Algorithm</h2>
            <p>
                Once the edge piece has been aligned, there are two cases. One where
                the edge neegs to go down to the right and one where it needs to go down
                to the left. For both algorithms you should have the edge piece you are trying
                to place into the second layer, facing you. In the images below this would be the green side
            </p>
            <figure class="center">
                <img src="images/second-layer-right.png" alt="Case 1" width="150">
                <figcaption>Case 1 - Edge piece must move down and to the Right.</figcaption>
            </figure>
                <h2 class="alg">U R U R' U' F' U' F</h2>
            <figure class="center">
                <img src="images/second-layer-left.png" alt="Case 2" width="150">
                <figcaption>Case 2 - Edge piece must move down and to the Left.</figcaption>
            </figure>          
            <h2 class="alg">U' L' U' L U F U F'</h2>
        </section>

        <!--Section 3-->
        <section class ="section3">
            <h2>Possible Problems</h2>
            <p>
                It's possible that an edge piece is in it's proper spot for the second layer, but is rotated incorrectly. This will take two steps to fix.
                First, you must bring the incorrect edge piece to the top of the cube, this can be done by using either of the above algorithims to insert 
                a yellow edge piece into the second layer. Once the original edge piece is on top, it can be placed into the second layer following the same steps from above.
                
            </p>
        </section>

        </main>
        <?php 
            include 'footer.php';
        ?>
    </body>
</html>
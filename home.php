<?php
include 'top.php';
?>
    <!--different per page -->
    <main class ="homeWrapper"> 
        <!--Section 1-->
        <section  class="section1">
            <h2><Strong>Welcome!</Strong></h2>
            <p>
                On this page we will be teaching you how to solve a Rubik's cube.  We will have a mix of beginner's method which
                will have the least amount of algorithms (a set of moves to move certain pieces) and intermediate level algorithms
                which will require knowing more algorithms but will allow you to solve the cube at a faster rate.
            </p>
        </section>


        <!--Section 2-->
        <section class ="notationSection">
            <h2>Notation</h2>
            <p>
                There are 7 different moves that you could make on the cube, as well as 3 exta variations of each move.
            </p>

            <table>
                <tr class="even">
                    <th>Right (R)</th>
                    <td>
                        <img src="images/right.png" alt="Right Up" width=150>
                    </td>

                    <th>Left (L)</th>
                    <td>
                        <img src="images/left.png" alt="Left Down" width=150>
                    </td>

                    <th>Up (U)</th>
                    <td>
                        <img src="images/up.png" alt="Up to the right" width=150>
                    </td>
                </tr>

                <tr class="odd">
                    <th>Down (D)</th>
                    <td>
                        <img src="images/down.png" alt="Down to the left" width=150>
                    </td>

                    <th>Front (F)</th>
                    <td>
                        <img src="images/front.png" alt="Front to the right" width=150>
                    </td>

                    <th>Back (B)</th>
                    <td>
                        <img src="images/back.png" alt="Back to the left" width=150>
                    </td>
                </tr>

                <tr class="even">
                    <td colspan = "2"></td>
                    <th>Middle (M)</th>
                    <td>
                        <img src="images/middle.png" alt="Right Up" width=150>
                    </td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
            <table>
                <tr class="odd">
                    <th>Prime (')</th>
                    <td>Prime means to turn that side in the opposite direction</td>
                </tr>

                <tr class="even">
                    <th>Two (2)</th>
                    <td>Two means you turn that side twice</td>
                </tr>  

                <tr class="odd">
                    <th>Wide (w)</th>
                    <td>Wide means to turn two layers</td>
                </tr> 

                <tr class="even"><td colspan="6">Source: <cite><a href = "https://jperm.net/3x3/moves">Jperm.com</a></cite></td></tr>
            </table>

            
            
        </section>
        <!--Section 3-->
        <section class="homeVid">
            <h3 class="center">Video Help</h3>
            
            <p class="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/24eHm4ri8WM?start=0&end=86" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
        </section>

    </main>
        <?php 
            include 'footer.php';
        ?>
    </body>
</html>
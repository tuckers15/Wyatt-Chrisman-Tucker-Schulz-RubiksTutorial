<?php
    include 'top.php';
?>

    <main id = "container"> 
        

    <section class ="section1">       
        <h2>Orient Last Layer (OLL)</h2> 
        <p>
            After you have completed the first two layers, the next step is orienting the last layer.
            This means that you are orienting all of the yellow pieces to face upwards. This is done through two steps,
            the first step is orienting all of the edges and once those are oriented and you have a yellow cross,
            you permutate the corners. After this, all of the yellow pieces will be facing upwards.
        </p>
    </section>

    <section class="section2">
        <h2>Beginners Method</h2>
        <p> 
            At its easiest, this step will only require you to memorize 2 algorithms.  But,
            they will most likely need to be repeated a few times.
        </p>
    </section>

    <section class="beginnerTables">
        <table class="beginner tableLeft">
            <tr class = "even">
                <th class="title" colspan="4">Orient Edges Beginner</th>
            </tr>

            <tr class = "odd">
                <th>Dot</th>
                <td>
                    <img src="images/dot.png" alt="Dot Case" width=150>
                </td>
                <td>F R U R' U' F'</td>
                <td>This will lead you to the L case</td>
            </tr>

            <tr class = "even">
                <th>L</th>
                <td>
                    <img src="images/L.png" alt="L Case" width=150>
                </td>
                <td>F R U R' U' F'</td>
                <td>This will lead you to the line case</td>
            </tr>

            <tr class = "odd">
                <th>Line</th>
                <td>
                    <img src="images/line.png" alt="Line Case" width=150>
                </td>
                <td>F R U R' U' F'</td>
                <td>This will orient all the edges</td>
            </tr>
        </table>
            
        <table class="beginner tableRight">
            <tr class = "even">
                <th class="title" colspan="4">Orient Corners Beginner</th>
            </tr>

            <tr class = "odd">
                <th>Fish Right</th>
                <td>
                    <img src="images/fishR.png" alt="Fish Right Case" width=150>
                </td>
                <td>R U R' U R U2 R'</td>
                <td>This will orient all the corners</td>
            </tr>

            <tr class = "even">
                <th>Fish Left</th>
                <td>
                    <img src="images/fishL.png" alt="Fish Left Case" width=150>
                </td>
                <td>L' U' L U' L' U2 L</td>
                <td>This will orient all the corners</td>
            </tr>

            <tr class = "odd">
                <th>Cross With TWO Matching Corners</th>
                <td>
                    <img src="images/cross2.png" alt="Cross Matching Corners Case" width=150>
                </td>
                <td>R U R' U R U2 R'</td>
                <td>This will bring you to the fish right case</td>
            </tr>

            <tr class = "even">
                <th>Cross With ONE Matching Corners</th>
                <td>
                    <img src="images/cross3.png" alt="Cross Non-matching Corners" width=150>
                </td>
                <td>R U R' U R U2 R'</td>
                <td>This will bring you to the fish right case</td>
            </tr>

            <tr class = "odd">
                <th>8</th>
                <td>
                    <img src="images/8.png" alt="8 Case" width=150>
                </td>
                <td>R U R' U R U2 R'</td>
                <td>This will bring you to the fish left case</td>
            </tr>

            <tr class = "even">
                <th>T</th>
                <td>
                    <img src="images/T.png" alt="T Case" width=150>
                </td>
                <td>R U R' U R U2 R'</td>
                <td>This will bring you to the fish left case</td>
            </tr>

            <tr class = "odd">
                <th>U</th>
                <td>
                    <img src="images/U.png" alt="U Case" width=150>
                </td>
                <td>R U R' U R U2 R'</td>
                <td>This will bring you to the fish left case</td>
            </tr>
        </table>
    </section>

    <section class="section4">
        <h2>Intermediate Method</h2>
        <p> 
            Using the intermediate method this will allow you to guarantee the orientation 
            of the last layer only using two algorithms. Although, there is a lot more memorization
            that is required because of the increased number of algorithms for each possible orientation.
        </p>
    </section>

    <section class="intermediateTables">
        <table class="intermediate tableLeft">
            <tr class = "even">
                <th class="title" colspan="3">Orient Edges Intermediate</th>
            </tr>

            <tr class = "odd">
                <th>Dot</th>
                <td>
                    <img src="images/dot.png" alt="Dot Case" width=150>
                </td>
                <td>F U R U' R' F' U F R U R' U F'</td>
            </tr>

            <tr class = "even">
                <th>L</th>
                <td>
                    <img src="images/L-topleft.png" alt="L Case" width=150>
                </td>
                <td>F U R U' R' F'</td>
            </tr>

            <tr class = "odd">
                <th>Line</th>
                <td>
                    <img src="images/line.png" alt="Line Case" width=150>
                </td>
                <td>F R U R' U' F'</td>
            </tr>

        </table>

        <table class="intermediate tableRight">
            <tr class = "even">
                <th class="title" colspan="3">Orient Corners Intermediate</th>
            </tr>

            <tr class = "odd">
                <th>Fish Right</th>
                <td>
                    <img src="images/fishR.png" alt="Fish Right Case" width=150>
                </td>
                <td>R U R' U R U2 R'</td>
            </tr>

            <tr class = "even">
                <th>Fish Left</th>
                <td>
                    <img src="images/fishL.png" alt="Fish Left Case" width=150>
                </td>
                <td>L' U' L U' L' U2 L</td>
            </tr>

            <tr class = "odd">
                <th>Cross With TWO Matching Corners</th>
                <td>
                    <img src="images/cross2.png" alt="Cross Matching Corners Case" width=150>
                </td>
                <td>R U R' U R U' R' U R U2 R'</td>
            </tr>

            <tr class = "even">
                <th>Cross With ONE Matching Corners</th>
                <td>
                    <img src="images/cross3.png" alt="Cross Non-matching Corners" width=150>
                </td>
                <td>R U2 R2 U' R2 U' R2 U2 R</td>
            </tr>

            <tr class = "odd">
                <th>8</th>
                <td>
                    <img src="images/8.png" alt="8 Case" width=150>
                </td>
                <td>F R' F' Rw U R U' Rw'</td>
            </tr>

            <tr class = "even">
                <th>T</th>
                <td>
                    <img src="images/T.png" alt="T Case" width=150>
                </td>
                <td>Rw U R' U' Rw' F R F'</td>
            </tr>

            <tr class = "odd">
                <th>U</th>
                <td>
                    <img src="images/U.png" alt="U Case" width=150>
                </td>
                <td>R2 D R' U2 R D' R' U2 R'</td>
            </tr>
</table>

    </section>



    </main>
        <?php 
            include 'footer.php';
        ?>
    </body>
</html>
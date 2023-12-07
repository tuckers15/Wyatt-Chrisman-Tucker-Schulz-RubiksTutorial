<?php
    include 'top.php';
?>
    <main id = "container"> 


    <section class ="section1">       
        <h2>Permutate Last Layer (PLL)</h2> 
        <p>
            Once all of the yellow pieces are oriented, you will now place all of
            the pieces in their correct positions. This is the last step and will finish
            with a solved cube! This will have two steps very similar to OLL but in 
            a swapped order.  You will permutate the corners first and then the edges.
            For PLL, when you are looking at the image that corresponds to each case,
            the colors do not matter, it is the pattern that the colors are in that you
            will follow to decide which case is present.
        </p>
    </section>

    <section class ="section1">       
        <h2>Beginner's Method</h2> 
        <p>
            Permutating the corners will consist of only one algorithm that you will have 
            to perform either one or two times to permutate the corners. And then one algorithm with two
            variatons to solve the edges.
        </p>
    </section>

    <section class="section3">
        <table class="intermediate tableLeft">
            <tr class = "even">
                <th class="title" colspan="3">Permutate Corners Beginner</th>
            </tr>

            <tr class = "odd">
                <th>Corner Pair</th>
                <td>
                    <img src="images/swap-front-corners.png" alt="Swap Front Corners" width=150>
                </td>
                <td>R' F R' B2 R F' R' B2 R2</td>
            </tr>

            <tr class = "even">
                <td colspan="3">
                    There is a possibility where there is no corner pair with matching
                    colors. In this case, you can perform the algorithm in any position,
                    as long as yellow is still on the top. Thid will guarantee you end up
                    with a corner pair.
                </td>
            </tr>
        </table>

        <table class="intermediate tableRight">
            <tr class = "even">
                <th class="title" colspan="3">Permutate Edges Beginner</th>
            </tr>

            <tr class = "odd">
                <th>Rotate Right</th>
                <td>
                    <img src="images/rotate-right.png" alt="Rotate Edges Right" width=150>
                </td>
                <td>F2 U' M' U2 M U' F2</td>
            </tr>

            <tr class = "even">
                <th>Rotate Left</th>
                <td>
                    <img src="images/rotate-left.png" alt="Rotate Edges Left" width=150>
                </td>
                <td>F2 U M' U2 M U' F2</td>
            </tr>

            <tr class = "odd">
                <td colspan="3">
                    There is a possibility where one of these cases do not occur.
                    In this situation you can perform either algorithm in any position 
                    as long as yellow is on the top. This will guarantee one of the other 
                    cases to show up.
                </td>
            </tr>
        </table>


    </section>

    <section class="section4">
        <table class="intermediate tableLeft">
            <tr class = "even">
                <th class="title" colspan="3">Permutate Corners Intermediate</th>
            </tr>

            <tr class = "odd">
                <th>Corner Pair</th>
                <td>
                    <img src="images/swap-front-corners.png" alt="Swap Front Corners" width=150>
                </td>
                <td>R' F R' B2 R F' R' B2 R2</td>
            </tr>

            <tr class = "even">
                <th>Corner Pair</th>
                <td>
                    <img src="images/diagonal-corners.png" alt="Swap Diagonal Corners" width=150>
                </td>
                <td>F R U' R' U' R U R' F' R U R' U' R' F R F'</td>
            </tr>
        </table>

        <table class="intermediate tableRight">
            <tr class = "even">
                <th class="title" colspan="3">Permutate Edges Intermediate</th>
            </tr>

            <tr class = "odd">
                <th>Rotate Right</th>
                <td>
                    <img src="images/rotate-right.png" alt="Rotate Edges Right" width=150>
                </td>
                <td>F2 U' M' U2 M U' F2</td>
            </tr>

            <tr class = "even">
                <th>Rotate Left</th>
                <td>
                    <img src="images/rotate-left.png" alt="Rotate Edges Left" width=150>
                </td>
                <td>F2 U M' U2 M U' F2</td>
            </tr>

            <tr class = "odd">
                <th>Swap Across</th>
                <td>
                    <img src="images/swap-across.png" alt="Swap Edges Across" width=150>
                </td>
                <td>M2 U M2 U2 M2 U M2</td>
            </tr>

            <tr class = "even">
                <th>Swap Pairs</th>
                <td>
                    <img src="images/swap-pairs.png" alt="Swap Edge Pairs" width=150>
                </td>
                <td>M2 U M2 U M' U2 M2 U2 M'</td>
            </tr>

        </table>


    </section>





    </main>

    <?php 
        include 'footer.php';
    ?>
    </body>
</html>
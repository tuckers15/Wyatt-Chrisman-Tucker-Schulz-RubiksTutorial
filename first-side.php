<?php 
    include 'top.php';
?>
<!--different per page -->
<main class ="firstSideWrapper">
    <!-- section 1 -->
    <section class ="firstSideIntro">
        <h2 class="center">The White Cross</h2>
        <p>
            The first step to solving a Rubik's cube is solving the white cross. This is one of the most intuitive steps to solving your cube.
            This step requrires the least amount of memorizing algorithms and is more learning how to recognize certain cases. The more you play around with your cube
            the more natural this step will become.
        </p>
    </section>    

    <section class="whiteCross">
        <h2 class="center">Getting Started</h2>
        <p>
        Hold the cube with the center white piece pointed up. Next Locate a white edge piece on the bottom and make not of it's second color.
        Align the edge piece so that it is on the same side as it's seconday color, then spin the front twice (F2) in order to bring the piece up onto the white side.
        </p>
        <table>
            <tr>
                <th><figure><img src="images/white-cross1.png" alt="Step 1" width="75"><figcaption>Step 1</figcaption></figure></th>
                <th><figure><img src="images/white-cross2.png" alt="Step 2" width="75"><figcaption>Step 2</figcaption></figure></th>
                <th><figure><img src="images/white-cross2.png" alt="Step 3" width="75"><figcaption>Step 3</figcaption></figure></th>
            </tr>
        </table>
    </section>    
       
    <section class="whiteCrossVid">
        <h3 class="center">Video Help</h3>    
        <p class="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/7Ron6MN45LY?start=20&end=105" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
    </section>

    
    <section class ="whiteCorners">
        <h2>The White Corners</h2>
            <p>
            While solving the white corners, this is where we will discover out first algorithm. We can call this algorithm the 'Right Alg'
            This will be a short sequence of four moves, which are the following: 
            </p>
        <h2 class="alg">R U R' U'</h2>
            <p>
            Holding the cube with the white side down. Align one of the white corner pieces so that the cube resembles one of these three cases:
            </p>
            <table>
                <tr>
                    <th><figure><img src="images/white-layer-corner1.png" alt="Case 1" width="150"></figure></th>
                    <th><figure><img src="images/white-layer-corner2.png" alt="Case 1" width="150"></figure></th>
                    <th><figure><img src="images/white-layer-corner3.png" alt="Case 1" width="150"></figure></th>
                </tr>
            </table>
            <p>
            From any of these cases repeat the abov algorith until the white square is in its correct spot. Repeat this step for all four white corners.
            </p>
    </section>

</main>
<?php
    include 'footer.php';
?>
</body>
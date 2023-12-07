<!-- ############## NAV Page ############### -->
<nav>
        <ul>
            <li><a class="<?php
                if ($pathParts['filename'] == "home") {
                print 'activePage';
            }
            ?>" href="home.php">Home</a></li>

            <li><a class="<?php
            if ($pathParts['filename'] == "first-side") {
                print 'activePage';
            }
            ?>" href="first-side.php">First Side</a></li>

            <li><a class="<?php
            if ($pathParts['filename'] == "second-layer") {
                print 'activePage';
            }
            ?>" href="second-layer.php">Second Layer</a></li>

            <li><a class="<?php
            if ($pathParts['filename'] == "orient-last-layers") {
                print 'activePage';
            }
            ?>" href="orient-last-layers.php">Orient Layer Edges (OLL)</a></li>

            <li><a class="<?php
            if ($pathParts['filename'] == "permutate-last-layers") {
                print 'activePage';
            }
            ?>" href="permutate-last-layers.php">Permutate Last Layer (PLL)</a></li>

            <li><a class="<?php
            if ($pathParts['filename'] == "form") {
                print 'activePage';
            }
            ?>" href="form.php">Form</a></li>
        </ul>    
</nav>
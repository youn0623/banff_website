<footer>
    <?php 
    $footerLinks1 = array(
        '<a href="https://banff.ca/">Old Site</a>'
    );

    $footerLinks2 = array(
        '<a href="https://education.nationalgeographic.org/resource/erosion/">Science</a>'
    );

    $footerLinks3 = array(
        '<a href="https://volcano.si.edu/gvp_currenteruptions.cfm">More science</a>'
    );

    foreach ($footerLinks1 as $key => $link) {
        if ($key != 0) {
            echo " | ";
        }
        echo $link;
    }

    echo " | ";

    foreach ($footerLinks2 as $key => $link) {
        if ($key != 0) {
            echo " | ";
        }
        echo $link;
    }

    echo " | ";

    foreach ($footerLinks3 as $key => $link) {
        if ($key != 0) {
            echo " | ";
        }
        echo $link;
    }
    ?>
    <h3>All rights reserved @2024</h3>
</footer>
<?php wp_footer(); ?>
</body>
</html>

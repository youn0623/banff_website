<footer>
    <h3>All rights reserved @2024</h3>
<<<<<<< HEAD
    <?php echo addNum(3,9); 
    
    $footerLinks = array(`<a href="https://banff.ca/">Old Site</a>`, `<a href="https://education.nationalgeographic.org/resource/erosion/">Science</a>`, `<a href="https://volcano.si.edu/gvp_currenteruptions.cfm">More science</a>`);
=======
    <?php 
    // Your array of footer links with corrected quotes
    $footerLinks = array(
        '<a href="https://banff.ca/">Old Site</a>',
        '<a href="https://education.nationalgeographic.org/resource/erosion/">Science</a>',
        '<a href="https://volcano.si.edu/gvp_currenteruptions.cfm">More science</a>'
    );
>>>>>>> 367fa67 (adds changes)

    // Loop through the array and echo each link
    foreach ($footerLinks as $linkArray) {
        echo "$linkArray | ";
    }
    ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>

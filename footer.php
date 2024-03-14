<footer>
    <h3>All right  reserved @2024</h3>
    <?php echo addNum(3,9); ?>
</footer>
<?php wp_footer();

$footerLinks = array(`<a href="https://banff.ca/">Old Site</a>`, `<a href="https://education.nationalgeographic.org/resource/erosion/">Science</a>`, `<a href="https://volcano.si.edu/gvp_currenteruptions.cfm">More science</a>`);

foreach ($footerLinks as $linkArray) {
    echo "$linkArray | ";
  }
?> 
</body>
</html>

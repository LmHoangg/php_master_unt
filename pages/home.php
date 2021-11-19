<?php
    // require 'lib/template.php';
    get_header();
?>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Home</p>
                <p>
                    <?php
                        show_array($_SESSION);
                    ?> 
                </p>
               
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>
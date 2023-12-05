<?php

/**
 * main function 
 */

 ?>

<?php
 function urc_wp_security_init(){
   ?>
    <div class="wrap">

        <form action="" method="post">
            <input type="submit" name="wp_security" class="btn-wp-security" value="SCAN">
        </form>
    </div>

   <?php

    if (isset($_POST['wp_security'])) {
        urc_security_scan_func();
       
    }


 }


// running the security scan 
function urc_security_scan_func() {
    
    ?>
    <h2>Security Checks</h2>
    <form method="post" action="">
        <h3>Comments Status</h3>
        <label for="comments_checkbox">
            <input type="checkbox" id="comments_checkbox" name="comments_checkbox" checked>
            Close Comments 
        </label>
        <br>

        <h3>XML-RPC Status</h3>
        <label for="xmlrpc_checkbox">
            <input type="checkbox" id="xmlrpc_checkbox" name="xmlrpc_checkbox" checked>
            Disable XML-RPC
        </label>
        <br>


        <input type="submit" name="apply_security_fixes" value="Apply">
    </form>

    <?php
   
}


if (isset($_POST['apply_security_fixes'])) {
    if (isset($_POST['comments_checkbox'])) {
        global $wpdb;
        $wpdb->query("UPDATE {$wpdb->prefix}posts SET comment_status = 'closed' WHERE post_type = 'post'");
    }else{
        $wpdb->query("UPDATE {$wpdb->prefix}posts SET comment_status = 'open' WHERE post_type = 'post'");
    }
    if (isset($_POST['xmlrpc_checkbox'])) {
      apply_filters('xmlrpc_enabled', __return_false());
    } else{
        apply_filters('xmlrpc_enabled',__return_true());
    }

}
?>

</div>
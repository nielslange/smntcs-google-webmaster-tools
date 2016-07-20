<div class="wrap">

    <h2>Google Search Console</h2>

    <form method="post" action="options.php">

        <?php wp_nonce_field('update-options'); ?>
        <?php settings_fields('google_webmaster_tools'); ?>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"><?php _e('Verification Code:', 'smntcs-google-webmaster-tools') ?></th>
                <td><input type="text" name="google_webmaster_tools_code" value="<?php echo get_option('google_webmaster_tools_code'); ?>" size="50" /></td>
            </tr>
        </table>

        <p class="submit">
            <input type="hidden" name="action" value="update" />
            <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'smntcs-google-webmaster-tools') ?>" />
        </p>

    </form>

</div>

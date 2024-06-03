<?php
function display_logged_in_user_discound_code() 
{
    echo '<!-- DISCOUNT CODE -->';
    echo '<p id="discountMessage">Enter the code <strong>SALLY10</strong> at the checkout for 10% off your order.</p>';
}

/*
Inserts a message with a discount code into the header message call (for logged in users) 
in 'content-page.php' in the main storefront theme.
*/
if ( is_user_logged_in() ) {
    add_action('storefront_page', 
        'display_logged_in_user_discound_code', 11);
    }
?>
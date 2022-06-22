<?php
/**
* Template Name: Contactpage *
* @package TravelSite
*
*/
?>
<?php get_header(); ?>

<section class="main-section">
    
    <div class="contact-form">
        <h1 class="title">Please Contact Us To Book a Flight! </h1>

        
        <form action="#">

            <form class="contact-form box-shadow "action="#">
                
            <label for="first-name">First Name:</label><br>
            <input type="text" id="first-name" placeholder="First Name.."><br>
            <label for="last-name">Last Name:</label> <br>
            <input type="text" id="last-name" placeholder="Last Name.."><br>
            <label for="city">Flying From</label><br>
            <input type="text" id="city" placeholder="City"><br>
            <label for="State">Leaving Date</label><br>
            <input type="text" id="state" placeholder="Date leaving"><br>
            <label for="zip-code">Return Date</label><br>
            <input type="number" id="zip" placeholder="Return Date"><br>
            <label for="phone">Phone:</label><br>
            <input type="number" id="phone" placeholder="phone.."><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" placeholder="Email.."><br>
            <input class="submit-button" type="submit" value="submit">

            </form>

        </form>
    </div>

</section>

    
    
<?php get_footer(); ?>
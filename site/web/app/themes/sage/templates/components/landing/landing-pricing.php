<section class="pricing">
    <div>
        <h3>Simple Pricing</h3>
        <ul class="pricing-details">
            <li>
                <span>Flexible Schedule</span>
                <span>The course offers morning and afternoon sessions. The schedule is subject to change based on your needs!</span>
            </li>

            <li>
                <span>One time payment</span>
                <span>No recurring subscriptions. You pay once and enjoy all that the course offers.</span>
            </li>

            <li>
                <span>Custom Add-ons</span>
                <span>Select from a slew of different bonus offerings to better your experience</span> 
            </li>
        </ul>
    </div>
    <div class="pricing-base">
        <h2>Base Price</h2>
        <span class="money">$</span>
        <?php if (get_field('base_price')) : ?>
            <span class="pricing-base-price"><?php the_field('base_price'); ?></span>
        <?php endif; ?>
        <div class="hr"></div>
        <?php if (get_field('discount_offer')) : ?>
            <p><?php the_field('discount_offer'); ?></p>
        <?php endif; ?>
    </div>
</section>
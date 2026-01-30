<?php include '../../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO & Metadata -->
    <?php include_once '../seo_meta.php'; ?>

    <title><?php echo $seo_title; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>includes/image/favicon.ico.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons + CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>

    <section class="faq-header">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <p>Everything you need to know about Clean Sheen services in Gujarat</p>
        </div>
    </section>

    <!-- Category Navigation -->
    <section class="category-tabs">
        <div class="container">
            <div class="category-nav">
                <a href="#domestic" class="category-btn">
                    <i class="fas fa-home"></i>
                    <span>Domestic<br>Cleaning</span>
                </a>
                <!-- <a href="#oneoff" class="category-btn">
                    <i class="fas fa-broom"></i>
                    <span>One-Off<br>Cleaning</span>
                </a> -->
                <a href="#commercial" class="category-btn">
                    <i class="fas fa-building"></i>
                    <span>Commercial<br>Cleaning</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="faq-section">
        <div class="container">

            <!-- DOMESTIC/ONE-OFF CLEANING SECTION -->
            <div id="domestic" class="faq-category">
                <h2 class="category-title"><i class="fas fa-home me-3"></i>Domestic & One-Off Cleaning</h2>

                <div class="accordion faq-accordion" id="accordionDomestic">

                    <!-- Question 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic1">
                                Do I need to supply any cleaning materials?
                            </button>
                        </h2>
                        <div id="domestic1" class="accordion-collapse">
                            <div class="accordion-body">
                                Our team of cleaners are providing all the cleaning solutions on the day of the cleaning. Cleaning equipment, such as hoover, mop, and bucket can be provided upon request for an additional cost.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <!-- <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic2">
                                How are payments made?
                            </button>
                        </h2>
                        <div id="domestic2" class="accordion-collapse">
                            <div class="accordion-body">
                                Once the booking is confirmed, we will send you the confirmation over email and will attach the invoice. All our invoices must be paid in full, 48 hours prior to the cleaning session. It can be done by Bank transfer, credit/debit card or PayPal. We accept Visa, Mastercard, Maestro and American Express.
                            </div>
                        </div>
                    </div> -->

                    <!-- Question 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic3">
                                How long does the cleaning session take?
                            </button>
                        </h2>
                        <div id="domestic3" class="accordion-collapse">
                            <div class="accordion-body">
                                Our quotes and time are based on the size of the property, but additional time may be required depending on the condition of the property.
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <!-- <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic4">
                                What does your insurance cover?
                            </button>
                        </h2>
                        <div id="domestic4" class="accordion-collapse">
                            <div class="accordion-body">
                                Damage to your property caused by the cleaner, theft by the cleaner, key and lock replacement and personal injury to the cleaner.
                            </div>
                        </div>
                    </div> -->

                    <!-- Question 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic5">
                                Does one-off cleaning sessions include oven cleaning?
                            </button>
                        </h2>
                        <div id="domestic5" class="accordion-collapse">
                            <div class="accordion-body">
                                Yes, all the kitchen appliances will be professionally deep cleaned during end of tenancy cleaning, after-building cleaning or deep house cleaning.
                            </div>
                        </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic6">
                                What if I want to cancel the session?
                            </button>
                        </h2>
                        <div id="domestic6" class="accordion-collapse">
                            <div class="accordion-body">
                                You can cancel the session up to 48 hours before its scheduled time. There is a ₹500 late cancellation/lock-out fee for cancelling or rescheduling a visit within less than 48 hours' notice for one-off Clients. The same fee applies if the Cleaners are unable to gain access to the Client's home, through no fault of Clean Sheen or the cleaner.
                            </div>
                        </div>
                    </div>

                    <!-- Question 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic7">
                                Should the property be empty of personal belongings?
                            </button>
                        </h2>
                        <div id="domestic7" class="accordion-collapse">
                            <div class="accordion-body">
                                <p><strong>For an End of Tenancy Cleaning:</strong> The property must be empty of any personal belongings, and no one should be living in the property before the inventory check has been completed on behalf of your landlord or letting agent. A satisfaction Guarantee for end of tenancy will not be applied if the client continues to live in the property after the session.</p>
                                <p><strong>For Deep Clean or After building cleaning:</strong> If you are not able to remove the belongings, we will work around them.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 8 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic8">
                                Do I need to be at the property during the cleaning?
                            </button>
                        </h2>
                        <div id="domestic8" class="accordion-collapse">
                            <div class="accordion-body">
                                Our clients have the option of staying at the house throughout the cleaning session, or our crew may pick up the keys from the society office or concierge.
                            </div>
                        </div>
                    </div>

                    <!-- Question 9 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic9">
                                How much does the professional One-Off cleaning cost?
                            </button>
                        </h2>
                        <div id="domestic9" class="accordion-collapse">
                            <div class="accordion-body">
                                The cost of One-Off cleaning is based on the size of the property (how many bedrooms and bathrooms). And whether you would like any additional services to be added, such as kitchenware, inside of kitchen cabinets, or whether you wish to have the upholstery or carpets cleaned. You can receive an instant estimation of the cost by completing our booking request.
                            </div>
                        </div>
                    </div>

                    <!-- Question 10 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic10">
                                What is the difference between End of Tenancy or Deep Cleaning?
                            </button>
                        </h2>
                        <div id="domestic10" class="accordion-collapse">
                            <div class="accordion-body">
                                During the Deep House Cleaning, our clients are living in the property and have their personal belongings there, but for an End of tenancy, the property must be empty of any personal belongings.
                            </div>
                        </div>
                    </div>

                    <!-- Question 11 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic11">
                                What if my cleaner is running late?
                            </button>
                        </h2>
                        <div id="domestic11" class="accordion-collapse">
                            <div class="accordion-body">
                                Our cleaners do our best to arrive at your agreed time. There are situations when traffic is delayed and cleaner may arrive late. Cleaners are instructed to contact you if they are stuck in traffic. Please feel free to telephone the office if you need to go and we will try to find out how far the cleaner is from your place.
                            </div>
                        </div>
                    </div>

                    <!-- Question 12 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic12">
                                What happens if I am not happy with the results?
                            </button>
                        </h2>
                        <div id="domestic12" class="accordion-collapse">
                            <div class="accordion-body">
                                As a client-oriented company, we offer 72 hours Client Satisfaction Guarantee. During this time, you can contact us via email, or phone and provide the photos of the missed area so we can organise a partial re-clean session at the property.
                            </div>
                        </div>
                    </div>

                    <!-- Question 13 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic13">
                                Can I clean a room or part of the property?
                            </button>
                        </h2>
                        <div id="domestic13" class="accordion-collapse">
                            <div class="accordion-body">
                                Yes, but only for carpet cleaning. We do not accept bookings for partial deep cleaning, end of tenancy or after-building cleaning of the property. We can only provide these services for the whole of your house or apartment.
                            </div>
                        </div>
                    </div>

                    <!-- Question 14 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic14">
                                What is included in an end of tenancy cleaning?
                            </button>
                        </h2>
                        <div id="domestic14" class="accordion-collapse">
                            <div class="accordion-body">
                                End of tenancy cleaning is a deep cleaning of your property to prepare for inventory check carried on behalf of letting agents or landlords. Our comprehensive end of tenancy cleaning checklist includes cleaning of your property top to bottom ready for the next tenants to move in.
                            </div>
                        </div>
                    </div>

                    <!-- Question 15 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic15">
                                What do I need to do before an end of tenancy cleaning or deep cleaning session?
                            </button>
                        </h2>
                        <div id="domestic15" class="accordion-collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>Please switch off your fridge ideally 24 hours before the cleaning session.</li>
                                    <li><strong>For end of tenancy cleaning:</strong> Your property should be free of personal belongings.</li>
                                    <li><strong>For deep cleaning:</strong> Please tidy up your clothes, personal belongings. It would help if you empty the fridge or kitchen cabinets to allow the cleaner to clean inside.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Question 16 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic16">
                                What is the difference between a standard deep clean and pre-baby deep cleaning?
                            </button>
                        </h2>
                        <div id="domestic16" class="accordion-collapse">
                            <div class="accordion-body">
                                <p>During a standard deep cleaning, our cleaners provide a thorough and intensive cleaning of a home, addressing areas that are often neglected during regular cleaning routines. All kitchen appliances are covered on the day as well as bedrooms, bathrooms, living room.</p>
                                <p>In addition to standard deep cleaning tasks, pre-baby deep cleaning places extra emphasis on ensuring that the property is cleaned with attention to detail. More attention is given to using non-toxic, baby-safe cleaning products. This is why we ask our cleaners to bring eco-friendly cleaning solutions and use them as much as possible.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 17 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic17">
                                Do you clean behind or under the heavy furniture or appliances?
                            </button>
                        </h2>
                        <div id="domestic17" class="accordion-collapse">
                            <div class="accordion-body">
                                Please note that as part of our cleaning service, we do not clean behind or under heavy furniture and appliances. To ensure thorough cleaning, we kindly request that these items be moved prior to our cleaning session. Otherwise, our cleaner will do their best to clean as much as possible within arm's reach.
                            </div>
                        </div>
                    </div>

                    <!-- Question 18 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic18">
                                Do you offer decluttering services?
                            </button>
                        </h2>
                        <div id="domestic18" class="accordion-collapse">
                            <div class="accordion-body">
                                Regretfully, we do not offer decluttering services. We recommend reaching out to specialised companies that focus on decluttering and organisation for the best results.
                            </div>
                        </div>
                    </div>

                    <!-- Question 19 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic19">
                                Is deep cleaning safe for pets and children?
                            </button>
                        </h2>
                        <div id="domestic19" class="accordion-collapse">
                            <div class="accordion-body">
                                We are pleased to inform you that our deep cleaning services are safe for both pets and children. We use non-toxic and eco-friendly cleaning products to ensure a safe environment for your family. If you have any specific concerns or requirements, please let us know, and we'll be happy to accommodate them.
                            </div>
                        </div>
                    </div>

                    <!-- Question 20 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic20">
                                Can I customise the deep cleaning to focus on specific areas?
                            </button>
                        </h2>
                        <div id="domestic20" class="accordion-collapse">
                            <div class="accordion-body">
                                Our quotes are based on the size of the property, and we take bookings for the entire property rather than individual rooms. However, we can certainly ask the cleaner to pay extra attention to specific tasks or areas that are important to you.
                            </div>
                        </div>
                    </div>

                    <!-- Question 21 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic21">
                                Can you accommodate last-minute bookings for end of tenancy cleaning?
                            </button>
                        </h2>
                        <div id="domestic21" class="accordion-collapse">
                            <div class="accordion-body">
                                Typically, we do not accept same-day bookings. However, if we have available slots, we can certainly arrange a booking for the next day. Please note that our policy requires payment to be made 48 hours in advance, so we would need the payment processed as soon as possible to secure your booking.
                            </div>
                        </div>
                    </div>

                    <!-- Question 22 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic22">
                                Do you offer carpet cleaning as part of the end of tenancy service?
                            </button>
                        </h2>
                        <div id="domestic22" class="accordion-collapse">
                            <div class="accordion-body">
                                We do offer carpet steam cleaning as an additional service. However, please note that it is available at an extra charge. If you are interested, we'd be happy to provide you with a quote upon request. Feel free to let us know if you would like to include this service in your booking or if you have any further questions.
                            </div>
                        </div>
                    </div>

                    <!-- Question 23 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#domestic23">
                                Is parking required for an after-building cleaning service?
                            </button>
                        </h2>
                        <div id="domestic23" class="accordion-collapse">
                            <div class="accordion-body">
                                Typically, we do require a parking permit or a parking space to be provided on the day of the cleaning. However, if you are unable to arrange this, we can check the parking costs in advance and, upon your confirmation, add the fee to your invoice.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- COMMERCIAL CLEANING SECTION -->
            <div id="commercial" class="faq-category">
                <h2 class="category-title"><i class="fas fa-building me-3"></i>Commercial Cleaning</h2>

                <div class="accordion faq-accordion" id="accordionCommercial">

                    <!-- Commercial Question 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial1">
                                Will the same cleaning operative be attending each time?
                            </button>
                        </h2>
                        <div id="commercial1" class="accordion-collapse">
                            <div class="accordion-body">
                                For our regular commercial cleaning service we do our best to provide the same cleaner each time and we will provide a replacement if your regular cleaner is unwell or goes on holiday.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial2">
                                Is the cleaner's attendance monitored? Can you ensure that the working hours are respected?
                            </button>
                        </h2>
                        <div id="commercial2" class="accordion-collapse">
                            <div class="accordion-body">
                                Our cleaners are using a specialised mobile app with an integrated clock in/out system which allows us to monitor their attendance, and ensure their safety whilst lone working.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial3">
                                What is the minimum duration for a commercial cleaning contract?
                            </button>
                        </h2>
                        <div id="commercial3" class="accordion-collapse">
                            <div class="accordion-body">
                                The minimum duration is 1 year, however we can accommodate rolling contracts for bookings with at least 10 hours/week.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial4">
                                How are the cleaners vetted?
                            </button>
                        </h2>
                        <div id="commercial4" class="accordion-collapse">
                            <div class="accordion-body">
                                We carefully interview each of the cleaners and check their documents to confirm they have valid identification. We also check their proof of address and references. We created series of the online video trainings to upgrade the skills of our cleaners. Cleaners who do not have enough experience go through induction with one of our supervisors or in the homes of our management team.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial5">
                                Are you covering the handover in case of a holiday/illness replacement arrangement?
                            </button>
                        </h2>
                        <div id="commercial5" class="accordion-collapse">
                            <div class="accordion-body">
                                The handover process includes passing all the instructions to the new cleaner, keys handover, arranging a supervisor for the initial session and is fully covered by our team at no extra charge.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial6">
                                What if I don't like a cleaning operative?
                            </button>
                        </h2>
                        <div id="commercial6" class="accordion-collapse">
                            <div class="accordion-body">
                                We can provide a free replacement to ensure you are absolutely happy with the service.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial7">
                                What does your insurance cover?
                            </button>
                        </h2>
                        <div id="commercial7" class="accordion-collapse">
                            <div class="accordion-body">
                                Damage to your property caused by the cleaner, theft by the cleaner, key and lock replacement and personal injury to the cleaner.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 8 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial8">
                                Do the extra sessions come at a higher rate?
                            </button>
                        </h2>
                        <div id="commercial8" class="accordion-collapse">
                            <div class="accordion-body">
                                This depends on the cleaning tasks requested for the extra session. If it implies standard cleaning- we will keep the regular charge; if you need an office deep clean, this will be considered a One Off booking and a separate quote will be provided.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 9 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial9">
                                What if I want to cancel the session?
                            </button>
                        </h2>
                        <div id="commercial9" class="accordion-collapse">
                            <div class="accordion-body">
                                Please let us know 24 hours before the session during our business hours and we can cancel the session for you.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 10 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial10">
                                Can we increase/decrease the hours during the length of the contract?
                            </button>
                        </h2>
                        <div id="commercial10" class="accordion-collapse">
                            <div class="accordion-body">
                                All amendments can be revised by our team provided that cleaner's availability allows the change, however we may need to amend the quotation according to the updated number of cleaning hours.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 11 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial11">
                                Do your cleaners work at night?
                            </button>
                        </h2>
                        <div id="commercial11" class="accordion-collapse">
                            <div class="accordion-body">
                                Our cleaners do not work at night. We can clean your premises between 6am and 10pm.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 12 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial12">
                                What are the benefits of hiring a professional commercial cleaning service?
                            </button>
                        </h2>
                        <div id="commercial12" class="accordion-collapse">
                            <div class="accordion-body">
                                Hiring a professional cleaning service ensures consistently high standards of cleanliness. Research shows that working in a clean office improves employee productivity, enhances business's image, and reduces the risk of illness and allergies. Also, outsourcing cleaning tasks allows you to focus on your core responsibilities rather than hiring and training cleaners, tracking their attendance and conducting quality checks, compliance with Health and Safety regulations, etc. Additionally, professionals have the expertise and equipment to handle specialised cleaning tasks efficiently.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 13 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial13">
                                Do commercial cleaning services offer emergency or last-minute cleaning options?
                            </button>
                        </h2>
                        <div id="commercial13" class="accordion-collapse">
                            <div class="accordion-body">
                                Absolutely! We understand that unexpected situations happen, and we are here to help. For smaller tasks, we will quickly check for available cleaners in your area and respond as fast as possible. For larger contracts or deep cleaning, it may take a bit more time to organise a full team, but rest assured, we will assign top-quality cleaners. We always take the time to fully understand your specific needs to ensure the service meets your expectations. Whether it is a last-minute job or a big project, you can count on us for reliable and thorough cleaning across Gujarat.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 14 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial14">
                                Can I request a different cleaner if I am not satisfied with the current one?
                            </button>
                        </h2>
                        <div id="commercial14" class="accordion-collapse">
                            <div class="accordion-body">
                                Yes, absolutely. Your satisfaction is our priority. If you are not happy with your current cleaner, we will gladly arrange for a replacement. Let us know your preferences, and we will make the necessary adjustments to ensure you receive the best service.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 15 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial15">
                                Have your cleaners been checked for a criminal record (Police Verification)?
                            </button>
                        </h2>
                        <div id="commercial15" class="accordion-collapse">
                            <div class="accordion-body">
                                Yes, all our cleaners undergo comprehensive police verification checks. This ensures their criminal record is clear and that they meet our safety and trustworthiness standards. Security and transparency are key to our hiring process in Gujarat, and only those who pass this check are employed by Clean Sheen.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 16 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial16">
                                Can I have the service fortnightly?
                            </button>
                        </h2>
                        <div id="commercial16" class="accordion-collapse">
                            <div class="accordion-body">
                                We do offer fortnightly cleaning for domestic clients, but not for commercial spaces. Commercial environments often have higher foot traffic and more rigorous hygiene and safety standards that must be met. As such, we typically suggest more frequent cleaning to ensure that all areas, especially high-traffic zones, remain clean and hygienic. Regular cleaning not only helps reduce wear and tear on your facilities but also maintains a professional appearance that reflects well on your business.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 17 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial17">
                                Can I ask my cleaner to clean extra rooms if needed?
                            </button>
                        </h2>
                        <div id="commercial17" class="accordion-collapse">
                            <div class="accordion-body">
                                Certainly, if you need your cleaner to address extra rooms or make any adjustments to the schedule, we kindly ask that you communicate these changes through our admin team. You can easily reach us via email or phone. If needed, we can also arrange for a supervisor to reassess your premises and adjust the cleaning hours accordingly to meet your specific requirements. We are here to ensure your cleaning needs are fully satisfied.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 18 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial18">
                                Can you clean a small office?
                            </button>
                        </h2>
                        <div id="commercial18" class="accordion-collapse">
                            <div class="accordion-body">
                                Yes, we proudly work with customers of all sizes across Gujarat. To ensure we provide the highest level of service, we have a policy that considers logistical factors like the cleaner's travel time and fair compensation. This approach benefits both our clients and our dedicated cleaners in Surat, ensuring everyone receives top-notch service. Plus, our packages are competitively priced, making it a great investment in a clean and professional environment for your business.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 19 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial19">
                                Do you provide cleaning on weekends?
                            </button>
                        </h2>
                        <div id="commercial19" class="accordion-collapse">
                            <div class="accordion-body">
                                Yes, we understand that flexibility is key when it comes to cleaning services, which is why we do offer weekend cleaning options. Many of our dedicated cleaners are available to work on Saturdays to accommodate your needs. If you are looking for a cleaning service on Sundays, we can often arrange that as well, depending on availability. Please keep in mind that weekend rates may be slightly higher due to limited availability, but this investment ensures that you receive our exceptional cleaning service at a time that works best for you.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 20 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial20">
                                How often should I have my office cleaned?
                            </button>
                        </h2>
                        <div id="commercial20" class="accordion-collapse">
                            <div class="accordion-body">
                                The frequency of office cleaning really depends on your unique needs, including the size of your office and how many hours of cleaning are required. For smaller offices, a weekly cleaning may be sufficient to keep the space looking fresh and professional. However, larger offices or those with high foot traffic might benefit from more frequent cleanings, such as two or three times a week or even daily, to maintain a clean and healthy environment. Our experienced team can help assess your specific situation and recommend a customised cleaning schedule that fits your needs and budget. Allowing adequate time for cleaners to clean an office is crucial for ensuring thoroughness, attention to detail, and proper care. Ultimately, giving cleaners sufficient time ensures a higher standard of cleanliness, supports better health and hygiene, that contributes to a healthier workspace, boosting employee productivity and morale.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 21 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial21">
                                Is your company insured? What if there is damage to the property after cleaning?
                            </button>
                        </h2>
                        <div id="commercial21" class="accordion-collapse">
                            <div class="accordion-body">
                                Yes, our company is fully insured with comprehensive coverage. In the unlikely event that any damage occurs during cleaning, we are prepared to handle the situation and resolve it promptly, giving you peace of mind.
                            </div>
                        </div>
                    </div>

                    <!-- Commercial Question 22 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-target="#commercial22">
                                Does the price include cleaning supplies?
                            </button>
                        </h2>
                        <div id="commercial22" class="accordion-collapse">
                            <div class="accordion-body">
                                <p>Our commercial cleaning packages are designed to be flexible and cater to your specific needs. Depending on the package you choose, the cost may or may not include cleaning supplies. We can provide all necessary cleaning materials, ensuring that your office is equipped with the best professional products for a thorough clean. Alternatively, if you prefer to supply your own materials, that is completely fine too. Just let us know what works best for you.</p>
                                <p>Additionally, we offer consumables as an extra service, including essential washroom supplies like paper towels and toilet rolls, as well as a variety of professional janitorial products. We also provide eco-friendly options to support your sustainability goals. From hand soap to air fresheners, we can supply whatever you need, whenever you need it. Just let us know your preferences, and we will ensure your cleaning experience is seamless and convenient.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>
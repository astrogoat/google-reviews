@if(Astrogoat\GoogleReviews\Settings\GoogleReviewsSettings::isEnabled())
    <script src="https://apis.google.com/js/platform.js?onload=renderBadge" async defer></script>
    <script>
        window.renderBadge = function() {
            var ratingBadgeContainer = document.createElement("div");
            document.body.appendChild(ratingBadgeContainer);
            window.gapi.load('ratingbadge', function() {
                window.gapi.ratingbadge.render(ratingBadgeContainer, {"merchant_id": {{ settings('Astrogoat\\GoogleReviews\\Settings\\GoogleReviewsSettings', 'merchant_id') }}, "position": "BOTTOM_RIGHT"});
            });
        }
    </script>
@endif

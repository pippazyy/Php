$(document).ready(function(){
    displayLeftNav();
    displayWelcomeMessage();
    selectForms();
    validation();

    function displayWelcomeMessage() {
        $("#welcome-message" ).animate({
            width: "70%",
            opacity: 0.4,
            marginLeft: "150px",
            fontSize: "3em",
            borderWidth: "10px"
        }, 1500 );
    }

    function selectForms() {
        $('.form').find('input, textarea').on('keyup blur focus', function(e) {

            var $this = $(this),
                label = $this.prev('label');

            if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.addClass('active highlight');
                }
            } else if (e.type === 'blur') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.removeClass('highlight');
                }
            } else if (e.type === 'focus') {

                if ($this.val() === '') {
                    label.removeClass('highlight');
                } else if ($this.val() !== '') {
                    label.addClass('highlight');
                }
            }

        });

        $('.tab a').on('click', function(e) {

            e.preventDefault();

            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');

            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();

            $(target).fadeIn(600);

        });
    }

    function validation() {
            // logic to do some validations while users typing the info
    }

});

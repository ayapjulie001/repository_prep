
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular.module('common')
    .factory('UtilitiesFactory', function UtilitiesFactory() {
        return {
            changeCharactersLeft: function (max_characters, model_length) {
                model_length = (typeof model_length === 'undefined') ? 0 : model_length;
                return max_characters - model_length;
            },

            discountParser: function (discount, price) {

                var total_discount = 0;
                var discount_regex_for_percent = /[0-9]+%/;

                // Clean string
                var to_parse_discount = discount.replace(' ', '');

                // Split discount
                var splitted_on_plus = to_parse_discount.split("+");

                // For every splitted discount
                _.forEach(splitted_on_plus, function (discount) {

                    // Check if there is
                    if (discount)

                    // If yes, check if its a percentage
                        if (discount_regex_for_percent.test(discount)) {
                            total_discount += (parseInt(discount_regex_for_percent.exec(discount)) * 0.01) * price;
                        }

                        // or a whole
                        else {
                            total_discount += parseInt(discount);
                        }
                });

                return total_discount;
            }
        }
    });
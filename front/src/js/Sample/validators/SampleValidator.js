
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular
    .module("sample")
    .factory("SampleValidator", function () {

        function SampleValidator() {

            // override the default messages from parent object
            this.messages = {
                "required.first_name": "The first name is required",
                "required.last_name": "The last name is required"
            };

            // define other custom messages
            // this applies when messages are specific
            // only to a given validation rules and
            // set dynamically in the invoker of validation
            this.first_messages = {
                "required.first_name": "The first names is required",
                "required.last_name": "The last names is required"
            };

            this.rules = {
                first_name: "required|alpha",
                last_name: "required|alpha"
            };

        }

        SampleValidator.prototype = AbstractValidator;

        return new SampleValidator();
    });

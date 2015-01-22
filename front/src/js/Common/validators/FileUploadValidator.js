
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


angular
    .module("common")
    .factory("FileUploadValidator", function() {
        function FileUploadValidator() {
            this.rules = {
                mime_type: "in:image/jpeg,image/png,image/gif",
                image_size: "max:10000000"
            }
        }

        FileUploadValidator.prototype = AbstractValidator;

        return new FileUploadValidator();
    });
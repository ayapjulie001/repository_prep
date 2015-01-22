
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular.module('common')
    .service('FileUploadService', function FileUploadService($upload, FileUploadValidator) {


        /**
         * handles the uploading of a file to the server
         * @param file - the file to be uploaded
         * @param url - the restful url used for uploading the file
         * @returns {*}
         */
        this.upload = function (file, url) {

            return $upload.upload({ url: url, file: file });
        };

        /**
         * handles the uploading of image file
         * @param file - the file to be uploaded
         * @param url - the restful url used for uploading the file
         * @returns {*}
         */
        this.uploadImage = function (file, url) {
            FileUploadValidator
                .setRules(FileUploadValidator.rules)
                .validate(file);

            return this.upload(file, url);
        };

        /**
         *
         * @param errors
         * @returns {{title: string, message: string}}
         */
        this.getErrorMessage = function (errors) {

            var error_message = {
                title: "Sorry",
                message: "Unable to upload the file"
            };

            if (errors.mime_type) {
                error_message.title = "Invalid Image";
                error_message.message = "Please upload a valid image";
            }

            if(errors.image_size) {
                var size = 10000000 / 1000000;

                error_message.title = "Invalid Size";
                error_message.message = "Please upload an image that do not exceed " + size + " MB";
            }

            return error_message;
        }
    });

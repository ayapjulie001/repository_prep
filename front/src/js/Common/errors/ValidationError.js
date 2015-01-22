
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

function ValidationError(errors) {

    ValidationError.prototype.name = "ValidationError";
    ValidationError.prototype.errors = errors;
}

ValidationError.prototype = new Error();
ValidationError.prototype.constructor = ValidationError;
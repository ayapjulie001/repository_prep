
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

AbstractValidator = {

    messages: Validator.messages,

    setRules: function (rules) {
        this.default_rules = rules;

        return this;
    },

    setMessages: function(messages) {
        this.messages = messages;

        return this;
    },

    validate: function (data) {

        this.validator = new Validator(data, this.default_rules, this.messages);

        if (this.validator.fails()) {
            throw new ValidationError(this.validator.errors.all());
        }

        return true;
    }
}
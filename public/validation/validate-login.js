jQuery(".form-login").validate({
    ignore: [],
    errorClass: "invalid-feedback animated fadeInDown",
    errorElement: "div",
    errorPlacement: function (e, a) {
        jQuery(a).parents(".form-group > div").append(e);
    },
    highlight: function (e) {
        jQuery(e)
            .closest(".form-group")
            .removeClass("is-invalid")
            .addClass("is-invalid");
    },
    success: function (e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"),
            jQuery(e).remove();
    },
    rules: {
        emailLogin: {
            required: !0,
            email: !0,
        },
        passwordLogin: {
            required: !0,
        },
    },
    messages: {
        emailLogin: {
            email: "Masukan Alamat Email Dengan Benar",
            required: "Masukan Email",
        },
        passwordLogin: {
            required: "Masukan Password",
        },
    },
});

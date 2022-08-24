jQuery(".form-valide").validate({
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
        // "val-username": { required: !0, minlength: 3 },
        // "val-email": { required: !0, email: !0 },
        // "val-password": { required: !0, minlength: 5 },
        // "val-confirm-password": { required: !0, equalTo: "#val-password" },
        // "val-select2": { required: !0 },
        // "val-select2-multiple": { required: !0, minlength: 2 },
        // "val-suggestions": { required: !0, minlength: 5 },
        // "val-skill": { required: !0 },
        // "val-currency": { required: !0, currency: ["$", !0] },
        // "val-website": { required: !0, url: !0 },
        // "val-phoneus": { required: !0, phoneUS: !0 },
        // "val-digits": { required: !0, digits: !0 },
        // "val-number": { required: !0, number: !0 },
        // "val-range": { required: !0, range: [1, 5] },
        // "val-terms": { required: !0 },
        username: { required: !0 },
        email: { required: !0, email: !0 },
        emailLogin: { required: !0, email: !0 },
        password: { required: !0 },
        passwordLogin: { required: !0 },
        nama_lengkap: { required: !0 },
        alamat: { required: !0 },
        no_telepon: { required: !0, number: !0 },
        jenis_kelamin: { required: !0 },
        tanggal_lahir: { required: !0 },
        tempat_lahir: { required: !0 },
        tamatan_pendidikan: { required: !0 },
    },
    messages: {
        username: {
            required: "Masukan Username",
        },
        email: {
            email: "Masukan Alamat Email Dengan Benar",
            required: "Masukan Email",
        },
        emailLogin: {
            email: "Masukan Alamat Email Dengan Benar",
            required: "Masukan Email",
        },

        password: {
            required: "Masukan Password",
        },
        passwordLogin: {
            required: "Masukan Password",
        },
        nama_lengkap: {
            required: "Masukan Nama Lengkap",
        },
        alamat: {
            required: "Masukan Alamat",
        },
        no_telepon: {
            number: "Masukan Nomer Telepon dengan benar",
            required: "masukan nomer telepon",
        },
        jenis_kelamin: {
            required: "Masukan Jenis Kelamin",
        },
        tanggal_lahir: {
            required: "Masukan Tanggal Lahir",
        },
        tempat_lahir: {
            required: "Masukan Tempat Lahir",
        },
        tamatan_pendidikan: {
            required: "Masukan Tamatan Pendidikan",
        },
        // "val-email": "Please enter a valid email address",
        // "val-password": {
        //     required: "Please provide a password",
        //     minlength: "Your password must be at least 5 characters long",
        // },
        // "val-confirm-password": {
        //     required: "Please provide a password",
        //     minlength: "Your password must be at least 5 characters long",
        //     equalTo: "Please enter the same password as above",
        // },
        // "val-select2": "Please select a value!",
        // "val-select2-multiple": "Please select at least 2 values!",
        // "val-suggestions": "What can we do to become better?",
        // "val-skill": "Please select a skill!",
        // "val-currency": "Please enter a price!",
        // "val-website": "Please enter your website!",
        // "val-phoneus": "Please enter a US phone!",
        // "val-digits": "Please enter only digits!",
        // "val-number": "Please enter a number!",
        // "val-range": "Please enter a number between 1 and 5!",
        // "val-terms": "You must agree to the service terms!",
    },
});

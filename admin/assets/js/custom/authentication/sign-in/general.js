"use strict";
var KTSigninGeneral = (function () {
    var e, t, i;
    return {
        init: function () {
            (e = document.querySelector("#kt_sign_in_form")),
                (t = document.querySelector("#kt_sign_in_submit")),
                (i = FormValidation.formValidation(e, {
                    fields: {
                        email: {
                            validators: {
                                regexp: {
                                    regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                    message: "The value is not a valid email address",
                                },
                                notEmpty: { message: "Email address is required" },
                            },
                        },
                        password: {
                            validators: { notEmpty: { message: "The password is required" } },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                })),
                t.addEventListener("click", function (n) {
                    n.preventDefault(),
                    i.validate().then(function (i) {
                        if ("Valid" == i) {
                            t.setAttribute("data-kt-indicator", "on");
                            t.disabled = !0;
                            setTimeout(function () {
                                t.removeAttribute("data-kt-indicator");
                                t.disabled = !1;
                                Swal.fire({
                                    title: "Processing...",
                                    allowOutsideClick: false,
                                    onBeforeOpen: function () {
                                        Swal.showLoading();
                                    },
                                    preConfirm: function () {
                                        var email = document.querySelector('[name="email"]').value;
                                        var password = document.querySelector('[name="password"]').value;
                                        return $.ajax({
                                            url: "login.php",
                                            type: "POST",
                                            data: {
                                                email: email,
                                                password: password,
                                            },
                                        }).then(function (response) {
                                            if (response == 1) {
                                                Swal.fire({
                                                    text: "Đăng nhập thành công!",
                                                    icon: "success",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary",
                                                    },
                                                });
                                                setTimeout(function () {
                                                    window.location.href = "index.php";
                                                }, 2000);
                                            } else {
                                                Swal.fire({
                                                    text: "Tài khoản hoặc mật khẩu không đúng!",
                                                    icon: "error",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary",
                                                    },
                                                });
                                            }
                                        });
                                    },
                                });
                            }, 2000);
                        } else {
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: { confirmButton: "btn btn-primary" },
                            });
                        }
                    });
                });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});

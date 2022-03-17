$(function () {
    window.scrollTo(0, 0);
    var i = 0;
    function move() {
        $(".hide-on-load").css("opacity", 0);

        if (i == 0) {
            i = 1;
            var elem = document.getElementById("barw");
            var widths = 1;
            var id = setInterval(frame, 10);
            function frame() {
                if (widths >= 100) {
                    clearInterval(id);
                    i = 0;
                    $(".main-progress").fadeTo(1200, 0);
                    // $('#loading').fadeOut(1000);
                    $(".hide-on-load").fadeTo(4000, 1);
                } else {
                    $(".main-progress").css("display", "block");
                    widths++;
                    $(".progress").html(widths + "%");
                    $(".progress-bar").css("width", widths + "%");
                    //   elem.style.width = widths + "%";
                }
            }
        }
    }

    move();

    $(".main-slide").slick({
        dots: false,
        infinite: true,
        arrows: true,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    // $('.main-slide').slick({
    //   infinite: true,
    //   slidesToShow: 3,
    //   slidesToScroll: 3
    //   });

    // $('.modal .carousel').carousel({
    //   interval: false,
    // });

    // Radio button active functionality
    $(".payment .form-check-label").click(function () {
        $(this).addClass("active");
        $(this).parent().prev().find(".form-check-label").removeClass("active");
        $(this).parent().next().find(".form-check-label").removeClass("active");
        $(this).nextAll().removeClass("active");
        $(this).prevAll().removeClass("active");
    });

    // Accept button click function
    $("#allRequestsResultModal .accept").click(function () {
        $("#allRequestsResultModal").find(".conditional-blur").addClass("blur");
        $("#allRequestsResultModal").find(".payment").removeClass("d-none");
        $("#allRequestsResultModal")
            .find(".accept, .reject, .offer-price, .reject-reason, .submit")
            .addClass("d-none");
        $("#allRequestsResultModal").find(".next-one").removeClass("d-none");
        $("#allRequestsResultModal")
            .find(".conditional-hide")
            .addClass("d-xs-none");
    });

    // Reject button click function
    $("#allRequestsResultModal .reject").click(function () {
        $("#allRequestsResultModal .conditional-blur").addClass("blur");
        $("#allRequestsResultModal .reject-reason").removeClass("d-none");
        $("#allRequestsResultModal")
            .find(".accept, .reject, .offer-price, .payment, .next-one")
            .addClass("d-none");
        $("#allRequestsResultModal")
            .find(".form-action, .form-action p")
            .css("padding-top", 0);
        $("#allRequestsResultModal")
            .find(".conditional-hide")
            .addClass("d-xs-none");
    });

    $("#allRequestsResultModal .next-one").click(function () {
        setTimeout(function () {
            $("#loaderModal").modal("hide");
            $("#healthPaymentAfterModal").modal("show");
        }, 1000);
    });

    $(".orderDetails-btn").click(function () {
        $("#allrequestsModal").modal("hide");
        $("#healthPaymentResultModal").modal("show");
    });

    $(".showRequests").click(function () {
        $("#allRequestsModal").modal("hide");
        $("#allRequestsResultModal").modal("hide");
        $("#requestsModal").modal("show");
    });

    $(".showHealthRequests").click(function () {
        $(".modal").modal("hide");
        $("#requestsModal").modal("show");
    });

    $(".complete-other").click(function () {
        setTimeout(function () {
            $("#otherLoaderModal").modal("hide");
            $("#otherStageOneModal").modal("show");
        }, 1000);
    });

    let vW = $(document).width();
    if ($(window).width() > 768) {
        $(document)
            .on("mousemove", function (event) {
                let mW = ((event.pageX * 100) / vW).toFixed(2) - 200;
                // $(".main").css('transform',	'translate(scale(1.2)');
                $(".move").css("transform", "translateX(" + mW / 30 + "%)");
            })
            .on("mouseleave", function () {
                $(".move").css("transform", "translateX(1)");
            });
    }

    var parts = $(".body-parts").select2({
        dropdownParent: $("#healthServiesModal"),
        placeholder: "الجمجمة",
    });

    $(".select2-selection--multiple").addClass("select-disabled");

    // Health Services Radio buttons functionality
    $(".male-back .pointer").click(function () {
        $(".male-front")
            .find(".pointer")
            .css({ opacity: "0", transition: "none" });
        $(".male-front").addClass("blur");
        if ($(this).hasClass("back")) {
            parts.val("backbones").trigger("change");
            $(".male-back .back p").css("opacity", 1);
        } else if ($(this).hasClass("leftHand")) {
            parts.val("leftHand").trigger("change");
        } else if ($(this).hasClass("rightHand")) {
            parts.val("rightHand").trigger("change");
        } else if ($(this).hasClass("leftLeg")) {
            parts.val("leftLeg").trigger("change");
        } else if ($(this).hasClass("rightLeg")) {
            parts.val("rightLeg").trigger("change");
        } else if ($(this).hasClass("leftFoot")) {
            parts.val("leftFoot").trigger("change");
        } else if ($(this).hasClass("rightFoot")) {
            parts.val("rightFoot").trigger("change");
        }
    });

    $(".male-front .pointer").click(function () {
        $(".male-back")
            .find(".pointer")
            .css({ opacity: "0", transition: "none" });
        $(".male-back").addClass("blur");
        if ($(this).hasClass("head")) {
            parts.val("skull").trigger("change");
            $(".male-front .head p").css("opacity", 1);
        } else if ($(this).hasClass("neck")) {
            parts.val("neck").trigger("change");
        }
    });

    $(".body-parts").change(function () {
        $(".select2-container--default .select2-selection--multiple").addClass(
            "active-select"
        );

        var data = $(".body-parts").select2("data");
        data.forEach(function (item, index) {
            if (item.id === "skull") {
                $(".male-front")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-front").find(".selected").css({ opacity: "1" });
                $(".male-front").removeClass("blur");
                $(".male-front .pointer.head").addClass("selected");
                $(".male-front .head p").css("opacity", 1);
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "neck") {
                $(".male-front")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-front").find(".selected").css({ opacity: "1" });
                $(".male-front").removeClass("blur");
                $(".male-front .pointer.neck").addClass("selected");
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "backbones") {
                $(".male-back")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-back").find(".selected").css({ opacity: "1" });
                $(".male-back").removeClass("blur");
                $(".male-back .pointer.back").addClass("selected");
                $(".male-back .back p").css("opacity", 1);
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "leftHand") {
                $(".male-back")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-back").find(".selected").css({ opacity: "1" });
                $(".male-back").removeClass("blur");
                $(".male-back .pointer.leftHand").addClass("selected");
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "rightHand") {
                $(".male-back")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-back").find(".selected").css({ opacity: "1" });
                $(".male-back").removeClass("blur");
                $(".male-back .pointer.rightHand").addClass("selected");
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "leftLeg") {
                $(".male-back")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-back").find(".selected").css({ opacity: "1" });
                $(".male-back").removeClass("blur");
                $(".male-back .pointer.leftLeg").addClass("selected");
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "rightLeg") {
                $(".male-back")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-back").find(".selected").css({ opacity: "1" });
                $(".male-back").removeClass("blur");
                $(".male-back .pointer.rightLeg").addClass("selected");
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "leftFoot") {
                $(".male-back")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-back").find(".selected").css({ opacity: "1" });
                $(".male-back").removeClass("blur");
                $(".male-back .pointer.leftFoot").addClass("selected");
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            } else if (item.id === "rightFoot") {
                $(".male-back")
                    .find(".pointer")
                    .css({ opacity: "0", transition: "none" });
                $(".male-back").find(".selected").css({ opacity: "1" });
                $(".male-back").removeClass("blur");
                $(".male-back .pointer.rightFoot").addClass("selected");
                $(".select2-selection--multiple").removeClass(
                    "select-disabled"
                );
            }
            console.log(item.id);
        });
    });

    // Close Modal when click on contact us link
    $(".nav-link.close-modal").click(function () {
        $("#contact-us")[0].scrollIntoView();
        $(".modal").modal("hide");
    });

    // Edit Profile
    $(".edit-profile").click(function () {
        $("#memberModal .form-control").removeClass("disabled");
        $("#memberModal .form-action")
            .find(".disabled")
            .removeClass("disabled");
        $(this).addClass("disabled").css("transition", ".6s");
    });

    // Public Services
    $(".btn.public-service").click(function () {
        $("#myTab li:first-child .nav-link").removeClass("active");
        $("#myTab li:last-child .nav-link").addClass("active");
        $("#myTabContent #medical-services").removeClass("active show");
        $("#myTabContent #public-services").addClass("active show");
        window.scrollTo(0, 0);
    });

    $(".public-offerPrice").click(function () {
        $(".publicServiesFinalModal .form-action").addClass("d-none");
        $(".publicServiesFinalModal .form-action.payment-public").removeClass(
            "d-none"
        );
        $("#publicPaymentModal").find(".reject-text").addClass("d-none");
    });

    // Public Services Final Modal payment and rejection
    $("#publicPaymentModal .accept").click(function () {
        $("#publicPaymentModal").find(".payment").removeClass("d-none");
        $("#publicPaymentModal").find(".payment-public").addClass("d-none");
        $("#publicPaymentModal").find(".conditional-blur").addClass("blur");
        $("#publicPaymentModal")
            .find(".form-action.next")
            .removeClass("d-none");
        $("#publicPaymentModal").find(".reject-text").addClass("d-none");
        $("#publicPaymentModal")
            .find(".conditional-hide")
            .addClass("d-xs-none");
    });

    // Public Services Reject button click function
    $("#publicPaymentModal .reject").click(function () {
        $("#publicPaymentModal .conditional-blur").addClass("blur");
        $("#publicPaymentModal .reject-reason").removeClass("d-none");
        $("#publicPaymentModal")
            .find(".accept, .reject, .offer-price, .payment, .next-one")
            .addClass("d-none");
        $("#publicPaymentModal").find(".submit").removeClass("d-none");
        $("#publicPaymentModal").find(".conditional-text").addClass("d-none");
        $("#publicPaymentModal")
            .find(".conditional-hide")
            .addClass("d-xs-none");
    });

    $("#publicPaymentModal .next").click(function () {
        setTimeout(function () {
            $("#loaderModal").modal("hide");
            $("#publicFullSubmittedModal").modal("show");
        }, 1000);
    });

    $(".register-btn").click(function () {
        setTimeout(function () {
            $("#registerLoaderModal").modal("hide");
        }, 1000);
    });

    // Navigation responsive
    $(".nav-link").click(function () {
        $(".navbar-collapse").removeClass("show");
    });

    function normalizeSlideHeights() {
        $(".carousel").each(function () {
            var items = $(".carousel-item", this);
            // reset the height
            items.css("min-height", 0);
            // set the height
            var maxHeight = Math.max.apply(
                null,
                items
                    .map(function () {
                        return $(this).outerHeight();
                    })
                    .get()
            );
            items.css("min-height", maxHeight + "px");
        });
    }

    normalizeSlideHeights();

    $("#publicVideoModal .btn-close").click(function () {
        $("#publicVideoModal iframe").attr(
            "src",
            $("#publicVideoModal iframe").attr("src")
        );
    });

    $("#healthVideoModal .btn-close").click(function () {
        $("#healthVideoModal iframe").attr(
            "src",
            $("#healthVideoModal iframe").attr("src")
        );
    });

    // Form Validation
    $(".form-select").change(function () {
        $(this).addClass("field-blue");
    });
    $(".form-control").keyup(function () {
        if ($(this).val().length === 0) {
            $(this).val($.trim($(this).val()));
            $(this).removeClass("field-blue");
            $(this).removeClass("field-red");
        } else if ($(this).val().length > 1) {
            $(this).addClass("field-blue");
            $(this).removeClass("field-red");
        } else {
            $(this).val($.trim($(this).val()));
            $(this).removeClass("field-blue");
            $(this).addClass("field-red");
        }
    });
    $("#healthServiesModal .carousel-item.one .form-control").keyup(
        function () {
            if (
                $("#healthServiesModal .carousel-item.one .name").val().length >
                    1 &&
                $("#healthServiesModal .carousel-item.one .spec").val().length >
                    1 &&
                $("#healthServiesModal .carousel-item.one .email").val()
                    .length > 1 &&
                $("#healthServiesModal .carousel-item.one .phone").val()
                    .length > 1 &&
                $("#healthServiesModal .carousel-item.one .hospital").val()
                    .length > 1 &&
                $("#healthServiesModal .carousel-item.one .p_name").val()
                    .length > 1 &&
                $("#healthServiesModal .carousel-item.one .age").val().length >
                    1 &&
                $("#healthServiesModal .carousel-item.one .desc").val().length >
                    1 &&
                $("#healthServiesModal .carousel-item.one .id").val().length > 1
            ) {
                $(
                    "#healthServiesModal .carousel-item.one .btn-form"
                ).removeClass("disabled");
            } else {
                $("#healthServiesModal .carousel-item.one .btn-form").addClass(
                    "disabled"
                );
            }
        }
    );

    $("#publicServiesModal .carousel-item.one .form-control").keyup(
        function () {
            if (
                $("#publicServiesModal .carousel-item.one .name").val().length >
                    1 &&
                $("#publicServiesModal .carousel-item.one .email").val()
                    .length > 1 &&
                $("#publicServiesModal .carousel-item.one .phone").val()
                    .length > 1 &&
                $("#publicServiesModal .carousel-item.one .gender").hasClass(
                    "field-blue"
                ) &&
                $("#publicServiesModal .carousel-item.one .spec").hasClass(
                    "field-blue"
                )
            ) {
                $(
                    "#publicServiesModal .carousel-item.one .btn-form"
                ).removeClass("disabled");
            } else {
                $("#publicServiesModal .carousel-item.one .btn-form").addClass(
                    "disabled"
                );
            }

            $("#publicServiesModal .form-select.gender").change(function () {
                if (
                    $("#publicServiesModal .carousel-item.one .name").val()
                        .length > 1 &&
                    $("#publicServiesModal .carousel-item.one .email").val()
                        .length > 1 &&
                    $("#publicServiesModal .carousel-item.one .phone").val()
                        .length > 1 &&
                    $("#publicServiesModal .carousel-item.one .spec").hasClass(
                        "field-blue"
                    )
                ) {
                    $(
                        "#publicServiesModal .carousel-item.one .btn-form"
                    ).removeClass("disabled");
                } else {
                    $(
                        "#publicServiesModal .carousel-item.one .btn-form"
                    ).addClass("disabled");
                }
            });

            $("#publicServiesModal .form-select.spec").change(function () {
                if (
                    $("#publicServiesModal .carousel-item.one .name").val()
                        .length > 1 &&
                    $("#publicServiesModal .carousel-item.one .email").val()
                        .length > 1 &&
                    $("#publicServiesModal .carousel-item.one .phone").val()
                        .length > 1 &&
                    $(
                        "#publicServiesModal .carousel-item.one .gender"
                    ).hasClass("field-blue")
                ) {
                    $(
                        "#publicServiesModal .carousel-item.one .btn-form"
                    ).removeClass("disabled");
                } else {
                    $(
                        "#publicServiesModal .carousel-item.one .btn-form"
                    ).addClass("disabled");
                }
            });
        }
    );

    $("#healthServiesModal .carousel-item.three .procedure").change(
        function () {
            if ($(".btn-upload.health").hasClass("field-blue")) {
                $(
                    "#healthServiesModal .carousel-item.three .btn-form"
                ).removeClass("disabled");
            }
        }
    );

    $("#health-file").change(function () {
        var fileName = $(this).val();
        $(".btn-upload.health").addClass("field-blue");
        if (
            fileName &&
            $("#healthServiesModal .carousel-item.three .procedure").hasClass(
                "field-blue"
            )
        ) {
            // returns true if the string is not empty
            $("#healthServiesModal .carousel-item.three .btn-form").removeClass(
                "disabled"
            );
        } else {
            // no file was selected
            $("#healthServiesModal .carousel-item.three .btn-form").addClass(
                "disabled"
            );
        }
    });

    $(".email").keyup(function () {
        if ($(this).val().length == 0) {
        }
        var email = $(this).val();

        validateEmail(email);
    });

    function validateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (
            !emailReg.test(email) ||
            ($(".email").val().length == 0 &&
                $("form input").val().length === 0)
        ) {
            $(".email-error").removeClass("d-none");
            $(this).addClass("field-red");
            $(this).removeClass("field-blue");
        } else {
            $(".email-error").addClass("d-none");
            $(this).addClass("field-blue");
            $(this).removeClass("field-red");
        }
    }

    // asim

    setTimeout(() => {
        $(".client-counter").each(function () {
            console.log($(this).toString().length);
            $(this)
                .prop("Counter", 0)
                .animate(
                    {
                        Counter: $(this).text(),
                    },
                    {
                        duration: 5000,
                        easing: "swing",
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        },
                    }
                );
        });
    }, 2000);
    $(".authmasg").click(function () {
        $(".koib").toggleClass("d-none");
    });
});

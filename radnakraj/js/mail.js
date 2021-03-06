$(document).ready(function() {

    $(this).scrollTop(0);

    function page_loader() {
        $('.loading-area').fadeOut(5500)
        setTimeout(() => {
            $('.loading-area').css('display', 'none')
        }, 1500)
    };
    page_loader()

    const $registerForm = $('#form')
    let validator = void(0)

    if ($registerForm.length) {
        validator = $registerForm.validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: 'Please enter your name.'
                },
                email: {
                    required: 'Please enter your e-mail address.',
                    email: 'Your e-mail address is not valid'
                },
                phone: {
                    required: 'Please enter your phone number.'
                },
                message: {
                    required: 'Please enter your message.'
                }
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: 'php_vendors/sendemail.php',
                    method: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        let objResp = JSON.parse(data);
                        let str = objResp.type;
                        if (str === 'ERROR') {
                            str = objResp.data;
                            swal({
                                title: "ERROR",
                                text: str,
                                timer: 2500,
                                showCancelButton: false,
                                showConfirmButton: false,
                                type: "error"
                            });
                            return;
                        }

                        if (str === 'OK') {
                            str = objResp.data;
                            swal({
                                    title: "SUCCESS",
                                    text: str,
                                    showCancelButton: false,
                                    showConfirmButton: true,
                                    type: "success",

                                },
                                function(isConfirm) {
                                    $(location).attr('href', 'index.php');
                                }
                            );
                        }

                    }
                })
            }
        })
    }

    const $registerFormSr = $('#form_sr')
        //let validator = void(0)

    if ($registerFormSr.length) {
        validator = $registerFormSr.validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: 'Unesite Vaše ime.'
                },
                email: {
                    required: 'Unesite Vaš email.',
                    email: 'Vaš email nije validan.'
                },
                phone: {
                    required: 'Unesite Vaš telefon.'
                },
                message: {
                    required: 'Unesite Vašu poruku.'
                }
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: '../php_vendors/sendemail_sr.php',
                    method: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        let objResp = JSON.parse(data);
                        let str = objResp.type;
                        if (str === 'ERROR') {
                            str = objResp.data;
                            swal({
                                title: "Greška",
                                text: str,
                                timer: 2500,
                                showCancelButton: false,
                                showConfirmButton: false,
                                type: "error"
                            });
                            return;
                        }

                        if (str === 'OK') {
                            str = objResp.data;
                            swal({
                                    title: "Uspešno",
                                    text: str,
                                    showCancelButton: false,
                                    showConfirmButton: true,
                                    type: "success",

                                },
                                function(isConfirm) {
                                    $(location).attr('href', 'index.php');
                                }
                            );
                        }

                    }
                })
            }
        })
    }

    //Subscribe email sender
    const $subForm = $('#subscription')
        //let validator = void(0)

    if ($subForm.length) {
        validator = $subForm.validate({
            rules: {
                subemail: {
                    required: true,
                    email: true
                }
            },
            messages: {
                subemail: {
                    required: 'Please enter your e-mail address.',
                    email: 'Your e-mail address is not valid'
                }
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: 'php_vendors/sendemailsubscribe.php',
                    method: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        let objResp = JSON.parse(data);
                        let str = objResp.type;
                        if (str === 'ERROR') {
                            str = objResp.data;
                            swal({
                                title: "ERROR",
                                text: str,
                                timer: 2500,
                                showCancelButton: false,
                                showConfirmButton: false,
                                type: "error"
                            });
                            return;
                        }

                        if (str === 'OK') {
                            str = objResp.data;
                            swal({
                                    title: "SUCCESS",
                                    text: str,
                                    showCancelButton: false,
                                    showConfirmButton: true,
                                    type: "success",

                                },
                                function(isConfirm) {
                                    $(location).attr('href', 'index.php');
                                }
                            );
                        }

                    }
                })
            }
        })
    }

    //Subscribe email sender
    const $subForm_sr = $('#subscription_sr')
        //let validator = void(0)

    if ($subForm_sr.length) {
        validator = $subForm_sr.validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: 'Please enter your e-mail address.',
                    email: 'Your e-mail address is not valid'
                }
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: '../php_vendors/sendemailsubscribe_sr.php',
                    method: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        let objResp = JSON.parse(data);
                        let str = objResp.type;
                        if (str === 'ERROR') {
                            str = objResp.data;
                            swal({
                                title: "ERROR",
                                text: str,
                                timer: 2500,
                                showCancelButton: false,
                                showConfirmButton: false,
                                type: "error"
                            });
                            return;
                        }

                        if (str === 'OK') {
                            str = objResp.data;
                            swal({
                                    title: "SUCCESS",
                                    text: str,
                                    showCancelButton: false,
                                    showConfirmButton: true,
                                    type: "success",

                                },
                                function(isConfirm) {
                                    $(location).attr('href', 'index.php');
                                }
                            );
                        }

                    }
                })
            }
        })
    }
});
(function ($) {
    "use strict";
    $(function () {

        const loanTypeSaveObj = {
            $frmLoanType: $("#frm_loan_type"),
            $btnSave: $("#btn_save"),
            $btnUpdate: $("#btn_update"),
            $loanName: $("#loan_name"),
            $loanNameSpan: $("#loan_name_span"),
            $loanNameSpan2: $("#loan_name_span2"),
            $loanAmount: $("#loan_amount"),
            $loanAmountSpan: $("#loan_amount_span"),
            $insAmount: $("#installment_amount"),
            $insAmountSpan: $("#installment_amount_span"),
            $noOfIns: $("#numbe_of_installments"),
            $noOfInsSpan: $("#numbe_of_installments_span"),
            $color: $("#color_theme"),
            $colorSpan: $("#color_theme_span"),
            $status: $("#status"),
            error: false,
            validName: true,
            init: function () {
                this.handleEvents();
                this.checkForm();
            },
            handleEvents: function () {
                const context = this;
                this.$btnSave.on("click", function (e) {
                    e.preventDefault();
                    context.saveLoanType();
                });
                this.$btnUpdate.on("click", function (e) {
                    e.preventDefault();
                    context.saveLoanType();
                });
                this.$loanName.on("change", function (e) {
                    context.checkValiedName();
                })
            },
            saveLoanType: function () {
                this.validate();

                if ((!this.error) && this.validName) {
                    this.$frmLoanType.submit();
                }
            },
            checkForm: function () {
                window.setInterval(() => {
                    if (!this.isEmpty(this.$loanName.val())) {
                        this.$loanName.removeClass("parsley-error");
                        this.$loanNameSpan.html('<span></span>');
                    }
                    console.log(this.validName);
                    if (this.validName) {
                        this.$loanName.removeClass("parsley-error");
                        this.$loanNameSpan2.html('<span></span>');
                    }
                    if (!this.isEmpty(this.$loanAmount.val())) {
                        this.$loanAmount.removeClass("parsley-error");
                        this.$loanAmountSpan.html('<span></span>');
                    }
                    if (!this.isEmpty(this.$insAmount.val())) {
                        this.$insAmount.removeClass("parsley-error");
                        this.$insAmountSpan.html('<span></span>');
                    }
                    if (!this.isEmpty(this.$noOfIns.val())) {
                        this.$noOfIns.removeClass("parsley-error");
                        this.$noOfInsSpan.html('<span></span>');
                    }
                }, 500);
            },
            validate: function () {
                this.error = false;

                if (this.isEmpty(this.$loanName.val())) {
                    this.$loanName.addClass("parsley-error");
                    this.$loanNameSpan.html('<span style="color:red;">Loan Name is required</span>');
                    this.error = true;
                } else if (!this.validName) {
                    // alert(this.validName)
                    this.$loanName.addClass("parsley-error");
                    this.$loanNameSpan2.html('<span style="color:red;">Loan Name already exists</span>');
                    this.error = true;
                }
                if (this.isEmpty(this.$loanAmount.val())) {
                    this.$loanAmount.addClass("parsley-error");
                    this.$loanAmountSpan.html('<span style="color:red;">Loan Amount is required</span>');
                    this.error = true;
                }
                if (this.isEmpty(this.$insAmount.val())) {
                    this.$insAmount.addClass("parsley-error");
                    this.$insAmountSpan.html('<span style="color:red;">Instalment Amount is required</span>');
                    this.error = true;
                }
                if (this.isEmpty(this.$noOfIns.val())) {
                    this.$noOfIns.addClass("parsley-error");
                    this.$noOfInsSpan.html('<span style="color:red;">Number of Instalments is required</span>');
                    this.error = true;
                }
                return true;
            },
            isEmpty: function (value) {
                // this.$loanName.removeClass("parsley-error");
                // this.$loanNameSpan2.html('<span></span>');
                if (value == "" || value == null) {
                    return true;
                } else {
                    return false;
                }
            },
            checkValiedName: function () {

                var isValid = false;

                var jqxhr = $.ajax({
                    url: baseUrl + "check_loan_name",
                    method: 'GET',
                    data: {
                        loan_name: this.$loanName.val()
                    },
                    dataType: 'html',
                    context: document.body,
                    global: false,
                    async: false,
                    success: function (data) {
                        return data;
                    },
                    error: function (err, message, xx) {

                    }
                }).responseText;
                var result = $.parseJSON(jqxhr)
                this.validName = result.status;
            }
        };
        loanTypeSaveObj.init();

    });

})(jQuery);
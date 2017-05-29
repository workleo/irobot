$("#form4Mail").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm() {
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text === "success") {
                formSuccess();
            } else {
                formError();
                submitMSG(false, text);
            }
        }
    });
}

function formSuccess() {
    $("#form4Mail")[0].reset();
    resetText();
    submitMSG(true, "Message Submitted!");
}


$("#resetBtn").click(function () {
    resetText();
    submitMSG(true, "");
});


function resetText() {
    $('#lbCbxI').text("").append("&nbsp;");
    $('#lbCbxLove').text("").append("&nbsp;");
    $('#lbCbxYou').text("").append("&nbsp;");
    $('#lbCbxToo').text("").append("&nbsp;");
}

function formError() {
    $("#form4Mail").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function submitMSG(valid, msg) {
    var msgClasses = '';
    if (valid) {
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}


$("input[name='rbMail']").change(function () {

    var m=$("#message");
    switch ($(this).val()){
        case '1':
            m.val(m.val()+' I love You Eric. ');
            break;
        case '2':
            m.val(m.val()+' I hate You Cartman! ');
            break;
        case '0':
            m.val('');
            break;
    }
});

$("#cbxI").click(function () {
    var value = $("#cbxI").is(':checked');
    if (value) {
        $('#lbCbxI').text("I");
    } else {
        $('#lbCbxI').text("").append("&nbsp;");
    }
});

$("#cbxLove").click(function () {
    var value = $("#cbxLove").is(':checked');
    if (value) {
        $('#lbCbxLove').text("Love");
    } else {
        $('#lbCbxLove').text("").append("&nbsp;");
    }
});

$("#cbxYou").click(function () {
    var value = $("#cbxYou").is(':checked');
    if (value) {
        $('#lbCbxYou').text("You");
    } else {
        $('#lbCbxYou').text("").append("&nbsp;");
    }
});

$("#cbxToo").click(function () {
    var value = $("#cbxToo").is(':checked');
    if (value) {
        $('#lbCbxToo').text("Too");
    } else {
        $('#lbCbxToo').text("").append("&nbsp;");
    }
});
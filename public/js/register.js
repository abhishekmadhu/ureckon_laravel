// ****** BACKEND DEVELOPER CONFIGURATION STARTS: *******

// var members = ["Sayan", "Somsubhra", "Raja", "Baja", "Khaja"]; // FETCH USERNAMES FROM DATABASE AND ADD TO THIS ARRAY

var isSignedUp = true;

var urlPath = window.location.pathname.toString();

// checking user signed up status:
// if (urlPath.includes('/user/')) {
//     isSignedUp = true;
// }

var loggedInUser = "username"; // FETCH LOGGED IN USERNAME FROM DATABASE

// ********* BACKEND DEVELOPER CONFIGURATION ENDS: *********

var events = {
    roborace: 5,
    robowar: 5,
    robosoccer: 5,
    roborumble: 5,
    bridgemaking: 3,
    getsetsell: 4,
    admaking: 4,
    spyder: 2,
    codegolf: 2,
    coderanch: 2,
    pubg: 4,
    cluex: 2,
    uic: 5,
    techquiz: 2,
    linefollower: 4,
    aerostorm: 5,
    nfs: 1,
    fifa: 1,
    csgo: 5,
    urecathon: 4,
    armofhercules: 4,
    debugging: 2,
    solvero: 4,
    biotex: 4,
    healthybites: 4,
};

var idName = "";

var count = 1;

// document.getElementById('registrationform').addEventListener('submit', submitted);

(function ($) {
    "use strict";

    /*==================================================================
    [ Validate after type ]*/

    $('.validate-input .input100').each(function () {
        $(this).on('blur', function () {
            if (validate(this) == false) {
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
            $(this).parent().removeClass('true-validate');
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');

        $(thisAlert).append('<span class="btn-hide-validate"><i class="fas fa-times"></i></span>')
        $('.btn-hide-validate').each(function () {
            $(this).on('click', function () {
                hideValidate(this);
            });
        });
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
        $(thisAlert).find('.btn-hide-validate').remove();
    }


    /*==================================================================
    [ Show / hide contact ]*/
    $('.btn-hide-contact100').on('click', function () {
        if (!isSignedUp) {
            $(".container-contact100").fadeOut(300);
            $("#notSigned").animate({
                top: "200px",
            });
            return;
        }
        document.getElementById('member2').style.display = "none";
        document.getElementById('member3').style.display = "none";
        document.getElementById('member4').style.display = "none";
        document.getElementById('member5').style.display = "none";
        count = 1;
        idName = "";
        $(".container-contact100").fadeOut(300);
        $("#signed").animate({
            top: "200px",
        })

    });

    $('.btn-show-contact100').on('click', function () {
        if (isSignedUp) {
            $('#member1 #email').val(loggedInUser);
            $('#member1').css('opacity', 0.5);
            document.getElementById('member2').style.display = "none";
            document.getElementById('member3').style.display = "none";
            document.getElementById('member4').style.display = "none";
            document.getElementById('member5').style.display = "none";
            document.getElementById("addmember").style.display = "block";
            document.getElementById("delmember").style.display = "block";
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
            count = 1;
            idName = "";
            $(".container-contact100").css("top", "0.1%");
            $('.container-contact100').fadeIn(300);
            $(".container-contact100").css("visibility", "visible");
            $("#signed").animate({
                top: "0px",
            });
        }
        else {
            notSignedUp();
            $(".container-contact100").css("top", "0.1%");
            $(".container-contact100").fadeIn(300);
            $(".container-contact100").css('visibility', 'visible');
            $("#notSigned").animate({ top: "0px" });
        }

    });

})(jQuery);

// TODO: Add on click listeners to all buttons

//robotics

$("#roborace").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text('Register For Need For Torque - NFT');
    $('#eventnameinput').val('roborace');

    $('#addmember').off().on('click', function () {
        if (count <= events.roborace) {
            count++;
            idName = "member" + count;
            // $('#' + idName).slideDown();
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.roborace) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.roborace) {
            document.getElementById('addmember').disabled = true;
            document.getElementById('delmember').disabled = false;
        }
        // console.log(count);


    })
    $('#delmember').off().on('click', function () {
        if (count >= 1) {
            idName = "member" + count;
            // $("#" + idName).slideUp();
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.roborace) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);

    })
});

$('#robowar').on('click', function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Robo Dangal");
    $('#eventnameinput').val('robodangal');


    $('#addmember').off().on('click', function () {
        if (count <= events.robowar) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.robowar) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.robowar) {
            document.getElementById('addmember').disabled = true;
            document.getElementById('delmember').disabled = false;
        }
        // console.log(count);


    })
    $('#delmember').off().on('click', function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.robowar) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);

    })
});

$("#robosoccer").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Robo League");
    $('#eventnameinput').val('roboleague');

    $("#addmember").off().on("click", function () {
        if (count <= events.robosoccer) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.robosoccer) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.robosoccer) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.robosoccer) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#roborumble").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Robo Rumble");
    $('#eventnameinput').val('roborumble');

    $("#addmember").off().on("click", function () {
        if (count <= events.roborumble) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.roborumble) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.roborumble) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.roborumble) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#linefollower").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Dirrecion");
    $('#eventnameinput').val('linefollower');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.linefollower) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.linefollower) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.linefollower) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.linefollower) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

//coding:
$("#coderanch").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text('Register For Code Ranch');
    $('#eventnameinput').val('coderanch');


    $("#addmember").off().on("click", function () {
        if (count <= events.coderanch) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.coderanch) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.coderanch) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.coderanch) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#codegolf").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Code Golf");
    $('#eventnameinput').val('codegolf');


    $("#addmember").off().on("click", function () {
        if (count <= events.codegolf) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.codegolf) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.codegolf) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.codegolf) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#spyder").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Spyder");
    $('#eventnameinput').val('spyder');


    $("#addmember").off().on("click", function () {
        if (count <= events.spyder) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.spyder) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.spyder) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.spyder) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#debugging").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Debugger");
    $('#eventnameinput').val('debugger');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.debugging) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.debugging) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.debugging) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.debugging) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

// Gaming:

$("#pubg").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For PUBG");
    $('#eventnameinput').val('pubgmob');


    $("#addmember").off().on("click", function () {
        if (count <= events.pubg) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.pubg) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.pubg) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.pubg) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#pubgem").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For PUBG");
    $('#eventnameinput').val('pubgem');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.pubg) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.pubg) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.pubg) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.pubg) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

$("#csgo").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Counter Strike: GO/1.6");
    $('#eventnameinput').val('csgo');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.csgo) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.csgo) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.csgo) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.csgo) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

$("#nfs").on("click", function () {
    document.getElementById("addmember").style.display = "none";
    document.getElementById("delmember").style.display = "none";
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For NFS: Most Wanted");
    $('#eventnameinput').val('nfs');

});

$("#fifa").on("click", function () {
    document.getElementById("addmember").style.display = "none";
    document.getElementById("delmember").style.display = "none";
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For FIFA");
    $('#eventnameinput').val('fifa');

});

// mechanical:
$("#bridgemaking").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Bridge Making");
    $('#eventnameinput').val('bridgeonics');


    $("#addmember").off().on("click", function () {
        if (count <= events.bridgemaking) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.bridgemaking) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.bridgemaking) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.bridgemaking) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#armofhercules").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Arm Of Hercules");
    $('#eventnameinput').val('armofhercules');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.armofhercules) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.armofhercules) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.armofhercules) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.armofhercules) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

$("#aerostorm").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For AeroStorm");
    $('#eventnameinput').val('aerostorm');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.aerostorm) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.aerostorm) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.aerostorm) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.aerostorm) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

// Flagship:
$("#uic").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Ureckon Innovation Challenge - UIC");
    $('#eventnameinput').val('uic');


    $("#addmember").off().on("click", function () {
        if (count <= events.uic) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.uic) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.uic) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.uic) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#urecathon").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Ureck-A-Thon");
    $('#eventnameinput').val('urecathon');


    $("#addmember").off().on("click", function () {
        if (count <= events.urecathon) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.urecathon) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.urecathon) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.urecathon) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

// business:

$("#getsetsell").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Get Set Sell");
    $('#eventnameinput').val('getsetsell');


    $("#addmember").off().on("click", function () {
        if (count <= events.getsetsell) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.getsetsell) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.getsetsell) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.getsetsell) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#admaking").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Ad mad");
    $('#eventnameinput').val('admad');


    $("#addmember").off().on("click", function () {
        if (count <= events.admaking) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.admaking) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.admaking) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.admaking) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

// initiatives:

$("#solvero").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Solvero");
    $('#eventnameinput').val('solvero');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.solvero) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.solvero) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.solvero) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.solvero) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

$("#biotex").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For BioteXpression");
    $('#eventnameinput').val('biotex');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.biotex) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.biotex) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.biotex) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.biotex) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});

$("#healthybites").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For Healthy Bites");
    $('#eventnameinput').val('healthybites');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.solvero) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.healthybites) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.healthybites) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.healthybites) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});


// misc:
$("#cluex").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For ClueX");
    $('#eventnameinput').val('cluex');


    $("#addmember").off().on("click", function () {
        if (count <= events.cluex) {
            count++;
            idName = "member" + count;
            $('#' + idName).slideDown();
        }
        if (count >= 1 && count <= events.cluex) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === events.cluex) {
            document.getElementById("addmember").disabled = true;
            document.getElementById("delmember").disabled = false;
        }
        // console.log(count);
    });
    $("#delmember").off().on("click", function () {
        if (count >= 1) {
            idName = "member" + count;
            $("#" + idName).slideUp();
            count--;
        }
        if (count >= 1 && count <= events.cluex) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = false;
        }
        if (count === 1) {
            document.getElementById("addmember").disabled = false;
            document.getElementById("delmember").disabled = true;
        }
        // console.log(count);
    });
});

$("#techquiz").on("click", function () {
    if (!isSignedUp) {
        notSignedUp();
        return;
    }
    $(".contact100-form-title span").text("Register For ThinkTech");
    $('#eventnameinput').val('techquiz');


    $("#addmember")
        .off()
        .on("click", function () {
            if (count <= events.techquiz) {
                count++;
                idName = "member" + count;
                $("#" + idName).slideDown();
            }
            if (count >= 1 && count <= events.techquiz) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === events.techquiz) {
                document.getElementById("addmember").disabled = true;
                document.getElementById("delmember").disabled = false;
            }
            // console.log(count);
        });
    $("#delmember")
        .off()
        .on("click", function () {
            if (count >= 1) {
                idName = "member" + count;
                $("#" + idName).slideUp();
                count--;
            }
            if (count >= 1 && count <= events.techquiz) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = false;
            }
            if (count === 1) {
                document.getElementById("addmember").disabled = false;
                document.getElementById("delmember").disabled = true;
            }
            // console.log(count);
        });
});


// not signed up

function notSignedUp() {
    $("#signed").css('display', 'none');
    $("#notSigned").css('display', 'block');
}

// typeahead:

// var substringMatcher = function (strs) {
//     return function findMatches(q, cb) {
//         var matches, substringRegex;

//         // an array that will be populated with substring matches
//         matches = [];

//         // regex used to determine if a string contains the substring `q`
//         substrRegex = new RegExp(q, 'i');

//         // iterate through the pool of strings and for any string that
//         // contains the substring `q`, add it to the `matches` array
//         $.each(strs, function (i, str) {
//             if (substrRegex.test(str)) {
//                 matches.push(str);
//             }
//         });

//         cb(matches);
//     };
// };


// $('#the-basics .typeahead').typeahead({
//     hint: false,
//     highlight: true,
//     minLength: 1
// },
//     {
//         name: 'states',
//         source: substringMatcher(members)
//     }
// );

// function submitted(event) {
//     console.log('submitted');

// }